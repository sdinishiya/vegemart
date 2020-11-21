<?php
    include ('./session.php'); 
    include ('../config/dbconfig.php'); 

    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $password=md5($_POST["password"]);       
        $sql = "SELECT * FROM users WHERE email='".$email."'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) >0){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION["type"] =$row['userType'];
                if($password === $row['password'])  {
                    if($row['userType'] === "seller"){ 
                        $_SESSION["loggedInSellerID"] =$row['id']; 
                        header('Location:../public/seller/seller_home.php');  
                    }
                    elseif($row['userType'] === "user"){
                        $_SESSION["loggedInUserID"] =$row['id']; 
                        header('Location:../public/products.php');
                    }
                    elseif($row['userType'] === "deliverer"){
                        $_SESSION["loggedInDelivererID"] =$row['id']; 
                        header('Location:../public/deliverer/deliverer_home.php');
                    }
                    elseif($row['userType'] === "admin"){
                        $_SESSION["loggedInAdminID"] =$row['id']; 
                        header('Location:../public/admin/admin.php');
                    }
                }
                else{  
                    //return false;  
                    echo "<script>alert('Password does not match');
                    window.history.back();
                    </script>";
                    $_SESSION["valid"] = 0;  
                }
            }
        }
        else{
                echo "<script>alert('Email is incorrect');
                window.location = '../public/login.php';
                </script>";
                $_SESSION["valid"] = 0; 
        }
    }
    mysqli_close($con);
?>
