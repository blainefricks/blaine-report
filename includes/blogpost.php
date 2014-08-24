<!-- Reference: http://code.tutsplus.com/tutorials/how-to-create-an-object-oriented-blog-using-php--net-1230 -->
<?php

class BlogPost
{
  public $id;
  public $title;
  public $post;
  public $author;
  public $tags;
  public $datePosted;

  function __construct($inId=null, $inTitle=null, $inPost=null, $inAuthorId=null, $inTags=null, $inDatePosted=null)
  {
    $this->id = $inId;
    $this->title = $inTitle;
    $this->post = $inPost;
    $splitDate = explode("-", $inDatePosted);
    $this->datePosted = $ splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
    $query = mysql_query("SELECT first_name, last_name FROM People WHERE id = " . $inAuthorId);
    $row = mysql_fetch_assoc($query);
    $this->author = $row["first_name"] . " " . $row["last_name"];
  }
}

?>