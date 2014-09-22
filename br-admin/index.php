<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<section>
  <div class="content">
    <div class="line">
      <div class="lastUnit size1of1">
        <a class="button" href="br-admin/setup">Run Setup</a>
        <a class="button" href="br-admin/new-post">New Post</a>
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
          <li class="post-listing" id="postID-<?php echo $row['PostID'] ?>">
          <a href="<?php echo $row['PostURL'] ?>">
          <?php
          echo $row['PostTitle'];
          ?>
          </a>
          <span class="delete-post" id="deletepost-<?php echo $row['PostID'] ?>" onClick="deletePost(<?php echo $row['PostID'] ?>)">Delete</span>
          </li>
        <?php
          }
          mysqli_close($con);
        ?>
      </div>
    </div>
  </div>
</section>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>