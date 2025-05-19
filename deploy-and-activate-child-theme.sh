#!/bin/bash

# Go to WordPress directory just in case
cd /opt/bitnami/wordpress || {
    echo "❌ Could not navigate to WordPress directory. Exiting."
    exit 1
}

# Display current themes
echo "📂 Available themes before activation:"
wp theme list --allow-root

# Activate the child theme
echo "🚀 Activating child theme: u3a-child-theme"
wp theme activate u3a-child-theme --allow-root

# Check if the theme is now active
ACTIVE_THEME=$(wp theme list --status=active --field=name --allow-root)

if [ "$ACTIVE_THEME" == "u3a-child-theme" ]; then
  echo "✅ Successfully activated 'u3a-child-theme'."
else
  echo "❌ Failed to activate 'u3a-child-theme'. Please check if the theme exists at the correct path."
  wp theme list --allow-root
  exit 1
fi
