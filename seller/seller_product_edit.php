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
    <link rel="stylesheet" type="text/css" href="../css/seller-product-edit.css">
    <title>Update Product</title>
</head>
    <body>
        <?php include "../includes/logout-nav.php"; ?>  
        <?php   
        //$userID = $_SESSION["loggedInSellerID"];
        $productID = $_GET['id'];
        $selectproduct = "SELECT * FROM `products` WHERE productID='".$productID."'";

        $productQuery = mysqli_query($con,$selectproduct);

        while($row = mysqli_fetch_assoc($productQuery)){
            echo " 
            <div class=\"row\">
                <div class=\"columns group\">
                    <div class=\"column is-1 pl-1 pr-1\"></div>
                    <div class=\"column is-10 pl-1 pr-1\">
                        <div class=\"row\">
                            <div class=\"updateForm\">
                                <h2>Update Product</h2><br>
                                <form id=\"UpdateProduct\" action=\"seller_product_edit_submit.php\" method=\"post\" enctype=\"multipart/form-data\">
                                <div class=\"columns group\">
                                    <div class=\"column is-2 pl-1\">
                                        <div class=\"image-row\">
                                            <img class=\"item-img\" src= \"../images/products/{$row['imageName']}\"> <br>
                                            <label for=\"image\">Dispaly Picture</label><br>
                                            <input type=\"file\" class=\"image-input\" id=\"fileToUpload\" name=\"fileToUpload\"/><br>                                
                                        </div>
                                    </div>
                                    <div class=\"column is-5 pl-1\">
                                        <div class=\"input-row\">
                                            <label for=\"productName\">Product Name:</label>
                                            <input type=\"text\" class=\"input-box\" id=\"productName\" name=\"editProductName\" placeholder=\"Product Name\" value=\"{$row['name']}\" required/><br>
                                        </div>
                                        <div class=\"input-row\">                                              
                                            <label for=\"quantity\">Quantity (kg):</label>
                                            <input type=\"text\" class=\"input-box\" id=\"quantity\" name=\"editQuantity\" placeholder=\"Quantity\" value=\"{$row['quantity']}\" required/><br>
                                        </div>
                                        <div class=\"input-row\">                                               
                                            <label for=\"minPrice\">Minimum price per unit(Rs):</label>
                                            <input type=\"text\" class=\"input-box\" id=\"minPrice\" name=\"editMinPrice\" placeholder=\"Minimum price\" value=\"{$row['minPrice']}\" required/><br>
                                        </div>
                                        <div class=\"input-row\">                                               
                                            <label for=\"address\">Address:</label>
                                            <input type=\"text\" class=\"input-box\" id=\"address1\" name=\"editAddress1\" placeholder=\"Address line 1\" value=\"{$row['address1']}\" required /><br>
                                        </div>
                                        <div class=\"input-row\">   
                                            <label for=\"address\"></label>                                            
                                            <input type=\"text\" class=\"input-box\" id=\"address2\" name=\"editAddress2\" placeholder=\"Address line 2\"  value=\"{$row['address2']}\" required/><br>
                                        </div>
                                        <div class=\"input-row\">   
                                            <label for=\"address\"></label>                                             
                                            <input type=\"text\" class=\"input-box\" id=\"city\" name=\"editCity\" placeholder=\"City\"  value=\"{$row['city']}\" required/><br> 
                                        </div>
                                    </div>
                                    <div class=\"column is-5 pl-1\">
                                    <p>For advertisements fill the below</p>
                                        <div class=\"input-row\">
                                            <label for=\"ad\">Advertisement</label>
                                            <input type=\"checkbox\" id=\"ad\" name=\"ad\" value=\"ad\"/>                                 
                                        </div>
                                        <div class=\"input-row\">                                              
                                            <label for=\"date\">Date of product availability:</label>
                                            <input type=\"date\" class=\"input-box\" id=\"date\" name=\"date\" id=\"date\"><br>
                                        </div>
                                        <div class=\"input-row\">   
                                            <label for=\"description\">Description</label>   <br> 
                                            <textarea rows=\"5\" cols=\"30\" name=\"Description\" form=\"UpdateProduct\">Product descripiton</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                <br>
                                    <input class=\"form-button\"  type=\"submit\" name=\"submit\" value=\"Save\">
                                    <input class=\"form-button\" type=\"button\" name=\"cancel\" onclick=\"window.location.replace('seller_home.php')\" value=\"Cancel\">                                           
                                    <a style=\"color:#3e8e41; font-size:16px; margin-top:10%;\" href=\"#\">Delete Product</a>
                                    </div>
                                </form>
                                <h3 class=\"error-msg\"><?php include_once('../includes/message.php'); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"column is-1 pl-1 pr-1\"></div>
                </div>
            </div>";
        }     
    ?>                         
    </body>
</html>