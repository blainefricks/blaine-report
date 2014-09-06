<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">
      <?php
      // Create Connection
      $con = mysqli_connect("localhost", "root", "root", "blainereport_blog");

      // Check Function
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: <br>" . mysqli_connect_error() . "<br>";
      }

      // escape variables for security
      $postcategory = mysqli_real_escape_string($con, $_POST['postcategory']);
      $posttitle = mysqli_real_escape_string($con, $_POST['posttitle']);
      $postbody = mysqli_real_escape_string($con, $_POST['postbody']);
      $reviewups = mysqli_real_escape_string($con, $_POST['reviewups']);
      $reviewdowns = mysqli_real_escape_string($con, $_POST['reviewdowns']);
      $reviewreport = mysqli_real_escape_string($con, $_POST['reviewreport']);
      $postdate = mysqli_real_escape_string($con, $_POST['postdate']);

      // Create Folder Name
      // $strip_char_ascii = filter_var($posttitle,FILTER_FLAG_STRIP_LOW);
      $foldername = str_replace(" ", "-", $posttitle);
      $posturl = "posts/" . $postcategory . "/" . $foldername;

      // Create Directory
      mkdir($_SERVER['DOCUMENT_ROOT'] . "/" . $posturl);

      // Insert Data
      $sql = "INSERT INTO blog_posts (PostTitle, PostBody, ReviewUps, ReviewDowns, ReviewReport, PostDate, PostURL)
      VALUES ('$posttitle', '$postbody', '$reviewups', '$reviewdowns', '$reviewreport', '$postdate', '$posturl')";

      if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
      }

      // Create index.php in New Directory
      $myfile = fopen($_SERVER['DOCUMENT_ROOT'] . "/posts/" . $postcategory . "/" . $foldername . '/index.php', 'w') or die('<p>Unable to open file at </p><p><b>' . $posturl . "</b></p>");
      $txt = 'This is a test';
      fwrite($myfile, $txt);
      echo "<p>1 blog entry created</p>";

      mysqli_close($con);
      ?>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>