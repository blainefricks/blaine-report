<?php
session_start();


// Timeout for user session
// Timeout period in minutes
$inactive = 60 * 30; // 30 minute
$autoLogOut = true;

// check if $_SESSION['timeout'] is set
if (isset($_SESSION['timeout']) && $autoLogOut==true) {
  $session_life = time() - $_SESSION['timeout'];
  if ($session_life > $inactive) {
    // Log user out
    session_destroy();
    ?>
    <script type="text/javascript">
      window.location = "/br-admin";
    </script> <?php
    exit;
  }
}
$_SESSION['timeout'] = time();


// Check if user is logged in
// if true, stay on restricted page
// if false, go to login page
if (isset($_SESSION["myusername"]) && isset($_SESSION["mypassword"])) {
  $myusername = $_SESSION["myusername"];
  $mypassword = $_SESSION["mypassword"];
  $avengers = mysqli_query($con,"SELECT * FROM users WHERE Username='$myusername' AND Password='$mypassword'");
  $count = mysqli_num_rows($avengers);
  $User_row = mysqli_fetch_array($avengers);
  if ($count==1) {
    // user is logged in
  } else { ?>
    <script type="text/javascript">
      window.location = "/br-admin";
    </script> <?php
    exit;
  }
} else { ?>
  <script type="text/javascript">
    window.location = "/br-admin";
  </script> <?php
  session_destroy();
  exit;
}
// check if admin restricted page and if user has admin privileges
$find_admin = mysqli_query($con,"SELECT * FROM users WHERE Username='$myusername' AND Password='$mypassword' AND (Privilege='Admin' OR Privilege='Master')");
$verify_admin = mysqli_num_rows($find_admin);
if ($admins_only==true) {
  if ($verify_admin==1) {
    // user is admin
  } else {
    // return user to dashboard home
    ?>
      <script type="text/javascript">
        window.location = "/br-admin/dashboard";
      </script>
    <?php
  }
}

?>