<?php include('../../config/dbconfig.php'); ?>
<?php
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin1.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link href="images/logo.png" rel="shortcut icon">
        <title> Admin Dashboard | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin_nav.php"; ?>
        </div>
        
<div class="row">
    <div class="col-5"></div>
    <div class="col-6">
    <h1>ADMIN DASHBOARD </h1></div>
</div>

<div class="row">
    <div class="col-0"></div>
    <div class="col-2">
<fieldset>
  <legend><b>Profile Details:</b></legend>
  <div class="row">
      <div class="col-6">
          <img src="../images/users/admin.jpg" alt="image" class="image" >
      </div>
    </div>

    <div class="row">
      <div class="col-6">
      <table style="width:60%">
         <tr>
             <th>Admin ID</th>
             <td>AD_01</td>
         </tr>
         <tr>
             <th>Admin Name</th>
             <td>Admin</td>
         </tr>
         <tr>
             <th>Admin Email</th>
             <td>admin123@gmail.com</td>
         </tr>
         <tr>
             <th>Contact No.</th>
             <td>011-5894236</td>
         </tr>
         <tr>
             <th>Admin Type</th>
             <td>Admin</td>
         </tr>

    </table> 
    </div> 
  </div>
 </fieldset>

</div>
<div class="col-9">
    <!--user mgt begins-->
<div class="row">
<div class="col-0"></div>

        <div class="col-11">
        <div class="card">
            <div class="container"> 
                <h3> User Management </h3>
              <div class="col-3">
              <div class="container">
                  <img src="../images/users/co-admin.png" alt="image" class="image" >
                          <a href="co-admin_mgt.php" class="button">Co-Admin Management</a>
                      </div>  
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/users/farmer2.jpg" alt="image" class="image" >
                          <a href="seller_view.php" class="button">Seller Management</a>
                      </div> 
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/users/customer.jpg" alt="image" class="image" >
                          <a href="customer_view.php" class="button">Customer Management</a>
                      </div> 
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/users/deliverer.jpg" alt="image" class="image">
                          <a href="deliverer_view.php" class="button">Deliverer Management</a>
                      </div>  
              </div>
          </div>
          </div>
        </div>
    </div>

      <!--user mgt ends-->

      <!--sales mgt begins-->
      <div class="row">
          <div class="col-0"></div>
          <div class="col-11">
            <div class="card">
                <div class="container">
                    <h3> Sales Management </h3>
              <div class="col-3">
              <div class="container">
                  <img src="../images/prod.jpg" alt="image" class="image">
                          <a href="product_sales.php" class="button">Product Sales Records</a>
                      </div>  
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/users/farmer4.jpg" alt="image" class="image" >
                          <a href="seller_sales.php" class="button">Seller Sales Records</a>
                      </div> 
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/users/buyer5.jpg" alt="image" class="image" >
                          <a href="cus_order.php" class="button">Buyer Order Records</a>
                      </div> 
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/users/deliverer2.jpg" alt="image" class="image">
                          <a href="deliverer_order.php" class="button">Deliverer Order Records</a>
                      </div>  
              </div>

              </div>
          </div>
      </div>
  </div>
      <!--sales mgt ends-->

      <!--Record mgt begins-->
      <div class="row">
        <div class="col-0"></div>
        <div class="col-11">
            <div class="card">
                <div class="container">
                    <h3> Record Management </h3>
                    <div class="col-3">
              <div class="container">
                  <img src="../images/forum.jpg" alt="image" class="image" >
                    <a href="forums.php" class="button"> Forum Posts</a>
                </div> 
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/feedbk.jpg" alt="image" class="image" >
                    <a href="feedback.php" class="button"> User Feedback Records</a>
                </div> 
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/bid.jpg" alt="image" class="image" >
                          <a href="bidding_rec.php" class="button"> Bidding Record</a>
                      </div> 
              </div>

              <div class="col-3">
              <div class="container">
                  <img src="../images/pay.jpg" alt="image" class="image" >
                    <a href="Pay.php" class="button"> Payment Records</a>
                </div> 
            </div>
          </div>
          </div>

      </div>
  </div>

  <!--Record mgt ends-->

</div>
     </body>
    </html>