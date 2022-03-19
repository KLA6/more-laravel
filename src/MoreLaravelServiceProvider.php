<?php

namespace Kla6\MoreLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MoreLaravelServiceProvider extends ServiceProvider {

  public function boot() {

    $this->publishes( [
      __DIR__ . '/../config/k6_more_laravel.php'                 =>   config_path( 'k6_more_laravel.php'              ),
      __DIR__ . '/../resources/k6_more_laravel/icon/k6_logo.svg' => resource_path( 'k6_more_laravel/icon/k6_logo.svg' ),
    ] );

    # $this->loadViewsFrom     ( __DIR__ . '/../views', 'c9' );
    # $this->loadMigrationsFrom( __DIR__ . '/../migrations'  );

  } # function

  public function register() {

    # $this->mergeConfigFrom( __DIR__ . '/../config/k6_more_laravel.php', 'k6_more_laravel' ); # 왜 필요한 것인지 아직 모른다.

    $this->app->make( 'Kla6\MoreLaravel\MoreLaravelFacade'     );
    $this->app->make( 'Kla6\MoreLaravel\MoreLaravelController' );

    $this->app->bind( 'k6_more', function( $app ) { return new MoreLaravelController(); } ); # https://dev.to/cleancodestudio/how-to-make-laravel-facades-tutorial-10jn

  } # function

} # class
