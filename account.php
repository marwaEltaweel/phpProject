<?php include("inc/header.php"); 

session_start();

if( isset($_SESSION['is_login']) and  $_SESSION['is_login'] == true) 
{?>
    <section class="vh-100 container py-5">
    <?php include("inc/accountErrors.php"); ?>
        <form method="POST" action="handle-account.php">
            <div class="form-group">
            <label for="">User Name</label>
            <input class="form-control " type="text" name="name">
            </div>
            <div class="form-group">
            <label for="">E mail</label>
            <input class="form-control " type="text" name="email">
            </div>
            <div class="form-group">
            <label for="">Password</label>
            <input class="form-control " type="password" name="password" >
            </div>
            <div class="form-group">
            <label for="">Phone Number</label>
            <input class="form-control " type="text" name="phoneNumber">
            </div>  
            <div class="form-group">
            <label for="">Facebook Account URL</label>
            <input class="form-control"  name="faAccount">
            </div> 
            <div class="form-group">
            <label for="">Twitter Account URL</label>
            <input class="form-control " type="url" name="twiAccount">
            </div>    
            <div class="form-group">
            <label for="">Instagram Account URL</label>
            <input class="form-control " type="url" name="instaAccount">
            </div>   
            <input  class="btn btn-info mb-5" type="submit" name="save" value="SAVE">
        </form>

    <?php
    } else {
        echo "please login first <a href='logIn.php'>click here</a>";
    }






 include("inc/footer.php"); ?>