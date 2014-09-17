<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">
      <ol>
      <li><a href="br-admin/new-post">New Post</a></li>
      </ol>
      <h2>Blog Posts</h2>
      <?php
          // Connect to 'blainereport_blog'
          $con = mysqli_connect("localhost", "root", "root", "blainereport_blog");
          // Check Connection
          if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: <br>" . mysqli_connect_error() . "<br>";
          }

          $result = mysqli_query($con, "SELECT * FROM blog_posts ORDER BY PostID DESC");

          while ($row = mysqli_fetch_array($result)) {
            ?>
            <a href="<?php echo $row['PostURL'] ?>">
            <li>
            <?php
            echo $row['PostTitle'];
            ?>
            </li>
            </a>
            <a href="br-admin/deletepostid=<?php echo $row['PostID'] ?>" class="delete-post">Delete</a>

            <?php
          }
          mysqli_close($con);
        ?>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>