<?php
/* the feed page */ 
    include_once('header.php');
?>

<?php

  $index = 0;

  /* pseuocode: */
  
  /* user_databse: the person we are pulling out from the databse */
  $user_database_info = /* pull out from database databse[$index] */
  $user_database_courses = $user_database_info[3]; /*index that courses are in*/

  /* current_user: the user that's logged in */
  $current_user_info = /* current user's array of information */;
  $current_user_courses = $current_user_info[/* index for array of courses */]

  /*
  $user_database_info = array("Kelly", 12, "Computer Science", array("CS 51389", "Math 2210"), "kyyr.0317@gmail.com", "669-271-5044", "I like going to cafes.");
  $user_database_courses = $user_database_info[3];
  
  $current_user_info = array("Karen", 8, "Sociology", array("CS 51389", "VIST 1100", "Math 2210", "HIST 1100"), "ryoo.kellyy@gmail.com", "142-233-2222", "I like libraries.");
  $current_user_courses = $current_user_info[3];
  */
  
  $courses_in_common = [];
  $arr_i = 0;
  foreach($user_database_courses as $d_course){
    foreach($current_user_courses as $c_course){
      if($d_course == $c_course){
        $courses_in_common[$arr_i] = $d_course;
        $arr_i++;
      }
    }
  }
  
?>

<div class="col-sm-6 text-center">
    <img src="images/default-man.png" class="feed_img">
    <button class="contact_button popup" onclick="popup()">Contact Info</button>
  </div>

  <div class="col-sm-5">
    <h2 id="feed_name"><?= $user_database_info[0] ?></h2> <!-- name -->
    <h4 id="feed_gm"><?= strval($user_database_info[1]).", ".$user_database_info[2] ?></h4> <!-- grade, major name -->

    <h3 class="feed_label">courses in common with you:</h3>
    <p class="feed_descrip"><?= implode(", ", $courses_in_common); ?></p>

    <h3 class="feed_label">study habits in common with you:</h3>
    <p class=""><?= $user_database_info[6] ?></p>

    <span class="popuptext" id="myPopup">
      <?=$user_database_info[4]?> <br> <!-- email -->
      <?=$user_database_info[5]?> <!-- phone number -->
    </span>
    <script>
      function popup() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }
    </script>
  </div>

  <script src="https://use.fontawesome.com/960dfa1218.js"></script>
  <div class="col-sm-1"><button id="feed_next"><i class="fa fa-angle-double-right fa-4x"></i></button></div>
</div>

<?php
    include_once('footer.php');
?>