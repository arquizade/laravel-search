#!/bin/bash

# Senior Dev Optimized Start Script
set -e

echo "🚀 Initializing environment..."

# 1. Check for Docker
if ! docker info > /dev/null 2>&1; then
    echo "❌ Error: Docker is not running."
    exit 1
fi

# 2. Resilience Check: If vendor is missing, run the bootstrap helper
if [ ! -d "vendor" ]; then
    echo "📦 Vendor folder missing! Running emergency composer install..."
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsail/php83-composer:latest \
        composer install --ignore-platform-reqs
fi

# 3. Start Sail
echo "🐳 Starting Docker containers..."
./vendor/bin/sail up -d

# 4. Wait for Database
echo "⏳ Waiting for MySQL..."
until ./vendor/bin/sail artisan db:monitor > /dev/null 2>&1; do
  sleep 2
done

# 5. Start Vite (Background)
echo "🎨 Starting Vite development server..."
# Ensure log directory exists
mkdir -p storage/logs
./vendor/bin/sail npm run dev > storage/logs/vite.log 2>&1 &
VITE_PID=$!

echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "✨ All services are running!"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "📱 Application:       http://localhost:8085"
echo "🎨 Design Example:    http://localhost:8085/kitchensink"
echo "🔥 Vite Dev Server:   http://localhost:5173"
echo "🔍 Meilisearch:       http://localhost:7700"
echo ""
echo "✅ Vite is running in the background (PID: $VITE_PID)"
echo "   Logs: storage/logs/vite.log"
echo ""
echo "📊 Useful commands:"
echo "   View Docker logs:  ./vendor/bin/sail logs -f"
echo "   View Vite logs:    tail -f storage/logs/vite.log"
echo "   Stop all:          ./stop.sh"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
