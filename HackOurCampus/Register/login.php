<?php
session_start();
//header.php
include('header.php');
include('helper.php');

?>
<?php
$user = array();
require('mysqli_connect.php');
if (isset($_SESSION['userID'])) {
    $user = get_user_info($con, $_SESSION['userID']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('login-process.php');
}
?>
<!-- registration area -->
<section id="login-form">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-light">Login</h1>
                <p class="p-1 m-0 font-Arimo text-black-80">Log in to start looking for your study group!</p>
                <span class="font-Arimo text-black-80">Don't have an account? <a href="register.php">Click Here</a> to sign up!</span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <img src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './Assets/placeholder.png'; ?>" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="POST" enctype="multipart/form-data" id="log-form">
                    <div class="form-row  my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>
                    <div class="form-row  my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="Password*">
                        </div>
                    </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill text-light px-5">Login</button>
                    </div>
                </form>
            </div>
</section>
<!-- registration area -->

<?php
//footer.php
include("footer.php")
?>