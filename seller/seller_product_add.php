<?php include('../database/dbconfig.php'); ?>
<?php
    if(empty(session_id())){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/seller-product-add.css">
    <title>Add New Product</title>
</head>
    <body>
        <?php include "./seller_nav.php"; ?> 
        <div class="row">
            <div class="columns group">
                <div class="column is-2 pl-1 pr-1"></div>
                <div class="column is-8 pl-1 pr-1">
                    <div class="row">
                        <div class="addForm">
                            <h2>Add Product</h2>
                            <form id="addProduct" name="addProduct" action="seller_product_add_submit.php" method="post" enctype="multipart/form-data">
                            <div class="columns group">
                                <div class="column is-6">
                                    <div class="input-row">
                                        <label for="productName">Product Name:</label>
                                        <input type="text" class="input-box" id="productName" name="productName" placeholder="Product Name" required/><br>
                                    </div>
                                    <div class="input-row">                                              
                                        <label for="quantity">Quantity (kg):</label>
                                        <input type="text" class="input-box" id="quantity" name="quantity" placeholder="Quantity" required/><br>
                                    </div>
                                    <div class="input-row">                                               
                                        <label for="minPrice">Minimum price per unit(Rs):</label>
                                        <input type="text" class="input-box" id="minPrice" name="minPrice" placeholder="Minimum price" required/><br>
                                    </div>

                                    <div class="input-row">                                               
                                        <label for="image">Image:</label>
                                        <input class="image-input"type="file" id="fileToUpload" name="fileToUpload" required/><br> 
                                    </div>
                                    <div class="input-row">                                               
                                        <label for="address">Address:</label>
                                    <input type="text" class="input-box" id="address1" name="address1" placeholder="Address line 1" required/><br>
                                    </div>
                                    <div class="input-row">   
                                    <label for="address"></label>                                            
                                        <input type="text" class="input-box" id="address2" name="address2"placeholder="Address line 2" required/><br>
                                    </div>
                                    <div class="input-row">   
                                        <label for="address"></label>                                             
                                        <input type="text" class="input-box" id="address3" name="city"placeholder="City" required/><br> 
                                    </div>
                                    
                                </div>
                                <div class="column is-6">
                                <p>For advertisements fill the below</p>
                                    <div class="input-row">
                                        <label for="ad">Advertisement</label>
                                        <input type="checkbox" id="ad" name="ad" value="ad"/>                                 
                                    </div>
                                    <div class="input-row">                                              
                                        <label for="date">Date of product availability:</label>
                                        <input type="date" class="input-box" id="date" name="date" id="date"><br>
                                    </div>
                                    <div class="input-row">   
                                        <textarea rows="5" cols="30" name="description" placeholder="Product description" form="addProduct"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <input class="form-button"  type="submit" name="submit" value="Save">
                                <input class="form-button" type="button" name="cancel" onclick="window.location.replace('seller_home.php')" value="Cancel">                                           
                            </div>
                            </form>
                            <h3 class="error-msg"><?php include_once('../includes/message.php'); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="column is-2 pl-1 pr-1"></div>
            </div>
        </div>
    </body>
</html>