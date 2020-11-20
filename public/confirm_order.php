<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/confirm-order.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <title>Confirm Order | Vegemart</title>
    </head>
    <body>  
        <?php include "./includes/nav.php"; ?>

        <div class="row">
            <div class="heading">
                <h1>Confirm Order</h1>
            </div>
            <div class="columns group mt-0">
                <div class="column is-2 mt-0"></div>

                <div class="column is-8 mt-0">
                    <div class="row pl-2 pr-2 mt-0"> 
                        <div class="card">
                            <div class="columns group pt-2 pb-2 pl-1 pr-1">
                                <div class="column is-6">
                                    <h1 class="has-text-left pl-1" id="title">Your Items</h1>
                                    <div class="item-table pl-1 pr-1 mt-0">
                                        <div class="row item-row has-text-centered mt-0 mb-0">
                                            <hr>
                                            <div class="columns group">
                                                <div class="column is-4">
                                                    <img class="item-img" src="../images/products/tomato.jpg">
                                                </div>
                                                <div class="column is-4">
                                                    <h2 style="font-size:16px;">Tomato</h2>
                                                </div>
                                                <div class="column is-4">
                                                    <h2 style="font-size:16px;">100.00</h2>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="columns group">
                                                <div class="column is-4">
                                                    <img class="item-img" src="../images/products/potato.jpg">
                                                </div>
                                                <div class="column is-4">
                                                    <h2 style="font-size:16px;">Potato</h2>
                                                </div>
                                            
                                                <div class="column is-4">
                                                    <h2 style="font-size:16px;">100.00</h2>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-6 mt-0">
                                    <div class="row mt-0" id="receipt">
                                        <div class="columns group">
                                            <div class="column is-6 pl-2">
                                                <h2 style="text-align:left;">Sub Total</h2>
                                                <h2 style="text-align:left;">Delivery Charge</h2>
                                                <h1 style="text-align:left;font-size: 20px;">Total</h1>
                                            </div>
                                            <div class="column is-6 pr-2">
                                                <h2 style="text-align:right;">200.00</h2>
                                                <h2 style="text-align:right;">50.00</h2>
                                                <h1 style="text-align:right;font-size: 20px;">250.00</h1>
                                            </div>                                 
                                        </div>
                                        <form method="POST" action="https://sandbox.payhere.lk/pay/checkout">   
                                            <input type="hidden" name="merchant_id" value="1215900">    <!-- Replace your Merchant ID -->
                                            <input type="hidden" name="return_url" value="http://localhost/vegemart/buyer/order_done.php">
                                            <input type="hidden" name="cancel_url" value="http://localhost/vegemart/buyer/confirm_order.php">
                                            <input type="hidden" name="notify_url" value="http://localhost/vegemart/buyer/payment.php">  
                                    
                                            <input type="text" name="order_id" value="1" style="display: none;">
                                            <input type="text" name="items" value="Door bell wireless" style="display: none;"><br>
                                            <input type="text" name="currency" value="LKR" style="display: none;">
                                            <input type="text" name="amount" value="250" style="display: none;">  
                                            
                                            <input type="text" name="first_name" value="Saman" style="display: none;">
                                            <input type="text" name="last_name" value="Perera" style="display: none;"><br>
                                            <input type="text" name="email" value="samanp@gmail.com" style="display: none;">
                                            <input type="text" name="phone" value="0771234567" style="display: none;"><br>
                                            <input type="text" name="address" value="No.1, Galle Road" style="display: none;">
                                            <input type="text" name="city" value="Colombo" style="display: none;">
                                            <button class="button" type="submit">Pay</button><br>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <br>
                    <div class="row mt-0"> 
                        <div class="columns group mt-0">
                            <div class="column is-6 mt-0">
                                <div class="row pl-2 pr-2 mt-0"> 
                                    <div class="card" style="cursor: pointer;" onclick="location.href='./payment.php';">
                                        <div class="row pl-2 pr-2 mt-0 has-text-centered"> 
                                            <h1 class="has-text-centered" id="title">Delivery</h1>
                                            <div class="image-row has-text-centered">
                                                <img class="img" src="../images/deli1.jpg">
                                            </div>

                                            <p>Delivery is provided within the district only</p>

                                            <div class="columns group pl-0 pr-0">                                                                      
                                                <div class="column is-6 mb-0">
                                                    <h3 class="mb-0 mt-0" style="text-align:left;"> Pickup Location:</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3><br>    

                                                    <h3 class="mb-0 mt-0" style="text-align:left;"> Drop Location:</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3><br>    

                                                    <h3 class="mb-0 mt-0" style="text-align:left;"> Time:</h3>                                          
                                                </div>
                                                <div class="column is-6 has-text-left pl-0 pb-3 mb-0">
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">22/A</h3>
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">D. M. Rupasinghe Mawatha,</h3>
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">Badulla</h3><br>   

                                                    <h3 class="mb-0 mt-0" style="text-align:left;">11/B</h3>
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">E.L. Perera Mawatha</h3>
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">Badulla</h3><br>  

                                                    <h3 class="mb-0 mt-0" style="text-align:left;">Between 4.00 p.m - 6.00 p.m</h3>                                               
                                                </div>                                           
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6 mt-0">
                                <div class="row pl-2 pr-2 mt-0"> 
                                    <div class="card" style="cursor: pointer;" onclick="location.href='./payment.php';">
                                        <div class="row pl-2 pr-2 mt-0 has-text-centered"> 
                                            <h1 class="has-text-centered" id="title">Self Pickup</h1>
                                            <div class="image-row has-text-centered">
                                                <img class="img" src="../images/pick.jpg">
                                            </div>

                                            <p>Delivery is provided within the district only</p>

                                            <div class="columns group pl-0 pr-0">                                                                      
                                                <div class="column is-6 pr-0 mb-0">
                                                    <h3 class="mb-0 mt-0" style="text-align:left;"> Pickup Location:</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3>
                                                    <h3 class="mb-0 mt-0" style="color:white;">break</h3><br>                                                 

                                                    <h3 class="mb-0 mt-0" style="text-align:left;"> Time:</h3>                                          
                                                </div>
                                                <div class="column is-6 has-text-left pl-0 pb-3 mb-0">
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">address 1</h3>
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">D. M. Rupasinghe mawatha,</h3>
                                                    <h3 class="mb-0 mt-0" style="text-align:left;">Badulla</h3><br>   

                                                    <h3 class="mb-0 mt-0" style="text-align:left;">Please pickup before 7.00 p.m</h3>                                               
                                                </div>                                           
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="column is-2 mt-0"></div>
            </div>
        </div>

        <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>