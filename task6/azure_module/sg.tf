# --- Security Group ---

# Azure Security Group
resource "azurerm_network_security_group" "vm_sg" {
  name                = "grafana_sg"
  location            = azurerm_resource_group.grafana_rg.location
  resource_group_name = azurerm_resource_group.grafana_rg.name

  security_rule {
    name                       = "Allow_Grafana"
    priority                   = 200
    direction                  = "Inbound"
    access                     = "Allow"
    protocol                   = "Tcp"
    source_port_range          = "*"
    destination_port_range     = "80"
    source_address_prefix      = "*"
    destination_address_prefix = "*"
  }
  security_rule {
    name                       = "ssh"
    priority                   = 100
    direction                  = "Inbound"
    access                     = "Allow"
    protocol                   = "Tcp"
    source_port_range          = "*"
    destination_port_range     = "22"
    source_address_prefix      = "*"
    destination_address_prefix = "*"
  }
}