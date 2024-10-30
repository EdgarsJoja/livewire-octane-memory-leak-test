## Setup

```bash
composer install
npm ci

# Choose frankenphp
php artisan octane:install

php artisan octane:frankenphp --watch
npm run dev
```

In `.env` change `CACHE_STORE` and `SESSION_DRIVER` both to be `file`. 
Laravel defaults to sqlite DB, don't need it here.

## Testing

Go to `/memory-test/laravel`.
Repeatedly reloading page (20+) does NOT increase memory usage (seen in dump output).

Go to `/memory-test/livewire`.
Repeatedly reloading page increases memory usage, eventually it will crash due to memory exhaustion error.
