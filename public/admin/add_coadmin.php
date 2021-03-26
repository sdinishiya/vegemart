<?php 
    include ('../../config/dbconfig.php'); 
    include ('../../src/session.php'); 
    $target_dir = "../images/users/";
    $target_file = $target_dir . basename($_FILES["profilePic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
     // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
            
    // if everything is ok, try to upload file
    else {
        if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["profilePic"]["name"]). " has been uploaded.";
        } 
        else {
            $message = base64_encode(urlencode("Sorry, there was an error uploading your file."));
            header('Location:co-admin_mgt.php?msg=' . $message);
            exit();
        }
    }
    if(isset($_POST["submit"])){
        $imageName = $_FILES["profilePic"]["name"];
        $imageData = $_FILES["profilePic"]["tmp_name"];
        $imageType = $_FILES["profilePic"]["type"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phoneNum = $_POST["contact"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
        $city = $_POST["city"];
        $password = $_POST["password"];
        $userType="coadmin";

        $sql_e = "SELECT * FROM users WHERE email='".$email."'";            
        $res_e = mysqli_query($con, $sql_e);           
                    
        if(mysqli_num_rows($res_e) > 0){
            echo "<script type='text/javascript'>
            alert('email already exists');
            window.history.back();           
            </script>";
                    
        }else{
            $password_hash = md5($password); 
            if($imageName==""){
                $imageName="default.png";
            }
            
            $user = "INSERT INTO `users` (`email`,`password`, `userType`) VALUES ('".$email."','".$password_hash."','".$userType."');";
            $result1= mysqli_query($con,$user);
            $user_id = mysqli_insert_id($con);

            $admin = "INSERT INTO `admin` (`user_id`,`name`,`contactNum`,`address1`,`address2`,`city`,`profilePic`) VALUES ('".$user_id."','".$name."','".$phoneNum."','".$address1."','".$address2."','".$city."','".$imageName."');";
            $result2= mysqli_query($con,$admin);

            if ($result1 == true){
                echo 'done1';
            }else{
                if($resut2 ==true){
                    echo 'done2';
                }else{
                    echo 'failed';
                }
            }

            // if ($result1 == true && $result2 == true ){ 
            //     header('Location:co-admin_mgt.php?msg=' . $message);
            // }
            // else{
            //     echo'failed';
            // }
        }
    }
?>  