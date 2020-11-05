<?php include("inc/header.php"); 

    session_start();

    if( isset($_SESSION['is_login']) and  $_SESSION['is_login'] == true) 
    {
        $products= [
            'Colored Pen' => [
                      'price' => '120',
                      'img' => './img/1.jpg',
                      'desc' => 'good product & high quality'
                    ],
            'Pencil' => [
                      'price' => '100',
                      'img' => './img/2.jpg',
                      'desc' => 'good product & high quality'
                    ],
            'Eraser' => [
                        'price' => '70',
                        'img' => './img/3.jpg',
                        'desc' => 'good product & high quality'
                    ],
            'Pencil Color' => [
                        'price' => '80',
                        'img' => './img/4.jpg',
                        'desc' => 'good product & high quality'
                    ],
            'Notebook' => [
                        'price' => '150',
                        'img' => './img/5.jpg',
                        'desc' => 'good product & high quality'
                    ],
            'School bag' => [
                        'price' => '580',
                        'img' => './img/6.jpg',
                        'desc' => 'good product & high quality'
                    ],
                ];?>

        
        <div class="row">
        

                <?php foreach( $products as $key => $product ) { ?> 
                   
                 <div class="col-md-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $product['img']; ?>" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title">Product Name: <?= $key; ?></h5>
                            <p class="card-text">Description: <?= $product['desc']; ?></p>
                            <p class="card-text">Price: <?= $product['price']; ?></p>    
                        </div>
                    </div>
                 </div>
                 <?php } ?>
        </div>
                    
                
            

<?php
    } else {
        echo "please login first <a href='logIn.php'>click here</a>";
    }






 include("inc/footer.php"); ?>