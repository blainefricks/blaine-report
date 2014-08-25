<?php

// reference: http://code.tutsplus.com/tutorials/how-to-create-an-object-oriented-blog-using-php--net-1230
include 'blogpost.php';

// Database Connection
$connection = mysql_connect("localhost", "username", "password") or die ("<p class="error">Sorry, we were unable to connect to the database server.</p>");
$database = "blainereport_blog";
mysql_select_db($database, $connection) or die ("<p class="error">Sorry, we were unable to connect to the database.</p>")

// Retrieve blog posts from database
function GetBlogPosts() {

}

?>