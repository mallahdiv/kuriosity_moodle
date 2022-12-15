# Security Group: ALB HTTP
resource "aws_security_group" "http" {
  name        = "http_traffic"
  description = "HTTP traffic"
  vpc_id      = aws_vpc.moodle_vpc.id

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
  vpc_id      = aws_vpc.moodle_vpc.id

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
  vpc_id      = aws_vpc.moodle_vpc.id

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

# Security Group for EFS Mount Target to Allow Access from ECS Service Security Group
# resource "aws_security_group" "moodle_efs_security_group" {
#   name        = "moodle_efs_security_group"
#   description = "allow access from ecs security group"
#   vpc_id      = aws_vpc.moodle_vpc.id

#   ingress {
#     from_port   = 2049
#     to_port     = 2049
#     protocol    = "TCP"
#     cidr_blocks = [aws_vpc.moodle_vpc.cidr_block]
#   }
# }

resource "aws_security_group" "kl_bs_moodle_sg" {
  name        = "kl_bs_moodle_sg"
  description = "kl_bs_moodle_sg"
  vpc_id      = aws_vpc.moodle_vpc.id

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