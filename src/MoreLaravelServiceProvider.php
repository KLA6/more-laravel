<?php

namespace Kla6\MoreLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MoreLaravelServiceProvider extends ServiceProvider {

  public function boot() {

    $this->publishes( [ __DIR__ . '/../config/k6_more_laravel.php' => config_path( 'k6_more_laravel.php' ), ] );

    // Route::middleware('web')->namespace(__NAMESPACE__ . '\Controllers')->group(__DIR__ . '/../routes.php');
    // Route::prefix('api')->middleware('api')->namespace(__NAMESPACE__ . '\Controllers')->group(__DIR__ . '/../api.php');
    // $this->publishes([ __DIR__ . '/../config.php' => config_path('notification.php'), ]);

    // $package_path = dirname(__DIR__);
    // $this->loadViewsFrom("$package_path/views", 'c9');

    // $this->loadMigrationsFrom(__DIR__ . '/../migrations');

  } # function

  public function register() {

    $this->mergeConfigFrom( __DIR__ . '/../config/k6_more_laravel.php', 'k6_more_laravel' );

    $this->app->make( 'Kla6\MoreLaravel\MoreLaravelController' );

  } # function

} # class
