<?php
    include ('../../config/dbconfig.php');
    include ('../../src/session.php'); 

    $sellerID=$_SESSION["loggedInSellerID"];  
    
    $retrieveInfo =  "SELECT * FROM reviews WHERE sellerID='$sellerID';"; //Selecting all data from Table
    $result = mysqli_query($con, $retrieveInfo); //Passing SQL    
       
    while($row = mysqli_fetch_assoc($result)){
        $buyerID = $row['userID']; 
        //echo "123";
        // $buyerID = 7;
        $retrieveUserInfo =  "SELECT * FROM client WHERE id='$buyerID';"; //Selecting all data from Table
        $resultUserInfo = mysqli_query($con, $retrieveUserInfo); //Passing SQL
        while($rowPic= mysqli_fetch_assoc($resultUserInfo)){ 
            include ('../../public/seller/seller_dashboard/reviews.php');
        }  
    } 
    mysqli_close($con);

?>