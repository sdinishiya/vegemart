<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/vegemart/public/images/logo.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="../css/seller-product-edit.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css"> 
    <script src="../jquery-3.5.1.min.js"></script>   
    <title>Add New Product</title>
</head>
    <body>
        <?php include "./seller_nav.php"; ?> 
        
        <div class="row">
            <div class="columns group">
                <div class="column is-3 pl-1 pr-1"></div>
                <div class="column is-6 pl-1 pr-1">
                    <div class="row">
                        <div class="updateForm">
                            <h2 style="font-size:20px;">Add Product</h2><br>
                            <form id="addProduct" name="addProduct" action="../../src/seller/seller_product_add_submit.php" method="post" enctype="multipart/form-data">
                            <div class="columns group">
                                <div class="column is-12 pl-2 pr-2">
                                    <div class="input-row">                                  
                                        <label for="product">Product Name</label>                                        
                                        <select name="productName" form="addProduct">
                                            <option value="Beans">Beans</option>
                                            <option value="Beetroot">Beetroot</option>
                                            <option value="Broccoli">Broccoli</option>
                                            <option value="Cabbage">Cabbage</option>
                                            <option value="Carrot">Carrot</option>
                                            <option value="Cucumber">Cucumber</option>
                                            <option value="Eggplant">Eggplant</option>
                                            <option value="Garlic">Garlic</option>
                                            <option value="Onion">Onion</option>
                                            <option value="Pumpkin">Pumpkin</option>
                                            <option value="Potato">Potato</option>
                                            <option value="Radish">Radish</option>
                                            <option value="Sweetpotato">Sweet Potato</option>             
                                            <option value="Tomato">Tomato</option>                                          
                                        </select>          
                                    </div>
                                    <div class="input-row">                                              
                                        <label for="quantity">Quantity (g):</label>
                                        <input type="number" class="input-box" id="quantity" name="quantity" placeholder="ex: 500" min="250" step="50" required/><br>
                                        type="number" name="quantity"  min="250" step="50"
                                    </div>
                                    <div class="input-row">                                               
                                        <label for="minPrice">Minimum price per unit(Rs):</label>
                                        <input type="text" class="input-box" id="minPrice" name="minPrice" placeholder="ex: 100" required/><br>
                                    </div>

                                    <div class="input-row">                                               
                                        <label for="image">Image:</label>
                                        <input class="image-input has-text-left"type="file" id="fileToUpload" name="fileToUpload" required/><br> 
                                    </div>
                                    <div class="input-row">                                               
                                        <label for="address">Address:</label>
                                    <input type="text" class="input-box" id="address1" name="address1" placeholder="ex: 75/2" required/><br>
                                    </div>
                                    <div class="input-row">   
                                    <label for="address"></label>                                            
                                        <input type="text" class="input-box" id="address2" name="address2"placeholder="ex: Bandarawella road" required/><br>
                                    </div>
                                    <div class="input-row">   
                                        <label for="address"></label>                                             
                                        <input type="text" class="input-box" id="address3" name="city"placeholder="ex: Badulla" required/><br> 
                                    </div>
                                    <div class="input-row">   
                                        <label for="description">Description:</label>                                             
                                        <textarea rows="5" cols="35" name="description" form="addProduct" placeholder="Product description"></textarea>
                                    </div>                               
                                    <div class="input-row">                                              
                                        <label for="date">Date of product Expiration:</label>
                                        <input type="date" class="input-box" name="expirationDate"><br>
                                    </div>                          
                                    <br>
                                    <p>For advertisements please fill the checkbox</p>
                                    <div class="input-row">
                                        <label for="ad">Advertisement</label>
                                        <input type="checkbox" id="ad" name="ad" value="ad" onclick="abc()"/> 
                                    <div class="input-row">                                              
                                        <label for="date" style="display:none;" id="label">Date of product availability:</label>
                                        <input type="date" class="input-box" id="date" name="availableDate" style="display:none;"><br>
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
                <div class="column is-3 pl-1 pr-1"></div>
            </div>
        </div>
    <script>
    function abc(){
        var checkBox=document.getElementById("ad");
        var date=document.getElementById("date"); 
        var label=document.getElementById("label");  
        if(checkBox.checked==true){
            date.style.display="block";
            label.style.display="block";            
        }
        else{
            date.style.display="none"; 
            label.style.display="none";           
        }

    };
    </script>
        
        <?php include_once "../includes/footer.php"; ?>   
    </body>
</html>

