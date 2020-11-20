<?php
    include ('../../config/dbconfig.php');
    include ('../../src/session.php'); 

    $sellerID=$_SESSION["loggedInSellerID"];  
    
    $retrieve = "SELECT * FROM products WHERE sellerID='$sellerID';";
    $result = mysqli_query($con, $retrieve); //Passing SQL

    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["loggedInSellerID"] = $row['sellerID'];
        include ('../../public/seller/seller_dashboard/product_details.php');
    }
    mysqli_close($con);
?>