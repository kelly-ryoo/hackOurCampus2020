<?php

/*sign up page */
include_once('header.php');

?>

<div class="row">

<form method="post">
  <div class="col-sm-2"></div>
  
  <div class="col-sm-4 text-right">
    <section class="row"><label class="form_label col-sm-4">name</label><input class="text_field col-sm-6" type="text" name="name"></input></section>
    <section class="row"><label class="form_label col-sm-4">email</label><input class="text_field col-6 col-sm-6" type="text" name="email"></input></section>
    <section class="row"><label class="form_label col-sm-4">username</label><input class="text_field col-sm-6" type="text" name="username"></input></section>
    <section class="row"><label class="form_label col-sm-4">password</label><input class="text_field col-sm-6" type="text" name="password"></input></section>
    <section class="row"><label class="form_label col-sm-4">grade</label><input class="text_field col-sm-6" type="text" name="grade"></input></section>
    <section class="row">
      <label class="form_label col-sm-4">gender</label>
      <div class="col-sm-6 text-left" id="gender_section">
        <input id="gender" type="radio" name="gender" value="gender">
          <label for="gender" class="radio_label">Woman</label>
        </input>
        <input id="gender" type="radio" name="gender" value="gender" style="margin-left:10px;">
          <label for="gender" class="radio_label">Man</label>
        </input>
      </div>
    </section>
    <section class="row"><label class="form_label col-sm-4">courses<p class="course_subtext">separated by commas</p></label><input class="course_text_field col-sm-6" type="text" name="courses"></input></section>
  </div>

  <div class="col-sm-4">
    <section class="row">
      <label class="form_label col-sm-3">study habits</label>
      
      <div id="study_habits" class="col-sm-9">
      <input class="study_button" type="button" name="study_habit_1" value="likes quiet environment"></input>
      <input class="study_button" type="button" name="study_habit_2" value="crammer"></input>
      <input class="study_button" type="button" name="study_habit_3" value="procrastinator"></input>
      <input class="study_button" type="button" name="study_habit_4" value="studies in the morning"></input>
      <input class="study_button" type="button" name="study_habit_5" value="studies in the afternoon"></input>
      <input class="study_button" type="button" name="study_habit_6" value="likes the library"></input>
      <input class="study_button" type="button" name="study_habit_7" value="likes cafes"></input>
      <input class="study_button" type="button" name="study_habit_8" value="needs help reviewing"></input>
      <input class="study_button" type="button" name="study_habit_9" value="studies listening to music"></input>
      <input class="study_button" type="button" name="study_habit_10" value="reviews through memory games"></input>
      </div>
    </section>

    <script>
      document.querySelectorAll('.study_button').forEach(function(e) {
        e.addEventListener('click', function() {
          this.style.color = "black";
          this.style.backgroundColor = "rgba(0,0,0,0)";
          this.style.border = "thin solid black";
        })
      });
    </script>

  </div>

  <div class="col-sm-12 text-center" style="padding-top:2vh;">
    <input type="submit" class="signup_submit" value = "Done"></input>
  </div>
</form>

</div>

<?php
    include_once('footer.php');

?>