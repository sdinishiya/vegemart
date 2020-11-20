<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/shopping-cart.css">
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
                                        <h2>Unit Price (Rs.)</h2>
                                    </div>
                                    <div class="column is-3">
                                        <h2>Quantity (kg)</h2>
                                    </div>
                                    <div class="column is-2">
                                        <h2>Total (Rs.)</h2>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="item-table pl-1 pr-1 mt-0">
                            <div class="row item-row has-text-centered mb-0">
                                <div class="columns group">
                                    <div class="column is-3">
                                        <img class="item-img" src="../images/products/tomato.jpg">
                                    </div>
                                    <div class="column is-2">
                                        <h3>Potato</h3>
                                    </div>
                                    <div class="column is-2">
                                        <h3>50.00</h3>
                                    </div>
                                    <div class="column is-3">
                                        <h3>0.5</h3>
                                    </div>
                                    <div class="column is-2">
                                        <h3>100.00</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="columns group">
                                    <div class="column is-3">
                                        <img class="item-img" src="../images/products/potato.jpg">
                                    </div>
                                    <div class="column is-2">
                                        <h3>Potato</h3>
                                    </div>
                                    <div class="column is-2">
                                        <h3>50.00</h3>
                                    </div>
                                    <div class="column is-3">
                                        <h3>0.5</h3>
                                    </div>
                                    <div class="column is-2">
                                        <h3>100.00</h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <a id="ab" href="index.php"><i class="fa fa-hand-o-left pr-1" style="font-size:22px; font-weight:500; color:#3e8e41;"></i>Continue shopping</a>
                </div>

                <div class="column is-4 pl-0 mt-0 pt-2" id="orderdiv">
                    <div class="row pl-3 pr-3 mt-0">
                        <div class="heading">
                            <h1 id="title">Order Summary</h1>
                            
                        </div>
                        <br>
                        <div class="items-grid ml-1 mr-1 mt-0">
                            <div class="row mt-0\">
                                <div class="columns group">
                                    <div class="column is-6 pl-2">
                                        <h2 style="text-align:left;">Item Count</h2>
                                    </div>
                                    <div class="column is-6 pr-2">
                                        <h2 style="text-align:right;">2</h2>
                                    </div>                                 
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="item-table pl-1 pr-1 mt-0">
                            <div class="row item-row mb-0">
                                <div class="columns group">
                                    <div class="column is-6 pl-2">
                                        <h1 style="text-align:left;font-size: 20px;">Total</h1>
                                    </div>
                                    <div class="column is-6 pr-2">
                                        <h1 style="text-align:right;font-size: 20px;">200.00</h1>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button class="button" onClick="location.href='http://localhost/vegemart/public/confirm_order.php';">Checkout</button><br>
                </div>
            </div>
        </div>
        <br>
        <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>