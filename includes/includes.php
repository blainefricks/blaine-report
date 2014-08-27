<?php

// reference: http://code.tutsplus.com/tutorials/how-to-create-an-object-oriented-blog-using-php--net-1230
include ($_SERVER['DOCUMENT_ROOT'].'/includes/blogpost.php');

// Database Connection
$connection = mysql_connect("localhost", "username", "password") or die ("<p class="error">Sorry, we were unable to connect to the database server.</p>");
$database = "blainereport_blog";
mysql_select_db($database, $connection) or die ("<p class="error">Sorry, we were unable to connect to the database.</p>");

// Retrieve posts from database
function GetBlogPosts($inId=null, $inTagId=null)
{
  if (!empty($inId))
  {
    $query = mysql_query("SELECT * FROM blog_posts WHERE id = " . " ORDER BY id DESC");
  }
  else if (!empty($inTagId))
  {
    $query = mysql_query("SELECT blog_posts.* FROM blog_posts_tags LEFT JOIN (blog_posts) ON (blog_posts_tags.postID = blog_posts.id) WHERE blog_posts_tags.tagID =" . $tagID . " ORDER BY blog_posts.id DESC");
  }
  else
  {
    $query = mysql_query("SELECT * FROM blog_posts ORDER BY id DESC");
  }

  $postArray = array();
  while ($row = mysql_fetch_assoc($query))
  {
    $myPost = new BlogPost($row["id"], $row['title'], $row['post'], $row['postfull'], $row['firstname'] . " " . $row['lastname'], $row['dateposted']);
    array_push($postArray, $myPost);
  }
  return $postArray;
}

?>