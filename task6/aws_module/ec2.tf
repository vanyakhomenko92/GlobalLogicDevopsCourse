resource "aws_instance" "ivan_ec2" {
  ami                    = var.ami
  instance_type          = "t2.micro"
  vpc_security_group_ids = [aws_security_group.security_grafana.id]
  user_data              = file(var.grafana)
  tags                   = var.tags
  key_name               = var.key_name
}