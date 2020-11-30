<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/order-done.css">
        <link rel="stylesheet" type="text/css" href="./css/progress-bar.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <title>Order Complete | Vegemart</title>
    </head>
    <body>  
        <?php include "./includes/nav.php"; ?>
        <div class="columns group mb-0">
            <div class="column is-2"></div>
            <div class="column is-8 mt-2 mb-0">
                <section>
                    <ol class="progress-bar">
                        <li class="is-complete"><span>Shopping Cart</span></li>  
                        <li class="is-complete"><span>Confirmation</span></li>  
                        <li class="is-complete"><span>Payment</span></li>
                        <li class="is-active"><span>Finish</span></li>    
                    </ol>
                </section>
            </div>
            <div class="column is-2"></div>
        </div>

        <div class="row">
            <div class="columns group mt-0 mb-1">
                <div class="column is-3 mt-0"></div>
                <div class="column is-6 mt-0">
                    <div class="flip-card-3D-wrapper mt-0 pt-0">
                        <div id="flip-card">
                            <div class="flip-card-front">
                                <img class="typic mt-1 pt-1" src="https://www.flaticon.com/svg/static/icons/svg/1145/1145941.svg">
                                <h2 class="title mt-0">We recieved your Order!</h2>
                                <p>Thank you for placing order <a href="#">#1656346</a></p>
                                <p>Don't forget to rate the seller and give feedback once you recieve your items</p>
                                <p>If you have any questions or queries feel free to contact us at the Vegemart help desk </p>
                                
                                <button class="button" id="flip-card-btn-turn-to-back">Proceed to map<i class="fa fa-hand-o-right pl-1" style="font-weight:500; color:#138D75;"></i></button><br>
                                                
                                <img class="logo mt-2 mb-1" src="http://localhost/vegemart/public/images/logob.png">                
                                                      
                            </div>
                            <div class="flip-card-back">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe width="100%" height="120%" id="gmap_canvas" src="https://maps.google.com/maps?q=125%20pilimathalawa%20kandy&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                               
                                    </div>
                                </div>
                                <div class="columns group mt-1 mb-1">
                                    <div class="column is-6 mt-0 pl-2 pb-0">
                                        <h2 style="text-align:left; padding-bottom:0;">Conditions:</h2>
                                        <p style="text-align:left;">Pickup location is shown in the map</p>
                                        <p style="text-align:left;">Self Pickup should be done before 8pm</p>
                                    </div>
                                    <div class="column is-6 mt-0 has-text-left pb-0 pl-2">
                                        <h2 style="text-align:left; padding-bottom:0;">Seller</h2>
                                        <h3 style="text-align:left;">Anushka Darshana</h3>
                                        <p style="text-align:left;">No. 44,</p>
                                        <p style="text-align:left;">D. M. Rupasinghe mawatha,</p>
                                        <p style="text-align:left;">Badulla</p>   
                                    </div>
                                </div>
                                <button class="button" id="flip-card-btn-turn-to-front"><i class="fa fa-hand-o-left pr-1" style="font-size:22px; font-weight:500; color:#138D75;"></i>flip to front</button> 
                            </div>
                        </div>
                    </div>
                    <a id="ab" href="http://localhost/vegemart/public/products.php"><i class="fa fa-hand-o-left pr-1" style="font-weight:500; color:#138D75;"></i>Continue shopping</a>
                    <br>
                </div>
                <div class="column is-3 mt-0"></div>
            </div>
        </div>
        <br>
        <script>
            document.addEventListener('DOMContentLoaded', function(event) {

            document.getElementById('flip-card-btn-turn-to-back').style.visibility = 'visible';
            document.getElementById('flip-card-btn-turn-to-front').style.visibility = 'visible';

            document.getElementById('flip-card-btn-turn-to-back').onclick = function() {
            document.getElementById('flip-card').classList.toggle('do-flip');
            };

            document.getElementById('flip-card-btn-turn-to-front').onclick = function() {
            document.getElementById('flip-card').classList.toggle('do-flip');
            };

            });
        </script>
    <?php include_once "./includes/footer.php"; ?>      
    </body>
</html>
            