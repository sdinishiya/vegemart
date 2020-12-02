<?php
    //include ('../session.php');
    include ('../../../config/dbconfig.php');
    include ('../../session.php'); 
    

    //Showing reviews for the seller
   // $sellerID=1066803159;
   
    //ADDING REVIEWS BY BUYER
    if(isset($_POST["send"])){
        $userID=$_POST["userID"];
        $sellerID=$_POST["sellerID"];
        $description = $_POST["description"];;
        $insertReviews = "INSERT INTO `reviews` (`userID`,`sellerID`,`review`) VALUES ('".$userID."','".$sellerID."','".$description."');";                         
        if (mysqli_query($con, $insertReviews) === TRUE) {                            
                $message = base64_encode(urlencode("Review Added."));
               header('Location:../../../public/seller/seller_home.php?msg=' . $message);
                echo "<meta http-equiv='refresh' content='0'>";
                exit();
            }
        else {                      
            header('Location:../../../public/seller/seller_home.php?msg=' . $message);     
            $message = base64_encode(urlencode("SQL Error while Registering"));
            exit();
        } 
    }
    mysqli_close($con);


?>