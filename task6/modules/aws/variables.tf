variable "region" {
  description = "region used in AWS"
  type        = string
  default     = "us-east-1"
}

variable "ami" {
  description = "aws image"
  type        = string
  default     = "ami-0574da719dca65348"
}

variable "tags" {
  type = map(string)
  default = {
    "Terraform" = "TRUE",
    "Owner"     = "Ivan Khomenko"
    "Name"      = "Grafana"
  }
}

variable "grafana" {
  description = "Install grafana"
  default     = "script.sh"
}

variable "key_name" {
  description = "Key name"
  default     = "id_rsa"
}

variable "public_key" {
  description = "Source public key"
  default     = "~/.ssh/id_rsa.pub"
}