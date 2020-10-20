<?php include('../database/dbconfig.php'); ?>
<?php
// session_start();

// //Redirect User if not signed in
// if (!(isset($_SESSION['loggedInSellerID']) || isset($_SESSION['loggedInUserID']))) {
//   header('Location: ../login.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/advertisement.css">
        <link rel="stylesheet" type="text/css" href="../css/NavBar.css">
        <title>Advertising | Vegemart</title>
    </head>

    <body>
        <?php include "./seller_nav.php"; ?>
        <?php
            $productID = $_GET['id'];
            //$productID=887607463;
            $retrieveProduct =  "SELECT * FROM products WHERE productID='$productID';"; //Selecting all data from Table
            $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
     
            while ($rowProduct  = mysqli_fetch_assoc($resultProduct)) {                                     
            echo "
                <div class=\"row\">
                    <div class=\"columns group\">
                        <div class=\"column is-4 pl-1 pr-1\"></div>
                        <div class=\"column is-4 pl-1 pr-1\">
                            <div class=\"row\">
                                <div class=\"adForProduct\">
                                    <h2>Post Advertisement</h2>
                                    <form id=\"adForProduct\" action=\"advertisement_submit.php\" method=\"post\" enctype=\"multipart/form-data\">
                                        <div class=\"image-row\">
                                            <img class=\"item-img\" src= \"../images/products/{$rowProduct['imageName']}\">
                                        </div>
                                        <h3>" . $rowProduct['name']. "</h3>
                                        <div class=\"details\">
                                            <div class=\"columns group\">
                                                <div class=\"column is-1 pl-1 pr-1\"></div>
                                                <div class=\"column is-10 pl-1 pr-1\">
                                                    <div class=\"input-row\">
                                                        <input type=\"date\" id=\"date\" name=\"date\"><br>  
                                                    </div>
                                                    <div class=\"input-row\">
                                                        <textarea rows=\"8\" cols=\"40\" name=\"description\" placeholder=\"Product description\" form=\"adForProduct\"></textarea>
                                                    </div>
                                                </div>
                                                <div class=\"column is-1 pl-1 pr-1\"></div>
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <input class=\"form-button\"  type=\"submit\" name=\"submit\" value=\"Save\">
                                        <input class=\"form-button\" type=\"button\" name=\"cancel\" onclick=\"window.location.replace('seller_home.php')\" value=\"Cancel\">
                                    
                                    </form>
                                    <h3 class=\"error-msg\"><?php include_once('../includes/message.php'); ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"column is-4 pl-1 pr-1\"></div>
                    </div>
                </div>";                          
            }
        ?>
        <?php include_once "../includes/footer.php"; ?>     
    </body>
</html>