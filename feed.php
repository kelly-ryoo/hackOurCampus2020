<?php
/* the feed page */ 
    include_once('header.php');
?>
<div class="col-sm-6 text-center">
    <img src="images/default-man.png" class="feed_img">
    <button class="contact_button popup" onclick="popup()">Contact Info
      
    </button>
  </div>

  <div class="col-sm-5">
    <h2 id="feed_name">Name lastname</h2>
    <h4 id="feed_gm">grade, major name</h4>

    <h3 class="feed_label">courses in common with you:</h3>
    <p class="feed_descrip">CS 1110</p>

    <h3 class="feed_label">study habits in common with you:</h3>
    <p class="">likes quiet reading</p>

    <span class="popuptext" id="myPopup">
      john@gmail.com <br>
      123-456-7890
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