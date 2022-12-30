variable "resource_group_name" {
  default = "Grafana_RG"
}
variable "resource_group_location" {
  default = "West Europe"
}
variable "size" {
  default = "Standard_B1s"
}
variable "admin_username" {
  default = "ubuntu"
}
variable "user_data" {
  type    = string
  default = "script.sh"
}
variable "image_publisher" {
  default = "Canonical"
}
variable "image_offer" {
  default = "0001-com-ubuntu-server-jammy"
}
variable "image_sku" {
  default = "22_04-lts"
}
variable "image_version" {
  default = "latest"
}
variable "public_key" {
  default = "~/.ssh/id_rsa.pub"
}