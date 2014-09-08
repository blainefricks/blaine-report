<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">
      <h1>New Post</h1>
      <form action="/br-admin/new-post/newpost.php" method="post">
        <div class="input-holder">
          <span>Post Category:</span>
          <select name="postcategory">
            <option value="">Select a Category</option>
            <option value="movie-reviews">Movie Reviews</option>
            <option value="game-reviews">Game Reviews</option>
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

<script type="text/javascript">
function validateForm(){
    var isError = false;
    if ($('select[name=postcategory]').val().trim().length == 0){
       isError = true;
       $('select[name=postcategory]').parent().addClass('reqError');
    } else { $('select[name=postcategory]').parent().removeClass('reqError'); }
    if ($('input[name=posttitle]').val().trim().length == 0){
       isError = true;
       $('input[name=posttitle]').parent().addClass('reqError');
    } else { $('input[name=posttitle]').parent().removeClass('reqError'); }
    if ($('textarea[name=postbody]').val().trim().length == 0){
       isError = true;
       $('textarea[name=postbody]').parent().addClass('reqError');
    } else { $('textarea[name=postbody]').parent().removeClass('reqError'); }
    if ($('input[name=reviewups]').val().trim().length == 0){
       isError = true;
       $('input[name=reviewups]').parent().addClass('reqError');
    } else { $('input[name=reviewups]').parent().removeClass('reqError'); }
    if ($('input[name=reviewdowns]').val().trim().length == 0){
       isError = true;
       $('input[name=reviewdowns]').parent().addClass('reqError');
    } else { $('input[name=reviewdowns]').parent().removeClass('reqError'); }
    if ($('select[name=reviewreport]').val().trim().length == 0){
       isError = true;
       $('select[name=reviewreport]').parent().addClass('reqError');
    } else { $('select[name=reviewreport]').parent().removeClass('reqError'); }
    return isError ? false : true;
}
</script>

<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>