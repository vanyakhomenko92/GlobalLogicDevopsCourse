![alt text]2.png
![alt text]3.png
![alt text]4.png
![alt text]5.png




{
    "$schema": "https://schema.management.azure.com/schemas/2019-04-01/deploymentTemplate.json#",
    "contentVersion": "1.0.0.0",
    "parameters": {
        "loadBalancers_lb1_name": {
            "defaultValue": "lb1",
            "type": "String"
        },
        "virtualNetworks_rg_1_vnet_name": {
            "defaultValue": "rg_1-vnet",
            "type": "String"
        },
        "networkInterfaces_webserver1861_name": {
            "defaultValue": "webserver1861",
            "type": "String"
        },
        "publicIPAddresses_webserver1_ip_name": {
            "defaultValue": "webserver1-ip",
            "type": "String"
        },
        "publicIPAddresses_webserver2_ip_name": {
            "defaultValue": "webserver2-ip",
            "type": "String"
        },
        "virtualMachines_webserverapache1_name": {
            "defaultValue": "webserverapache1",
            "type": "String"
        },
        "virtualMachines_webserverapache2_name": {
            "defaultValue": "webserverapache2",
            "type": "String"
        },
        "networkSecurityGroups_webserver1_nsg_name": {
            "defaultValue": "webserver1-nsg",
            "type": "String"
        },
        "networkSecurityGroups_webserver2_nsg_name": {
            "defaultValue": "webserver2-nsg",
            "type": "String"
        },
        "networkInterfaces_webserverapache1751_name": {
            "defaultValue": "webserverapache1751",
            "type": "String"
        },
        "networkInterfaces_webserverapache1989_name": {
            "defaultValue": "webserverapache1989",
            "type": "String"
        },
        "networkInterfaces_webserverapache2518_name": {
            "defaultValue": "webserverapache2518",
            "type": "String"
        },
        "publicIPAddresses_webserverapache1_ip_name": {
            "defaultValue": "webserverapache1-ip",
            "type": "String"
        },
        "publicIPAddresses_webserverapache2_ip_name": {
            "defaultValue": "webserverapache2-ip",
            "type": "String"
        },
        "publicIPAddresses_webserverapache1ip584_name": {
            "defaultValue": "webserverapache1ip584",
            "type": "String"
        },
        "networkSecurityGroups_webserverapache1_nsg_name": {
            "defaultValue": "webserverapache1-nsg",
            "type": "String"
        },
        "networkSecurityGroups_webserverapache2_nsg_name": {
            "defaultValue": "webserverapache2-nsg",
            "type": "String"
        },
        "networkSecurityGroups_webserverapache1nsg767_name": {
            "defaultValue": "webserverapache1nsg767",
            "type": "String"
        }
    },
    "variables": {},
    "resources": [
        {
            "type": "Microsoft.Network/publicIPAddresses",
            "apiVersion": "2022-05-01",
            "name": "[parameters('publicIPAddresses_webserver1_ip_name')]",
            "location": "centralus",
            "sku": {
                "name": "Standard",
                "tier": "Regional"
            },
            "properties": {
                "ipAddress": "40.77.90.104",
                "publicIPAddressVersion": "IPv4",
                "publicIPAllocationMethod": "Static",
                "idleTimeoutInMinutes": 4,
                "ipTags": []
            }
        },
        {
            "type": "Microsoft.Network/publicIPAddresses",
            "apiVersion": "2022-05-01",
            "name": "[parameters('publicIPAddresses_webserver2_ip_name')]",
            "location": "centralus",
            "sku": {
                "name": "Standard",
                "tier": "Regional"
            },
            "properties": {
                "ipAddress": "104.208.39.76",
                "publicIPAddressVersion": "IPv4",
                "publicIPAllocationMethod": "Static",
                "idleTimeoutInMinutes": 4,
                "ipTags": []
            }
        },
        {
            "type": "Microsoft.Network/publicIPAddresses",
            "apiVersion": "2022-05-01",
            "name": "[parameters('publicIPAddresses_webserverapache1_ip_name')]",
            "location": "centralus",
            "sku": {
                "name": "Standard",
                "tier": "Regional"
            },
            "properties": {
                "ipAddress": "104.43.211.122",
                "publicIPAddressVersion": "IPv4",
                "publicIPAllocationMethod": "Static",
                "idleTimeoutInMinutes": 4,
                "ipTags": []
            }
        },
        {
            "type": "Microsoft.Network/publicIPAddresses",
            "apiVersion": "2022-05-01",
            "name": "[parameters('publicIPAddresses_webserverapache1ip584_name')]",
            "location": "centralus",
            "sku": {
                "name": "Standard",
                "tier": "Regional"
            },
            "properties": {
                "ipAddress": "23.99.190.251",
                "publicIPAddressVersion": "IPv4",
                "publicIPAllocationMethod": "Static",
                "idleTimeoutInMinutes": 4,
                "ipTags": []
            }
        },
        {
            "type": "Microsoft.Network/publicIPAddresses",
            "apiVersion": "2022-05-01",
            "name": "[parameters('publicIPAddresses_webserverapache2_ip_name')]",
            "location": "centralus",
            "sku": {
                "name": "Standard",
                "tier": "Regional"
            },
            "properties": {
                "ipAddress": "104.43.214.30",
                "publicIPAddressVersion": "IPv4",
                "publicIPAllocationMethod": "Static",
                "idleTimeoutInMinutes": 4,
                "ipTags": []
            }
        },
        {
            "type": "Microsoft.Compute/virtualMachines",
            "apiVersion": "2022-08-01",
            "name": "[parameters('virtualMachines_webserverapache1_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache1989_name'))]"
            ],
            "properties": {
                "hardwareProfile": {
                    "vmSize": "Standard_D2s_v3"
                },
                "storageProfile": {
                    "imageReference": {
                        "publisher": "RedHat",
                        "offer": "RHEL",
                        "sku": "82gen2",
                        "version": "latest"
                    },
                    "osDisk": {
                        "osType": "Linux",
                        "name": "[concat(parameters('virtualMachines_webserverapache1_name'), '_OsDisk_1_7e2ccf162063451d954bf06e8a57f9a3')]",
                        "createOption": "FromImage",
                        "caching": "ReadWrite",
                        "managedDisk": {
                            "storageAccountType": "Premium_LRS",
                            "id": "[resourceId('Microsoft.Compute/disks', concat(parameters('virtualMachines_webserverapache1_name'), '_OsDisk_1_7e2ccf162063451d954bf06e8a57f9a3'))]"
                        },
                        "deleteOption": "Delete",
                        "diskSizeGB": 64
                    },
                    "dataDisks": []
                },
                "osProfile": {
                    "computerName": "[parameters('virtualMachines_webserverapache1_name')]",
                    "adminUsername": "vanya",
                    "linuxConfiguration": {
                        "disablePasswordAuthentication": false,
                        "provisionVMAgent": true,
                        "patchSettings": {
                            "patchMode": "ImageDefault",
                            "assessmentMode": "ImageDefault"
                        },
                        "enableVMAgentPlatformUpdates": false
                    },
                    "secrets": [],
                    "allowExtensionOperations": true,
                    "requireGuestProvisionSignal": true
                },
                "networkProfile": {
                    "networkInterfaces": [
                        {
                            "id": "[resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache1989_name'))]",
                            "properties": {
                                "deleteOption": "Detach"
                            }
                        }
                    ]
                },
                "diagnosticsProfile": {
                    "bootDiagnostics": {
                        "enabled": true
                    }
                }
            }
        },
        {
            "type": "Microsoft.Compute/virtualMachines",
            "apiVersion": "2022-08-01",
            "name": "[parameters('virtualMachines_webserverapache2_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache2518_name'))]"
            ],
            "properties": {
                "hardwareProfile": {
                    "vmSize": "Standard_D2s_v3"
                },
                "storageProfile": {
                    "imageReference": {
                        "publisher": "RedHat",
                        "offer": "RHEL",
                        "sku": "82gen2",
                        "version": "latest"
                    },
                    "osDisk": {
                        "osType": "Linux",
                        "name": "[concat(parameters('virtualMachines_webserverapache2_name'), '_OsDisk_1_b407a3b35b1844f59691136580df9a7f')]",
                        "createOption": "FromImage",
                        "caching": "ReadWrite",
                        "managedDisk": {
                            "storageAccountType": "Premium_LRS",
                            "id": "[resourceId('Microsoft.Compute/disks', concat(parameters('virtualMachines_webserverapache2_name'), '_OsDisk_1_b407a3b35b1844f59691136580df9a7f'))]"
                        },
                        "deleteOption": "Delete",
                        "diskSizeGB": 64
                    },
                    "dataDisks": []
                },
                "osProfile": {
                    "computerName": "[parameters('virtualMachines_webserverapache2_name')]",
                    "adminUsername": "vanya",
                    "linuxConfiguration": {
                        "disablePasswordAuthentication": false,
                        "provisionVMAgent": true,
                        "patchSettings": {
                            "patchMode": "ImageDefault",
                            "assessmentMode": "ImageDefault"
                        },
                        "enableVMAgentPlatformUpdates": false
                    },
                    "secrets": [],
                    "allowExtensionOperations": true,
                    "requireGuestProvisionSignal": true
                },
                "networkProfile": {
                    "networkInterfaces": [
                        {
                            "id": "[resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache2518_name'))]",
                            "properties": {
                                "deleteOption": "Detach"
                            }
                        }
                    ]
                },
                "diagnosticsProfile": {
                    "bootDiagnostics": {
                        "enabled": true
                    }
                }
            }
        },
        {
            "type": "Microsoft.Network/loadBalancers/backendAddressPools",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('loadBalancers_lb1_name'), '/name1')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/loadBalancers', parameters('loadBalancers_lb1_name'))]"
            ],
            "properties": {
                "loadBalancerBackendAddresses": [
                    {
                        "name": "rg_1_webserverapache1989ipconfig1",
                        "properties": {}
                    },
                    {
                        "name": "rg_1_webserverapache2518ipconfig1",
                        "properties": {}
                    }
                ]
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserver1_nsg_name'), '/HTTP')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserver1_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "80",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 320,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserver2_nsg_name'), '/HTTP')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserver2_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "80",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 320,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserverapache1_nsg_name'), '/HTTP')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "80",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 320,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserverapache1nsg767_name'), '/HTTP')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1nsg767_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "80",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 320,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserverapache2_nsg_name'), '/HTTP')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache2_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "80",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 320,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserver1_nsg_name'), '/SSH')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserver1_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "22",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 300,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserver2_nsg_name'), '/SSH')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserver2_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "22",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 300,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserverapache1_nsg_name'), '/SSH')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "22",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 300,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserverapache1nsg767_name'), '/SSH')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1nsg767_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "22",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 300,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups/securityRules",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('networkSecurityGroups_webserverapache2_nsg_name'), '/SSH')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache2_nsg_name'))]"
            ],
            "properties": {
                "protocol": "TCP",
                "sourcePortRange": "*",
                "destinationPortRange": "22",
                "sourceAddressPrefix": "*",
                "destinationAddressPrefix": "*",
                "access": "Allow",
                "priority": 300,
                "direction": "Inbound",
                "sourcePortRanges": [],
                "destinationPortRanges": [],
                "sourceAddressPrefixes": [],
                "destinationAddressPrefixes": []
            }
        },
        {
            "type": "Microsoft.Network/virtualNetworks",
            "apiVersion": "2022-05-01",
            "name": "[parameters('virtualNetworks_rg_1_vnet_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]"
            ],
            "properties": {
                "addressSpace": {
                    "addressPrefixes": [
                        "10.0.0.0/16"
                    ]
                },
                "subnets": [
                    {
                        "name": "default",
                        "id": "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]",
                        "properties": {
                            "addressPrefix": "10.0.0.0/24",
                            "delegations": [],
                            "privateEndpointNetworkPolicies": "Disabled",
                            "privateLinkServiceNetworkPolicies": "Enabled"
                        },
                        "type": "Microsoft.Network/virtualNetworks/subnets"
                    }
                ],
                "virtualNetworkPeerings": [],
                "enableDdosProtection": false
            }
        },
        {
            "type": "Microsoft.Network/virtualNetworks/subnets",
            "apiVersion": "2022-05-01",
            "name": "[concat(parameters('virtualNetworks_rg_1_vnet_name'), '/default')]",
            "dependsOn": [
                "[resourceId('Microsoft.Network/virtualNetworks', parameters('virtualNetworks_rg_1_vnet_name'))]"
            ],
            "properties": {
                "addressPrefix": "10.0.0.0/24",
                "delegations": [],
                "privateEndpointNetworkPolicies": "Disabled",
                "privateLinkServiceNetworkPolicies": "Enabled"
            }
        },
        {
            "type": "Microsoft.Network/loadBalancers",
            "apiVersion": "2022-05-01",
            "name": "[parameters('loadBalancers_lb1_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserver1_ip_name'))]",
                "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]"
            ],
            "sku": {
                "name": "Standard",
                "tier": "Regional"
            },
            "properties": {
                "frontendIPConfigurations": [
                    {
                        "name": "mypublicIp",
                        "id": "[concat(resourceId('Microsoft.Network/loadBalancers', parameters('loadBalancers_lb1_name')), '/frontendIPConfigurations/mypublicIp')]",
                        "properties": {
                            "privateIPAllocationMethod": "Dynamic",
                            "publicIPAddress": {
                                "id": "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserver1_ip_name'))]"
                            }
                        }
                    }
                ],
                "backendAddressPools": [
                    {
                        "name": "name1",
                        "id": "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]",
                        "properties": {
                            "loadBalancerBackendAddresses": [
                                {
                                    "name": "rg_1_webserverapache1989ipconfig1",
                                    "properties": {}
                                },
                                {
                                    "name": "rg_1_webserverapache2518ipconfig1",
                                    "properties": {}
                                }
                            ]
                        }
                    }
                ],
                "loadBalancingRules": [
                    {
                        "name": "lbr1",
                        "id": "[concat(resourceId('Microsoft.Network/loadBalancers', parameters('loadBalancers_lb1_name')), '/loadBalancingRules/lbr1')]",
                        "properties": {
                            "frontendIPConfiguration": {
                                "id": "[concat(resourceId('Microsoft.Network/loadBalancers', parameters('loadBalancers_lb1_name')), '/frontendIPConfigurations/mypublicIp')]"
                            },
                            "frontendPort": 80,
                            "backendPort": 80,
                            "enableFloatingIP": false,
                            "idleTimeoutInMinutes": 4,
                            "protocol": "Tcp",
                            "enableTcpReset": true,
                            "loadDistribution": "Default",
                            "disableOutboundSnat": true,
                            "backendAddressPool": {
                                "id": "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]"
                            },
                            "backendAddressPools": [
                                {
                                    "id": "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]"
                                }
                            ],
                            "probe": {
                                "id": "[concat(resourceId('Microsoft.Network/loadBalancers', parameters('loadBalancers_lb1_name')), '/probes/hp1')]"
                            }
                        }
                    }
                ],
                "probes": [
                    {
                        "name": "hp1",
                        "id": "[concat(resourceId('Microsoft.Network/loadBalancers', parameters('loadBalancers_lb1_name')), '/probes/hp1')]",
                        "properties": {
                            "protocol": "Http",
                            "port": 80,
                            "requestPath": "/",
                            "intervalInSeconds": 5,
                            "numberOfProbes": 1,
                            "probeThreshold": 1
                        }
                    }
                ],
                "inboundNatRules": [],
                "outboundRules": [],
                "inboundNatPools": []
            }
        },
        {
            "type": "Microsoft.Network/networkInterfaces",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkInterfaces_webserver1861_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserver1_nsg_name'))]"
            ],
            "kind": "Regular",
            "properties": {
                "ipConfigurations": [
                    {
                        "name": "ipconfig1",
                        "id": "[concat(resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserver1861_name')), '/ipConfigurations/ipconfig1')]",
                        "etag": "W/\"4d9b7d68-5faa-4cb2-a898-28952918bad1\"",
                        "type": "Microsoft.Network/networkInterfaces/ipConfigurations",
                        "properties": {
                            "provisioningState": "Succeeded",
                            "privateIPAddress": "10.0.0.4",
                            "privateIPAllocationMethod": "Dynamic",
                            "subnet": {
                                "id": "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]"
                            },
                            "primary": true,
                            "privateIPAddressVersion": "IPv4"
                        }
                    }
                ],
                "dnsSettings": {
                    "dnsServers": []
                },
                "enableAcceleratedNetworking": true,
                "enableIPForwarding": false,
                "disableTcpStateTracking": false,
                "networkSecurityGroup": {
                    "id": "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserver1_nsg_name'))]"
                },
                "nicType": "Standard"
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkSecurityGroups_webserver1_nsg_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver1_nsg_name'), 'SSH')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver1_nsg_name'), 'HTTP')]"
            ],
            "properties": {
                "securityRules": [
                    {
                        "name": "SSH",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver1_nsg_name'), 'SSH')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "22",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 300,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    },
                    {
                        "name": "HTTP",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver1_nsg_name'), 'HTTP')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "80",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 320,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    }
                ]
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkSecurityGroups_webserver2_nsg_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver2_nsg_name'), 'SSH')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver2_nsg_name'), 'HTTP')]"
            ],
            "properties": {
                "securityRules": [
                    {
                        "name": "SSH",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver2_nsg_name'), 'SSH')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "22",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 300,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    },
                    {
                        "name": "HTTP",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserver2_nsg_name'), 'HTTP')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "80",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 320,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    }
                ]
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkSecurityGroups_webserverapache1_nsg_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1_nsg_name'), 'SSH')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1_nsg_name'), 'HTTP')]"
            ],
            "properties": {
                "securityRules": [
                    {
                        "name": "SSH",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1_nsg_name'), 'SSH')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "22",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 300,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    },
                    {
                        "name": "HTTP",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1_nsg_name'), 'HTTP')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "80",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 320,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    }
                ]
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkSecurityGroups_webserverapache1nsg767_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1nsg767_name'), 'SSH')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1nsg767_name'), 'HTTP')]"
            ],
            "properties": {
                "securityRules": [
                    {
                        "name": "SSH",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1nsg767_name'), 'SSH')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "22",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 300,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    },
                    {
                        "name": "HTTP",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache1nsg767_name'), 'HTTP')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "80",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 320,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    }
                ]
            }
        },
        {
            "type": "Microsoft.Network/networkSecurityGroups",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkSecurityGroups_webserverapache2_nsg_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache2_nsg_name'), 'SSH')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache2_nsg_name'), 'HTTP')]"
            ],
            "properties": {
                "securityRules": [
                    {
                        "name": "SSH",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache2_nsg_name'), 'SSH')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "22",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 300,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    },
                    {
                        "name": "HTTP",
                        "id": "[resourceId('Microsoft.Network/networkSecurityGroups/securityRules', parameters('networkSecurityGroups_webserverapache2_nsg_name'), 'HTTP')]",
                        "type": "Microsoft.Network/networkSecurityGroups/securityRules",
                        "properties": {
                            "protocol": "TCP",
                            "sourcePortRange": "*",
                            "destinationPortRange": "80",
                            "sourceAddressPrefix": "*",
                            "destinationAddressPrefix": "*",
                            "access": "Allow",
                            "priority": 320,
                            "direction": "Inbound",
                            "sourcePortRanges": [],
                            "destinationPortRanges": [],
                            "sourceAddressPrefixes": [],
                            "destinationAddressPrefixes": []
                        }
                    }
                ]
            }
        },
        {
            "type": "Microsoft.Network/networkInterfaces",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkInterfaces_webserverapache1751_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserverapache1_ip_name'))]",
                "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1_nsg_name'))]"
            ],
            "kind": "Regular",
            "properties": {
                "ipConfigurations": [
                    {
                        "name": "ipconfig1",
                        "id": "[concat(resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache1751_name')), '/ipConfigurations/ipconfig1')]",
                        "etag": "W/\"61009dd9-9834-43ee-9927-e26d33deb2ae\"",
                        "type": "Microsoft.Network/networkInterfaces/ipConfigurations",
                        "properties": {
                            "provisioningState": "Succeeded",
                            "privateIPAddress": "10.0.0.6",
                            "privateIPAllocationMethod": "Dynamic",
                            "publicIPAddress": {
                                "name": "webserverapache1-ip",
                                "id": "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserverapache1_ip_name'))]",
                                "properties": {
                                    "provisioningState": "Succeeded",
                                    "resourceGuid": "fe04cc12-9822-4216-91de-81986f86ed58",
                                    "publicIPAddressVersion": "IPv4",
                                    "publicIPAllocationMethod": "Dynamic",
                                    "idleTimeoutInMinutes": 4,
                                    "ipTags": [],
                                    "ipConfiguration": {
                                        "id": "[concat(resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache1751_name')), '/ipConfigurations/ipconfig1')]"
                                    },
                                    "deleteOption": "Detach"
                                },
                                "type": "Microsoft.Network/publicIPAddresses",
                                "sku": {
                                    "name": "Basic",
                                    "tier": "Regional"
                                }
                            },
                            "subnet": {
                                "id": "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]"
                            },
                            "primary": true,
                            "privateIPAddressVersion": "IPv4"
                        }
                    }
                ],
                "dnsSettings": {
                    "dnsServers": []
                },
                "enableAcceleratedNetworking": true,
                "enableIPForwarding": false,
                "disableTcpStateTracking": false,
                "networkSecurityGroup": {
                    "id": "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1_nsg_name'))]"
                },
                "nicType": "Standard"
            }
        },
        {
            "type": "Microsoft.Network/networkInterfaces",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkInterfaces_webserverapache1989_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserverapache1ip584_name'))]",
                "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]",
                "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1nsg767_name'))]"
            ],
            "kind": "Regular",
            "properties": {
                "ipConfigurations": [
                    {
                        "name": "ipconfig1",
                        "id": "[concat(resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache1989_name')), '/ipConfigurations/ipconfig1')]",
                        "etag": "W/\"7a720923-e663-4e3c-8a4d-8a055b1bc1b3\"",
                        "type": "Microsoft.Network/networkInterfaces/ipConfigurations",
                        "properties": {
                            "provisioningState": "Succeeded",
                            "privateIPAddress": "10.0.0.5",
                            "privateIPAllocationMethod": "Dynamic",
                            "publicIPAddress": {
                                "name": "webserverapache1ip584",
                                "id": "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserverapache1ip584_name'))]",
                                "properties": {
                                    "provisioningState": "Succeeded",
                                    "resourceGuid": "84aef45b-3ed7-4b12-8db3-39093671fb89",
                                    "publicIPAddressVersion": "IPv4",
                                    "publicIPAllocationMethod": "Dynamic",
                                    "idleTimeoutInMinutes": 4,
                                    "ipTags": [],
                                    "ipConfiguration": {
                                        "id": "[concat(resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache1989_name')), '/ipConfigurations/ipconfig1')]"
                                    },
                                    "deleteOption": "Detach"
                                },
                                "type": "Microsoft.Network/publicIPAddresses",
                                "sku": {
                                    "name": "Basic",
                                    "tier": "Regional"
                                }
                            },
                            "subnet": {
                                "id": "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]"
                            },
                            "primary": true,
                            "privateIPAddressVersion": "IPv4",
                            "loadBalancerBackendAddressPools": [
                                {
                                    "id": "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]"
                                }
                            ]
                        }
                    }
                ],
                "dnsSettings": {
                    "dnsServers": []
                },
                "enableAcceleratedNetworking": true,
                "enableIPForwarding": false,
                "disableTcpStateTracking": false,
                "networkSecurityGroup": {
                    "id": "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache1nsg767_name'))]"
                },
                "nicType": "Standard"
            }
        },
        {
            "type": "Microsoft.Network/networkInterfaces",
            "apiVersion": "2022-05-01",
            "name": "[parameters('networkInterfaces_webserverapache2518_name')]",
            "location": "centralus",
            "dependsOn": [
                "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserverapache2_ip_name'))]",
                "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]",
                "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]",
                "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache2_nsg_name'))]"
            ],
            "kind": "Regular",
            "properties": {
                "ipConfigurations": [
                    {
                        "name": "ipconfig1",
                        "id": "[concat(resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache2518_name')), '/ipConfigurations/ipconfig1')]",
                        "etag": "W/\"f0a2b930-d4f0-49f0-9253-d3f5c05bba66\"",
                        "type": "Microsoft.Network/networkInterfaces/ipConfigurations",
                        "properties": {
                            "provisioningState": "Succeeded",
                            "privateIPAddress": "10.0.0.7",
                            "privateIPAllocationMethod": "Dynamic",
                            "publicIPAddress": {
                                "name": "webserverapache2-ip",
                                "id": "[resourceId('Microsoft.Network/publicIPAddresses', parameters('publicIPAddresses_webserverapache2_ip_name'))]",
                                "properties": {
                                    "provisioningState": "Succeeded",
                                    "resourceGuid": "3b9eb4a6-577d-4f37-a769-b370a855ef2e",
                                    "publicIPAddressVersion": "IPv4",
                                    "publicIPAllocationMethod": "Dynamic",
                                    "idleTimeoutInMinutes": 4,
                                    "ipTags": [],
                                    "ipConfiguration": {
                                        "id": "[concat(resourceId('Microsoft.Network/networkInterfaces', parameters('networkInterfaces_webserverapache2518_name')), '/ipConfigurations/ipconfig1')]"
                                    },
                                    "deleteOption": "Detach"
                                },
                                "type": "Microsoft.Network/publicIPAddresses",
                                "sku": {
                                    "name": "Basic",
                                    "tier": "Regional"
                                }
                            },
                            "subnet": {
                                "id": "[resourceId('Microsoft.Network/virtualNetworks/subnets', parameters('virtualNetworks_rg_1_vnet_name'), 'default')]"
                            },
                            "primary": true,
                            "privateIPAddressVersion": "IPv4",
                            "loadBalancerBackendAddressPools": [
                                {
                                    "id": "[resourceId('Microsoft.Network/loadBalancers/backendAddressPools', parameters('loadBalancers_lb1_name'), 'name1')]"
                                }
                            ]
                        }
                    }
                ],
                "dnsSettings": {
                    "dnsServers": []
                },
                "enableAcceleratedNetworking": true,
                "enableIPForwarding": false,
                "disableTcpStateTracking": false,
                "networkSecurityGroup": {
                    "id": "[resourceId('Microsoft.Network/networkSecurityGroups', parameters('networkSecurityGroups_webserverapache2_nsg_name'))]"
                },
                "nicType": "Standard"
            }
        }
    ]
}
