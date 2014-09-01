<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div class="main-content">
  <div class="line main-section">
  <?php
    // Connect to 'blainereport_blog'
    $con = mysqli_connect("localhost", "root", "root", "blainereport_blog");
    // Check Connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: <br>" . mysqli_connect_error() . "<br>";
    }

    $result = mysqli_query($con, "SELECT * FROM blog_posts WHERE PostID='4'");

    while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="unit size1of1 header">
        <h1>
      <?php
      echo $row['PostTitle'];
      ?>
        </h4>
      </div>
      <div class="lastUnit size1of1">
        <div class="sub-section">
          <h4>
      <?php
      echo $row['PostDate'];
      ?>
        </h4>
      </div>
      <div class="sub-section">
      <p>
      <?php
      echo $row['PostBody'];
      ?>
      </p>
      <p>
      <b>Ups: </b>
      <?php
      echo $row['ReviewUps'];
      ?>
      <br>
      <b>Downs: </b>
      <?php
      echo $row['ReviewDowns'];
      ?>
      <br>
      <b>Report: </b>
      <?php
      echo $row['ReviewReport'];
      ?>
      </p>
      </div>
      </div>
      <?php
    };

    mysqli_close($con);
  ?>
  </div>
</div>
<div class="main-content">
  <div class="line main-section">
    <div class="unit size1of3 sub-section">
    <a href=""><h3>Captain America: The First Avenger</h3></a>
    </div>
    <div class="unit size1of3 sub-section">
      <a href=""><h3>Battle: Los Angeles</h3></a>
    </div>
    <div class="lastUnit size1of3 sub-section">
      <a href=""><h3>2012</h3></a>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>