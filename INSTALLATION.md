# Installation Guide

Follow these steps to set up The Digital Scaling on your local development environment.

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL 8.0 or PostgreSQL
- A web server (Apache, Nginx, or use `php artisan serve`)

## Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/gdcloudsat/the-digital-scalling.git
   cd the-digital-scalling
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Frontend dependencies:**
   ```bash
   npm install
   ```

4. **Environment Setup:**
   Copy the example environment file and configure your database:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Migration & Seeding:**
   ```bash
   php artisan migrate --seed
   ```

6. **Storage Link:**
   ```bash
   php artisan storage:link
   ```

7. **Build Assets:**
   ```bash
   npm run build
   # Or for development
   npm run dev
   ```

8. **Run the application:**
   ```bash
   php artisan serve
   ```

## Admin Access
Once seeded, you can access the admin panel at `/admin`.
Default Credentials:
- **Email:** admin@example.com
- **Password:** password
