<?php     
    include ('../../src/session.php');
    include ('../../config/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="../css/seller-nav.css">
    </head>

    <body>
        <header class="header">
            
            <a href="./seller_home.php"><img class="logopic" src="../images/llogo.png"></a>";
            
            <ul class="main-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Help Desk</a></li>
                <li class="nav-item-has-dropdown">  
                    <?php  
                        if (isset($_SESSION["loggedInSellerID"])) {
                            $userID = $_SESSION["loggedInSellerID"];
                            $retrieveInfo =  "SELECT * FROM client WHERE id='$userID';"; //Selecting all data from Table
                            $resultInfo = mysqli_query($con, $retrieveInfo); //Passing SQL

                            while($rowUser  = mysqli_fetch_assoc($resultInfo)){
                                echo "<img class=\"profile\" src=\"../images/users/{$rowUser['profilePic']}\" id=\"profile\" alt=\"Avatar\">";
                            }
                        }
                            //$userID=6;
                        else{
                            echo"<li><a href=\"../login.php\">Login</a></li>";
                        }          
                            
                    ?> 
                </li> 
            </ul>
        </header> 
        <div class="sub-menu-1" id="sub-menu-1">
                <ul>
                <li><a href="seller_profile_edit.php" class="drop">View Profile</a></li>
                <li><a href="../../src/logout.php" class="drop">Log out</a></li>             
                </ul>
        </div> 
        
        <script>
            let visible = false
            let dropdown = document.getElementById("sub-menu-1")
            let image = document.getElementById("profile")
            image.addEventListener('click', () => {
                if(visible !== true) {
                    dropdown.style.display = 'block'
                    visible = true;
                } else {
                    dropdown.style.display = 'none'
                    visible = false;
                }
            } );
        </script>
    </body>
</html>