<?php

$error = array();

$email = validate_input_email($_POST['email']);
if (empty($email)) {
    $error[] = "You forgot to enter your email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)) {
    $error[] = "You forgot to enter your password";
}

if (empty($error)) {
    // sql query
    $query = "SELECT userID, firstName, lastName, email, PASSWORD, major, classYear, courses, studyHabits, profileImage FROM user WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    // bind parameter
    mysqli_stmt_bind_param($q, 's', $email);
    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    if (!empty($row)) {
        // verify password
        if (password_verify($password, $row[4])) {
            header("location: feed.php");
            exit();
        }
    } else {
        print "You are not signed up. Please sign up before logging in!";
    }
} else {
    echo "Please fill out email and password to login.";
}
