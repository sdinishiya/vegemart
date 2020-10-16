
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
            
            <a href="./index.php"><img class="logopic" src="./images/llogo.png"></a>
            <ul class="main-nav">
                <li><a href="#p">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Help Desk</a></li>
                <?php
                //session_start();
                if (isset($_SESSION["loggedInUserID"])) {
                    include_once "./includes/logout-nav.php";
                }else{
                    include_once "./includes/login-nav.php";
                }
                ?>
                    <li><a href="./login.php">login</a></li>
            </ul>
        </header> 
    </body>
</html>