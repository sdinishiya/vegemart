<?php   
    include ('../config/dbconfig.php');
    include ('../src/session.php');
    
    $userID = $_SESSION["loggedInUserID"];
    $selectusers = "SELECT * FROM client WHERE id='$userID'";
    $selectemail = "SELECT * FROM users WHERE id='$userID'";
    $userquery = mysqli_query($con,$selectusers);
    $emailquery=mysqli_query($con,$selectemail);
    while($row = mysqli_fetch_assoc($userquery)){
        include ('../public/buyer_profile_details.php');
    }     
?>              
        