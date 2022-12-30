# --- Network ---
# Azure Network interface
resource "azurerm_network_interface" "vm_ni" {
  name                = "vm_ni"
  location            = azurerm_resource_group.grafana_rg.location
  resource_group_name = azurerm_resource_group.grafana_rg.name

  ip_configuration {
    name                          = "internal"
    subnet_id                     = azurerm_subnet.grafana_subnet.id
    private_ip_address_allocation = "Dynamic"
    public_ip_address_id          = azurerm_public_ip.public_ip.id
  }
}

# Azure Public IP
resource "azurerm_public_ip" "public_ip" {
  name                = "Grafana_IP"
  location            = azurerm_resource_group.grafana_rg.location
  resource_group_name = azurerm_resource_group.grafana_rg.name
  allocation_method   = "Static"
}

# Azure Virtual Network
resource "azurerm_virtual_network" "vm_vn" {
  name                = "vm_vn"
  address_space       = ["10.0.0.0/16"]
  location            = azurerm_resource_group.grafana_rg.location
  resource_group_name = azurerm_resource_group.grafana_rg.name
}

# Azure Subnet
resource "azurerm_subnet" "grafana_subnet" {
  name                 = "grafana_subnet"
  resource_group_name  = azurerm_resource_group.grafana_rg.name
  virtual_network_name = azurerm_virtual_network.vm_vn.name
  address_prefixes     = ["10.0.2.0/24"]
}