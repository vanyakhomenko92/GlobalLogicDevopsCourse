#AWS Public-IP
output "public_ip_ec2" {
  value = aws_instance.ivan_ec2.public_ip
}
# Azure Public-IP
output "public_ip" {
  value = azurerm_public_ip.public_ip.ip_address
}
