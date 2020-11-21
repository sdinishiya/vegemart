<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/order-confirm.css">
        <link rel="stylesheet" type="text/css" href="./css/progress-bar.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <title>Confirm Order | Vegemart</title>
    </head>
    <body>  
        <?php include "./includes/nav.php"; ?>
        <div class="columns group mb-0">
            <div class="column is-2"></div>
            <div class="column is-8 mt-2 mb-0">
                <section>
                    <ol class="progress-bar">
                        <li class="is-complete"><span>Shopping Cart</span></li>  
                        <li class="is-active"><span>Confirmation</span></li>  
                        <li><span>Payment</span></li>
                        <li><span>Finish</span></li>    
                    </ol>
                </section>
            </div>
            <div class="column is-2"></div>
        </div>

        <div><h1 class="mt-0 pt-0 ml-4 has-text-left" id="title">Confirm Order</h1></div>
        
        <div class="columns group mb-0">
            <div class="column is-1"></div>
            <div class="column is-5 pl-2 pr-2">
                <div class="image-row has-text-centered">
                    <img class="map" src="http://localhost/vegemart/public/images/map.jpg">
                </div>
                <!-- <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="%" id="gmap_canvas" src="https://maps.google.com/maps?q=badulla%20badulla&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                               
                    </div>
                </div> -->
            </div>
            <div class="column is-5 pl-3 mt-0 ">
                <div class="row has-text-left pb-0">
                    <h2 style="text-align:left; font-size:20px; padding-bottom:0;">Conditions:</h2>
                    <p style="text-align:left;">Pickup location is shown in the map</p>
                    <p style="text-align:left;">Delievery is available within the same day</p>
                    <p style="text-align:left;">A fixed Amount (Rs.30.00) will be charged for delivery of packages under 5kg</p>
                    <p style="text-align:left;">Self Pickup should be done before 8pm</p>
                    <br>
                </div>
                <div class="row">
                    <div class="columns group">
                        <div class="column is-4 has-text-left">
                            <h3 class="mb-1 mt-0" style="text-align:left;">Seller Contact No:</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;">Pickup Location:</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;"></h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;"></h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;"></h3><br><br><br> 

                            <h3 class="mb-0 mt-0" style="text-align:left;">Drop Location:</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;"></h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;"></h3><br> 
                        </div>
                        <div class="column is-8 pr-2 has-text-left">
                            <h3 class="mb-1 mt-0" style="text-align:left;">0711234567</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;">22/A</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;">D. M. Rupasinghe Mawatha,</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;">Badulla</h3><br> 

                            <h3 class="mb-0 mt-0" style="text-align:left;">11/B</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;">E.L. Perera Mawatha</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left;">Badulla</h3><br>  
                        </div>
                    </div>
                </div>    
            </div>
            <div class="column is-1"></div>
        </div>
        
        <div class="columns group mt-0 mb-0">
            <div class="column is-1"></div>
            <div class="column is-5 mt-0 pl-2 has-text-centered">
                <div class="card">
                    <div class="item-table pl-1 pr-1 ml-1 mr-1 mt-0">
                    <h1 class="has-text-left pl-1" id="title">Your Items</h1>
                        <div class="row item-row has-text-centered mt-0 mb-0">               
                            <div class="columns group mt-0">
                                <div class="column is-4">
                                    <img class="item-img" src="http://localhost/vegemart/public/images/products/tomato.jpg">
                                </div>
                                <div class="column is-4">
                                    <h3>Tomato</h2>
                                </div>
                                <div class="column is-4">
                                    <h3>100.00</h2>
                                </div>
                            </div>
                            <div class="columns group">
                                <div class="column is-4">
                                        <img class="item-img" src="http://localhost/vegemart/public/images/products//potato.jpg">
                                </div>
                                <div class="column is-4">
                                    <h3>Potato</h2>
                                </div>
                                <div class="column is-4">
                                    <h3>100.00</h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="columns group mt-1">    
                            <div class="column is-8 pl-2 has-text-left">
                                <h2 style="text-align:left;">Sub Total</h2>
                                <h2 style="text-align:left;">Delivery Charge</h2>
                                <h1 style="text-align:left;">Total</h1>
                            </div>
                            <div class="column is-4 pr-2 has-text-right">
                                <h2 style="text-align:right;">200.00</h2>
                                <h2 style="text-align:right;">50.00</h2>
                                <h1 style="text-align:right;">250.00</h1>
                            </div>
                        </div>
                    </div>
                    <div class="payhere has-text-centered">
                        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
                            <input type="hidden" name="merchant_id" value="1215900" style="display: none;"> <!-- Replace your Merchant ID -->
                            <input type="hidden" name="return_url" value="http://localhost/vegemart/public/order_done.php" style="display: none;">
                            <input type="hidden" name="cancel_url" value="http://localhost/vegemart/public/order_confirm" style="display: none;">
                            <input type="hidden" name="notify_url" value="http://localhost/vegemart/public/payment.php" style="display: none;">

                            <input type="text" name="order_id" value="ItemNo12345" style="display: none;">
                            <input type="text" name="items" value="Vegemart Cart" style="display: none;">
                            <input type="text" name="currency" value="LKR" style="display: none;">
                            <input type="text" name="amount" value="250" style="display: none;">

                            <input type="text" name="first_name" value="Imashi" style="display: none;">
                            <input type="text" name="last_name" value="Dissanayaka" style="display: none;">
                            <input type="text" name="email" value="hello@imashi.me" style="display: none;">
                            <input type="text" name="phone" value="0771234567" style="display: none;">
                            <input type="text" name="address" value="No.1, Gampola Road, Kandy" style="display: none;">
                            <input type="text" name="city" value="Colombo" style="display: none;">
                            <input type="hidden" name="country" value="Sri Lanka" style="display: none;">
                            <button class="button" type="submit">Pay</button>
                        </form>
                    </div>  
                </div>
            </div>
            <div class="column is-6 mt-1 ml-1">
                <div class="columns group">
                    <div class="column is-5 mt-1">
                        <div class="image-row has-text-centered">
                            <img class="img" src="http://localhost/vegemart/public/images/order_deli.jpg">
                        </div>
                    </div>    
                    <div class="column is-7 has-text-left mt-1"> 
                        <label for="delivery">Delivery</label>
                        <input style="text-align:left;" type="checkbox" id="title" name="delivery" value="delivery">     
                        <p>Delivery is provided within the district only</p>                                           
                    </div>                               
                </div>

                <div class="columns group">
                    <div class="column is-5">
                        <div class="image-row has-text-centered">
                            <img class="img" src="http://localhost/vegemart/public/images/order_pick.jpg">
                        </div>
                    </div>    
                    <div class="column is-7 has-text-left mt-1"> 
                        <label for="selfpick">Self Pickup</label>
                        <input style="text-align:left;" type="checkbox" id="title" name="selfpick" value="selfpick">
                        <p>Please pickup during the day of purchase</p>                                             
                    </div>                               
                </div>
            </div>
        </div><br>

        <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>