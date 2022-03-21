<?php

  # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # Repository Title Icon
  $REPO  = 'more-laravel';
  $TITLE = 'More Laravel by KLA6';
  $ICON  = 'https://raw.githubusercontent.com/KLA6/more-laravel/main/index_icon.svg';

  # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # File # 'Git' => 'Laravel'
  $FILE = [
    'src/MoreLaravelServiceProvider.php'            => 'vendor/kla6/more-laravel/src/MoreLaravelServiceProvider.php',
    'src/MoreLaravelFacade.php'                     => 'vendor/kla6/more-laravel/src/MoreLaravelFacade.php'         ,
    'src/MoreLaravelController.php'                 => 'vendor/kla6/more-laravel/src/MoreLaravelController.php'     ,
    'resources/views/k6_more_laravel_dev.blade.php' => 'resources/views/k6_more_laravel_dev.blade.php'              ,
    'resources/k6_more_laravel/icon/k6_logo.svg'    => 'resources/k6_more_laravel/icon/k6_logo.svg'                 ,
    'config/k6_more_laravel.php'                    => 'config/k6_more_laravel.php'                                 ,
  ];

  # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # Class
  $CLASS = [
    '\Kla6\MoreLaravel\MoreLaravelController' => 'vendor/kla6/more-laravel/src/MoreLaravelController.php',
  ];

  # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # Git Add Commit Push
  if(   $_POST['msg'] ?? null
  &&    $_POST['pw' ] ?? null                 ) {
    if( $_POST['pw' ] == env( 'K6_PASSWORD' ) ) {                                        # 비번 확인
      foreach( $FILE as $K => $V ) copy ( base_path( $V ), base_path( "../$REPO/$K" ) ); # 파일 복사
                                   chdir(                  base_path( "../$REPO"    ) );
      exec( "git add .  ; git commit -m '$_POST[msg]'           ; git push"  );          # 깃   애드 커밋 푸시
      exit( "<script> location.replace( '$_SERVER[REQUEST_URI]' ) </script>" );
    } # if
  } # if

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type"    content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >
  <meta name="viewport"              content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="robots"                content="noindex">

  <title><?= $TITLE ?></title>
  <link href="<?= $ICON ?>" type="image/svg+xml" rel="icon">

  <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" rel="stylesheet">
  <link  href="https://cdn.jsdelivr.net/gh/KLA6/more-bootstrap@1.1.2/more-bootstrap.min.css"                                                                                     crossorigin="anonymous" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"                 integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="                     crossorigin="anonymous"></script>

</head>
<body class="p-3 p-md-5 k6-article">

  <? # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # Title ?>
  <h1><?= $TITLE ?></h1>
  <p>This page is from <code>resources/views/k6_more_laravel_dev.blade.php</code> file.</p>
  <p class="text-danger">If you're not contributing to this library, ignore or delete the file, because the file is NOT for using this library, BUT for developing this library.</p>
  <p>The file helps the development cycle of [ code → test → git add commit push → git → release composer update ] to be easier.</p>
  <p>To use the file, follow these steps.</p>
  <ul>
    <li>On <code>/routes/web.php</code>, add <code>Route::any( '/k6_more_laravel_dev', function () { return view( 'k6_more_laravel_dev' ); } );</code>.</li>
    <li>On <code>/.env</code>,           add <code>K6_PASSWORD="your_password"</code>.</li>
  </ul>

  <? # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # Test ?>
  <h2>Test</h2>
  <p>Ignore the content in the below box.</p>
  <div class="p-3 rounded border"><?php
    echo k6_more::icon( code  : 'k6_logo'
                      , width : 64
                      , height: 64
                      , class : 'text-success rounded'
                      , style : 'padding: .5rem; background-color: var( --bs-dark );'
                      , attr  : 'data-test="test"' )
  ?></div>

  <? # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # File ?>
  <h2>File</h2>
  <table class="table">
    <thead>
      <tr><th>Git</th><th>Laravel</th></tr>
    </thead>
    <tbody>
      <? foreach( $FILE as $K => $V ) { ?>
        <tr><td><code><?= $K ?></code></td>
            <td><code><?= $V ?></code></td></tr>
      <? } # foreach ?>
    </tbody>
  </table>

  <? # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # Class & Function ?>
  <h2>Class & Function</h2>
  <? foreach( $CLASS as $K => $V ) { ?>
    <h3><code><?= $K ?></code></h3>
    <?
      $CMNT = [];
      foreach( explode( "\r\n", file_get_contents( base_path( $V ) ) ) as $K1 => $V1 ) {
        # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # 주석 찾기
            if( str_starts_with( $T1 = trim( $V1 ), '/**'  ) ) { if( $T2 = trim( substr( $T1, 3 ) ) ) $CMNT[] = $T2; }
        elseif( str_starts_with( $T1 = trim( $V1 ),   '*/' ) ) { if( $T2 = trim( substr( $T1, 2 ) ) ) $CMNT[] = $T2; }
        elseif( str_starts_with( $T1 = trim( $V1 ),   '*'  ) ) { if( $T2 = trim( substr( $T1, 1 ) ) ) $CMNT[] = $T2; }
        # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # 함수 찾기
        if( str_contains( $V1, 'function ' ) ) {
          if( $CMNT[ 0 ] ?? null ) { echo "<h4>$CMNT[0]</h4>"; array_shift(         $CMNT )         ; } else echo "<h4>No Comment</h4>";
          if( $CMNT[ 0 ] ?? null )   echo "<p>" .              implode    ( '<br>', $CMNT ) . "</p>";
          $T = trim( $V1 ); if( str_ends_with( $T, '{' ) ) $T = trim( substr( $T, 0, -1 ) ); # 마지막 문자 '{' 제거
          echo "<pre><code>$T</code></pre>";
        } # if
      } # foreach
    ?>
  <? } # foreach ?>

  <? # ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- # Git ?>
  <h2>Git</h2>
  <form method="post">
    <input value="<?= csrf_token() ?>" name="_token" type="hidden">
    <input class="form-control mb-2"   name="msg"    type="text"     placeholder="Message">
    <input class="form-control mb-2"   name="pw"     type="password" placeholder="Password">
    <input class="btn btn-outline-secondary w-100"   type="submit"   value="Submit">
  </form>

</body>
</html>
