terraform {
  required_providers {
    azurerm = {
      source  = "hashicorp/azurerm"
      version = "=3.0.0"
    }
  }
}

provider "azurerm" {
  features {}
  subscription_id = "97a77d59-8331-4eff-aab8-03103fb38088"
  client_id = "9dba45cb-f6e1-4bb4-8808-2ddb3c8a9e67"
  client_secret = "ONE8Q~qx8n8T4tgy4yEwkSxwmK_yscu4mXpm1c9U"
  tenant_id = "0a4d4529-3bd8-41d2-bdbe-aa4634a1752b"
  
}