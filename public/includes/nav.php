<?php
    include ('../src/session.php'); 
    include ('../config/dbconfig.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="css/style.css" type="text/css">  
        <link rel="stylesheet" href="css/nav.css">
        <script src="https://kit.fontawesome.com/85eb26c5dd.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header class="header">
            
            <a href="./index.php"><img class="logopic" src='images/blacklogo.png'></a>            
            <ul class="main-nav">
                
                <li><a href="./index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="./forum.php">Forum</a></li>
                <li><a href="./help_desk.php">Help Desk</a></li>
                <li><div id="notification-icon" style="color:black;cursor:pointer"><i class="far fa-bell"></i>
                <span>4</span>
                </div></li> 
                
                <li class="nav-item-has-dropdown">  
                <?php
            //session_start();
                    include '../src/nav_profilepic.php';

                ?>
                </li> 
            </ul>
        </header> 
        <li>
            <div class="dropdown">                    
                    <?php
                        include '../src/nav_dropdown.php';
                    ?>
                <div class="dropdown-content">
                    <a href="#">View Profile</a>
                    <a href="../src/logout.php">Logout</a>
                </div>               
            </div> 
        </li>
        <li>
                        <div class="dropdown">
                        <i class="fa fa-bell" style="font-size:16px; color:black; margin-left:1em; margin-right:0; padding-right:0;"></i><button onclick="dropFunc()" class="notifbtn">Messages</button>
                            <div id="notifDrop" class="dropdown-content">
                                <a href="#home">You have a message from Nimal Bandara</a>
                            </div>
                        </div>
        </li>
        <script>
            let visible_notification = false
            let notification = document.getElementById("notification-container")
            let icon = document.getElementById("notification-icon")
            icon.addEventListener('click', () => {
                if(visible_notification !== true) {
                    notification.style.display = 'block'
                    visible_notification = true;
                } else {
                    notification.style.display = 'none'
                    visible_notification = false;
                }
            } );
        </script>
        
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