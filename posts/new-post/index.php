<?php include ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
<div id="main-content" class="main-content">
  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">
      <?php
        include ($_SERVER['DOCUMENT_ROOT']."/includes/newpost.php");
      ?>
      <form action="newpost.php" method="post">
        First Name: <input type="text" name="firstname">
        Last Name: <input type="text" name="lastname">
        Age: <input type="text" name="age">
        <input type="submit">
      </form>
    </div>
  </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>