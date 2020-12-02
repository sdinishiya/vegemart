<?php
    include ('../../config/dbconfig.php');
    include ('../../src/session.php'); 

    $sellerID=$sellerID;  
    
    $retrieveInfo =  "SELECT * FROM reviews WHERE sellerID='$sellerID';"; //Selecting all data from Table
    $result = mysqli_query($con, $retrieveInfo); //Passing SQL   

?>