<?php
    include ('../config/dbconfig.php');
    include ('../src/session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost/vegemart/public/images/logo.png" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="./css/shopping-cart.css">
        <link rel="stylesheet" type="text/css" href="./css/progress-bar.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <title>Shopping Cart | Vegemart</title>
    </head>
    <body>  
    <?php include "./includes/nav.php"; ?>  
        <div class="row">
            <div class="columns group mt-0">
                <div class="column is-8 mt-0 pt-2">
                    <div class="row pl-2 pr-1 mt-0">
                        <div class="heading">
                            <h1 id="title"><i class="fa fa-shopping-cart" style="font-size:35px; padding-right:20px;"></i>Shopping Cart</h1>
                            
                        </div>
                        <br>
                        <div class="items-grid ml-1 mr-1 mt-0">
                            <div class="row item-legend has-text-centered mt-0\">
                                <div class="columns group">
                                    <div class="column is-3">
                                        <h2></h2>
                                    </div>
                                    <div class="column is-2">
                                        <h2>Item</h2>
                                    </div>
                                    <div class="column is-2">
                                        <h2>Bid Price (Rs.)</h2>
                                    </div>
                                    <div class="column is-3">
                                        <h2>Bid Quantity (grams)</h2>
                                    </div>
                                    <div class="column is-2">
                                        <h2>Total (Rs.)</h2>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION["loggedInUserID"])) {
                            $userID = $_SESSION["loggedInUserID"];
                        }
                            $items = "SELECT * FROM cart WHERE userID='$userID';";    
                            $itemQuery=mysqli_query($con,$items);
                            $total=0;
                            $count=0;
                            while ($rowItems = mysqli_fetch_assoc($itemQuery)) {
                                $productID=$rowItems['productID']; 
                                $bid = "SELECT * FROM bidding WHERE productID='$productID' AND amount=(SELECT MAX(amount) AS amount FROM bidding WHERE productID='$productID');";    
                                $bidQuery=mysqli_query($con,$bid);
                                while ($rowBid  = mysqli_fetch_assoc($bidQuery)) { 
                                    $total=$total+($rowBid['amount']);
                                    $count=$count+1;                                    
                                    $product = "SELECT * FROM products WHERE productID='$productID';"; 
                                    $productQuery=mysqli_query($con,$product);                                
                                    while ($rowProduct = mysqli_fetch_assoc($productQuery)) {           
                        ?>
                        <div class="item-table pl-1 pr-1 mt-0">
                            <div class="row item-row has-text-centered mb-0">
                                <div class="columns group">
                                    <div class="column is-3">
                                        <img class="item-img" src="http://localhost/vegemart/public/images/products/<?php echo $rowProduct['imageName']?>">
                                    </div>
                                    <div class="column is-2">
                                        <h3><?php echo $rowProduct['name']?></h3>
                                    </div>
                                    <div class="column is-2">
                                        <h3><?php echo $rowBid['bidPrice']?>.00</h3>
                                    </div>
                                    <div class="column is-3">
                                        <h3><?php echo $rowBid['bidQuantity']?></h3>
                                    </div>
                                    <div class="column is-2">
                                        <h3><?php echo $rowBid['amount']?>.00</h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        }
                        ?>
                        
                    </div>
                    <br><br>
                    <a id="ab" href="http://localhost/vegemart/public/products.php"><i class="fa fa-hand-o-left pr-1" style="font-size:22px; font-weight:500; color:#3e8e41;"></i>Continue shopping</a>
                </div>

                <div class="column is-4 pl-0 mt-0 pt-2 " id="ordersum">
                    <div class="row pl-1 pr-1 mt-0">
                        <div class="heading">
                            <h1 id="title">Order Summary</h1>
                            
                        </div>
                        <br>
                        <div class="items-gridmt-0">
                            <div class="row mt-0\">
                                <div class="columns group">
                                    <div class="column is-6 pr-2">
                                        <h2 style="text-align:left;">Item Count</h2>
                                    </div>
                                    <div class="column is-6 pr-1">
                                        <h2 style="text-align:right;"><?php echo "$count"?></h2>
                                    </div>                                 
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="item-table mt-0">
                            <div class="row item-row mb-0">
                                <div class="columns group">
                                    <div class="column is-5 pr-3">
                                        <h1 style="text-align:left;font-size: 20px;">Total</h1>
                                    </div>
                                    <div class="column is-7">
                                        <h1 style="text-align:right;font-size: 20px;">Rs. <?php echo "$total"?>.00</h1>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <?php
                        $productID = "SELECT * FROM cart WHERE userID='$userID' LIMIT 1;";    
                        $productIDQuery=mysqli_query($con,$productID);
                        while ($rowProductID = mysqli_fetch_assoc($productIDQuery)) {?>
                    <button class="button" onClick="location.href='http://localhost/vegemart/public/order_confirm.php?id=<?php echo $rowProductID['productID']?>';">Checkout</button><br>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
   
        <br>
        <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>