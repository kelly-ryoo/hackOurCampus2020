<?php

/*home  page */
include_once('header.php');

?>   
    <!-- WELCOME -->
    <div class="row">
        <h3 class="home_header" id="welcome">welcome to</h3>
    </div>

    <!-- WEBSITE TITLE -->
    <div class="row">
        <h1 class="home_header" id="web_title">Collab</h1>
    </div>
    
    <!-- LOG IN BUTTON -->
    <div class="row home-bt-1">
        <div class="col-sm-4"></div>
        <button class="col-sm-4 home-button" onclick="window.location.href='log_in.php'">log in</button>
    </div>

    <!-- SIGN UP BUTTON -->
    <div class="row home-bt-2">
        <div class="col-sm-4"></div>
        <button class="col-sm-4 home-button" onclick="window.location.href='sign_up.php'">sign up</button>
    </div>

<?php
include_once('footer.php');
?>