# Moodle VPC
resource "aws_vpc" "moodle_vpc" {
  cidr_block = "172.28.0.0/16"
}

# Public Subnet 1
resource "aws_subnet" "moodle_pubsub1" {
  vpc_id            = aws_vpc.moodle_vpc.id
  cidr_block        = "172.28.0.0/18"
  availability_zone = "us-east-1a"

  tags = {
    "Name" = "moodle_pubsub1"
  }
}

# Public Subnet 2
resource "aws_subnet" "moodle_pubsub2" {
  vpc_id            = aws_vpc.moodle_vpc.id
  cidr_block        = "172.28.64.0/18"
  availability_zone = "us-east-1b"

  tags = {
    "Name" = "moodle_pubsub2"
  }
}

# Private Subnet 1
resource "aws_subnet" "moodle_prisub1" {
  vpc_id            = aws_vpc.moodle_vpc.id
  cidr_block        = "172.28.128.0/18"
  availability_zone = "us-east-1a"

  tags = {
    "Name" = "moodle_prisub1"
  }
}

# Private Subnet 2
resource "aws_subnet" "moodle_prisub2" {
  vpc_id            = aws_vpc.moodle_vpc.id
  cidr_block        = "172.28.192.0/18"
  availability_zone = "us-east-1b"

  tags = {
    "Name" = "moodle_prisub2"
  }
}

# Public Route Table
resource "aws_route_table" "public_route_table" {
  vpc_id = aws_vpc.moodle_vpc.id
}

# Private Route Table
resource "aws_route_table" "private_route_table" {
  vpc_id = aws_vpc.moodle_vpc.id
}

# Route Table Associations
resource "aws_route_table_association" "public_subnet1" {
  subnet_id      = aws_subnet.moodle_pubsub1.id
  route_table_id = aws_route_table.public_route_table.id
}

resource "aws_route_table_association" "public_subnet2" {
  subnet_id      = aws_subnet.moodle_pubsub2.id
  route_table_id = aws_route_table.public_route_table.id
}

resource "aws_route_table_association" "private_subnet1" {
  subnet_id      = aws_subnet.moodle_prisub1.id
  route_table_id = aws_route_table.private_route_table.id
}

resource "aws_route_table_association" "private_subnet2" {
  subnet_id      = aws_subnet.moodle_prisub2.id
  route_table_id = aws_route_table.private_route_table.id
}

# Elastic IP
resource "aws_eip" "elastic_ip" {
  vpc = true
}

# Interget Gateway
resource "aws_internet_gateway" "igw" {
  vpc_id = aws_vpc.moodle_vpc.id
}

# NAT Gateway
resource "aws_nat_gateway" "ngw" {
  subnet_id     = aws_subnet.moodle_pubsub1.id
  allocation_id = aws_eip.elastic_ip.id
}

# Internet Gateway Route
resource "aws_route" "igw_route" {
  route_table_id         = aws_route_table.public_route_table.id
  destination_cidr_block = "0.0.0.0/0"
  gateway_id             = aws_internet_gateway.igw.id
}

# NAT Gateway Route
resource "aws_route" "ngw_route" {
  route_table_id         = aws_route_table.private_route_table.id
  destination_cidr_block = "0.0.0.0/0"
  nat_gateway_id         = aws_nat_gateway.ngw.id
}

# B&S EC2
resource "aws_instance" "kl_bs_moodle" {
  ami                    = "ami-08c40ec9ead489470"
  instance_type          = "t2.small"
  key_name               = "moodle"
  subnet_id              = aws_subnet.moodle_pubsub2.id
  vpc_security_group_ids = [aws_security_group.kl_bs_moodle_sg.id]

  user_data = <<EOF
    #!/bin/bash
    sudo apt-get update
    sudo apt-get install ca-certificates curl gnupg lsb-release -y
    sudo mkdir -p /etc/apt/keyrings
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
    echo \
      "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
      $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
    sudo apt-get update
    sudo apt-get install docker-ce docker-ce-cli containerd.io docker-compose-plugin docker-compose acl default-jre -y
    sudo service docker start
    sudo gpasswd -a ubuntu docker
    sudo setfacl -m "user:ubuntu:rw" /var/run/docker.sock
    sleep 60
    docker pull kuragroup4/${var.image-id}
    docker run -d -p 80:80 kuragroup4/${var.image-id}
  EOF

  tags = {
    Name = "kl_bs_moodle"
  }
}

output "kl_bs_moodle_ip" {
  value = "${aws_instance.kl_bs_moodle.public_ip}"
}