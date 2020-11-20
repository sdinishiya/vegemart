<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Details</title>
    <link rel="stylesheet" type="text/css" href="../../css/seller-home.css">
    <link rel="stylesheet" type="text/css" href="../../css/NavBar.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <style>
    .mapouter{
        position:relative;
        width: 100%;
        height: 150%;
        
    }
    .gmap_canvas {
        overflow:hidden;
        background:none!important;
        width: 100%;
        height: 150%;
        
    }
    </style>
</head>
<body>
    <!-- <div class="column is-1"></div> -->
    <div class="column is-3">
        <div class="row pt-3 pb-2 pl-2">
            <img class="user-image" src= "../images/users/<?php echo $rowUser['profilePic']?>" alt="Display Picture">
        </div>
    </div>
    
    <div class="column is-1"></div>
    <div class="column is-7 has-text-left">
        <div class="row  pl-2 has-text-left">
            <h2 class="mb-1 pl-1" style="font-size:27px;"><?php echo $rowUser['fName'] . " " . $rowUser['lName'] ?></h2><br>        
            <div class="column is-3">
                <h3 class="mb-0 mt-0 pr-1" style="text-align-left">Phone:</h3><br>
                <h3 class="mb-0 mt-0" style="text-align-left">Location:</h3><br>
            </div>
            
            <div class="column is-4 has-text-left pb-1 pl-1">
                <h3 class="mb-0 mt-0" style="text-align-left"><?php echo $rowUser['phoneNum']?> </h3><br>
                <h3 class="mb-0 mt-0" style="text-align-left"><?php echo $rowUser['address1']?></h3>
                <h3 class="mb-0 mt-0" style="text-align-left"><?php echo $rowUser['address2']?></h3>
                <h3 class="mb-0 mt-0" style="text-align-left"><?php echo $rowUser['city']?></h3>                
            </div> 
            <?php
                    include "../../src/seller/seller_dashboard/map.php"
            ?>         
        </div>
        
    </div> 
</body>
</html>
