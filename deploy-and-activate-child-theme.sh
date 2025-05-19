#!/bin/bash

# Path to WP installation
WP_PATH="/opt/bitnami/wordpress"

# Go to WordPress directory
cd $WP_PATH || {
  echo "❌ Failed to navigate to $WP_PATH"
  exit 1
}

# Ensure WP-CLI is available
if ! command -v wp &> /dev/null; then
    echo "❌ WP-CLI not found. Exiting."
    exit 1
fi

# List themes (optional for debugging)
echo "📂 Available themes:"
wp theme list

# Try activating the theme
echo "🚀 Activating u3a-child-theme..."
wp theme activate u3a-child-theme

# Check activation result
if [ $? -eq 0 ]; then
    echo "✅ u3a-child-theme activated successfully!"
else
    echo "❌ Failed to activate u3a-child-theme."
    exit 1
fi
