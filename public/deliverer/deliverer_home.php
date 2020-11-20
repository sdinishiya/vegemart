<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/seller-home.css">
    <title>Deliverer Dashboard | Vegemart</title>
</head>
<body>
    <div>
        <?php include "../deliverer/deliverer_nav.php"; ?>   
    </div>
    <div class="row">
        <div class="columns group">
        <div class="column is-1 pl-1 pr-1"></div>
            <div class="column is-10 pl-1 pr-1">

                <div class="items-grid">
                    <div class="row item-legend">
                        <div class="columns group">
                            <div class="column is-2">
                                <h3>Seller</h3>
                            </div>
                            <div class="column is-3">
                                <h3>Pick up</h3>
                            </div>
                            <div class="column is-1">
                                <h3>Items</h3>
                            </div>
                            <div class="column is-1">
                                <h3>Qty (kg)</h3>
                            </div>
                            <div class="column is-2">
                                <h3>Buyer</h3>
                            </div>
                            <div class="column is-3">
                                <h3>Drop by</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row item-row">
                        <div class="columns group">
                            <div class="column is-2">
                                    <p>Anushka Darshana</p>
                                </div>
                                <div class="column is-3">
                                    <p>D. M. Rupasinghe mawatha,</p>
                                    <p>Badulla</p>
                                </div>
                                <div class="column is-1">
                                    <p>Carrot</p>
                                    <p>Beans</p>
                                </div>
                                <div class="column is-1">
                                    <p>5</p>
                                    <p>5</p>
                                </div>
                                <div class="column is-2">
                                    <p>Chanaka Malshan</p>
                                </div>
                                <div class="column is-3">
                                    <p>D. M. Rupasinghe mawatha,</p>
                                    <p>Kandy</p>
                                    <button class="button" onClick="location.href='http://localhost/vegemart/public/deliverer/delivery.php';">Accept</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="column is-1 pl-2 pr-2">

            </div>
        </div>
    </div>
</body>
</html>