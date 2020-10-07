<?php
session_start();
if(isset($_POST["register"]))
{
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $username = $_POST["username"];
  $street = $_POST["street"];
  $city = $_POST["city"];
  $pnumber = $_POST["pnumber"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm_password"];
  $userType=$_POST["type"];
 

  include "../database/dbconfig.php";

  if ($password === $confirmPassword) {
    $sql_u = "SELECT * FROM users WHERE username='".$username."'";
    $sql_e = "SELECT * FROM users WHERE email='".$email."'";
    $res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);
    if (mysqli_num_rows($res_u) > 0) {
    ?>
  	    
        <script type='text/javascript'>
            alert('username already exist');
            window.history.back();
    
        </script>
        
                
    <?php 
               
  	}else if(mysqli_num_rows($res_e) > 0){
    ?>      
  	    <script type='text/javascript'>
            alert('email already exist');
            window.history.back();
    
        </script>
    <?php    
    
  	}else{
    $password_hash = md5($password);       
    $sql = "INSERT INTO `users` (`id`, `fname`,`lname`,`username`,`street`,`city`,`pnumber`,`email`,`password`, `userType`) VALUES (NULL,'".$fname."','".$lname."','".$username."','".$street."','".$city."','".$pnumber."','".$email."','".$password_hash."','".$userType."');";
    mysqli_query($con,$sql);
    header('Location:../login.php');
    }
  }else {
    header('Location:../error.php');
  }

}

?>

?>
