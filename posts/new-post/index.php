<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">
      <h1>Create New Post</h1>
      <form action="/posts/new-post/newpost.php" method="post">
        <div class="input-holder">
          <span>Title:</span>
          <input type="text" name="posttitle">
        </div>
        <div class="input-holder">
          <span>Body:</span>
          <textarea type="text" name="postbody"></textarea>
        </div>
        <div class="input-holder">
          <span>Ups:</span>
          <input type="text" name="reviewups">
        </div>
        <div class="input-holder">
          <span>Downs:</span>
          <input type="text" name="reviewdowns">
        </div>
        <div class="input-holder">
          <span>Report:</span>
          <!-- <input type="text" name="reviewreport"> -->
          <select name="reviewreport">
            <option>Select a Grade</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>F</option>
          </select>
        </div>
        <div class="input-holder">
          <span>Date:</span>
          <input type="text" name="postdate">
        </div>
        <input type="submit" value="Create Post">
      </form>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>