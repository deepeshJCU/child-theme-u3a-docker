#!/bin/bash

# Switch to the correct user
sudo -u daemon -s /bin/bash <<EOF

cd /opt/bitnami/wordpress || {
    echo "❌ Could not navigate to WordPress directory. Exiting."
    exit 1
}

echo "📂 Available themes before activation:"
wp theme list

echo "🚀 Activating child theme: u3a-child-theme"
wp theme activate u3a-child-theme

ACTIVE_THEME=\$(wp theme list --status=active --field=name)

if [ "\$ACTIVE_THEME" == "u3a-child-theme" ]; then
    echo "✅ Successfully activated 'u3a-child-theme'."
else
    echo "❌ Failed to activate 'u3a-child-theme'."
    wp theme list
    exit 1
fi

EOF