<?php
// Create Connection
$con = mysqli_connect("localhost", "root", "root", "test_db");

// Check Function
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br>";
}

// Create database
$sql = "CREATE DATABASE test_db";
if (mysqli_query($con, $sql)) {
  echo "Database test_db created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con) . "<br>";
}

// Create Table
$sql = "CREATE TABLE Persons
(
  PID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(PID),
  FirstName CHAR(15),
  LastName CHAR(15),
  Age INT
)";

// Execute Query
if (mysqli_query($con,$sql)) {
  echo "Table Persons created successfully";
}else {
  echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// excape variables for securty
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

// Insert Data
mysqli_query($con, "INSERT INTO Persons (FirstName, LastName, Age)
  VALUES ('$firstname', '$lastname', '$age')");

if (!mysqli_query($con, $sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 recorded added";

mysqli_close($con);
?>