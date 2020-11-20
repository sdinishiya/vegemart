<?php   
    include ('../../config/dbconfig.php');
    include ('../../src/session.php');
        //$userID = $_SESSION["loggedInSellerID"];
    $productID = $_GET['id'];
    $selectproduct = "SELECT * FROM `products` WHERE productID='".$productID."'";

    $productQuery = mysqli_query($con,$selectproduct);

    while($row = mysqli_fetch_assoc($productQuery)){
        include ('../../public/seller/seller_product_edit_details.php');
    }
    mysqli_close($con);
?>       
