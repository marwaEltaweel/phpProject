<?php include("inc/header.php"); ?>


<?php 

    session_start();

    if( isset($_SESSION['is_login']) and  $_SESSION['is_login'] == true) 
    {
        echo "Hello, {$_SESSION['name']} <br>";
        
        //كنت عايزة اعرض بيانات الاكاونت هنا لو دخلها وميطلعش ايرور لو مدخلهاش ومعرفتش
        
        // if ($_SESSION['accountData'] = true)
        // {
        //     echo "Hello, {$_SESSION['phoneNumber']} <br>";
        //     echo "Hello, {$_SESSION['faAccount']} <br>";
        //     echo "Hello, {$_SESSION['twiAccount']} <br>";
        //     echo "Hello, {$_SESSION['instaAccount']} <br>";
        // }
        echo "<a href='logOut.php'>logout</a>";

    } else {
        echo "please login first <a href='logIn.php'>click here</a>";
    }

?>

<?php include("inc/footer.php"); ?>




