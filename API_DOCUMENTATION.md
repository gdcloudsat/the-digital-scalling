# API Documentation

Currently, The Digital Scaling does not expose a public REST API. All interactions are handled via the web frontend or the Filament administrative panel.

## Internal APIs

### Lead Submission
Leads are submitted via POST requests to the following endpoints:

- `POST /contact`: Submits a standard contact form.
- `POST /popup-lead`: Submits a quick inquiry form.

Both endpoints require CSRF protection.

## Future Roadmap
- Implementation of a headless API using Laravel Sanctum.
- Webhook support for lead notifications.
