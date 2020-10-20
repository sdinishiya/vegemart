<?php include('../database/dbconfig.php'); ?>
<?php
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <title>Add Co-admin | Vegemart</title>
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
      <form action="/action_page.php">

      <div class="row">
        <div class="col-3">
          <label for="fname"> Name</label>
        </div>
        <div class="col-3">
          <input type="text" id="fname" name="firstname" placeholder="Firts name" style="width: 98%">
        </div>
          <div class="col-3">
          <input type="text" id="lname" name="lastname" placeholder="Last name" style="width: 98%">
        </div>
      </div>

  <div class="row">
    <div class="col-3">
      <label for="email">E-mail</label>
    </div>
    <div class="col-6">
      <input type="text" id="email" name="email" placeholder="E-mail.." style="width: 100%">
    </div>
  </div>

  <div class="row">
    <div class="col-3">
      <label for="email">Phone Number</label>
    </div>
    <div class="col-6">
      <input type="text" id="phone" name="phone" placeholder="Phone number.." style="width: 100%">
    </div>
  </div>
  
  <div class="row">
    <div class="col-3">
      <label for="email">Address</label>
    </div>
    <div class="col-6">
      <input type="text" id="add1" name="add1" placeholder="Address1" style="width: 100%">
      <input type="text" id="add2" name="add2" placeholder="Address2" style="width: 100%">
      <input type="text" id="add3" name="add3" placeholder="Address3" style="width: 100%">
    </div>
  </div>
  
  <div class="row">
    <div class="col-3"></div>
    <div class="col-3">
    <input type="submit" value="Submit">
  </div>
    <div class="col-3">
    <input type="reset" value="Reset">
  </div>
  </div>
  </form>
</div>
</div>


    </body>
    </html>