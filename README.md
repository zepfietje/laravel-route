[![Packagist Version](https://img.shields.io/packagist/v/zepfietje/laravel-route)](https://packagist.org/packages/zepfietje/laravel-route)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zepfietje/laravel-route)](https://packagist.org/packages/zepfietje/laravel-route/stats)
[![Starware](https://img.shields.io/badge/Starware-⭐-black?labelColor=f9b00d)](https://github.com/zepfietje/starware)

# Laravel Route

This package extends the default Laravel `Route` class and adds some convenient behavior.

## Installation

1. Install this package.
   ```console
   $ composer require zepfietje/laravel-route
   ```
2. Import the `Route` class of this package in your routes file instead of the default one.
   ```diff
   - use Illuminate\Support\Facades\Route;
   + use ZepFietje\Route\Route;
   ```

## Usage

### `view()`

All bound parameters are automatically passed to the view.  
To make this work with route model binding, be sure to [register an explicit binding](https://laravel.com/docs/master/routing#explicit-binding).

Before:

```php
Route::get('users/{user}', function (User $user) {
    return view('users.show', ['user' => $user]);
});

```

After:

```php
Route::view('users/{user}', 'users.show');
```

## Starware

Laravel Route is Starware.  
This means you're free to use the project, as long as you star its GitHub repository.  
Your appreciation makes us grow and glow up. ⭐
