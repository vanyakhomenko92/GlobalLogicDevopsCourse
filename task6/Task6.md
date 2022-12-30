In this task I've created 2 Terraform modules which deploy Grafana app on public IP. </br>
The first Terraform module creates the infrastructure on the AWS cloud provider. </br>

You can followed this link <a href="http://34.227.17.114:3000/login" > AWS Grafana </a> </br>
The second Terraform module creates the infrastructure on the Azure cloud provider. <a href="http://40.68.63.105:3000/login"> Azure Grafana </a> </br>
Before using this module please firstly export your credentials for AWS account (AWS_SECRET_ACCESS_KEY and AWS_ACCESS_KEY_ID) </br>
And please have a look into your ssh key (~/.ssh/your_public_key) in this module (aws_module_/key.tf)

<img src=img/1.png width="600" height="300">
<img src=img/2.png width="600" height="200">
<img src=img/3.png width="647" height="300">
<img src=img/4.png width="743" height="207">
