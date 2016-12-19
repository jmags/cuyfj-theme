# Provisioning script for WP dev env.

# Setup instructions here:
# https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-14-04

# Get requirements
apt-get update
apt-get upgrade

apt-get install -y nginx mysql-server php5-fpm php5-mysql

sudo mysql_install_db
sudo mysql_secure_installation
