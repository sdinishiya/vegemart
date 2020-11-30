<?php session_start();
?>
 <?php include('../../config/dbconfig.php'); ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin1.css">
        <title>Add Co-admin | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin_nav.php"; ?>
        </div>
<br>
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
          <label for="name">Name</label>
        </div>
        <div class="col-6">
          <input class="input-l" type="text" placeholder="Name" id="name" name="name" pattern="^[A-Za-z ]+$" style="width: 100%" required>
        </div>
      </div>

  <div class="row">
    <div class="col-3">
      <label for="email">E-mail</label>
    </div>
    <div class="col-6">
      <input class="input-l" type="email" placeholder="Co-Admin Email" id="email" name="email" required>
    </div>
  </div>

  <div class="row">
    <div class="col-3">
      <label for="password">Password</label>
    </div>
    <div class="col-6">
      <input class="input-m" type="password" placeholder="Password" id="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
    </div>
  </div> 

  <div class="row">
    <div class="col-3">
      <label for="phone">Contact Number</label>
    </div>
    <div class="col-6">
      <input class="input-l" type="text" placeholder="Contact Number" id="phone" name="phone"   required>
    </div>
  </div>
  <div class="row">
         <div class="col-3">
           <label for="add1">Profile picture</label>
         </div>
         <div class="col-6">
           <input class="input-l" type="file" id="profilePic" name="profilePic">
         </div>
       </div>

  <div class="row">
    <div class="col-3">
      <label for="add1">House Number </label>
    </div>
    <div class="col-6">
      <input class="input-l" type="text" placeholder="Number" id="add1" name="add1" required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-3">
      <label for="add">Address</label>
    </div>
    <div class="col-6">
      <div class="col-6">
        <input type="text" id="street" name="street" placeholder="Street" style="width: 100%" required />
      </div>
        <div class="col-6">
        <input type="text" id="city" name="city" placeholder="City" style="width: 100%" required />
    </div>
  </div> 
</div>
<div class="row">
    <div class="col-3">
      <label for="Active_status">Active Status</label>
    </div>
    <div class="col-6">
      <input class="input-l" type="text" placeholder="Active Status" id="active_status" name="active_status" required>
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
</div>



</div>
</div>
    </body>
    </html>