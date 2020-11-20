<?php
    include ('../../config/dbconfig.php');
    include ('../../src/session.php');  
    if(isset($_GET['id'])){
        $productID = $_GET['id'];
        //$productID=887607463;
        $retrieveProduct =  "SELECT * FROM products WHERE productID='$productID';"; //Selecting all data from Table
        $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
        
        while ($rowProduct  = mysqli_fetch_assoc($resultProduct)) {                                     
            include ('../../public/seller/advertisement_details.php');
        }
        mysqli_close($con);
    }else{
        header('Location:../../public/seller/seller_product_add.php');
    }
    
?>