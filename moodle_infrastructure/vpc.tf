# Moodle VPC
module "vpc" {
  source = "terraform-aws-modules/vpc/aws"

  name = "moodle_vpc"
  cidr = "172.28.0.0/16"

  azs             = ["us-east-1a", "us-east-1b"]
  public_subnets  = ["172.28.0.0/18", "172.28.128.0/18"]
  private_subnets = ["172.28.64.0/18", "172.28.192.0/18"]

  enable_nat_gateway = true

  tags = {
    Terraform   = "true"
  }
}

# Public Route Table
resource "aws_route_table" "public_route_table" {
  vpc_id = module.vpc.vpc_id
}

# Private Route Table
resource "aws_route_table" "private_route_table" {
  vpc_id = module.vpc.vpc_id
}

# Route Table Associations
resource "aws_route_table_association" "public_a_subnet" {
  subnet_id      = module.vpc.public_subnets[0]
  route_table_id = aws_route_table.public_route_table.id
}

resource "aws_route_table_association" "public_b_subnet" {
  subnet_id      = module.vpc.public_subnets[1]
  route_table_id = aws_route_table.public_route_table.id
}

resource "aws_route_table_association" "private_a_subnet" {
  subnet_id      = module.vpc.private_subnets[0]
  route_table_id = aws_route_table.private_route_table.id
}

resource "aws_route_table_association" "private_b_subnet" {
  subnet_id      = module.vpc.private_subnets[1]
  route_table_id = aws_route_table.private_route_table.id
}

# Elastic IP
resource "aws_eip" "elastic_ip" {
  vpc = true
}

# Interget Gateway
resource "aws_internet_gateway" "igw" {
  vpc_id = module.vpc.vpc_id
}

# NAT Gateway
resource "aws_nat_gateway" "ngw" {
  subnet_id     = module.vpc.public_subnets[0]
  allocation_id = aws_eip.elastic_ip.id
}

# Internet and NAT Gateway Routes
resource "aws_route" "public_igw" {
  route_table_id         = aws_route_table.public_route_table.id
  destination_cidr_block = "0.0.0.0/0"
  gateway_id             = aws_internet_gateway.igw.id
}

resource "aws_route" "private_ngw" {
  route_table_id         = aws_route_table.private_route_table.id
  destination_cidr_block = "0.0.0.0/0"
  nat_gateway_id         = aws_nat_gateway.ngw.id
}

# Security Group: ALB HTTP
resource "aws_security_group" "http" {
  name        = "http_traffic"
  description = "HTTP traffic"
  vpc_id      = module.vpc.vpc_id

  ingress {
    from_port   = 80
    to_port     = 80
    protocol    = "TCP"
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

# Security Group: ECS Service Ingress
resource "aws_security_group" "ingress_app" {
  name        = "ingress-api"
  description = "Allow ingress to API"
  vpc_id      = module.vpc.vpc_id

  ingress {
    from_port   = 80
    to_port     = 80
    protocol    = "TCP"
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

# Security Group: moodledb (MySQL)
resource "aws_security_group" "moodledb_security_group" {
  name        = "moodledb_security_group"
  description = "ingress and egress for MySQL"
  vpc_id      = module.vpc.vpc_id

  ingress {
    description = "MySQL"
    from_port   = 3306
    to_port     = 3306
    protocol    = "TCP"
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}