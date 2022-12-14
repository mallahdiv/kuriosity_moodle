# resource "aws_efs_file_system" "moodle_efs" {
#   tags = {
#     Name = "MOODLE-ECS-EFS-FILESYSTEM"
#   }
# }

# resource "aws_efs_mount_target" "moodle_efs_mount" {
#   file_system_id = aws_efs_file_system.moodle_efs.id
#   subnet_id      = aws_subnet.moodle_pubsub2.id
# }