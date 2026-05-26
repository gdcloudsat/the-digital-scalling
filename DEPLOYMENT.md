# Deployment Guide

The Digital Scaling is a standard Laravel application and can be deployed to any PHP-ready server (VPS, Shared Hosting, Forge, Vercel with adapter, etc.).

## Recommended Setup (Nginx + PHP-FPM)

1. **Server Requirements:**
   - PHP 8.2+
   - MySQL 8.0+
   - Redis (optional, for caching/queues)

2. **Configuration:**
   - Set `APP_ENV` to `production`.
   - Set `APP_DEBUG` to `false`.
   - Run `php artisan config:cache`, `route:cache`, and `view:cache`.
   - Run `npm run build` to compile production assets.

3. **Optimization:**
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan migrate --force
   ```

4. **SSL:** Always use HTTPS (Let's Encrypt recommended).

5. **Cron Job:**
   Add the following to your crontab:
   ```cron
   * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
   ```

6. **Queue Worker:**
   Use Supervisor to keep `php artisan queue:work` running.
