<?php

# declare( strict_types = 1 );

namespace Kla6\MoreLaravel;

use Illuminate\Support\Facades\Facade;

class MoreLaravelFacade extends Facade {

  protected static function getFacadeAccessor() {

    return 'k6_more';

  } # function

} # class
