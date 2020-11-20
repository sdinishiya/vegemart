<?php
    include ('../../config/dbconfig.php');
    include ('../../src/session.php');

    $userID = $_SESSION["loggedInSellerID"];    
    $selectusers = "SELECT * FROM client WHERE id='$userID'";
    $selectemail = "SELECT * FROM users WHERE id='$userID'";
    $userquery = mysqli_query($con,$selectusers);
    $emailquery=mysqli_query($con,$selectemail);

    while($row = mysqli_fetch_assoc($userquery)){
        include ('../../public/seller/seller_profile_details.php');
    }
    mysqli_close($con);

?>
