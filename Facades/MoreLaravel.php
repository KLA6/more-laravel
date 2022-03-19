<?php

# declare( strict_types = 1 );

namespace Kla6\MoreLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class MoreLaravelFacade extends Facade {

  protected static function getFacadeAccessor() {

    return 'MoreLaravel';

  } # function

} # class
