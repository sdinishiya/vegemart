<?php   
    include ('../../config/dbconfig.php');
    include ('../../src/session.php');
        //$userID = $_SESSION["loggedInSellerID"];
    $productID = $_GET['id'];
    $selectproduct = "SELECT * FROM `products` WHERE productID='".$productID."'";

    $productQuery = mysqli_query($con,$selectproduct);

    
?>       
