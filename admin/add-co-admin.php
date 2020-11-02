<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <title>Add Co-admin | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin-logout-nav.php"; ?>
        </div>

  <div class="row">
    <div class="col-5"></div>
   
    <div class="col-4">
        <h1>ADD CO-ADMINISTRATOR </h1></div>   
    </div>
  </div>

  <div class="row">
    <div class="col-5"></div>
    <div class="col-0"></div>
    <div class="col-4">
                <img src="../images/users/co-admin.png" alt="image" class="pg">
    </div>
  </div>
    

  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <form action="" method="POST">

      <div class="row">
        <div class="col-3">
          <label for="fname"> Name</label>
        </div>
        <div class="col-3">
          <input type="text" id="fname" name="fname" placeholder="First name" style="width: 98%" required />
        </div>
          <div class="col-3">
          <input type="text" id="lname" name="lname" placeholder="Last name" style="width: 98%" required />
        </div>
      </div>

  <div class="row">
    <div class="col-3">
      <label for="email">E-mail</label>
    </div>
    <div class="col-6">
      <input type="text" id="email" name="email" placeholder="E-mail.." style="width: 100%" required />
    </div>
  </div>

  <div class="row">
    <div class="col-3">
      <label for="email">Phone Number</label>
    </div>
    <div class="col-6">
      <input type="text" id="phone" name="phone" placeholder="Phone number.." style="width: 100%" required />
    </div>
  </div>
  
  <div class="row">
    <div class="col-3">
      <label for="email">Address</label>
    </div>
    <div class="col-6">
      <input type="text" id="add1" name="add1" placeholder="House number" style="width: 100%" required />
      <input type="text" id="add2" name="add2" placeholder="Road" style="width: 100%">
      <input type="text" id="add3" name="add3" placeholder="City" style="width: 100%" required />
    </div>
  </div> 
  <div class="row">
    <div class="col-3"></div>
    <div class="col-3">
     <input type="submit" name="submit" class="submit"/><br><br>
  </div>
    <div class="col-3">
    <input type="reset" value="Reset">
  </div>
  <div class="col-5">
    <a href="admin.php">Admin Dashboard</a>
  </div>
  </div>
  </form>

  <?php include('../database/dbconfig.php'); 

if(isset($_POST["submit"])){

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$add1 = $_POST["add1"];
$add2 = $_POST["add2"];
$add3 = $_POST["add3"];

$sql="INSERT INTO `co_admin` (`ID`, `fname`, `lname`, `email`, `phone`,`add1`, `add2`, `add3`) VALUES (NULL, '".$fname."', '".$lname."', '".$email."', '".$phone."', '".$add1."', '".$add2."', '".$add3."');";

if(  mysqli_query($con,$sql))
      {
          echo "Database uploaded Successfully";}
      else
      {
          echo "Error in updating Database";}

}
  ?> 

</div>
</div>
    </body>
    </html>