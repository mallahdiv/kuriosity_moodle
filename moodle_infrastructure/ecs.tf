# ECS Cluster
resource "aws_ecs_cluster" "moodle_ecs_cluster" {
  name = "moodle_ecs_cluster"
  tags = {
    Name = "moodle_ecs_cluster"
  }
}

# ECS Service
resource "aws_ecs_service" "moodle_ecs_service" {
  name                 = "lms-ecs-service"
  cluster              = aws_ecs_cluster.moodle_ecs_cluster.id
  task_definition      = aws_ecs_task_definition.moodle_ecs_task.arn
  launch_type          = "FARGATE"
  scheduling_strategy  = "REPLICA"
  desired_count        = 3
  force_new_deployment = true

  network_configuration {
    subnets = [
      aws_subnet.moodle_prisub1.id,
      aws_subnet.moodle_prisub2.id
    ]
    assign_public_ip = false
    security_groups  = [aws_security_group.ingress_app.id]
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.moodle_alb_target.arn
    container_name   = "moodle-container"
    container_port   = 80
  }
}

# ECS Task Definition
resource "aws_ecs_task_definition" "moodle_ecs_task" {
  family                   = "moodle_ecs_task"
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  memory                   = "1024"
  cpu                      = "512"
  execution_role_arn       = "arn:aws:iam::582540642094:role/ecsTask"
  task_role_arn            = "arn:aws:iam::582540642094:role/ecsTask"

  container_definitions = <<DEFINITION
  [
    {
      "name": "moodle-container",
      "image": "kuragroup4/${var.image-id}",
      "logConfiguration": {
        "logDriver": "awslogs",
        "options": {
          "awslogs-group": "/ecs/moodle-logs",
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
  DEFINITION
}

# CloudWatch Log Group
resource "aws_cloudwatch_log_group" "moodle_cw_log_group" {
  name = "/ecs/moodle-logs"
  tags = {
    Application = "moodle-app"
  }
}