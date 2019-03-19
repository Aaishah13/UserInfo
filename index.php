<?php
    // These are functions to get the user agent of a user 
   function getIP(){
    //  $useragent = $_SERVER['HTTP_USER_AGENT'];

     $IP_address = $_SERVER['REMOTE_ADDR'];
     return $IP_address;

 }
   function getOs(){
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    $Osname = '';

     $wind10 = preg_match('/windows nt 10/i', $useragent);
     $wind8_1 = preg_match('/windows nt 6.3/i', $useragent);
     $wind8 = preg_match('/windows nt 6.2/i', $useragent);
     $wind7 = preg_match('/windows nt 6.1/i', $useragent);
     $macX = preg_match('/macintosh|mac os x/i', $useragent);
     $mac9 = preg_match('/mac_powerpc/i', $useragent);
     $linux = preg_match('/linux/i', $useragent);
     $ubuntu = preg_match('/ubuntu/i', $useragent);
     $iphone = preg_match('/iphone/i', $useragent);
     $ipad = preg_match('/ipad/i', $useragent);
     $android = preg_match('/android/i', $useragent);
     $bb = preg_match('/blackberry/i', $useragent);
     $mobile = preg_match('/webos/i', $useragent);
   
   if ($wind10) {
       $Osname = 'Windows 10';
   } else if($wind8_1){
       $Osname = 'Windows 8.1';
   } else if($wind8){
    $Osname = 'Windows 8';
   } else if($wind7){
    $Osname = 'Windows 7';
   } else if($macX){
    $Osname = 'Mac OS X';
   } else if($mac9){
    $Osname = 'Mac OS 9';
   } else if($linux){
    $Osname = 'linux';
   } else if($ubuntu){
    $Osname = 'Ubuntu';
   } else if($iphone){
    $Osname = 'iPhone';
   } else if($ipad){
    $Osname = 'iPad';
   } else if($android){
    $Osname = 'Android';
   } else if($bb){
    $Osname = 'BlackBerry';
   } else if($mobile){
    $Osname = 'Mobile';
   }else {
       $Osname = 'Unknown';
   }
   return $Osname;
   }

  function getBrowser(){
     $useragent = $_SERVER['HTTP_USER_AGENT'];

     $browserName = '';

     $intexp = preg_match('/trident/i', $useragent);
     $ffox = preg_match('/firefox/i', $useragent);
     $safari = preg_match('/safari/i', $useragent);
     $chrome = preg_match('/chrome/i', $useragent);
     $opera = preg_match('/opera/i', $useragent);
     $ubrowser = preg_match('/ubrowser/i', $useragent);
     $mobile = preg_match('/mobile/i', $useragent);

     if ($intexp) {
       $browserName = 'Internet Explorer';
     } else if($ffox){
        $browserName = 'Firefox';
     }else if($chrome){
      $browserName = 'Chrome';
     }else if($opera){
      $browserName = 'Opera';
     }else if($ubrowser){
      $browserName = 'UC Browser';
     }else if($safari){
      $browserName = 'Safari';
     }else if($mobile){
      $browserName = 'Handheld Mobile';
     } else {
       $browserName = 'Unknown';
     }
     return $browserName;
  }
















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Info</title>

    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row mt-3 text-center">
      <div class="col font-weight-bold banner1">User Information</div>
    </div>
    <div class="row">
      <div class="col-md-3 text-center banner">IP address</div>
      <div class="col-md-3 text-center banner">Type of OS</div>
      <div class="col-md-3 text-center banner">Type of Browser </div>
      <div class="col-md-3 text-center banner">Type of device</div>
       <div>
    <div class="row">
      <div class="col-md-3 text-center"><?php echo getIP(); ?></div>
      <div class="col-md-3 text-center"><?php echo getOs(); ?></div>
      <div class="col-md-3 text-center"><?php echo getBrowser(); ?> </div>
      <div class="col-md-3 text-center"><?php echo getDevice(); ?></div>
       <div>
  </div>
    
</body>
</html>