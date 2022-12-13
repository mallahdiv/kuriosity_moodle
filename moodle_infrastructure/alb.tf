# ALB
resource "aws_alb" "moodle_alb" {
  name               = "moodle-alb"
  internal           = false
  load_balancer_type = "application"
  subnets            = [for subnet in module.vpc.public_subnets : subnet]
  security_groups    = [aws_security_group.http.id]

  # access_logs {
  #   bucket = aws_s3_bucket.lb_logs.bucket
  #   prefix = ""
  #   enabled = true
  # }

  depends_on = [aws_internet_gateway.igw]
}

# ALB Listener Group
resource "aws_alb_listener" "moodle_alb_listener" {
  load_balancer_arn = aws_alb.moodle_alb.arn
  port              = "80"
  protocol          = "HTTP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.moodle_alb_target.arn
  }
}

# ALB Target Group
resource "aws_lb_target_group" "moodle_alb_target" {
  name        = "moodle-alb-target-group"
  port        = 5000
  protocol    = "HTTP"
  target_type = "ip"
  vpc_id      = module.vpc.vpc_id

  health_check {
    enabled = true
    path    = "/health"
  }

  depends_on = [aws_alb.moodle_alb]
}

# Output ALB URL
output "moodle_alb_url" {
  value = "http://${aws_alb.moodle_alb.dns_name}"
}
