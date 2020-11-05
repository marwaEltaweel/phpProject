<?php 

session_start();

if (isset($_POST['save'])) 
{
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $faAccount = $_POST['faAccount'];
    $twiAccount = $_POST['twiAccount'];
    $instaAccount = $_POST['instaAccount'];

    $passwordLen = strlen($password);

    // validation
    $errors = [];
    $namesPattern = "/^[a-zA-Z]{3,30}$/";
    $passPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{1,}$/";
    $phonePattern = "/^(010|011|012)[0-9]{8}$/";
    $faPattern = "/(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?([\w\-]*)?/";


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

    // phone-number: required | valid phone-number 
    if ( empty($phoneNumber) ) {
        $errors[] = "phone number is required";
    } elseif ( ! preg_match($phonePattern, $phoneNumber) ) {
        $errors[] = "please be sure that ur phone number is correct";
    }

    // fa-account: required | valid fa-account 
    if ( empty($faAccount) ) {
        $errors[] = "ur facebook account is required";
    } elseif ( ! preg_match($faPattern, $faAccount) ) {
        $errors[] = "your face book account not valid";
    }

    // twiter-account: required | valid Twitter-account 
    if ( empty($twiAccount) ) {
        $errors[] = "ur Twitter account is required";
    } elseif ( ! preg_match($faPattern, $twiAccount) ) {
        $errors[] = "your Twitter account not valid";
    }

    // Instegramt: required | valid Instegram-account 
    if ( empty($instaAccount) ) {
        $errors[] = "ur Instegram account is required";
    } elseif ( ! preg_match($faPattern, $instaAccount) ) {
        $errors[] = "your Instegram account not valid";
    }

    if ( empty($errors) ) {
        // store user is_login and email in session
        $_SESSION['is_login'] = true;
        $_SESSION['accountData'] = true;

        $_SESSION['instaAccount'] = $instaAccount;
        $_SESSION['phoneNumber'] = $phoneNumber;
        $_SESSION['faAccount'] = $faAccount;
        $_SESSION['twiAccount'] = $twiAccount;
       

    
        header("location: index.php");
        
    } else {
        $_SESSION['errors'] = $errors;
        header("location: account.php");
    }
}

?>