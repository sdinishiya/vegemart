<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/seller-home.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <title>Seller Dashboard | Vegemart</title>
    </head>

    <body>
        <?php include "./seller_nav.php"; ?>
        <div class="row">
            <div class="heading">
                <h1>Vegemart Seller</h1>
            </div>
            <div class="columns group mt-0">
                <div class="column is-8 mt-0">
                    <div class="row pl-2 pr-2 mt-0">
                    <h1 id="title">Seller Profile</h1>
                        <div class="user-card">
                            <div class="columns group">                            
                                <?php
                                    include ('../../src/seller/seller_dashboard/seller_details.php');
                                ?>                            
                            </div>
                            <div class="row has-text-right mt-2 mb-1 mr-1">
                                <button class="button" onClick="location.href='http://localhost/vegemart/public/seller/seller_profile_edit.php';"><i class="fas fa-cog mr-1"></i>Edit Profile</button>
                            </div>
                        </div>
                        </div>
                    <br/>
                
                    <div class="items-grid pl-1 pr-2 mt-0">
                        <div class="row item-legend has-text-centered mt-0">
                        <h1 id="title" style="padding-bottom:0;">Available products</h1>
                            <div class="columns group">
                                <div class="column is-3">
                                    <h4></h4>
                                </div>
                                <div class="column is-2">
                                    <h4>Item</h4>
                                </div>
                                <div class="column is-2">
                                    <h4>Unit Price (Rs.)</h4>
                                </div>
                                <div class="column is-2">
                                    <h4>Quantity (kg)</h4>
                                </div>
                                <div class="column is-3">
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                            include ('../../src/seller/seller_dashboard/product_details.php');
                        ?>
                    
                        <div id="addProduct">
                            <button class="button" onClick="location.href='http://localhost/vegemart/public/seller/seller_product_add.php';">Add New Product</button>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="row pl-1 pr-3">
                    <h1 id="title" style="text-align:center;">Reviews from Customers</h1>
                        <div class="user-data pt-1 pb-1">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/1484/1484836.svg" class="user-image" alt="Use Image">
                            <h2>4.3</h2>
                            <div class="rating-block">
                                <i class="fas fa-star star-colored"></i>
                                <i class="fas fa-star star-colored"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <?php
                            include ('../../src/seller/seller_dashboard/reviews.php');
                            include ('./seller_dashboard/give_reviews.php');
                        ?>                      
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "../includes/footer.php"; ?> 
    </body>
</html>