# Architecture

The Digital Scaling follows standard Laravel architectural patterns with some specific additions for CMS functionality.

## Technical Stack
- **Framework:** Laravel 11.x
- **Admin Panel:** Filament v3 (TALL Stack)
- **Frontend:** Tailwind CSS 4.x + Blade
- **Database:** MySQL/PostgreSQL
- **Asset Bundling:** Vite

## Directory Structure Highlights
- `app/Filament`: Contains all administrative resources and pages.
- `app/Http/Controllers`: Simple controllers for routing data to frontend views.
- `app/Models`: Eloquent models with Spatie Media Library and SEO traits.
- `app/Settings`: System-wide settings managed by `spatie/laravel-settings`.
- `resources/views/pages`: Organized frontend templates.
- `resources/views/partials`: Reusable UI components (Navbar, Footer, etc.).

## Key Design Patterns
1. **Repository-less Pattern:** We use Eloquent models directly in controllers for simplicity, as the logic is straightforward.
2. **Settings Pattern:** Global site data (logo, contact info) is stored in a `GeneralSettings` class rather than hardcoded.
3. **Media Management:** All images are handled via Spatie Media Library, allowing for easy conversions and attachments.
4. **Theme Customization:** CSS variables are injected via `partials/theme-vars` from the database settings.

## Data Flow
1. User requests a page.
2. `web.php` routes to `PageController`.
3. `PageController` fetches data from Eloquent models (Post, Service, etc.).
4. Data is passed to Blade templates in `resources/views/pages`.
5. Frontend assets are served via Vite.
