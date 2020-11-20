<?php
    include ('../src/session.php'); 
    include ('../config/dbconfig.php');

    $sql = "SELECT `city` FROM `products`;";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo" <option value= ".$row['city']." > <".$row['city']."</option>";
    }
    mysqli_close($con);
?>