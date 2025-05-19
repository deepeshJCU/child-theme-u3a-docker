#!/bin/bash

# Wait for DB to be ready
sleep 20

# Install WordPress only if not already installed
if ! wp core is-installed --allow-root; then
  wp core install --url="http://localhost:8000" \
      --title="U3A Site" \
      --admin_user="admin" \
      --admin_password="admin" \
      --admin_email="deepeshbijarnia2911@gmail.com" \
      --skip-email \
      --allow-root
fi

# Install and activate the default theme if not already active
if ! wp theme is-active twentytwentyfour --allow-root; then
  wp theme install twentytwentyfour --activate --allow-root
fi

# (Optional) Activate child theme if deployed
# wp theme activate u3a-child-theme --allow-root

# Start Apache
exec apache2-foreground
