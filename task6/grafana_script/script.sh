#!/bin/bash
sudo apt-get -y update
wget https://script.technologyrss.com/linux/grafana/install-grafana.sh
chmod 755 install-grafana.sh
sudo bash install-grafana.sh
sudo systemctl daemon-reload
sudo systemctl start grafana-server
sudo systemctl enable grafana-server