<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
<div class="line main-section">
<div class="lastUnit size1of1 sub-section">

<h1>Run Setup</h1>

<p>
<?php

// Create Connection
$con = mysqli_connect("localhost", "root", "root");

// Check Function
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: <br>" . mysqli_connect_error() . "<br>";
}

// Create 'blainereport_blog' database
$sql = "CREATE DATABASE blainereport_blog";
if (mysqli_query($con, $sql)) {
  echo "Database blainereport_blog created successfully";
} else {
  echo "Error creating database: <br>" . mysqli_error($con) . "<br>";
}

?>

</p>
<p>

<?php

// Connect to 'blainereport_blog'
$con = mysqli_connect("localhost", "root", "root", "blainereport_blog");

// Create 'blog_posts' Table
$sql = "CREATE TABLE blog_posts
(
  PostID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(PostID),
  PostTitle CHAR(255),
  PostBody TEXT,
  PostDate INT
)";
// Execute Query
if (mysqli_query($con,$sql)) {
  echo "Table blog_posts created successfully";
}else {
  echo "Error creating table:<br> " . mysqli_error($con) . "<br>";
}

?>
</p>
</div>
</div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>