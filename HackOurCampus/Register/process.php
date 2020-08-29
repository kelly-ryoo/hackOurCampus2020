<?php
require('helper.php');
//error variable
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)) {
    $error[] = "You forgot to enter your First Name";
}

$lastName = validate_input_text($_POST['lastName']);
if (empty($lastName)) {
    $error[] = "You forgot to enter your Last Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)) {
    $error[] = "You forgot to enter your email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)) {
    $error[] = "You forgot to enter your password";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)) {
    $error[] = "You forgot to confirm your password";
}

$phoneNumber = validate_input_text($_POST['phoneNumber']);
if (empty($phoneNumber)) {
    $error[] = "You forgot to enter your phone number";
}

$major = validate_input_text($_POST['major']);
if (empty($major)) {
    $error[] = "You forgot to enter your major";
}

$classYear = validate_input_text($_POST['classYear']);
if (empty($classYear)) {
    $error[] = "You forgot to enter your Class Year";
}

$courses = validate_input_text($_POST['courses']);
if (empty($courses)) {
    $error[] = "You forgot to enter your Courses";
}

$studyHabits = validate_input_text($_POST['studyHabits']);
if (empty($studyHabits)) {
    $error[] = "You forgot to enter your study habits";
}
$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./Assets/Profile', $files);

if (empty($error)) {
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require('mysqli_connect.php');
    // make a query
    $query = "INSERT INTO user(userID, firstName, lastName, email, PASSWORD, major, classYear, courses, studyHabits, profileImage,registerDate)";
    $query .= "VALUES('',?,?,?,?,?,?,?,?,?,NOW())";

    //initialize a statement
    $q = mysqli_stmt_init($con);

    //prepare SQL statement for
    mysqli_stmt_prepare($q, $query);

    //bind values
    mysqli_stmt_bind_param($q, 'sssssssss', $firstName, $lastName, $email, $hashed_pass, $major, $classYear, $courses, $studyHabits, $profileImage);

    //execute statement
    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1) {

        //start a new session
        session_start();

        //create session variable
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location:login.php');
        exit();
    } else {
        print "Error in registration";
    }
} else {
    echo 'not valid';
}
