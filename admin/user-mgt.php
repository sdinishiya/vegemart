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
        <title> User Management | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin-logout-nav.php"; ?>
        </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col-6">
        <h1>USER MANAGEMENT </h1></div>
    </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col-6">
        <div class="col-0"></div>
        <div class="border">
            <img src="../images/users/user1.jpg" alt="image" class="image" >
        </div>
    </div>
    </div>
    <br>

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <h4>SELECT USERS BELOW TO VIEW SYSTEM USER DETAILS </h4></div>
    </div>
    
    <br>

    <!--user roles begins-->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

            <div class="col-3">
            <div class="container">
                <img src="../images/users/co-admin.png" alt="image" class="image" >
                        <a href="view-co-admin.php" class="button">Co-Admin</a>
                    </div>  
            </div>

            <div class="col-3">
            <div class="container">
                <img src="../images/users/farmer2.jpg" alt="image" class="image" >
                        <a href="view-seller.php" class="button">Seller</a>
                    </div> 
            </div>

            <div class="col-3">
            <div class="container">
                <img src="../images/users/customer.jpg" alt="image" class="image" >
                        <a href="view-cus.php" class="button">Customer</a>
                    </div> 
            </div>

            <div class="col-3">
            <div class="container">
                <img src="../images/users/deliverer.jpg" alt="image" class="image">
                        <a href="view-deliverer.php" class="button">Deliverer</a>
                    </div>  
            </div>
            </div>
            <!--user roles ends-->
        </div>
    </body>
    </html>