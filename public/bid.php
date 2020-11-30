<?php
    ob_start();
    include ('../config/dbconfig.php');
    include ('../src/session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost/vegemart/public/images/logo.png" rel="shortcut icon">
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
                            <?php
                                $productID=$_GET['id'];
                                include ('../src/seller/seller_dashboard/seller_details.php');
                                while ($rowUser  = mysqli_fetch_assoc($resultSeller)) {                       
                            ?>
                                <h3 style="text-align:left; padding:0 1em;"><?php echo $rowUser['fName'] . " " . $rowUser['lName'] ?></h3>
                                <span class="has-text-centered"><a id="ab" href="http://localhost/vegemart/public/seller/seller_home.php">View seller</a></span>
                                <div class="rating-block mt-1 pt-0 pl-1 has-text-left">
                                    <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                    <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                    <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                    <i style="text-align:left; padding-bottom:0;" class="fas fa-star star-colored"></i>
                                    <i style="text-align:left; padding-bottom:0;" class="fas fa-star"></i>&nbsp; 4.0
                                </div><br>
                                <p class="sub" style="text-align:left; padding:0 1em;">Seller Location</p>
                                <h3 class="mb-0 mt-0" style="text-align:left; padding:0.2em 1em;"><?php echo $rowUser['address1']?></h3>
                                <h3 class="mb-0 mt-0" style="text-align:left; padding:0.2em 1em;"><?php echo $rowUser['address2']?>,</h3>
                                <h3 class="mb-1 mt-0" style="text-align:left;  padding:0.2em 1em;"><?php echo $rowUser['city']?></h3>
                                <hr>
                            <?php
                                }
                            ?>
                            
                            <?php
                                $productID=$_GET['id'];
                                include ('../src/products.php');
                                while ($rowProduct  = mysqli_fetch_assoc($resultProduct)) {                       
                            ?>
                            <p class="sub" style="text-align:left; padding:0 1em;">Product auctioned</p>
                            <h3 style="text-align:left; padding:0 1em;"><?php echo $rowProduct['name']?></h3>

                            <p class="sub" style="text-align:left; padding:0 1em;">Minimum price per 250g</p>
                            <h3 style="text-align:left; padding:0 1em;">Rs.<?php echo $rowProduct['minPrice']?>.00</h3>

                            <p class="sub" style="text-align:left; padding:0 1em;">Quantity available</p>
                            <h3 style="text-align:left; padding:0 1em;"><?php echo $rowProduct['quantity']?> kg</h3><br><hr><br>
                             
                            <h2 style="color: #138D75; font-size:24px; font-family: Candara;" class="mt-0 pt-0">Place your bid now <i style="font-size:1.2em; text-align:center; margin:0.4em 0.1em; color: #138D75;" class="fa fa-hand-o-right"></i></h2>
                            <p style="color: red;">Caution! Once you win a bid, You cannot remove the won item from your cart.</p>
                            
                        </div>
                        <div class="column is-4 mt-0 pt-0">
                            <img class="item-image" src="http://localhost/vegemart/public/images/products/<?php echo $rowProduct['imageName']?>" alt="product">
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
                            <?php
                            }
                        ?>
                            
                            <form action="../src/bid_submit.php" method="post">
                                <div class="columns group mt-2 mb-0 has-text-centered">
                                    <div class="column is-6">
                                        <input class="input-box" style="max-width: 150px;" type="number" name="quantity" placeholder="Bidding Quantity(g)" min="250" step="50" required>
                                    </div>
                                    <div class="column is-6">
                                        <input class="input-box" style="max-width: 150px;" type="number" name="bid" placeholder="Enter bid(Rs.)" min="30" required>
                                    </div>
                                    <input type="hidden" name="productID" value="<?php echo $_GET['id']?>">
                                    <input type="hidden" name="userID" value="<?php echo $_SESSION["loggedInUserID"]?>">
                                </div>
                                <input class="form-button mt-1" type="submit" name="placeBid" value="Bid Now"><br>
                            </form>
                        </div>

                        <div class="column is-5 pl-1 pr-1 mt-1 mb-0">
                            
                            <div class="row pl-2 pr-2 mb-0" id="best-bid">
                                <h2 style="font-family: Candara; font-size: 2em;"><img class="coin-img" src="https://www.flaticon.com/svg/static/icons/svg/3612/3612244.svg">Best Bid</h2>  
                                <?php 
                                $productID=$_GET['id'];     
                                $bid = "SELECT * FROM bidding WHERE productID='$productID' AND amount=(SELECT MAX(amount) AS amount FROM bidding WHERE productID='$productID');";    
                                $bidQuery=mysqli_query($con,$bid);
                                while ($rowBid  = mysqli_fetch_assoc($bidQuery)) { 
                                    $userID = $rowBid['userID'];
                                    $user = "SELECT * FROM client WHERE id='$userID'";    
                                    $userQuery=mysqli_query($con,$user);                                    
                                    while ($rowUser  = mysqli_fetch_assoc($userQuery)) {                       
                                ?> 
                                <p><img class="best-bid-dp" src="http://localhost/vegemart/public/images/users/buyer4.jpg" alt="Avatar"><?php echo $rowUser['fName'] . " " . $rowUser['lName'] ?></p>
                                <p><?php echo $rowBid['startTime']?></p>
                                <br>
                                <hr>
                                <h1 class="has-text-centered" style="font-family: Candara;">Rs. <?php echo $rowBid['amount']?>.00 </h1>                            
                            </div>
                            <?php    
                                }
                            }                            
                            ?>
                            <div class="row mt-0 mb-0 pt-0 pb-0 pl-1 pr-1" id="other-bids">
                                <h2 style="font-family: Candara" class="pb-0 pt-1 mb-0 has-text-centered">Other bids</h2>  
                            </div>                                 
                            <div class="row mt-0 mb-0 pt-0 pb-0 pl-1 pr-1" id="other-bids"> 
                                <div class="columns group mt-0 mb-0 has-text-left">
                                    <div class="column is-9 mmt-0 mb-0 pt-0 pb-0 pl-1">
                                    <?php
                                    $otherBids = "SELECT userID,startTime,MAX(amount) AS amount FROM bidding WHERE productID='$productID' GROUP BY userID ORDER BY MAX(amount)  DESC LIMIT 3;";    
                                    $otherBidsQuery=mysqli_query($con,$otherBids);
                                    while ($rowOtherBids  = mysqli_fetch_assoc($otherBidsQuery)) { 
                                        $userID = $rowOtherBids['userID'];
                                        $user = "SELECT * FROM client WHERE id='$userID'";    
                                        $userQuery=mysqli_query($con,$user);                                    
                                        while ($rowUser  = mysqli_fetch_assoc($userQuery)) { 
                                    ?>
                                        <p><img class="user-dp" src="http://localhost/vegemart/public/images/users/<?php echo $rowUser['profilePic']?>" alt="Avatar"><?php echo $rowUser['fName'] . " " . $rowUser['lName'] ?></p>
                                        <p><?php echo $rowOtherBids['startTime']?></p>
                                    </div>
                                    <div class="column is-3 mt-0 mb-0 pt-0 pb-0 pl-1">
                                        <p><?php echo $rowOtherBids['amount']?></p>
                                    </div>
                                    <?php       
                                            }
                                        }                     
                                    ?>
                                </div>
                                <hr>                        
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
                <?php 
                    $productID=$_GET['id'];     
                    $bid = "SELECT * FROM bidding WHERE productID='$productID' AND amount=(SELECT MAX(amount) AS amount FROM bidding WHERE productID='$productID');";    
                    $bidQuery=mysqli_query($con,$bid);
                    while ($rowBid  = mysqli_fetch_assoc($bidQuery)) { 
                        $userID = $rowBid['userID'];
                        $user = "SELECT * FROM client WHERE id='$userID'";    
                        $userQuery=mysqli_query($con,$user);                                    
                        while ($rowUser  = mysqli_fetch_assoc($userQuery)) {
                            $product = "SELECT * FROM products WHERE productID='$productID'";    
                            $productQuery=mysqli_query($con,$product);
                            while ($rowProduct  = mysqli_fetch_assoc($productQuery)) {
                ?>
                    <p>You have recieved the item <?php echo $rowProduct['name']?> for Rs. <?php echo $rowBid['amount']?>.00</p>
                    <p>This item is added to your cart</p>
                    <form action="" method="POST">
                        <div class="has-text-centered mt-1">
                        <input type="hidden" name="bidID" value="<?php echo $rowBid['bidID']?>">
                        <input type="hidden" name="productID" value="<?php echo $rowBid['productID']?>">
                        <input type="hidden" name="userID" value="<?php echo $rowBid['userID']?>">
                            <input type="submit" name="won" class="button" value="Go to Shopping cart">
                        </div>
                    </form>
                    <?php
                                }
                            }
                        }
                    ?>
                    <p>To view your items click the button below</p>
                    
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
                        <button class="button" onClick="location.href='http://localhost/vegemart/public/shopping_cart.php?';"><i class="fas fa-shopping-basket mr-1"></i></i>Browse more products</button>
                    </div>
                </div>
            </div>
        </div>
        
                
        </script>
    <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>
<?php
            if(isset($_POST["won"])){
                $bidID = $_POST["bidID"];
                $productID = $_POST["productID"];
                $userID = $_POST["userID"];
                $items = "INSERT INTO `cart` (`userID`,`bidID`,`productID`) VALUES ('".$userID."','".$bidID."','".$productID."');";
                mysqli_query($con,$items);
                header('Location:shopping_cart.php');
            }
            ob_end_flush();
        ?>