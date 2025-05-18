#!/bin/bash

# Wait for DB to be ready
sleep 20

# Install WordPress (only if not already installed)
wp core install --url="http://localhost:8000" \
    --title="U3A Site" \
    --admin_user="admin" \
    --admin_password="admin" \
    --admin_email="deepeshbijarnia2911@gmail.com" \
    --skip-email \
    --allow-root

# Install and activate Twenty Twenty-Four if not already installed
wp theme install twentytwentyfour --activate --allow-root

# (Optional) Activate your child theme if needed
# wp theme activate u3a-child-theme --allow-root

exec apache2-foreground
