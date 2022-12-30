provider "aws"{
  # Please write your credentials ----------
  access_key = ""
  secret_key = ""
  region     = "us-east-1"
  #-----------------------------------------
} 
provider "azurerm" {
  features {}
  # Please write your credentials ----------
  subscription_id = ""
  client_id       = ""
  client_secret   = ""
  tenant_id       = ""
  #-----------------------------------------
}
