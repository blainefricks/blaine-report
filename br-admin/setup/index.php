<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
<div class="line main-section">
<div class="lastUnit size1of1 sub-section">

<h1>Run Setup</h1>

<p>
<?php

// Create Connection
$con = mysqli_connect("localhost", "root", "root");

// Check Connection
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
$con = mysqli_connect($host,$db_usr,$db_pw,$db_name);

// Create 'blog_posts' Table
$sql = "CREATE TABLE blog_posts
(
  PostID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(PostID),
  PostCategory CHAR(255),
  PostTitle CHAR(255),
  PostDate DATETIME,
  PostBody TEXT,
  ReviewUps CHAR(255),
  ReviewDowns CHAR(255),
  ReviewReport CHAR(255),
  PostURL TEXT,
  PostImg TEXT
)";
// Execute Query
if (mysqli_query($con,$sql)) {
  echo "Table blog_posts created successfully";
}else {
  echo "Error creating table:<br> " . mysqli_error($con) . "<br>";
}

// Create 'users' Table
$sql = "CREATE TABLE users
(
  UserID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(UserId),
  Username CHAR(255),
  Password CHAR(255),
  Email CHAR(255),
  Privilege CHAR(255)
) AUTO_INCREMENT=1100";

// Execute Query
if (mysqli_query($con,$sql)) {
  echo "Table users created successfully";
}else {
  echo "Error creating table:<br> " . mysqli_error($con) . "<br>";
}

?>
</p>
</div>
</div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>