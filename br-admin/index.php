<?php include ($_SERVER['DOCUMENT_ROOT']."/includes/header-dashboard.php"); ?>
<section>
  <div class="content">
    <div class="line">
      <div class="lastUnit size1of1">
        <a class="button" href="br-admin/setup">Run Setup</a>
        <a class="button" href="br-admin/new-post">New Post</a>
        <h2>Blog Posts</h2>
        <?php

          $result_blog_posts = mysqli_query($con, "SELECT * FROM blog_posts ORDER BY PostDate DESC");

          while ($post = mysqli_fetch_array($result_blog_posts)) {
        ?>
          <li class="post-listing" id="postID-<?php echo $post['PostID'] ?>">
          <a href="<?php echo $post['PostURL'] ?>">
          <?php
          echo $post['PostTitle'];
          ?>
          </a>
          <span class="delete-post" onClick="deletePost(<?php echo $post['PostID'] ?>)" id="deletepost-<?php echo $post['PostID'] ?>">Delete</span>
          </li>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</section>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>