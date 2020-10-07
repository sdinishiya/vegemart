<?php
session_start();
if(isset($_POST["login"]))
{
  $email=$_POST["email"];
  $password=md5($_POST["password"]);
  
  include "../database/dbconfig.php";
  $sql = "SELECT * FROM users WHERE email='".$email."'";
  $result = mysqli_query($con, $sql);

  if(mysqli_num_rows($result) >0){
    while($row = mysqli_fetch_assoc($result)){
    $_SESSION["type"] =$row['userType'];
    if($password === $row['password'])  
      {
        if($row['userType'] === "seller"){ 
            $_SESSION["loggedInSellerID"] =$row['id']; 
            header('Location:../profile.php');  
        }
        elseif($row['userType'] === "user"){
            $_SESSION["loggedInUserID"] =$row['id']; 
            header('Location:../index.php');
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
        echo "<script>alert('Username is incorrect');
        window.location = '../login.php';
        </script>";
        $_SESSION["valid"] = 0; 
  }
}
?>
