<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<section>
  <div class="content">
    <div class="line">
      <div class="lastUnit size1of1 sub-section">
        <h2>Game Reviews</h2>
        <ol>
          <?php
            // Connect to 'blainereport_blog'
            $con = mysqli_connect("localhost", "root", "root", "blainereport_blog");
            // Check Connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: <br>" . mysqli_connect_error() . "<br>";
            }

            $result = mysqli_query($con, "SELECT * FROM blog_posts WHERE PostCategory='category' ORDER BY PostID DESC");

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
        </ol>
      </div>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>