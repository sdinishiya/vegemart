<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/bid.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <title>Auction | Vegemart</title>
    </head>
    <body>
        <div>
            <?php include "./includes/nav.php"; ?>   
        </div>
        <div class="row">
            <div class="heading">
                <h1>Place your Bid</h1>
            </div>
            <div class="columns group mt-0">
                <div class="column is-2 pl-1 pr-1"></div>
                <div class="column is-8 pl-1 pr-1">
                    <div class="row">
                        <div class="bid-card">
                            <div class="columns group pl-2 pr-2">
                                <div class="column is-4 pl-2 pr-2">
                                    <img class="item-image" src="../images/products/potato.jpg" alt="">
                                </div>
                                <div class="column is-8 pl-5">
                                    <div class="row has-text-left pl-5 pr-0">    
                                        <h1 style="font-size:25px; padding-left:1rem;">Potato</h1>   
                                        <div class="columns group pl-1">                                                                      
                                            <div class="column is-4 mb-0">
                                                <h3 class="mb-0 mt-0" style="text-align:left;">Location:</h3>
                                                <h3 class="mb-0 mt-0" style="color:white;">break</h3>
                                                <h3 class="mb-0 mt-0" style="color:white;">break</h3><br>
                                                <h3 class="mb-0 mt-0" style="text-align:left;">Maturtity date:</h3>
                                            </div>
                                            <div class="column is-4 has-text-left pl-2 pb-3 mb-0">
                                                <h3 class="mb-0 mt-0" style="text-align:left;">address 1</h3>
                                                <h3 class="mb-0 mt-0" style="text-align:left;">address 2</h3>
                                                <h3 class="mb-0 mt-0" style="text-align:left;">city</h3><br>
                                                <h3 class="mb-0 mt-0" style="text-align:left;"> 20th Oct</h3><br>
                                            </div>
                                        </div>
                                        <div class="columns group pl-1 mt-0">                                                                      
                                            <div class="column is-6 mt-0">
                                                <h3 class="mb-0 mt-0" style="text-align:left;">Current bid (per 250g)</h3>
                                                <h2 class="mb-0 mt-0" style="text-align:left;">Rs. 60.00</h2>
                                            </div>
                                            <div class="column is-2">
                                                <h3 class="mb-0 mt-0" style="color:#3e8e41;">12 Bids</h3>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row pl-1">
                                           <div class="text-box">                                
                                                <input type="text" class="input-box" name="bidQ" placeholder="Enter your bid (Rs.)"  required/>
                                                <div class="submit-box">
                                                    <input type="submit" name="inputBid" value="Submit" onclick="location.href='./shopping_cart.php';"/>
                                                </div>                                
                                            </div>
                                        </div>    
                                    </div>           
                                </div>
                            </div>
                            <br>
                            <div class="row pl-1 pr-1">
                                <div class="columns group">                                                                      
                                    <div class="column is-6">
                                        <div class="columns group">                                                                      
                                            <div class="column is-6">
                                                <button id="tab-button" >Descrption</button>
                                            </div>                                         
                                            <div class="column is-6">
                                                <button id="tab-button" >About Seller</button>
                                            </div>
                                            <br> <hr>
                                            <div class="row">
                                                <p class="justify-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6 has-text-centered pl-2">
                                        <div id="grad1">
                                            <h2>Shipping & payment</h2> 
                                        </div>  
                                        <p class="justify-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                                 
                                    </div>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-2 pl-1 pr-1"></div>
            </div>
        </div>

    <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>