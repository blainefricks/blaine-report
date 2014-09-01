<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">
      <h1>Create New Post</h1>
      <form action="/posts/new-post/newpost.php" method="post">
        Title: <input type="text" name="posttitle">
        Body: <input type="textarea" name="postbody">
        Ups: <input type="text" name="reviewups">
        Downs: <input type="text" name="reviewdowns">
        Report: <input type="text" name="reviewreport">
        Date: <input type="text" name="postdate">
        <input type="submit" value="Create Post">
      </form>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>