<?php
    include ('../../config/dbconfig.php');
    include ('../../src/session.php');  
    
    $sellerID=$_SESSION["loggedInSellerID"];  
     //$sellerID=1695357733;
     $retrieveInfo =  "SELECT * FROM client WHERE id='$sellerID';"; //Selecting all data from Table
     $resultInfo = mysqli_query($con, $retrieveInfo); //Passing SQL

    while ($rowUser  = mysqli_fetch_assoc($resultInfo)) {
        $_SESSION["loggedInSellerID"] = $rowUser['id'];
        include ('../../public/seller/seller_dashboard/seller_details.php');
    }
    
?>
                       
                      