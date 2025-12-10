#!/bin/bash

# Laravel Docker Stop Script
# This script stops all Docker containers

set -e

echo "🛑 Stopping Laravel Docker containers..."
echo ""

# Stop Vite processes
echo "🔥 Stopping Vite processes..."
pkill -f "vite" || true
pkill -f "npm run dev" || true

# Stop containers
./vendor/bin/sail down

echo ""
echo "✅ All containers and processes stopped!"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "💡 Tips:"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "🚀 Restart containers:     ./start.sh"
echo "🗑️  Remove with volumes:    ./vendor/bin/sail down -v"
echo "📊 View stopped containers: docker ps -a"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

