<?php
    include('../database/dbconfig.php') ;
        
    //Uploading to Database
    if (isset($_POST['submit'])){
        $description = $_POST['description'];
        $date = date('Y-m-d', strtotime($_POST['date']));
        //$sellerID = $_SESSION["loggedInSellerID"];  
        $productID = rand();
        $adID = rand();                            
                    
  //$insertProduct = "INSERT INTO `advertisements` (`sellerID`,`name`,`quantity`,`minPrice`,`imageName`,`address1`,`address2`,`city`,`adID_fk`,`description`) VALUES ('".$sellerID."','".$productName."','".$quantity."','".$minPrice."','".$imageName."','".$address1."','".$address2."','".$city."','".$adID."','".$description."');";
        $advertise =  "INSERT INTO `advertisements` (`adID`,`productID`,`ad_description`) VALUES ('".$adID."','".$productID."','".$description."');";      
        if (mysqli_query($con, $advertise)) {                            
            $message = base64_encode(urlencode("Advertised"));
            header('Location:seller_home.php?msg=' . $message);
            exit();
        }
        else{                           
            $message = base64_encode(urlencode("SQL Error while Adding products"));
            header('Location:seller_product_add.php?msg=' . $message);
            exit();
        } 
    }
    mysqli_close($con);
?>

