#!/bin/bash

# Path to the WordPress installation
WP_PATH="/opt/bitnami/wordpress"

# Navigate to the WordPress directory
cd $WP_PATH || exit

# Set permissions (optional, but good)
sudo chown -R bitnami:daemon wp-content/themes/u3a-child-theme
sudo chmod -R 775 wp-content/themes/u3a-child-theme

# Activate the child theme
sudo -u daemon wp theme activate u3a-child-theme --path=$WP_PATH
