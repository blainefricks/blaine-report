<?php

error_reporting(E_ALL); ini_set('display_errors', 'On');

// configuration constants
$config = parse_ini_file("config/blainereport.config");

// get the base url for the blaine report web site
$webCtx = basename(dirname(__FILE__));
$pos = strpos( $_SERVER['REQUEST_URI'], $webCtx);
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
$baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, $pos) . $webCtx . "/";

if (isset($config['base_url'])) {
 $baseUrl = $config['base_url'];
}

// get the database connection info
$host    = $config['host'];
$db_usr  = $config['username'];
$db_pw   = $config['password'];
$db_name = $config['database'];

// Create Connection
$con = mysqli_connect($host,$db_usr,$db_pw,$db_name);

// Check Connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: <br>" . mysqli_connect_error() . "<br>";
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
   <li><a href="<?php echo $baseUrl ?>">Home</a></li>
   <li><a href="ui-library">UI Library</a></li>
   <li><a href="br-admin">Dashboard</a></li>
 </ul>
</div>
<div class="tablet-nav">
 <div class="line selfclear">
   <div>
     <a><span class="menuIcon"></span></a>
     <a href="<?php echo $baseUrl ?>"><img class="nav-br-logo" src="assets/logo-blainereport-white.png"></a>
   </div>
 </div>
</div>
<!-- /Navigation -->
<div class="wrap selfclear">