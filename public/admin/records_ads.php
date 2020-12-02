<?php
    include ('../../config/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">

        <title>Product Advertisement Records | Vegemart</title>
    </head>
    <body>
        <?php include "../includes/admin_nav.php"; ?>
        <div class="row">
            <h1 id="title" class="has-text-left ml-2 mt-1 mb-0">Advertisement Requests</h1>
            <div class="columns group mt-0">
                <div class="column is-1"></div>
                <div class="column is-10 pl-1">
                    <table class="user" id="myTable">
                        <tr>
                            <th>Advertisement Picture</th>
                            <th>Product Name</th>
                            <th>Seller Name</th>
                            <th>Advertisement Date</th>
                            <th>Quantity (kg)</th>
                            <th>Display Duration (days)</th>
                            <th>Action</th>
                        </tr>
                        <tr>        
                            <td><img src="http://localhost/vegemart/public/images/ad2.jpg" class="item-img" alt="Ad Image"></td>          
                            <td>Beans</td>
                            <td>Saman Kumara</td>
                            <td>30.11.2020</td>
                            <td>32</td>
                            <td>5</td>
                            <td><button class="green-button mt-0 mb-0 " onClick="location.href='#';">Add</button></td>
                        </tr>
                        <tr>        
                            <td><img src="http://localhost/vegemart/public/images/ad2.jpg" class="item-img" alt="Ad Image"></td>          
                            <td>Carrot</td>
                            <td>Dilshan Bandara</td>
                            <td>01.12.2020</td>
                            <td>28</td>
                            <td>8</td>
                            <td><button class="green-button mt-0 mb-0 " onClick="location.href='#';">Add</button></td>
                        </tr>
                        <tr>        
                            <td><img src="http://localhost/vegemart/public/images/ad2.jpg" class="item-img" alt="Ad Image"></td>          
                            <td>Tomato</td>
                            <td>Peter John</td>
                            <td>01.12.2020</td>
                            <td>20</td>
                            <td>3</td>
                            <td><button class="green-button mt-0 mb-0 " onClick="location.href='#';">Add</button></td>
                        </tr>
                        <tr>        
                            <td><img src="http://localhost/vegemart/public/images/ad2.jpg" class="item-img" alt="Ad Image"></td>          
                            <td>Leeks</td>
                            <td>Kamal Senerath</td>
                            <td>02.12.2020</td>
                            <td>21</td>
                            <td>5</td>
                            <td><button class="green-button mt-0 mb-0 " onClick="location.href='#';">Add</button></td>
                        </tr>
                        <tr>        
                            <td><img src="http://localhost/vegemart/public/images/ad2.jpg" class="item-img" alt="Ad Image"></td>          
                            <td>Potato</td>
                            <td>Amal Rajapaksha</td>
                            <td>03.12.2020</td>
                            <td>40</td>
                            <td>10</td>
                            <td><button class="green-button mt-0 mb-0 " onClick="location.href='#';">Add</button></td>
                        </tr>
                    </table>
                </div>
                <div class="column is-1"></div>
            </div>   
            <br>

            <h1 id="title" class="has-text-left ml-2 mt-1 mb-0">Product Advertisement Records</h1>
            <div class="columns group mt-0">
                <div class="column is-1"></div>
                <div class="column is-10 pl-1">
                    <table class="user" id="myTable">
                        <tr>
                            <th>Ad ID</th>
                            <th>Product Name</th>
                            <th>Advertisement Date</th>
                            <th>Quantity (kg)</th>
                            <th>Date of product availability</th>
                            <th>Display Duration (days)</th>
                            <th>Action</th>

                        </tr>
                        <tr>                  
                            <td>#0001</td>
                            <td>Beetroot</td>
                            <td>15.11.2020</td>
                            <td>30</td>
                            <td>29.11.2020</td>
                            <td>15</td>
                            <td><button class="red-button mt-0 mb-0 " onClick="location.href='http://localhost/vegemart/public/deliverer/delivery.php';">Remove</button></td>
                        </tr>
                        <tr>                  
                            <td>#0002</td>
                            <td>Broccoli</td>
                            <td>22.11.2020</td>
                            <td>25</td>
                            <td>29.11.2020</td>
                            <td>7</td>
                            <td><button class="red-button mt-0 mb-0 " onClick="location.href='http://localhost/vegemart/public/deliverer/delivery.php';">Remove</button></td>
                        </tr>
                        <tr>                  
                            <td>#0003</td>
                            <td>Egg-plant</td>
                            <td>25.11.2020</td>
                            <td>20</td>
                            <td>01.12.2020</td>
                            <td>6</td>
                            <td><button class="red-button mt-0 mb-0 " onClick="location.href='http://localhost/vegemart/public/deliverer/delivery.php';">Remove</button></td>
                        </tr>
                        
                        <tr>                  
                            <td>#0004</td>
                            <td>Carrot</td>
                            <td>25.11.2020</td>
                            <td>32</td>
                            <td>07.12.2020</td>
                            <td>12</td>
                            <td><button class="red-button mt-0 mb-0 " onClick="location.href='http://localhost/vegemart/public/deliverer/delivery.php';">Remove</button></td>
                        </tr>
                        <tr>                  
                            <td>#0005</td>
                            <td>Tomato</td>
                            <td>30.11.2020</td>
                            <td>15</td>
                            <td>05.12.2020</td>
                            <td>7</td>
                            <td><button class="red-button mt-0 mb-0 " onClick="location.href='http://localhost/vegemart/public/deliverer/delivery.php';">Remove</button></td>
                        </tr>
                    </table>
                </div>
                <div class="column is-1"></div>
            </div>
            <br><br>
        </div>
    </body>
</html>