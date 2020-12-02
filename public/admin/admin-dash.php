<?php include('../../config/dbconfig.php'); ?>
<?php
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link href="images/logo.png" rel="shortcut icon">
        <title> Admin Dashboard | Vegemart </title>
    </head>
    <body>
        <?php include "../includes/admin_nav.php"; ?>
        <div class="columns group mb-0">
        
            <div class="column is-3 mt-3 pt-2 ml-2 mr-0 pl-2 pr-2">
                <fieldset>
                    <legend><b>Profile Details:</b></legend>
                    <div class="row has-text-centered ml-1 mr-1 mb-1">
                        <img src="../images/users/admin.jpg" alt="image" class="image" >              
                    </div>            
                    <table style="font-family:Candara;">
                        <tr>
                            <td style="font-weight:600;">Admin ID</td>
                            <td>AD_01</td>
                        </tr>
                        <tr>
                            <td style="font-weight:600;">Admin Name</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td style="font-weight:600;">Admin Email</td>
                            <td>admin123@gmail.com</td>
                        </tr>
                        <tr>
                            <td style="font-weight:600;">Contact No.</td>
                            <td>011-5894236</td>
                        </tr>
                        <tr>
                            <td style="font-weight:600;">Admin Type</td>
                            <td>Admin</td>
                        </tr>
                    </table> 
                </fieldset>
            </div>
            
            <div class="column is-8 mt-0 ml-2 pl-1 pr-1">
            <h1 style="text-align:center; font-size: 30px; margin-bottom:0;">ADMIN DASHBOARD</h1>
                <div class="row mt-2 ml-0 mr-0">
                    <div class="card pl-1 pr-1 ml-0 mr-0 pt-1 pb-1">
                        <h2 id="title" class="has-text-left pl-1">User Management</h2>
                        <div class="columns group has-text-centered">
                            <div class="column is-3 pl-0 has-text-centered">
                                <img src="../images/users/co-admin.png" alt="image" class="image">
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/co-admin_mgt.php';">Co-Admin Management</button>
                            </div>
                            <div class="column is-3 pl-0 has-text-centered">
                                <img src="../images/users/farmer2.jpg" alt="image" class="image">
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/seller_view.php';">Seller Management</button>                               
                            </div>
                            <div class="column is-3 pl-0 has-text-centered">
                                <img src="../images/users/customer.jpg" alt="image" class="image">
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/customer_view.php';">Customer Management</button> 
                                
                            </div>
                            <div class="column is-3 pl-0 has-text-centered">
                                <img src="../images/users/deliverer.jpg" alt="image" class="image">
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/deliverer_view.php';">Delieverer Management</button> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2 ml-0 mr-0">
                    <div class="card pl-1 pr-1 ml-0 mr-0 pt-1 pb-1">
                        <h2 id="title" class="has-text-left pl-1">Sales Records</h2>
                        <div class="columns group has-text-centered">
                            <div class="column is-3 pl-0 has-text-centered">
                                <img src="../images/prod.jpg" alt="image" class="image">
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/records_products.php';">Product Sales Records</button>
                            </div>
                            <div class="column is-3 pl-0 has-text-centered">
                                <img src="../images/users/farmer4.jpg" alt="image" class="image" >
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/records_seller.php';">Seller Records</button>                               
                            </div>
                            <div class="column is-3 pl-0 has-text-centered">
                                <img src="../images/users/buyer5.jpg" alt="image" class="image" >
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/records_buyer.php';">Buyer Order Records</button>   
                            </div>
                            <div class="column is-3 pl-0 has-text-centered">
                            <img src="../images/users/deliverer2.jpg" alt="image" class="image">
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/records_deliverer.php';">Delieverer Records</button> 
                            </div>
                        </div>
                        <div class="columns group has-text-centered mt-1">
                            <div class="column is-4 pl-1 pr-0 has-text-centered">
                            <img src="../images/marketing.jpg" alt="image" class="image" >
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/records_ads.php';">Advertisement Records</button>
                            </div>
                            <div class="column is-4 pl-1 pr-0 has-text-centered">
                            <img src="../images/bid.jpg" alt="image" class="image" >
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/records_bidding.php';">Auction Records</button>                               
                            </div>
                            <div class="column is-4 pl-1 pr-1 has-text-centered">
                                <img src="../images/pay.jpg" alt="image" class="image" >
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/records_payment.php';">Payment Records</button>                               
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="row mt-2 ml-0 mr-0">
                    <div class="card pl-1 pr-1 ml-0 mr-0 pt-1 pb-1">
                        <h2 id="title" class="has-text-left pl-1">Reports</h2>
                        <div class="columns group has-text-centered mt-0 pt-0">
                            <div class="column is-2 pl-0 has-text-centered"></div>

                            <div class="column is-4 pl-0 has-text-centered">
                            <img src="../images/forum.jpg" alt="image" class="image" >
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/forum_admin.php';">Forum Reports</button>                               
                            </div>
                            <div class="column is-4 pl-0 has-text-centered">
                            <img src="../images/feedbk.jpg" alt="image" class="image" >
                                <button class="card-button" onClick="location.href='http://localhost/vegemart/public/admin/helpdesk_admin.php';">Help Desk</button>                        
                            </div>

                            <div class="column is-2 pl-0 has-text-centered"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-1 ml-0 mr-0"></div>
        </div>
        <br>
    </body>
</html>