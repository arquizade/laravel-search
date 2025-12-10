# Laravel Search Application

A modern Laravel 12 application with advanced search functionality using Meilisearch, Docker (Sail), Tailwind CSS v4, and Vite for fast development.

---

## 🚀 Quickstart

Get up and running in 3 simple steps:

```bash
# 1. Clone the repository
git clone <your-repository-url>
cd laravel-search

# 2. Run installation script
./install.sh

# 3. Start development server (IMPORTANT for styles!)
./vendor/bin/sail npm run dev
```

**Access your application:** [http://localhost:8085](http://localhost:8085)

---

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- **Docker Desktop** - For containerized development environment
- **Git** - For version control
- **Terminal** - bash/zsh for running commands

**System Requirements:**
- macOS, Linux, or Windows with WSL2
- Minimum 4GB RAM available for Docker
- 5GB free disk space

---

## 🎯 Getting Started

### Initial Setup

1. **Clone and navigate to the project:**
   ```bash
   git clone <your-repository-url>
   cd laravel-search
   ```

2. **Run the installation script:**
   ```bash
   ./install.sh
   ```
   
   This automated script will:
   - Create `.env` file from `.env.example`
   - Configure environment variables (ports, Docker settings)
   - Build Docker containers
   - Install Composer dependencies (PHP packages)
   - Install NPM dependencies (JavaScript packages)
   - Generate Laravel application key
   - Run database migrations
   - Build frontend assets

3. **Start the containers:**
   ```bash
   ./start.sh
   ```

4. **Start the development server (REQUIRED):**
   ```bash
   ./vendor/bin/sail npm run dev
   ```
   ⚠️ **Keep this running** - Your styles won't work without it!

5. **Access your application:**
   - Main Application: [http://localhost:8085](http://localhost:8085)
   - Tailwind Demo: [http://localhost:8085/test-tailwind](http://localhost:8085/test-tailwind)

---

## 🛠️ Tech Stack

### Backend
- **Laravel 12** - Latest PHP framework
- **PHP 8.3+** - Modern PHP with strict typing
- **MySQL 8.4** - Relational database
- **Laravel Scout** - Search abstraction layer
- **Meilisearch** - Fast, typo-tolerant search engine

### Frontend
- **Vite** - Lightning-fast build tool
- **Tailwind CSS v4** - Utility-first CSS framework
- **JavaScript (ES6+)** - Modern JavaScript

### Development Tools
- **Laravel Sail** - Docker-based development environment
- **Docker & Docker Compose** - Containerization
- **Laravel Pint** - PHP code style fixer (PSR-12)
- **PHPUnit** - PHP testing framework

---

## 📁 Project Structure

```
laravel-search/
├── .github/
│   └── copilot-instructions.md  # AI coding guidelines
├── app/
│   ├── Console/                 # Artisan commands
│   ├── Http/
│   │   ├── Controllers/         # Request handlers (thin)
│   │   ├── Middleware/          # HTTP middleware
│   │   ├── Requests/            # Form request validation
│   │   └── Resources/           # API response transformers
│   ├── Models/                  # Eloquent models
│   ├── Services/                # Business logic layer
│   ├── Repositories/            # Data access layer
│   └── Providers/               # Service providers
├── config/
│   ├── scout.php                # Laravel Scout configuration
│   └── *.php                    # Other config files
├── database/
│   ├── migrations/              # Database schema
│   ├── seeders/                 # Database seeders
│   └── factories/               # Model factories
├── resources/
│   ├── css/
│   │   └── app.css              # Tailwind CSS styles
│   ├── js/
│   │   └── app.js               # JavaScript entry point
│   └── views/                   # Blade templates
├── routes/
│   ├── web.php                  # Web routes
│   ├── api.php                  # API routes
│   └── console.php              # Console routes
├── tests/
│   ├── Feature/                 # Feature/integration tests
│   └── Unit/                    # Unit tests
├── public/                      # Public web root
├── storage/                     # File storage & logs
├── vendor/                      # Composer dependencies
├── compose.yaml                 # Docker Compose config
├── vite.config.js               # Vite configuration
├── phpunit.xml                  # PHPUnit configuration
├── .env                         # Environment variables
├── install.sh                   # Installation script
├── start.sh                     # Start containers
├── stop.sh                      # Stop containers
└── update.sh                    # Update dependencies
```

---

## 🔧 Available Scripts

### Management Scripts

| Script | Command | Description | When to Use |
|--------|---------|-------------|-------------|
| **Install** | `./install.sh` | Complete setup and configuration | First time setup |
| **Start** | `./start.sh` | Start all Docker containers | Beginning work session |
| **Stop** | `./stop.sh` | Stop all Docker containers | End of work session |
| **Update** | `./update.sh` | Update dependencies and rebuild | After pulling new code |

### NPM Scripts

| Command | Description |
|---------|-------------|
| `npm run dev` | Start Vite dev server with HMR |
| `npm run build` | Build production assets |
| `npm run preview` | Preview production build |

---

## 💻 Development Commands

### Laravel Artisan Commands

```bash
# Run migrations
./vendor/bin/sail artisan migrate

# Create new controller
./vendor/bin/sail artisan make:controller SearchController

# Create new model
./vendor/bin/sail artisan make:model Post -mfs

# Create form request
./vendor/bin/sail artisan make:request SearchRequest

# Run tinker (REPL)
./vendor/bin/sail artisan tinker

# Clear all caches
./vendor/bin/sail artisan optimize:clear

# Run tests
./vendor/bin/sail artisan test
```

### Scout & Meilisearch Commands

```bash
# Import model to search index
./vendor/bin/sail artisan scout:import "App\Models\User"

# Flush search index
./vendor/bin/sail artisan scout:flush "App\Models\User"

# Sync index settings
./vendor/bin/sail artisan scout:sync-index-settings
```

### Composer Commands

```bash
# Install package
./vendor/bin/sail composer require vendor/package

# Update dependencies
./vendor/bin/sail composer update

# Dump autoload
./vendor/bin/sail composer dump-autoload
```

### NPM Commands

```bash
# Install package
./vendor/bin/sail npm install package-name

# Start dev server (IMPORTANT!)
./vendor/bin/sail npm run dev

# Build for production
./vendor/bin/sail npm run build
```

### Database Commands

```bash
# Access MySQL CLI
./vendor/bin/sail mysql

# Run migrations
./vendor/bin/sail artisan migrate

# Rollback migrations
./vendor/bin/sail artisan migrate:rollback

# Fresh migration with seed
./vendor/bin/sail artisan migrate:fresh --seed

# Create new migration
./vendor/bin/sail artisan make:migration create_posts_table
```

### Docker Commands

```bash
# View running containers
./vendor/bin/sail ps

# View logs (all services)
./vendor/bin/sail logs -f

# View MySQL logs only
./vendor/bin/sail logs mysql -f

# Access container shell
./vendor/bin/sail shell

# Rebuild containers
./vendor/bin/sail build --no-cache

# Stop and remove everything
./vendor/bin/sail down -v
```

### Testing Commands

```bash
# Run all tests
./vendor/bin/sail artisan test

# Run specific test file
./vendor/bin/sail artisan test tests/Feature/SearchTest.php

# Run with coverage
./vendor/bin/sail artisan test --coverage

# Run PHPUnit directly
./vendor/bin/sail test
```

---

## 📝 Code Standards

This project follows strict coding standards to ensure maintainability and quality.

### PHP Standards

**Always use strict typing:**
```php
<?php

declare(strict_types=1);

namespace App\Services;

class SearchService
{
    public function search(string $query, int $limit = 10): array
    {
        // Implementation
    }
}
```

**Key Principles:**
- ✅ **PSR-12** coding style (enforced by Laravel Pint)
- ✅ **Strict type declarations** in all PHP files
- ✅ **Type hints** for all parameters and return types
- ✅ **PHPDoc comments** for classes and complex methods
- ✅ **Constructor property promotion** (PHP 8.x)
- ✅ **Readonly properties** for immutable data
- ✅ **Named arguments** for better readability

### Design Patterns

We follow these design patterns:
- **Repository Pattern** - Data access abstraction
- **Service Pattern** - Business logic encapsulation
- **Dependency Injection** - Constructor injection
- **Single Responsibility** - Each class does one thing
- **Thin Controllers** - Delegate to services

### Code Style Enforcement

```bash
# Check code style
./vendor/bin/sail pint --test

# Fix code style automatically
./vendor/bin/sail pint
```

### Best Practices

✅ **DO:**
- Keep controllers thin (delegate to services)
- Use form requests for validation
- Use API resources for response transformation
- Write tests for critical functionality
- Use environment variables for configuration
- Add proper error handling
- Use Laravel helpers and conventions

❌ **DON'T:**
- Put business logic in controllers
- Use raw SQL without parameter binding
- Hardcode configuration values
- Skip validation
- Use `dd()`, `dump()` in production code
- Create God classes
- Ignore database indexing

### Testing Standards

```php
<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class SearchTest extends TestCase
{
    public function test_user_can_search_posts(): void
    {
        // Arrange
        $post = Post::factory()->create(['title' => 'Laravel Testing']);
        
        // Act
        $response = $this->get('/search?q=Laravel');
        
        // Assert
        $response->assertStatus(200);
        $response->assertSee('Laravel Testing');
    }
}
```

---

## 🐛 Common Issues & Troubleshooting

### Styles Not Showing

**Problem:** Page has no styling/looks broken

**Solution:**
```bash
# Start Vite dev server (MUST be running!)
./vendor/bin/sail npm run dev
```
Keep this running in a separate terminal window.

### Port Already in Use

**Problem:** "Bind for 0.0.0.0:8085 failed: port is already allocated"

**Solution:**
```bash
# Option 1: Change port in .env
APP_PORT=8080

# Option 2: Stop conflicting service
sudo lsof -i :8085
sudo systemctl stop apache2  # or nginx

# Then restart
./stop.sh && ./start.sh
```

### Database Connection Failed

**Problem:** "getaddrinfo for mysql failed"

**Solution:**
```bash
# Wait 10-15 seconds for MySQL to initialize
docker ps  # Check if MySQL is "healthy"

# Check logs
./vendor/bin/sail logs mysql
```

### Permission Denied

**Problem:** "./install.sh: Permission denied"

**Solution:**
```bash
chmod +x install.sh start.sh stop.sh update.sh
```

### Docker Not Running

**Problem:** "Cannot connect to Docker daemon"

**Solution:**
1. Start Docker Desktop
2. Wait for it to fully start
3. Verify: `docker info`

---

## 📚 Additional Resources

### Documentation
- [Laravel 12 Docs](https://laravel.com/docs)
- [Laravel Scout](https://laravel.com/docs/scout)
- [Meilisearch Docs](https://www.meilisearch.com/docs)
- [Tailwind CSS v4](https://tailwindcss.com/docs)
- [Vite Documentation](https://vitejs.dev)

### Learning Resources
- [Laracasts](https://laracasts.com) - Video tutorials
- [Laravel News](https://laravel-news.com) - Updates and articles
- [GitHub Copilot Instructions](.github/copilot-instructions.md) - AI coding guidelines

---

## 📅 Daily Development Workflow

### Starting Your Day
```bash
./start.sh                          # Start containers
./vendor/bin/sail npm run dev       # Start Vite (keep running!)
```

### During Development
```bash
./vendor/bin/sail artisan migrate   # Run new migrations
./vendor/bin/sail artisan test      # Run tests
./vendor/bin/sail pint              # Fix code style
```

### Ending Your Day
```bash
# Ctrl+C to stop Vite dev server
./stop.sh                           # Stop containers
```

### After Pulling Updates
```bash
./update.sh                         # Update everything
```

---

## 🤝 Contributing

1. Fork the repository
2. Create feature branch: `git checkout -b feature/amazing-feature`
3. Follow code standards (run `./vendor/bin/sail pint`)
4. Write tests for new features
5. Commit changes: `git commit -m 'Add amazing feature'`
6. Push to branch: `git push origin feature/amazing-feature`
7. Open a Pull Request

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
