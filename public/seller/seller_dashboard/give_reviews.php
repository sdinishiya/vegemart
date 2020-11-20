<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Reviews</title>
</head>
<body>    <!-- Add review box only for user or buyer -->                  
    <?php
    if(isset($_SESSION["loggedInUserID"])){?>
        <div class="row has-text-centered mt-2 pl-1">                            
            <textarea rows="5" cols="30" id="description" name="description" placeholder="Give Feedback" form="addReview"></textarea>
        </div>
        <form action="../../src/seller/seller_dashboard/give_reviews.php" method="post" id="addReview" name="addReview">
            <input type="hidden" class="input-box" id="userID" name="userID" value="<?php echo $_SESSION["loggedInUserID"]?>" required/>
            <input type="hidden" class="input-box" id="sellerID" name="sellerID" value="<?php echo $sellerID?>" required/>
            <button type="submit" class="button ml-5 pr-1 pl-1 mt-1" name="send"><i class="fas fa-cog mr-1"></i>Save</button>
        </form>
    <?php
    } 
    ?>     
</body>
</html>