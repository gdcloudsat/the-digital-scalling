# Database Schema

The Digital Scaling uses the following main tables:

### Core Tables
- `users`: Admin users (Filament).
- `services`: Agency service offerings.
- `projects`: Portfolio items.
- `posts`: Blog articles.
- `faqs`: Frequently asked questions.
- `job_listings`: Career opportunities.
- `legal_pages`: Privacy Policy, Terms, etc.
- `leads`: Contact form submissions.
- `popup_leads`: Quick inquiry submissions.
- `settings`: Global site settings (Spatie).

### Supporting Tables
- `media`: Spatie Media Library attachments.
- `failed_jobs`, `jobs`, `job_batches`: Laravel Queue management.
- `cache`, `cache_locks`: Application caching.
- `sessions`: User sessions.

## Relationships
- **Media:** Most models (Service, Project, Post) have a polymorphic relationship with the `media` table to store featured images and galleries.
- **Categories:** Post and Project models include a `category` string field (can be extended to a separate table if needed).
