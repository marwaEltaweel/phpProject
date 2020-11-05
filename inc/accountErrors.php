<?php 

// session_start();// لما بشيل الكومنت بيدي ايرور ليه ؟؟


if( isset($_SESSION['errors']) ) { ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($_SESSION['errors'] as $error) { ?>
                <li><?= $error; ?></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>

<?php 

unset($_SESSION['errors']);

?>