<?php
//header.php
include("header.php");


?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('process.php');
}
?>
<!-- registration area -->
<section id="register">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-light">Sign Up</h1>
                <p class="p-1 m-0 font-Arimo text-black-80">Sign up to start looking for your study group!</p>
                <span class="font-Arimo text-black-80">Already have an account? <a href="login.php">Click Here</a> to login.</span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./Assets/camera.svg" alt="camera">
                    </div>
                    <img src="./Assets/placeholder.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                    <small class="form-text text-light">Choose Image</small>
                    <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="POST" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName'] ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName'] ?>" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['phoneNumber'])) echo $_POST['phoneNumber'] ?>" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-row  my-4">
                        <div class="col">
                            <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>
                    <div class="form-row  my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="Password*">
                        </div>
                    </div>
                    <div class="form-row  my-4">
                        <div class="col">
                            <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                            <small id="confirm_error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['major'])) echo $_POST['major'] ?>" name="major" id="major" class="form-control" placeholder="Major">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['classYear'])) echo $_POST['classYear'] ?>" name="classYear" id="classYear" class="form-control" placeholder="Class Year">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['courses'])) echo $_POST['courses'] ?>" name="courses" id="courses" class="form-control" placeholder="Courses (separate by commas)">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['studyHabits'])) echo $_POST['studyHabits'] ?>" name="studyHabits" id="studyHabits" class="form-control" placeholder="Study Habits">
                        </div>
                    </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill text-light px-5">Submit</button>
                    </div>
                </form>
            </div>
</section>
<!-- registration area -->

<?php
//footer.php
include("footer.php")
?>