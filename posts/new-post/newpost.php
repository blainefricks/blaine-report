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
      $posttitle = mysqli_real_escape_string($con, $_POST['posttitle']);
      $postbody = mysqli_real_escape_string($con, $_POST['postbody']);
      $postdate = mysqli_real_escape_string($con, $_POST['postdate']);

      // Insert Data
      $sql = "INSERT INTO blog_posts (PostTitle, PostBody, PostDate)
      VALUES ('$posttitle', '$postbody', '$postdate')";

      if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
      }
      echo "<p>1 blog entry created</p>";

      mysqli_close($con);
      ?>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>