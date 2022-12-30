terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "4.48.0"
    }
       azurerm = {
      source  = "hashicorp/azurerm"
      version = "=3.0.0"
    }
  }
}

provider "aws" {
 # access_key = ""
 # secret_key = ""
 # region     = ""
}

provider "azurerm" {
  features {}
 # subscription_id = ""
 # client_id = ""
 # client_secret = ""
 # tenant_id = ""
}
