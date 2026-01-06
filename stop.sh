#!/bin/bash

# Senior Dev Optimized Stop Script
set -e

echo "🛑 Initiating shutdown..."

# 1. Stop local background processes
echo "🔥 Cleaning up background Vite processes..."
# Killing by PID if possible, or by name. 
# We use '|| true' so the script doesn't exit if no process is found.
pkill -f "npm run dev" || true
pkill -f "vite" || true

# 2. Stop Sail/Docker
if [ -f "./vendor/bin/sail" ]; then
    echo "🐳 Bringing down Docker containers..."
    ./vendor/bin/sail down
else
    echo "⚠️  Sail not found, attempting direct docker compose shutdown..."
    docker compose down
fi

# 3. Clean up PID files (Optional but good practice)
# If your start script saves a PID file, remove it here
rm -f storage/logs/vite.pid

echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "✅ Environment Stopped Successfully"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "🚀 To restart: ./start.sh"
echo "🗑️  To wipe database: ./vendor/bin/sail down -v"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
