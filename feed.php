<!--
  TO DO:
  1. check if while loop works - the user should be able to see the next
  'matched' person's information by clicking the next button
  2. find out how to get userid/info of the person who is currently logged in
  3. figure out how to display profile image
-->

<?php
/* the feed page */ 
    include_once('header.php');
    $userID = 1;
?>

<?php

  /* SET UP */
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'password';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  mysqli_select_db($conn, 'register_db');

  $query = "select * user;"; /* might not need ; will have to test ?*/
  $result = mysqli_query($conn, $query);

  /* GET INFORMATION FROM TABLE */
  /*
  1. create a while loop that will run all rows and if next button is pressed
  2. insert all the user info from the row into $user_database_info
  3. display each element from the info array
  4. if 'submit' aka next button is pressed, $next_pressed becomes true and while loop
  run and start over with the next user/row
  */
  $user_databse_info = [];
  $next_pressed = true;
  while($rows = mysqli_fetch_assoc($result) && $next_pressed == true):
    $next_pressed = false;
    $user_database_info = $rows['firstName'];
    $user_database_info = $rows['lastName'];
    $user_database_info = $rows['email'];
    $user_database_info = $rows['major'];
    $user_database_info = $rows['classYear'];
    $user_database_info = $rows['courses'];
    $user_database_info = $rows['studyHabits'];
    $user_database_info = $rows['profileImage'];

  $user_database_courses = explode(",", $user_database_info[5]);
  
  /* figure out how to get current user info ?? hard coded an example arr below for now */
  $current_user_info = array("Em", "Smith", "em@gmail.com", "Sociology", "2024", "CS 51389, VIST 1100, Math 2210, HIST 1100", "I like to study at libraries.", "image");
  $current_user_courses = explode(",", $current_user_info[5]);

  /* } */

  /* FIND COURSES IN COMMON */
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

  /*GET NEXT USER IF NO COURSES IN COMMON */
  if($arr_i == 0){
    $next_pressed = true;
    continue; /* brings while loop back up and starts over with next row/user*/
  }
  
?>

<div class="col-sm-6 text-center">
    <!-- coded 2 scenarios for now: sql stores as string or as file type -->
    <img src="images/default-man.png" class="feed_img"> <!-- change href -->
    <img class="feed_img"><?php echo $user_database_info = $rows['profileImage']; ?></img>
    <button class="contact_button popup" onclick="popup()">Contact Info</button>
  </div>

  <div class="col-sm-5">
    <h2 id="feed_name"><?= $user_database_info[0].$user_database_info[1] ?></h2> <!-- name -->
    <h4 id="feed_gm"><?= strval($user_database_info[4]).", ".$user_database_info[3] ?></h4> <!-- grade, major name -->

    <h3 class="feed_label">courses in common with you:</h3>
    <p class="feed_descrip"><?= implode(", ", $courses_in_common); ?></p>

    <h3 class="feed_label">study habits:</h3>
    <p class=""><?= $user_database_info[6] ?></p>

    <span class="popuptext" id="myPopup">
      <?=$user_database_info[2]?> <br> <!-- email -->
    </span>

    <script>
      function popup() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }
    </script>
  </div>

  <script src="https://use.fontawesome.com/960dfa1218.js"></script>
  <!--<div class="col-sm-1"><button onclick=nextUser() id="feed_next"><i class="fa fa-angle-double-right fa-4x"></i></button></div>-->
  <form>
    <input type="submit" name='next' id="feed_next"><i class="fa fa-angle-double-right fa-4x"></i></input>
  </form>
  <?php
    if(array_key_exists('next',$_POST)){
      $next_pressed = true;
    }

  endwhile;
  ?>
</div>

<?php
    include_once('footer.php');
?>

