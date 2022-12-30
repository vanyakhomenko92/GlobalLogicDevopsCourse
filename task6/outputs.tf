output "AWS_public_ip" {
  value = module.AWS_Grafana.public_ip_ec2
}
output "Azure_public_ip" {
  value = module.Azure_Grafana.public_ip
}
