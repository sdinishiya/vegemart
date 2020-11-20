<?php     
    include ('../../src/session.php');
    include ('../../config/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                font-family: 'Trebuchet MS', sans-serif;
                line-height: 1.6;
                margin: 0;
                min-height: 100vh;
            }

            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            a {
                text-decoration: none;
            }

            .header {
                display:flex;
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1;
                padding: 5px 1.5%;
                border: 1px solid #000000;
                width: 100%;
                background-color: black;
                -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
            }

            .logopic{
                cursor: pointer;
                width: 220px;
            }

            .logo {
                margin: 0;
                font-size: 1.45em;
            }

            .main-nav {
                margin-top: 5px;

            }
            .logo a,
            .main-nav a {
                padding: 10px 15px;
                font-weight:500;
                text-transform: uppercase;
                text-align: center;
                display: block;
            }

            .main-nav a {
                color: white;
                font-size: 1.1em;
            }

            .main-nav a:hover {
                color: #718daa;
            }

            /*.main-nav-item-has-dropdown .profile{
                position:absolute;
                border-radius: 100%;
                height: 45px;
                width: 45px;  
                cursor:pointer;
            }*/

            .profile{
                border-radius: 100%;
                height: 45px;
                width: 45px;  
                cursor:pointer;
            } 

            .sub-menu-1{
                display: none;
                font-weight: 550;
                position:absolute;
                background-color: #171c24;
                width: 10%;
                border-radius: 0 0 10px 10px;
                position: absolute;  
                z-index: 9999;
                top:10%;
                right: 18px;
                overflow: hidden;
                position: fixed;
            }
            .sub-menu-1 ul{
                list-style: none;
                font-size: 16px;
            }
            .sub-menu-1 ul li{
                display:flex;
                padding: 10px 10px 10px 10px;
            }
            .sub-menu-1 ul li a{
                text-decoration: none;
                color: white;
            }

            .sub-menu-1 .drop a:hover{
                display: block;
                position: absolute;
                background: white;
                margin-top: 15px;
                margin-left: -15px;
            }

            /* ================================= 
            Media Queries
            ==================================== */

            @media (min-width: 769px) {
                .header,
                .main-nav {
                    display: flex;
                    align-items:center;
                    
                }
                .header {
                    flex-direction: column;
                    align-items: center;
                    .header{
                        width: 80%;
                        margin: 0 auto;
                        max-width: 1150px;
                    }
                }

            }

            @media (min-width: 1025px) {
                .header {
                    flex-direction: row;
                    justify-content: space-between;
                }

            }


        </style>
    </head>

    <body>
        <header class="header">
            
            <a href="./deliverer_home.php"><img class="logopic" src="../images/llogo.png"></a>";
            
            <ul class="main-nav">
                <li><a href="./deliverer_home.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="./my_deliveries.php">My Deliveries</a></li>
                <li class="nav-item-has-dropdown">  
                    <?php  
                        if (isset($_SESSION["loggedInDelivererID"])) {
                            $userID = $_SESSION["loggedInDelivererID"];
                            $retrieveInfo =  "SELECT * FROM deliverer WHERE delivererID='$userID';"; //Selecting all data from Table
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
                <li><a href="./deliverer_profile_edit.php" class="drop">View Profile</a></li>
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