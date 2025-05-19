#!/bin/bash

# Go to WordPress directory
cd /opt/bitnami/wordpress || {
    echo "❌ Could not navigate to WordPress directory. Exiting."
    exit 1
}

# List installed themes
echo "📂 Available themes before activation:"
wp theme list --allow-root

# Activate the child theme
echo "🚀 Activating child theme: u3a-child-theme"
wp theme activate u3a-child-theme --allow-root

# Verify activation
ACTIVE_THEME=$(wp theme list --status=active --field=name --allow-root)

if [ "$ACTIVE_THEME" == "u3a-child-theme" ]; then
    echo "✅ Successfully activated 'u3a-child-theme'."
else
    echo "❌ Failed to activate 'u3a-child-theme'."
    wp theme list --allow-root
    exit 1
fi