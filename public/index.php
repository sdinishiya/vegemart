<?php
    include_once ('./includes/index_nav.php');                       
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.png" rel="shortcut icon">
    <title>Vegemart</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <style>
        
        .bg{    
        position: absolute;
        top:0%;
        left: 50%;
        vertical-align: left;
        width: 50%;
        height: 78%;
        display: flex;
        z-index: 0;
        }
        .card {
        position: relative;
        box-shadow: 6px 6px 20px -8px rgba(0, 0, 0, 0.75);
        border-radius: 15px;
        padding: 1rem;
        margin: 5%;
        margin-top: 28%!important;
        align-self: center;
        text-align: left;
        
        }

        h1{
            font-family:Candara;
        }
        
        .img{
            width:40%;
        }
        .description{
            position: relative;
            margin-top: 11%;
            align-self: center;
            text-align: left;
        }

        #heading{
            font-family: Candara;
            font-size:2em;
        }

        button {
            background-color: #138D75;
            border-color: transparent;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            justify-content: center;
            padding-bottom: calc(0.5em - 1px);
            padding-left: 1em;
            padding-right: 1em;
            padding-top: calc(0.5em - 1px);
            text-align: center;
            white-space: nowrap;
            border-radius: 0.3em;
        }

        button > i{
            color: white !important
        }
        .forum{
            position: relative;
            align-self: center;
            text-align: left;
            overflow: auto;
            
        }
        .vegetables{
            overflow: auto;
            display: flex;
        }
        .green{
            color:#138D75!important;
        }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="columns group mt-0">
                <div class="column is-7 mt-0">
                <div class="description">
                        <div class="text-align:left mb-0 pl-5 pr-1">
                            <h1 id="heading" class="mt-1" style="color:#323131;font-size:260%;margin-bottom:0px">Vege<span class="green">Mart</span></h1>                    
                            <p style="font-size:115%;">Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser or a mobile app. Consumers find a product of interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, which displays the same product's availability and pricing at different e-retailers.</p>
                            <div class="row has-text-left mt-1 mb-1 mr-1">
                                    <button class="button" onClick="location.href='http://localhost/vegemart/public/products.php';"><i class="fas fa-shopping-basket mr-1"></i></i>Shop now</button>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="column is-5 mt-0">
                    <img class="bg" src= "./images/index.png" alt="Display Picture">
                </div>
            </div>
        </div>
        <div class="row pl-1 pr-1 mt-1">
            <div class="columns group mt-0">
                <div class="column is-4 mt-0">
                    <div class="card">
                        <div class="has-text-centered mb-0">
                            <img class="img" src="./images/indexbuyer.png">
                        </div>
                        <div class="text-align:left  pl-1 pr-1">
                            <p style="font-size:120%;">The purpose of online shopping is to save time, save money. Through online shopping one can save his valuable time. One can watch and select things he wants to buy. Through online shopping we can save our money because prices are less than market prices and we receive our bought things at our home.</p>
                        </div> 
                    </div>
                </div>
                <div class="column is-4 mt-0">
                    <div class="card">
                        <div class="has-text-centered">
                            <img class="img" src="./images/indexseller.png">
                        </div>
                        <div class="text-align:left pl-1 pr-1">
                            <p style="font-size:120%;">The purpose of online shopping is to save time, save money. Through online shopping one can save his valuable time. One can watch and select things he wants to buy. Through online shopping we can save our money because prices are less than market prices and we receive our bought things at our home.</p>
                        </div>                     
                    </div>                
                </div>
                <div class="column is-4 mt-0">
                    <div class="card">
                        <div class="has-text-centered">
                            <img class="img" src="./images/indexdeliverer.png">
                        </div>     
                        <div class="text-align:left  pl-1 pr-1">
                            <p style="font-size:120%;">The purpose of online shopping is to save time, save money. Through online shopping one can save his valuable time. One can watch and select things he wants to buy. Through online shopping we can save our money because prices are less than market prices and we receive our bought things at our home.</p>
                        </div>                
                    </div>                
                </div>
            </div>
        </div>
        <div class="row pl-1 pr-2 mt-0">
            <div class="columns group mt-0">
                <div class="column is-12 pr-1">
                    <div class="forum">
                        <div class="column is-6 pr-3 pl-4">
                            <div class="has-text-left mt-0">
                                <h1>Try Not to Be Late!</h1>
                                <p style="font-size:140%">Identifying the space for a trusted delivery service, Epsilon Crest took the initiative to spread its wings into the delivery sector.</p>
                                <p style="font-size:140%">Delivery Malli was set up in order to provide a quick and reliable service in delivering goods and documents. “Malli" in Sinhala, as spoken in Sri Lanka, means “younger brother”.</p>
                                <p style="font-size:140%">With "Delivery Malli" we thought of touching the hearts of our customers becoming their most trusted brother in delivering documents, food and other secured packages.</p>
                                <p style="font-size:140%">Join one of the best delivery service</p>      
                                <div class="row has-text-right mt-1 mb-1 mr-1">
                                    <button class="button" onClick="location.href='http://localhost/vegemart/public/deliverer/deliverer_signup.php';"><i class="fas fa-truck mr-1" ></i>Rider</button>
                                </div> 
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="has-text-centered mb-0 pr-2">
                                <img src="./images/indexdelivery.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-0 mb-0 pr-1 pl-1">
            <div class="columns group mt-0">
                <div class="column is-12">
                    <div class="forum">
                        <div class="column is-6">
                            <div class="has-text-left mb-0">
                                <img class="vegetables" style="width:100%" src="./images/vege1.png">
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="has-text-left">
                                <img class="vegetables" style="width:100%;height:50%" src="./images/vege2.jpg">
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="has-text-left">
                                <img class="vegetables" style="width:100%;height:50%" src="./images/vege2.jpg">
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="has-text-left">
                                <img class="vegetables" style="width:100%;height:50%" src="./images/vege2.jpg">
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="has-text-left">
                                <img class="vegetables" style="width:100%;height:50%" src="./images/vege2.jpg">
                            </div>
                        </div>
                            <!-- <div class="has-text-left mb-0">
                                <img class="vegetables" style="width:60%" src="./images/vege3.jpg">
                            </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row pl-1 pr-2 mt-0">
            <div class="columns group mt-0">
                <div class="column is-12 pr-1">
                    <div class="forum">
                        <div class="column is-5 pr-1">
                            <div class="has-text-centered mb-0">
                                <img src="./images/indexforum.jpg">
                            </div>
                        </div>
                        <div class="column is-7 pr-2 pl-5">
                            <div class="has-text-left mt-3">
                            <h1>Ask an expert about online shopping!!</h1>
                            <p style="font-size:140%">Even though Vegemart Forums is dedicated to…. well, Vegemart, it offers a plenty of help for all online merchants out there. </p>
                            <p style="font-size:140%">With more than 52 000 of topics created, the Vegemart community has covered nearly everything concerning e-Commerce that may come into your mind. </p>
                            <p style="font-size:140%">The best thing is the fact that unlike the majority of other message boards, Vegemart Forum is continue to actively develop and add up to its value.</p>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include_once ('./includes/footer.php');                       
        ?>        
    </body>
</html>