<?php
    include ('../src/session.php'); 
    include ('../config/dbconfig.php'); 
    
    if(isset($_POST['placeBid'])){
        $productID= $_POST['productID'];
        $userID = $_POST['userID'];
        $bidQuantity = $_POST['quantity'];
        $bidPrice = $_POST['bid'];
        $amount = ($bidPrice/$bidQuantity)*250;
        
        $insertBid = "INSERT INTO `bidding` (`productID`,`userID`,`bidQuantity`,`bidPrice`,`amount`,`startTime`) VALUES ('".$productID."','".$userID."','".$bidQuantity."','".$bidPrice."','".$amount."',NOW());";
        if (mysqli_query($con, $insertBid)) {                            
            $message = base64_encode(urlencode("Bid Added."));
            header('Location:../public/bid.php?id=' . $productID);
            exit();
        }
        else{                           
            $message = base64_encode(urlencode("SQL Error while Adding products"));
            header('Location:../public/bid.php?msg=' . $message);
            exit();
        } 
    }
    mysqli_close($con);
?>