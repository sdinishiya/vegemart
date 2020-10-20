<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            *,*:before,*:after{
                box-sizing: border-box;
            }
            body{
                font-family: sans-serif;
                margin: 0;
                display: grid;
                font-size: 14px;
            }
            footer{
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex;
                display: flex;
                flex-flow: row wrap;
                padding: 30px;
                color: #fff;
                background: #262626;
            }
            .footer > *{
                flex: 1 100%;
            }
            .l-footer{
                margin-left: 1.25em;
                margin-right: 1.25em;
                margin-bottom: 2em;
            }
            h2{
                font-weight: 600;
                font-size: 16px;
            }
            .footer ul{
                list-style: none;
                padding-left: 0;
            }
            .footer li{
                line height: 2em;
                padding-bottom:1em;
            }
            .footer a{
                text-decoration: none;
            }
            .r-footer{
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex;
                display: flex;
                flex-flow: row wrap;
            }
            .r-footer > *{
                flex: 1 50%;
                margin-right: 1.25em;
                margin-left: 1.25em;
            }
            .box a{
                text-decoration: none;
                color: #999;
            }
            .h-box{
                column-count: 2;
                column-gap: 1.25em; 
            }
            .b-footer{
                text-align: center;
                color: #999;
                padding-top: 50px;
            }
            .l-footer p{
                padding-right: 20%;
                color: #999;
            }
            .logo-image{
                height: 50px;
            }
            @media screen and (min-width: 600px) {
                .r-footer > *{
                    flex: 1;
                }
                .features{
                    flex-grow: 2;
                }
                .l-footer{
                    flex: 1 0px;
                }
                .r-footer{
                    flex: 2 0px;
                }    
            }

        </style>
    </head>

    <body>
        <footer class="footer">
            <div class="row">
                <div class="columns group">
                    <div class="column is-3" style="color: #999">
                        <i class="fa fa-shopping-bag" style="font-size:60px; color:white;"></i>
                        <h3>Shop for freshness</h3>
                        <p>Safe and high quality</p>
                    </div>
                    <div class="column is-3" style="color: #999">
                        <i class="fa fa-truck" style="font-size:60px; color:white;"></i>
                        <h3>Quick delivery</h3>
                        <p>Safe and high quality</p>
                    </div>
                    <div class="column is-3" style="color: #999">
                        <i class="fa fa-credit-card" style="font-size:60px; color:white;"></i>
                        <h3>Secure Payment</h3>
                        <p>Safe and high quality</p>
                    </div>
                    <div class="column is-3" style="color: #999">
                        <i class="fa fa-handshake-o" style="font-size:60px; color:white;"></i>
                        <h3>Help local farmers</h3>
                        <p>Safe and high quality</p>
                    </div>
                </div>
                
            </div>
            <div class="l-footer">
                
                    <h1><img class="logo-image" src="tlogo.png" alt="logo"></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur maximus placerat. Aenean orci est, cursus a ante quis, venenatis posuere libero. In fermentum pharetra urna eget accumsan.</p>
            </div>
            <ul class="r-footer">
                <li><br>
                    <h2>Explore</h2>
                    <ul class="box">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                </li>
                <li class-"features"><br>
                    <h2>Need Help</h2>
                    <ul class="box">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Customer Services</a></li>
                    </ul>
                </li>
                <li><br>
                    <h2>Legal</h2>
                    <ul class="box">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Contract</a></li>
                    </ul>
                </li>
            </ul>
            <div class="b- footer">
                <p>All Rights Reserved by &copy;Vegemart 2020</p>
            </div>
        </footer>
    </body>
</html>
