<p align="center"><br><br><br><br>
<img src="https://raw.githubusercontent.com/KLA6/more-laravel/main/index_logo.svg" height="64">
<br><br><br><br><br></p>

# More Laravel by KLA6
Add miscellaneous functions to Laravel.

## Type
- Comporser Library for Laravel

## Install
```
composer require kla6/more-laravel
php artisan vendor:publish
```

## Artisan Vendor Publish
- `/config/k6_more_laravel.php`
- `/resources/k6_more_laravel/icon/k6_icon.svg`
- `/resources/views/k6_more_laravel_dev.blade.php`

## Example

### `k6_more::icon()`
- Upload your SVG icon file `exmple.svg` to `/resources/k6_more_laravel/icon/`, and then...
```
echo k6_more::icon( 'example' );
```

## Distribution
- https://packagist.org/packages/kla6/more-laravel
- https://github.com/KLA6/more-laravel
- https://more-laravel.kla6.net
- https://dev.more-laravel.kla6.net

## Reference
- https://www.lesstif.com/php-and-laravel/php-composer-36209479.html
- https://www.lesstif.com/php-and-laravel/php-composer-packagist-org-24444981.html
- https://devdojo.com/devdojo/how-to-create-a-laravel-package
- https://dev.to/cleancodestudio/how-to-make-laravel-facades-tutorial-10jn
