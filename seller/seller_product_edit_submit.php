<?php
    include('../database/dbconfig.php'); 

    if(empty(session_id())){
        session_start();
    }
          
    $target_dir = "../images/products/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
              
    // if everything is ok, try to upload file
    else{
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } 
        else {
        $message = base64_encode(urlencode("Sorry, there was an error uploading your file."));
        header('Location:seller_product_edit.php?msg=' . $message);
        exit();
        }
    }
        
    
   
    if(isset($_POST["save"])){
        $productID= $_POST['editProductID'];
        $newName = $_POST['editProductName'];
        $newQuantity = $_POST['editQuantity'];
        $newminPrice = $_POST['editMinPrice'];
        $imageName = $_FILES["fileToUpload"]["name"];
        $imageData = $_FILES["fileToUpload"]["tmp_name"];
        $imageType = $_FILES["fileToUpload"]["type"];
        $newAddress1 = $_POST['editAddress1'];
        $newAddress2 = $_POST['editAddress2'];
        $newcity = $_POST['editCity'];
         
        if($imageName==""){
                $updateQuery= "UPDATE `products` SET `name` = '".$newName."', `quantity` = '".$newQuantity."', `minPrice` ='".$newminPrice."', `address1` = '".$newAddress1."', `address2` = '".$newAddress2."', `city` = '".$newCity."' WHERE `productID` = '".$productID."' ";   
        }
        else{
                $updateQuery= "UPDATE `products` SET `name` = '".$newName."', `quantity` = '".$newQuantity."', `minPrice` ='".$newminPrice."',`imageName` = '".$imageName."' , `address1` = '".$newAddress1."', `address2` = '".$newAddress2."', `city` = '".$newCity."' WHERE `productID` = '".$productID."' ";   
        } 

        if (mysqli_query($con,$updateQuery) === TRUE) {
            $message = base64_encode(urlencode("Successfully Edited!"));
            header('Location:seller_home.php?msg='.$message);
            exit();
        }  
        else {
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:seller_product_edit.php?msg=' . $message);
            exit();
        }
        
    }
    
    mysqli_close($con);
?>