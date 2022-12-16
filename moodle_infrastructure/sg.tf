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