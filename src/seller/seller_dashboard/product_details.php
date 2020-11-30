<?php
    include ('../../config/dbconfig.php');
    include ('../../src/session.php'); 

    $sellerID=$_SESSION["loggedInSellerID"];  
    
    $retrieve = "SELECT * FROM products WHERE sellerID='$sellerID';";
    $result = mysqli_query($con, $retrieve); //Passing SQL

    
?>