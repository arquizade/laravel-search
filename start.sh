#!/bin/bash

# Laravel Docker Start Script
# This script starts all Docker containers

set -e

echo "🚀 Starting Laravel Docker containers..."
echo ""

# Check if Docker is running
if ! docker info > /dev/null 2>&1; then
    echo "❌ Error: Docker is not running. Please start Docker and try again."
    exit 1
fi

# Start containers
./vendor/bin/sail up -d

echo ""
echo "⏳ Waiting for services to be ready..."
sleep 5

echo ""
echo "✅ Checking container status..."
./vendor/bin/sail ps

echo ""
echo "🎨 Starting Vite development server in the background..."
./vendor/bin/sail npm run dev > storage/logs/vite.log 2>&1 &
VITE_PID=$!

echo "⏳ Waiting for Vite to start..."
sleep 3

echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "✨ All services are running!"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "📱 Application: http://localhost:8085"
echo "🎨 Tailwind Demo: http://localhost:8085/kitchensink"
echo "🔥 Vite Dev Server: http://localhost:5173"
echo "🔍 Meilisearch: http://localhost:7700"
echo ""
echo "✅ Vite is running in the background (PID: $VITE_PID)"
echo "   Logs: storage/logs/vite.log"
echo ""
echo "📊 Useful commands:"
echo "   View Docker logs: ./vendor/bin/sail logs -f"
echo "   View Vite logs:   tail -f storage/logs/vite.log"
echo "   Stop all:         ./stop.sh"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

