<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>
    <!-- showing reviews to seller -->
    
    <div class="row mt-1">
        <div class="columns group">
            <div class="column is-3 mt-2">
                <img class="review-image" src="../images/users/<?php echo $rowPic['profilePic'] ?>" alt="">
            </div>
            <div class="column is-9">
                <h4 class="justify-text"><?php echo $row['review'] ?> </h4>
            </div>
        </div>
    <hr>
    </div>
    
    
</body>
</html>
