# DynamoDB table to prevent two team members from writing to the state file at the same time
resource "aws_dynamodb_table" "moodle_tfstate_dblock" {
 name           = "moodle-terraform-state"
 read_capacity  = 20
 write_capacity = 20
 hash_key       = "LockID"

 attribute {
   name = "LockID"
   type = "S"
 }
}