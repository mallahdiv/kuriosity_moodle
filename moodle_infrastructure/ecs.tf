# ECS Cluster
resource "aws_ecs_cluster" "moodle_ecs_cluster" {
  name = "moodle_ecs_cluster"
  tags = {
    Name = "moodle_ecs_cluster"
  }
}

# ECS Task Definition
resource "aws_ecs_task_definition" "moodle_ecs_task" {
  family                = "moodle_ecs_task"

  container_definitions = <<EOF
  [
    {
      "name": "nginx-container",
      "image": "ch316/kura_deployment_5_main_nginx:latest",
      "logConfiguration": {
        "logDriver": "awslogs",
        "options": {
          "awslogs-group": "/ecs/url-logs",
          "awslogs-region": "us-east-1",
          "awslogs-stream-prefix": "ecs"
        }
      },
      "portMappings": [
        {
          "containerPort": 5000
        }
      ]
    },
    {
      "name": "flask-container",
      "image": "ch316/kura_deployment_5_main_gunicorn-flask:latest",
      "logConfiguration": {
        "logDriver": "awslogs",
        "options": {
          "awslogs-group": "/ecs/url-logs",
          "awslogs-region": "us-east-1",
          "awslogs-stream-prefix": "ecs"
        }
      },
      "portMappings": [
        {
          "containerPort": 80
        }
      ]
    }
  ]
  EOF

  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  memory                   = "1024"
  cpu                      = "512"
  execution_role_arn       = var.ecs_role_arn
  task_role_arn            = var.ecs_role_arn
}

# ECS Service
resource "aws_ecs_service" "aws-ecs-service" {
  name                 = "lms-ecs-service"
  cluster              = aws_ecs_cluster.moodle_ecs_cluster.id
  task_definition      = aws_ecs_task_definition.moodle_ecs_task.arn
  launch_type          = "FARGATE"
  scheduling_strategy  = "REPLICA"
  desired_count        = 1
  force_new_deployment = true

  network_configuration {
    subnets          = [for subnet in module.vpc.private_subnets : subnet]
    assign_public_ip = false
    security_groups  = [aws_security_group.ingress_app.id]
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.moodle_alb_target.arn
    container_name   = "nginx-container"
    container_port   = 80
  }
}

# CloudWatch Log Group
resource "aws_cloudwatch_log_group" "moodle_cw_log_group" {
  name = "/ecs/moodle_logs"
  tags = {
    Application = "moodle_app"
  }
}