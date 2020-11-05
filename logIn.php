<?php include("inc/header.php"); ?>


<section class="vh-100 container py-5">
<?php include("inc/logInErrors.php"); ?>
    <form method="POST" action="handle-login.php">
        <div class="form-group">
        <label for="">User Name</label>
        <input class="form-control " type="text" name="name" placeholder="enter your name">
        </div>
        <div class="form-group">
        <label for="">E mail</label>
        <input class="form-control " type="text" name="email" placeholder="Your Email">
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input class="form-control " type="password" name="password" placeholder="password">
        </div>   
        <input  class="btn btn-info" type="submit" name="submit" value="login">
    </form>
</section>





<?php include("inc/footer.php"); ?>