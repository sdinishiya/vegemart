<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="http://localhost/vegemart/public/images/logo.png" rel="shortcut icon">
        <title>Forum | Vegemart</title>
        <link rel="stylesheet" href="./css/forum.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/footer.css">

    </head>

    <body>
        <?php include_once "./includes/nav.php"; ?>
        
        <div class="row">
            <div class="heading">
                <h1><i class="fa fa-comments" style="font-size:38px; color:white; padding-right:0.2em;"></i>Vegemart Forum</h1>
            </div>
            <div class="tab has-text-centered">
                    <button id="tab-button" style="background-color: #D7DBDD;" onClick="location.href='http://localhost/vegemart/forum/forum.php';">Home</button>
                    <button id="tab-button" onClick="location.href='http://localhost/vegemart/forum/my_forum.php';">My Posts</button>
            </div>
               
            <div class="columns group">
                <div class="column is-2">
                    <button class="mainbutton" onClick="location.href='http://localhost/vegemart/forum/new_post.php';">Create Post</button>

                    <h2>Tags</h2>
                    <div class="tags">            
                        <ul>
                            <li><a href="#">Gardening</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruits</a></li>
                            <li><a href="#">Harvesting</a></li>
                            <li><a href="#">Fertilizer</a></li>
                            <li><a href="#">Tools</a></li>
                        </ul>
                    </div>
                </div>                    
                <div class="column is-10">
                    <div class="content mt-2">
                        <div class="row mt-1">
                            <div class="columns group">
                                <div class="column is-2">
                                    <div class="row">
                                        <img class="user-image" src="https://www.flaticon.com/premium-icon/icons/svg/2633/2633302.svg" alt="">
                                        <h4>Username</h4>
                                    </div>                                   
                                </div>
                                <div class="column is-10">
                                    <div class="row">
                                        <h3 class="justify-text">Post title</h3>
                                        <p class="justify-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p> 
                                        <div class="row has-text-left">
                                            <i class="fa fa-thumbs-up" style="font-size:25px; color:#138D75; margin-right:10px;"></i>10
                                            <i class="fa fa-thumbs-down" style="font-size:25px; color:#black; margin-left:10px; margin-right:10px;"></i>1
                                            <i class="fa fa-comment-o" style="font-size:25px; color:#black; margin-left:25px; margin-right:15px;"></i>3 Comments
                                            <!--<textarea rows="1" cols="60" id="comment" name="comment" placeholder="Write comment"></textarea>   -->
                                        </div>                                                                                                    
                                    </div>                                   
                                </div>
                            </div>
                            <hr>

                            <div class="columns group">
                                <div class="column is-2">
                                    <div class="row">
                                        <img class="user-image" src="https://www.flaticon.com/svg/static/icons/svg/3048/3048148.svg" alt="">
                                        <h4>Username</h4>
                                    </div>                                   
                                </div>
                                <div class="column is-10">
                                    <div class="row">
                                        <h3 class="justify-text">Post title</h3>
                                        <p class="justify-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p> 
                                        <div class="row has-text-left">
                                            <i class="fa fa-thumbs-up" style="font-size:25px; color:#black; margin-right:10px;"></i>5
                                            <i class="fa fa-thumbs-down" style="font-size:25px; color:#black; margin-left:10px; margin-right:10px;"></i>
                                            <i class="fa fa-comment-o" style="font-size:25px; color:#black; margin-left:25px; margin-right:15px;"></i>Comment
                                            <!--<textarea rows="1" cols="60" id="comment" name="comment" placeholder="Write comment"></textarea>   -->
                                        </div>                                                                                                    
                                    </div>                                   
                                </div>
                            </div>
                            <hr>

                            <div class="columns group">
                                <div class="column is-2">
                                    <div class="row">
                                        <img class="user-image" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                                        <h4>Username</h4>
                                    </div>                                   
                                </div>
                                <div class="column is-10">
                                    <div class="row">
                                        <h3 class="justify-text">Post title</h3>
                                        <p class="justify-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p> 
                                        <div class="row has-text-left">
                                            <i class="fa fa-thumbs-up" style="font-size:25px; color:#138D75; margin-right:10px;"></i>20
                                            <i class="fa fa-thumbs-down" style="font-size:25px; color:#black; margin-left:10px; margin-right:10px;"></i>2
                                            <i class="fa fa-comment-o" style="font-size:25px; color:#black; margin-left:25px; margin-right:15px;"></i>5 Comments
                                            <!--<textarea rows="1" cols="60" id="comment" name="comment" placeholder="Write comment"></textarea>   -->
                                        </div>                                                                                                    
                                    </div>                                   
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        <?php include_once "./includes/footer.php"; ?>      
    </body>
</html>
            