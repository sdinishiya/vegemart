<?php
    include ('../src/session.php'); 
    if (isset($_SESSION["loggedInUserID"])) {
        echo"<li><a href=\"../public/buyer_profile_edit.php\" class=\"drop\">View Profile</a></li>";        
    }
    elseif (isset($_SESSION["loggedInSellerID"])) {
        echo"<li><a href=\"./seller/seller_home.php\" class=\"drop\">View Profile</a></li>";
    }
?>