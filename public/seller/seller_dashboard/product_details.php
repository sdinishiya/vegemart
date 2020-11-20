<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
</head>
<body>
    <div class="item-table">
        <div class="row item-row has-text-centered mb-0">
            <div class="columns group">
                <div class="column is-3">
                    <img class="item-img" src= "../images/products/<?php echo $row['imageName']?>">
                </div>
                <div class="column is-2">
                    <h4><?php echo $row['name'] ?> </h4>
                </div>
                <div class="column is-2">
                    <h4><?php echo $row['minPrice'] ?> </h4>
                </div>
                <div class="column is-2">
                    <h4><?php echo $row['quantity'] ?></h4>
                </div>
                <div class="column is-3">
                    <button class="button" onClick="location.href='http://localhost/vegemart/public/seller/seller_product_edit.php?id=<?php echo $row['productID']?>';">Update Product</button>               
                </div>
            </div>
        </div>
    </div>
</body>
</html>