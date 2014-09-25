<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<section>
  <div class="content">
    <div class="line">
      <div class="lastUnit size1of1 sub-section">
        <h1>New Post</h1>
        <form action="/br-admin/new-post/newpost.php" method="post">
          <div class="input-holder">
            <span>Post Category:</span>
            <select name="postcategory">
              <option value="category">--Select a Category--</option>
              <option value="movie-reviews">Movie Review</option>
              <option value="game-reviews">Game Review</option>
              <option value="politics">Politics</option>
            </select>
          </div>
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
            <select name="reviewreport">
              <option value="">Select a Grade</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="F">F</option>
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
</section>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>