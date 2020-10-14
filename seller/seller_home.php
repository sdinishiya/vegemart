<?php include('../database/dbconfig.php'); ?>
<?php
session_start();

//Redirect User if not signed in
if (!(isset($_SESSION['loggedInSellerID']) || isset($_SESSION['loggedInUserID']))) {
  header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/seller-home.css">
        <link rel="stylesheet" type="text/css" href="../css/NavBar.css">
        <title>Seller Dashboard | Vegemart</title>
    </head>

    <body>
        <?php include "../includes/logout-nav.php"; ?>
 
        <div class="row">
            <div class="columns group">
                <div class="column is-8">
                    <div class="row pl-1 pr-1">
                        <div class="user-card">
                            <div class="columns group">
                            <?php
                            $userID = $_SESSION["loggedInSellerID"];
                            $retrieveInfo =  "SELECT * FROM users WHERE id='$userID';"; //Selecting all data from Table
                            $resultInfo = mysqli_query($con, $retrieveInfo); //Passing SQL

                            while ($rowUser  = mysqli_fetch_assoc($resultInfo)) {
                                $_SESSION["loggedInSellerID"] = $rowUser['id'];
                                echo "<div class=\"column is-4\">
                                    <div class=\"row\">
                                        <img class=\"user-image\" src= \"../images/users/{$rowUser['profilePic']}\" alt=\"Display Picture\">
                                    </div>
                                </div>
                                <div class=\"column is-8 has-text-left\">
                                    <div class=\"row pl-2\">
                                        <h2 class=\"mb-1\">" . $rowUser['fName'] . " " . $rowUser['lName'] . "</h2><br>                                                                              
                                        <div class=\"column is-3 has-text-left pl-2\">
                                             <h3 class=\"mb-0 mt-0\">Email:</h3><br>
                                            <h3 class=\"mb-0 mt-0\">Phone:</h3><br>
                                            <h3 class=\"mb-0 mt-0\">Location:</h3><br>
                                        </div>
                                        <div class=\"column is-5 has-text-left pb-3\">
                                            <h3 class=\"mb-0 mt-0\">" . $rowUser['email'] . " </h3><br>
                                            <h3 class=\"mb-0 mt-0\">" . $rowUser['phoneNum'] . " </h3><br>
                                            <h3 class=\"mb-0 mt-0\">" . $rowUser['address1'] . ",</h3>
                                            <h3 class=\"mb-0 mt-0\">" . $rowUser['address2'] . ",</h3>
                                            <h3 class=\"mb-0 mt-0\">" . $rowUser['city'] . " </h3>
                                        </div>
                                    </div>
                                </div>";
                            }
                        echo "</div>
                        <div class=\"row has-text-right mt-2\">
                            <button class=\"button\" onClick=\"location.href='http://localhost/vegemart/seller/seller_profile_edit.php';\"><i class=\"fas fa-cog mr-1\"></i>Edit Profile</button>
                        </div>
                    </div>
                    <br/>
                </div>";

                $retrieve = "SELECT * FROM products WHERE sellerID='$userID';";
                $result = mysqli_query($con, $retrieve); //Passing SQL
                echo "<div class=\"items-grid\">
                    <div class=\"row item-legend\">
                        <div class=\"columns group\">
                            <div class=\"column is-3\">
                                <h4></h4>
                            </div>
                            <div class=\"column is-2\">
                                <h4>Item</h4>
                            </div>
                            <div class=\"column is-2\">
                                <h4>Unit Price (Rs.)</h4>
                            </div>
                            <div class=\"column is-2\">
                                <h4>Quantity (kg)</h4>
                            </div>
                            <div class=\"column is-3\">
                                <h4></h4>
                            </div>
                        </div>
                    </div>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION["loggedInSellerID"] = $row['sellerID'];
                        echo "<div class=\"row item-row mb-1\">
                            <div class=\"columns group\">
                                <div class=\"column is-3\">
                                    <img class=\"item-img\" src= \"../images/products/{$row['imageName']}\">
                                </div>
                                <div class=\"column is-2\">
                                    <h4>" . $row['name'] . " </h4>
                                </div>
                                <div class=\"column is-2\">
                                    <h4>" . $row['minPrice'] . " </h4>
                                </div>
                                <div class=\"column is-2\">
                                    <h4>" . $row['quantity'] . "</h4>
                                </div>
                                <div class=\"column is-3\">
                                    <button class=\"button\" onClick=\"location.href='http://localhost/vegemart/seller/seller_product_edit.php?id={$row['productID']}';\">Update Product</button>                                
                                </div>
                            </div>
                        </div>";
                    }
                ?>
                    </div>
                    <div id="addProduct">
                        <button class="button" onClick="location.href='http://localhost/vegemart/seller/seller_product_add.php';">Add New Product</button>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="row pl-2 pr-2">
                        <div class="user-data pt-1 pb-1">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/1484/1484836.svg" class="user-image" alt="Use Image">
                            <h2>4.3</h2>
                            <div class="rating-block">
                                <i class="fas fa-star star-colored"></i>
                                <i class="fas fa-star star-colored"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="user-review mt-2">
                            <div class="row mt-1">
                                <div class="columns group">
                                    <div class="column is-3">
                                        <img class="review-image" src="https://www.flaticon.com/premium-icon/icons/svg/2633/2633302.svg" alt="">
                                    </div>
                                    <div class="column is-9">
                                        <h4 class="justify-text">A good review should describe various aspects of the customer experience. Did the customer receive fantastic customer service? </h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row mt-1">
                                <div class="columns group">
                                    <div class="column is-3">
                                        <img class="review-image" src="https://www.flaticon.com/premium-icon/icons/svg/2633/2633302.svg" alt="">
                                    </div>
                                    <div class="column is-9">
                                        <h4 class="justify-text">A good review should describe aspects of the customer experience.</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row mt-1">
                                <div class="columns group">
                                    <div class="column is-3">
                                        <img class="review-image" src="https://www.flaticon.com/premium-icon/icons/svg/2633/2633302.svg" alt="">
                                    </div>
                                    <div class="column is-9">
                                        <h4 class="justify-text">A good review should describe various aspects of the customer experience. the customer received customer service </h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row mt-1">
                                <div class="columns group">
                                    <div class="column is-3">
                                        <img class="review-image" src="https://www.flaticon.com/premium-icon/icons/svg/2633/2633302.svg" alt="">
                                    </div>
                                    <div class="column is-9">
                                        <h4 class="justify-text">A good review should describe aspects of the customer experience.</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row has-text-centered mt-2">
                                <h5>View All Reviews</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>