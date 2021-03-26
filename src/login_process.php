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
                $active_status= $row['active_status'];
                $_SESSION["type"] =$row['userType'];
                if($password === $row['password'])  {
                    if($row['userType'] === "seller"){ 
                        $_SESSION["loggedInSellerID"] =$row['id']; 
                        $_SESSION["userType"] =$row['userType'];                         
                        if($active_status == 1){
                            $log_customer_sql = "INSERT INTO logs (userID, userType, active_status,login_status,date_time) 
                            VALUES ('".$_SESSION["loggedInSellerID"]."','".$_SESSION["userType"]."',1,1,NOW())";                
                            $execute_querry = mysqli_query($con, $log_customer_sql);
                            header('Location:../public/seller/seller_home.php'); 
                        } 
                         
                    }
                    elseif($row['userType'] === "user"){
                        $_SESSION["loggedInUserID"] =$row['id']; 
                        $_SESSION["userType"] =$row['userType']; 
                        if($active_status == 1){
                            $log_customer_sql = "INSERT INTO logs (userID, userType, active_status,login_status,date_time) 
                            VALUES ('".$_SESSION["loggedInUserID"]."','".$_SESSION["userType"]."',1,1,NOW())";                
                            $execute_querry = mysqli_query($con, $log_customer_sql);
                            header('Location:../public/products.php');
                        } 
                        
                    }
                    elseif($row['userType'] === "deliverer"){
                        $_SESSION["loggedInDelivererID"] =$row['id'];
                        $_SESSION["userType"] =$row['userType']; 
                        if($active_status == 1){
                            $log_customer_sql = "INSERT INTO logs (userID, userType, active_status,login_status,date_time) 
                            VALUES ('".$_SESSION["loggedInDelivererID"]."','".$_SESSION["userType"]."',1,1,NOW())";                
                            $execute_querry = mysqli_query($con, $log_customer_sql);
                            header('Location:../public/deliverer/deliverer_home.php');
                        }  
                        
                    }
                    elseif($row['userType'] === "admin"){
                        $_SESSION["loggedInAdminID"] =$row['id']; 
                        $_SESSION["userType"] =$row['userType']; 
                        if($active_status == 1){
                            $log_customer_sql = "INSERT INTO logs (userID, userType, active_status,login_status,date_time) 
                            VALUES ('".$_SESSION["loggedInAdminID"]."','".$_SESSION["userType"]."',1,1,NOW())";                
                            $execute_querry = mysqli_query($con, $log_customer_sql);
                            header('Location:../public/admin/admin-dash.php'); 
                        } 
                        
                    }
                    elseif($row['userType'] === "coadmin"){
                        $_SESSION["loggedInCoAdminID"] =$row['id']; 
                        $_SESSION["userType"] =$row['userType']; 
                        if($active_status == 1){
                            $log_customer_sql = "INSERT INTO logs (userID, userType, active_status,login_status,date_time) 
                            VALUES ('".$_SESSION["loggedInCoAdminID"]."','".$_SESSION["userType"]."',1,1,NOW())";                
                            $execute_querry = mysqli_query($con, $log_customer_sql);
                            header('Location:../public/admin/admin-dash.php'); 
                        } 
                        
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
