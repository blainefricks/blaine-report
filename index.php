<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<section class="homeHero">
  <div class="content">
    <div class="line">

    </div>
  </div>
</section>
<section>
  <div class="content">
    <div class="line">
      <div class="lastUnit size1of1 sub-section">
        <ol class="blog-posts">
          <?php

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
              <?php
            }

            mysqli_close($con);
          ?>
          <a>
            <li></li>
          </a>
          <a>
            <li></li>
          </a>
        </ol>
      </div>
    </div>
  </div>
</section>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>