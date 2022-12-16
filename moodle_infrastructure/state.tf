# Declare we want to use S3 backend to store tfstate file and not locally
terraform {
 backend "s3" {
   bucket         = "moodle-tfstate-bucket"
   key            = "terraform.tfstate"
   region         = "us-east-1"
   encrypt        = true
   kms_key_id     = "alias/moodle-tf-bucket-key"
   dynamodb_table = "moodle-terraform-state"
 }
}

# AWS Key Management Service Key - allows for encryption of state bucket
resource "aws_kms_key" "moodle_tf_bucket_key" {
  description = "Key used to encrypt S3 bucket"
  deletion_window_in_days = 7
  enable_key_rotation = true
}

# AWS KMS Alias - provides an alias for the generated key, referenced in backend resource
resource "aws_kms_alias" "moodle_tf_bucket_key_alias" {
  name = "alias/moodle-tf-bucket-key"
  target_key_id = aws_kms_key.moodle_tf_bucket_key.id
}

# AWS S3 Bucket - bucket used to store terraform.tfstate file
resource "aws_s3_bucket" "moodle_tf_bucket" {
  bucket = "moodle-tfstate-bucket"
  tags = {
    Name = "Moodle S3 Bucket"
  }
}

# AWS S3 Bucket Server Side Encryption with KMS key
resource "aws_s3_bucket_server_side_encryption_configuration" "moodle_tf_sse" {
  bucket = aws_s3_bucket.moodle_tf_bucket.bucket
    rule {
      apply_server_side_encryption_by_default {
        kms_master_key_id = aws_kms_key.moodle_tf_bucket_key.id
        sse_algorithm = "aws:kms"
      }
    }
  }

# AWS S3 Bucket ACL Resource to set Access Control List
resource "aws_s3_bucket_acl" "moodle_tf_bucket_acl" {
  bucket = aws_s3_bucket.moodle_tf_bucket.id
  acl    = "private"
}

# AWS S3 Bucket Versioning Resource to enable versioning
resource "aws_s3_bucket_versioning" "moodle_tf_bucket_versioning" {
  bucket = aws_s3_bucket.moodle_tf_bucket.id
  versioning_configuration {
    status = "Enabled"
  }
}

# AWS S3 Bucket Public Access Block - guarantees bucket is not publicly accessible
resource "aws_s3_bucket_public_access_block" "moodle_bucket_access_block" {
 bucket = aws_s3_bucket.moodle_tf_bucket.id

 block_public_acls       = true
 block_public_policy     = true
 ignore_public_acls      = true
 restrict_public_buckets = true
}