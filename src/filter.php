<?php
    include ('../src/session.php'); 
    include ('../config/dbconfig.php');

    $sql = "SELECT `city` FROM `products`;";
    $result = mysqli_query($con,$sql);
    
?>