<?php
    session_start();
    ob_start();

    $isLoggedIn = false;

    //Replace with whatever the session variable you store
    if(isset($_SESSION['loggedInSellerID']) || isset($_SESSION['loggedInUserID'])){
        $isLoggedIn = true;
    }

?>
<header>
    <div class="row navbar">
        <div class="columns group">
            <div class="column is-4 navbar-banner">
                <img src="../images/llogo.png" alt="">
            </div>
            <div class="column is-8 has-text-right">
                <div class="row navbar-content">
                    <ol class="navbar-items pr-2">
                        <li class="navbar-item">Home</li>
                        <li class="navbar-item">About</li>
                        <li class="navbar-item">Forum</li>
                        <li class="navbar-item">Help Desk</li>
                        <?php
                            if(!$isLoggedIn){
                                echo '<li class="navbar-item">Login</li>';
                            }else{
                                echo '<li class="navbar-item">Logout</li>';
                            }
                        ?>
                    </ol>
                    <?php
                        if($isLoggedIn){
                            echo '<img class="navbar-user" src="https://thumbs.dreamstime.com/b/grey-rabbit-square-image-portrayed-against-white-background-47740048.jpg" alt="">';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>







