<?php 

session_start();

if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordLen = strlen($password);

    // validation
    $errors = [];
    $namesPattern = "/^[a-zA-Z]{3,30}$/";
    $passPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{1,}$/";


    // name: required | valid name 
    if ( empty($name) ) {
        $errors[] = "name is required";
    } elseif ( ! preg_match($namesPattern, $name) ) {
        $errors[] = "name should be string containing capital and small letters";
    }

    // email: required | valid email 
    if ( empty($email) ) {
        $errors[] = "email is required";
    } elseif ( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $errors[] = "email is not valid";
    }

    // password: required | string - regex | min:8 - max: 30
    if ( empty($password) ) {
        $errors[] = "password is required";
        // regexp
    } elseif ( ! preg_match($passPattern, $password) ) {
        $errors[] = "password should be string containing at least 1 uppercase, 1 lowercase, 1 digit";
    } elseif( $passwordLen < 8 or $passwordLen > 30 ) {
        $errors[] = "password should be between 8 and 30 length";
    }

    if ( empty($errors) ) {
        // store user is_login and email in session
        $_SESSION['is_login'] = true;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
    
        header("location: index.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("location: logIn.php");
    }
}

?>