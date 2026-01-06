#!/bin/bash
set -e

echo "🚀 Installing..."

# 1. Environment Setup
if [ ! -f .env ]; then
    cp .env.example .env
    echo "✅ Created .env file"
fi

# 2. Install dependencies
echo "📦 Running initial Composer install via helper container..."
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs

# 3. Start Sail
echo "🐳 Starting Laravel Sail..."
./vendor/bin/sail up -d

# 4. Finalize Configuration
echo "🔑 Generating App Key..."
./vendor/bin/sail artisan key:generate

echo "🗄️ Running Migrations..."
# Wait for MySQL to be ready
until ./vendor/bin/sail artisan db:monitor > /dev/null 2>&1; do
  echo "⏳ Waiting for MySQL..."
  sleep 5
done
./vendor/bin/sail artisan migrate

echo "🎨 Building Frontend..."
./vendor/bin/sail npm install
./vendor/bin/sail npm run build

echo ""
echo "✨ Installation complete!"
echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "🎉 Application is ready"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "📱 Access your application:"
echo "   🌐 Application: http://localhost:8085"
echo "   🎨 Tailwind Demo: http://localhost:8085/kitchensink"
echo "   🔍 Meilisearch: http://localhost:7700"
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

