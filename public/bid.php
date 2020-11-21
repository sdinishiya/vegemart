<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="images/logo.png" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="./css/bid.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <title>Auction | Vegemart</title>
    </head>
    <body>
        <?php include "./includes/nav.php"; ?>    
        <h1 class="mt-1 mb-0 pt-0 ml-2 has-text-left" id="title">Bid now!</h1>

        <div class="columns group mt-0">
            <div class="column is-1 pl-1 pr-1 mt-0"></div>
            <div class="column is-10 pl-1 pr-1 mt-0">
                <div class="bid-card">
                    <div class="columns group mb-0">
                        <div class="column is-3 pt-1 pl-1 pr-1 mt-1 mb-0" id="seller-info">
                            <p class="sub" style="text-align:left; padding:0 1em;">Seller Name</p>
                            <h3 style="text-align:left; padding:0 1em;">Nimal Bandara</h3>
                            <span class="has-text-centered"><a id="ab" href="http://localhost/vegemart/public/seller/seller_home.php">View seller</a></span>
                            
                            <div class="rating-block mt-1 pt-0 pl-1 has-text-left">
                                <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                <i style="text-align:left; padding-bottom:0;" class="fas fa-star"></i>&nbsp; 4.0
                            </div><br>
                            <p class="sub" style="text-align:left; padding:0 1em;">Seller Location</p>
                            <h3 class="mb-0 mt-0" style="text-align:left; padding:0.2em 1em;">46/D</h3>
                            <h3 class="mb-0 mt-0" style="text-align:left; padding:0.2em 1em;">Colombo road,</h3>
                            <h3 class="mb-1 mt-0" style="text-align:left;  padding:0.2em 1em;">Kandy</h3>
                            <hr>
                            <p class="sub" style="text-align:left; padding:0 1em;">Product auctioned</p>
                            <h3 style="text-align:left; padding:0 1em;">Potato</h3>

                            <p class="sub" style="text-align:left; padding:0 1em;">Minimum price per 250g</p>
                            <h3 style="text-align:left; padding:0 1em;">Rs.30.00</h3>

                            <p class="sub" style="text-align:left; padding:0 1em;">Quantity available</p>
                            <h3 style="text-align:left; padding:0 1em;">30 kg</h3><br><hr><br>
                             
                            <h2 style="color: #138D75; font-size:24px; font-family: Candara;" class="mt-0 pt-0">Place your bid now <i style="font-size:1.2em; text-align:center; margin:0.4em 0.1em; color: #138D75;" class="fa fa-hand-o-right"></i></h2>
                            <p style="color: red;">Caution! Once you win a bid, You cannot remove the won item from your cart.</p>
                        </div>

                        <div class="column is-4 mt-0 pt-0">
                            <img class="item-image" src="http://localhost/vegemart/public/images/products/potato.jpg" alt="product">
                            <hr>
                            <div class="columns group mt-0 mb-0">
                                <div class="column is-3 pl-3">
                                <i style="font-size:60px; text-align:center; margin:0.4em 0;" class="fa fa-clock-o"></i>
                                </div>
                                <div class="column is-9 mt-1 pl-2">
                                    <p class="sub" style="text-align:left; padding:0 0.1em;">Auction started at</p>
                                    <h3 class="mb-0 mt-0" style="text-align:left; padding:0.1em;">Nov 2, 2020 at 1.45 p.m</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="columns group mt-0 mb-0 pb-0">
                                <div class="column is-3 pl-3">
                                    <i style="font-size:60px; text-align:center; margin:0.4em 0;" class="fas fa-hourglass-start"></i>
                                </div>
                                <div class="column is-9 mt-1 pl-2">
                                    <p class="sub" style="text-align:left; padding:0 0.1em;">Auction Ends at</p>
                                    <h3 class="mb-0 mt-0" style="text-align:left; padding:0.1em;">Nov 2, 2020 at 7.45 p.m</h3>
                                </div> 
                            </div>
                            <hr>
                            <form>
                                <div class="columns group mt-2 mb-0 has-text-centered">
                                    <div class="column is-6">
                                        <input class="input-box" style="max-width: 190px;" type="number" name="quantity" placeholder="Bidding Quantity(g)" min="250" step="50" required>
                                    </div>
                                    <div class="column is-6">
                                        <input class="input-box" style="max-width: 150px;" type="number" name="bid" placeholder="Enter bid(Rs.)" min="30" required>
                                    </div>
                                </div>
                                <input class="form-button mt-1" type="submit" name="placeBid" value="Bid Now"><br>
                            </form>
                        </div>

                        <div class="column is-5 pl-1 pr-1 mt-1 mb-0">
                            <div class="row pl-2 pr-2 mb-0" id="best-bid">
                                <h2 style="font-family: Candara; font-size: 2em;"><img class="coin-img" src="https://www.flaticon.com/svg/static/icons/svg/3612/3612244.svg">Best Bid</h2>         
                                <p><img class="best-bid-dp" src="http://localhost/vegemart/public/images/users/buyer4.jpg" alt="Avatar">Kamal Perera</p>
                                <p>Nov 2, 2020 at 3.20 p.m</p>
                                <br>
                                <hr>
                                <h1 class="has-text-centered" style="font-family: Candara;">Rs. 60.00 </h1>
                            </div>
                            <div class="row mt-0 mb-0 pt-0 pb-0 pl-1 pr-1" id="other-bids">
                                <h2 style="font-family: Candara; padding-left:2em;" class="pb-0 pt-1 mb-0">Other bids</h2>    
                                <div class="columns group mt-0 mb-0 has-text-left">
                                    <div class="column is-9 mmt-0 mb-0 pt-0 pb-0 pl-1">
                                        <p><img class="user-dp" src="http://localhost/vegemart/public/images/users/default.png" alt="Avatar">Anuradha Gamage</p>
                                        <p>Nov 2, 2020 at 3.20 p.m</p>
                                    </div>
                                    <div class="column is-3 mt-0 mb-0 pt-0 pb-0 pl-1">
                                        <p>Rs. 55.00</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="columns group mt-0 mb-0 has-text-left">
                                    <div class="column is-9 mmt-0 mb-0 pt-0 pb-0 pl-1">
                                        <p><img class="user-dp" src="http://localhost/vegemart/public/images/users/buyer2.jpg" alt="Avatar">Amara Silva</p>
                                        <p>Nov 2, 2020 at 3.04 p.m</p>
                                    </div>
                                    <div class="column is-3 mt-0 mb-0 pt-0 pb-0 pl-1">
                                        <p>Rs. 53.00</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="columns group mt-0 mb-0 has-text-left">
                                    <div class="column is-9 mmt-0 mb-0 pt-0 pb-0 pl-1">
                                        <p><img class="user-dp" src="http://localhost/vegemart/public/images/users/buyer3.jpg" alt="Avatar">Kamala Yapa</p>
                                        <p>Nov 2, 2020 at 2.50 p.m</p><br>
                                    </div>
                                    <div class="column is-3 mt-0 mb-0 pt-0 pb-0 pl-1">
                                        <p>Rs. 45.00</p>
                                    </div>
                                </div>                               
                            </div>
                            <div class="removeBid has-text-centered">
                                <button>Remove Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-1 pl-1 pr-1 mt-0"></div>
        </div>
        <br>

        <a class="button" href="#popup1">bid win</a>
        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <h2 class="has-text-centered">Congratulation!! You won the bid!</h2>
                <img class="popup-pic has-text-centered" src="https://www.flaticon.com/svg/static/icons/svg/744/744970.svg">
                <div class="content has-text-centered">
                    <p>You have recieved the item Potato for Rs. 60.00</p>
                    <p>This item is added to your cart</p>
                    <p>To view your items click the button below</p>
                    <div class="has-text-centered mt-1">
                        <button class="button" onClick="location.href='http://localhost/vegemart/public/shopping_cart.php';"><i class="fas fa-shopping-basket mr-1"></i></i>Go to Shopping cart</button>
                    </div>
                </div>
            </div>
        </div>

        <a class="button" href="#popup2">bid loss</a>
        <div id="popup2" class="overlay">
        <div class="popup">
                <a class="close" href="#">&times;</a>
                <h2 class="has-text-centered">Sorry! You lost the bid!</h2>
                <img class="popup-pic has-text-centered" src="https://www.flaticon.com/svg/static/icons/svg/1048/1048203.svg">
                <div class="content has-text-centered">
                    <p>Unfortunatley You have lost the bid for item Potato</p>
                    <p>To shop for more items click the button below</p>
                    <div class="has-text-centered mt-1">
                        <button class="button" onClick="location.href='http://localhost/vegemart/public/shopping_cart.php';"><i class="fas fa-shopping-basket mr-1"></i></i>Browse more products</button>
                    </div>
                </div>
            </div>>
        </div>

        </script>
    <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>