<?php
  // configuration constants
  $config = parse_ini_file("config/blainereport.config");

  // get the base url for the cequint web site
  $webCtx = basename(dirname(__FILE__));
  $pos = strpos( $_SERVER['REQUEST_URI'], $webCtx);
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
  $baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, $pos) . $webCtx . "/";
  if (isset($config['base_url'])) {
   $baseUrl = $config['base_url'];
  }

?>
<!DOCTYPE html>
<html>
<head>
  <base href="<?php echo $baseUrl ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/x-icon" href="http://blainereport.blogspot.com/favicon.ico">
  <link rel="Stylesheet" type="text/css" href="css/style.css" />
  <title>Blaine Report | Where I Report & I Decide</title>
</head>
<body id="top">
<!-- Navigation -->
<div class="sliding-nav">
 <ul class="primary-nav">
   <li><a href="">Home</a></li>
   <li><a href="ui-library">UI Library</a></li>
 </ul>
</div>
<div class="tablet-nav">
 <div class="line selfclear">
   <div>
     <a><span class="menuIcon"></span></a>
     <a href="">Blaine Report</a>
   </div>
 </div>
</div>
<!-- /Navigation -->
<div class="wrap selfclear">
  <div class="pageHolder">