<?php

namespace Kla6\MoreLaravel;

use \App\Http\Controllers\Controller;

class MoreLaravelController extends Controller {

  static function test() { echo 'test'; }

  /**
   * Icon
   * Get a SVG file content from `config( 'k6_more_function.icon_path' )` to return with attributes.
   */
  static function icon( $code = 'k6_logo', $width = 16, $height = 16, $class = '', $style = '', $attr = '' ) {
    $path = config            ( 'k6_more_laravel.icon_path'                                                                      );
    $svg  = file_get_contents ( "$path/icon/$code.svg"                                                                           );
    return  str_replace       ( '<svg', "<svg width=\"$width\" height=\"$height\" class=\"$class\" style=\"$style\" $attr", $svg );
  } # function

} # class
