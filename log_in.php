<?php
    /* The log in page */
    include_once('header.php');
?>

<form method="post">

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4 text-center">
    <p class="text-right form_label">username</p>
    <input type="text" class="text_field" name="username"></input>
  </div>
  <div class="col-sm-4"></div>
</div>

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4 text-center">
    <p class="text-right form_label">password</p>
    <input type="text" class="text_field" name="password"></input>
  </div>
  <div class="col-sm-4"></div>
</div>

<div class="row text-center" style="padding-top:2vh;">
  <input type="submit" class="login_submit" value = "Done"></input>
</div>
</form>


<?php
    include_once('footer.php');

?>