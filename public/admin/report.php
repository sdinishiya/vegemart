<?php include('../database/dbconfig.php'); ?>
<?php
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <title> Report Management | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin-logout-nav.php"; ?>
        </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col-6">
        <h1>SYSTEM REPORTS </h1></div>
    </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col-6">
        <div class="col-0"></div>
        <div class="border">
            <img src="../images/users/report2.jpg" alt="image" class="image" >
        </div>
    </div>
    </div>
    <br>

    <!--report category  begins-->
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">

            <div class="col-5">
            <h4>SELECT PRODUCTS TO VIEW COMPLAIN REPORTS</h4>
            <div class="container">
                <img src="../images/users/complain.jpg" alt="image" class="image" >
                        <a href="seller-order.php" class="button">Product Complain</a>
                    </div> 
            </div>
            <div class="col-1"></div>
            <div class="col-5">
            <h4>SELECT FORUMS TO VIEW POST REPORTS </h4>
            <div class="container">
                <img src="../images/users/forum.jpg" alt="image" class="image" >
                        <a href="cus-order.php" class="button">Forum Posts</a>
                    </div> 
            </div>
        </div>
            <!--report category ends-->
        <div class="row">
            <div class="col-10"></div>
            <div class="col-1"><a href="admin.php" class="button"> Back </a></div>
        </div>

        <?php include_once "../includes/footer.php"; ?> 
        
    </body>
    </html>