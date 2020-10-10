<header class="navigation">
    <div class="row-100 bg-grey">
        <ul class="left-nav">
            <li><a class="home-active" href="index.php">Home</a></li>
            <li><a class="profile-active" href="profile.php">Products</a></li>                    
            <li><a class="help-active" href="help.php">Help</a></li>
        </ul>
                
        <ul class="right-nav">
            <?php require_once('../database/dbconfig.php'); ?>
            
			<?php 
				if(empty(session_id())){
                    session_start();
                }
				if(isset($_SESSION['loggedInSellerID'])){
                    if("{$_SESSION['userType']}" == 'seller'){
						echo "<li><a href=\"../seller/seller-home.php\" class=\"active\">Seller Dashboard</a></li>";							
						echo "<li><a href=\"../logout.php\">Log Out</a></li>";
                        echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['username']. " (Seller)</p>";
				    }                           
                }
				else{
					echo "<li><a class=\"active\" href=\"../login.php\">Login</a></li>";
					echo "<li><a href=\"../signup.php\">Sign Up</a></li>";
				}
            ?>
                
        </ul>               
    </div>
</header>