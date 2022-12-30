# Azure resource group
resource "azurerm_resource_group" "grafana_rg" {
  name     = var.resource_group_name
  location = var.resource_group_location
}
# --- Virtual Machine ---
# Azure linux virtual machine
resource "azurerm_linux_virtual_machine" "grafana_vm" {
  name                = "ubuntu"
  resource_group_name = azurerm_resource_group.grafana_rg.name
  location            = azurerm_resource_group.grafana_rg.location
  size                = var.size
  admin_username      = var.admin_username
  user_data           = filebase64(var.user_data)
  network_interface_ids = [
    azurerm_network_interface.vm_ni.id,
  ]
  admin_ssh_key {
    username   = "ubuntu"
    public_key = file(var.public_key)
  }
  
  os_disk {
    caching              = "ReadWrite"
    storage_account_type = "StandardSSD_LRS"
  }

  source_image_reference {
    publisher = var.image_publisher
    offer     = var.image_offer
    sku       = var.image_sku
    version   = var.image_version
  }
}