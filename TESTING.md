# Testing Guide

The Digital Scaling includes a suite of tests to ensure stability and correctness.

## Running Tests

To run the full test suite:
```bash
php artisan test
```

## Types of Tests
- **Feature Tests:** Covers page loading, form submissions (Contact, Leads), and authentication.
- **Unit Tests:** Covers model logic and helper functions.

## Adding Tests
When adding new features, please add corresponding tests in the `tests/Feature` directory.

### Example: Testing a Page
```php
public function test_home_page_loads()
{
    $response = $this->get('/');
    $response->assertStatus(200);
}
```

## Continuous Integration
It is recommended to run tests on every pull request to maintain code quality.
