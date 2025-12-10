#!/bin/bash

# Laravel Docker Update Script
# This script updates the application dependencies and rebuilds assets

set -e

echo "🔄 Updating Laravel Application..."
echo ""

# Check if Docker is running
if ! docker info > /dev/null 2>&1; then
    echo "❌ Error: Docker is not running. Please start Docker and try again."
    exit 1
fi

# Check if containers are running
if ! ./vendor/bin/sail ps | grep -q "Up"; then
    echo "⚠️  Containers are not running. Starting them..."
    ./vendor/bin/sail up -d
    echo "⏳ Waiting for services to be ready..."
    sleep 10
fi

echo "📦 Updating Composer dependencies..."
./vendor/bin/sail composer update

echo ""
echo "📦 Updating NPM dependencies..."
./vendor/bin/sail npm update

echo ""
echo "🗄️  Running database migrations..."
./vendor/bin/sail artisan migrate

echo ""
echo "🧹 Clearing application cache..."
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan config:clear
./vendor/bin/sail artisan route:clear
./vendor/bin/sail artisan view:clear

echo ""
echo "🎨 Rebuilding frontend assets..."
./vendor/bin/sail npm run build

echo ""
echo "⚡ Optimizing application..."
./vendor/bin/sail artisan config:cache
./vendor/bin/sail artisan route:cache
./vendor/bin/sail artisan view:cache

echo ""
echo "✨ Update complete!"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "🎉 Application has been updated successfully!"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "📱 Application: http://localhost:8085"
echo ""
echo "💡 If you're developing, run:"
echo "   ./vendor/bin/sail npm run dev"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

