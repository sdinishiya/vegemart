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
        <title> Admin Dashboard | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin-logout-nav.php"; ?>
        </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col-6">
        <h1>ADMIN DASHBOARD </h1></div>
    </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col-6">
        <div class="col-0"></div>
            <img src="../images/users/admin.jpg" alt="image" class="image" >
        </div>
    </div>

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <h4>User management (e.g adding, deleting, creating groups, enabling/disabling user privileges etc.)
        Content management (i.e. so-called CRUD: create, read, update, and delete)
        Export/import of data (i.e. basic integration with other systems)
        Optional: payment system (either third-party or custom) </h4></div>
    </div>

    <!--sub topic begins-->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-8">

            <div class="col-3">
            <div class="container">
                <img src="../images/users/user1.jpg" alt="image" class="image" >
                        <a href="user-mgt.php" class="button">User Management</a>
                    </div>  
            </div>

            <div class="col-3">
            <div class="container">
                <img src="../images/users/sales-rec1.jpg" alt="image" class="image" >
                        <a href="sales.php" class="button">Sales Records</a>
                    </div> 
            </div>

            <div class="col-3">
            <div class="container">
                <img src="../images/users/report2.jpg" alt="image" class="image">
                        <a href="report.php" class="button">Report</a>
                    </div>  
            </div>
            </div>
            <!--sub topic ends-->
        </div>
    </body>
    </html>