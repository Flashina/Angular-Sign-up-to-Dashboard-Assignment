<?php
session_start();
require("connection.php");

if (isset($_POST['signup'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    if (empty($firstname) || empty($lastname) || empty($email) || empty($address) || empty($password)) {
        $_SESSION['message'] = "All fields are required";
        header("location: signup.php");
    } elseif (strlen($password) < 8) {
        $_SESSION['message'] = 'Password Must be 8 Characters or More';
        header("location: signup.php");
    } else {
        $checkEmail = "SELECT * FROM `portal_tb` WHERE email = '$email'";
        $found = mysqli_query($connect, $checkEmail);
        if (mysqli_num_rows($found) > 0) {
            $_SESSION['message'] = '<div class="alert alert-danger text-center fw-bold">User Aready Exist!</div>';
            // $_SESSION['message'] = 'User Aready Exist!';
            header("location: signup.php");
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO `portal_tb`(`firstname`, `lastname`, `email`, `address`, `password`) VALUES('$firstname', '$lastname', '$email', '$address', '$hashed')";
            $result = mysqli_query($connect, $query);

            if ($result) {
                header('location: login.php');
            } else {
                echo 'Oops! Something Went Wrong!';
            }

        }


    }

}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM portal_tb WHERE email = '$email'";
    $found = mysqli_query($connect, $query);
    // print_r($found);
    $result = mysqli_fetch_assoc($found);

    if (mysqli_num_rows($found) > 0) {
        $verify = password_verify($password, $result['password']);
        if ($verify) {
            // echo "Password correct";
            // echo "Password" . $result['firstname'];
            // session_start();
            header('location: dashboard.php');
            $_SESSION['welcome'] = 'Welcome! ' . $result['firstname'];
        } else {
            $_SESSION["message"] = "Password is Incorrect";
            header("Location: login.php");
        }
    } else {
        $_SESSION["message"] = "E-mail Does Not Exist";
        header("Location: login.php");
    }

}
