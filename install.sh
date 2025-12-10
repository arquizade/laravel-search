#!/bin/bash

# Laravel Docker Installation Script
# This script sets up the Laravel application with Docker

set -e

echo "🚀 Starting Laravel Docker Installation..."
echo ""

# Check if Docker is running
if ! docker info > /dev/null 2>&1; then
    echo "❌ Error: Docker is not running. Please start Docker and try again."
    exit 1
fi

echo "✅ Docker is running"
echo ""

# Check if .env file exists
if [ ! -f .env ]; then
    echo "📝 Creating .env file from .env.example..."
    cp .env.example .env
    echo "✅ .env file created"
else
    echo "✅ .env file already exists"
fi

# Set default environment variables if not set
if ! grep -q "WWWUSER" .env; then
    echo "⚙️  Adding WWWUSER and WWWGROUP to .env..."
    echo "" >> .env
    echo "WWWUSER=1000" >> .env
    echo "WWWGROUP=1000" >> .env
    echo "✅ Environment variables added"
fi

if ! grep -q "APP_PORT" .env; then
    echo "⚙️  Adding APP_PORT to .env..."
    sed -i 's|APP_URL=.*|APP_URL=http://localhost:8085|' .env
    echo "APP_PORT=8085" >> .env
    echo "✅ APP_PORT configured"
fi

echo ""
echo "🐳 Building Docker containers..."
./vendor/bin/sail build --no-cache

echo ""
echo "🚢 Starting Docker containers..."
./vendor/bin/sail up -d

echo ""
echo "⏳ Waiting for MySQL and Meilisearch to be ready..."
sleep 15

echo ""
echo "🔑 Generating application key..."
./vendor/bin/sail artisan key:generate

echo ""
echo "📦 Installing Composer dependencies..."
./vendor/bin/sail composer install

echo ""
echo "🔍 Installing Laravel Scout and Meilisearch..."
./vendor/bin/sail composer require laravel/scout meilisearch/meilisearch-php

echo ""
echo "📝 Publishing Scout configuration..."
./vendor/bin/sail artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"

echo ""
echo "📦 Installing NPM dependencies..."
./vendor/bin/sail npm install

echo ""
echo "🗄️  Running database migrations..."
./vendor/bin/sail artisan migrate

echo ""
echo "🎨 Building frontend assets..."
./vendor/bin/sail npm run build

echo ""
echo "✨ Installation complete!"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "🎉 Your Laravel application is ready!"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "📱 Access your application:"
echo "   🌐 Application: http://localhost:8085"
echo "   🎨 Tailwind Demo: http://localhost:8085/kitchensink"
echo "   🔍 Meilisearch: http://localhost:7700"
echo ""
echo "🔍 Meilisearch Connection:"
echo "   Host: http://localhost:7700"
echo ""
echo "💻 Useful Commands:"
echo "   Start containers:  ./start.sh"
echo "   Stop containers:   ./stop.sh"
echo "   Update app:        ./update.sh"
echo "   View logs:         ./vendor/bin/sail logs"
echo "   Run artisan:       ./vendor/bin/sail artisan [command]"
echo ""
echo "🔥 Start development server (Hot Reload):"
echo "   ./vendor/bin/sail npm run dev"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

