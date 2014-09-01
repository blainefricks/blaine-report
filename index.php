<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div class="homeHero">
  <div class="line">
    <div class="unit size1of1 header">
      <h1>Blaine Report</h1>
    </div>
    <div class="lastUnit size1of1">
      <p>Where I Report & I Decide</p>
    </div>
  </div>
</div>
<div id="main-content" class="main-content">
  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">
      <h2>Recent Stories</h2>
      <ol>
        <li>
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
            <a href="posts/<?php echo $row['PostURL'] ?>">
            <?php
            echo $row['PostTitle'];
            ?>
            </a>
            </li>
            <?php
          }

          mysqli_close($con);
        ?>
      </ol>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>