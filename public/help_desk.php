<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="http://localhost/vegemart/public/images/logo.png" rel="shortcut icon">
        <title>Help Desk | Vegemart</title>
        <link rel="stylesheet" href="./css/help-desk.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/style.css">

    </head>

    <body>
        <?php include_once "./includes/nav.php"; ?>
        
        <div class="row">
            <div class="heading">
                <h1><i class="fa fa-question-circle" style="font-size:25px; color:black; padding:0.2em;"></i>Vegemart Help Desk</h1>
            </div>
               
            <div class="columns group">
                <div class="column is-6">
                <h2>Ask a question</h2>
                    <div class="ques mt-1">
                        <div class="row ques-row ml-2 pr-2 mb-2">
                            <div class="columns group">
                                <div class="column is-2">
                                    <img class="user-img" src= "https://www.flaticon.com/premium-icon/icons/svg/2633/2633302.svg">
                                </div>
                                <div class="column is-10 has-text-centered">
                                    <p class="justify-text">How long does an auction last?  <b>Namal Perera</b></p>
                                    <hr>
                                    <div class="row">
                                        <div class="columns group">
                                            <div class="column is-2">
                                                <img class="tech-img" src= "https://www.flaticon.com/svg/static/icons/svg/3346/3346501.svg">
                                            </div>
                                            <div class="column is-10 has-text-centered">
                                                <p class="justify-text">An auction typically lasts 6 hours. <b> - Imashi</b></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ques-row ml-2 pr-2 mb-2">
                            <div class="columns group">
                                <div class="column is-2">
                                    <img class="user-img" src= "https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg">
                                </div>
                                <div class="column is-10 has-text-centered">
                                    <p class="justify-text">Can the products be delivered to the buyers? <b> Adam Fernando</b></p>
                                    <hr>
                                    <div class="row">
                                        <div class="columns group">
                                            <div class="column is-2">
                                                <img class="tech-img" src= "https://www.flaticon.com/svg/static/icons/svg/3346/3346501.svg">
                                            </div>
                                            <div class="column is-10 has-text-centered">
                                                <p class="justify-text">Delivery can be done depending on the deliveres in your area and according to their availability.  <b>- Dineshiya</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                   
                <div class="column is-6 has-text-centered ">
                    <h2>View FAQs</h2>
                    <div class="row">
                        <div class="columns group">
                            <div class="column is-1"></div>
                            <div class="column is-10">
                                <div class="faq-section mr-2 pl-2 mb-2">                
                                    <div class="row has-text-centered ">
                                        <div class="columns group">
                                            <div class="column is-2">
                                                <img class="user-img" src= "https://www.flaticon.com/premium-icon/icons/svg/2870/2870898.svg">
                                            </div>
                                            <div class="column is-10 has-text-centered pr-1">
                                                <p class="justify-text">How long does an auction last?</p>
                                                <a style="color:#626567; font-size:16px; text-align:right!important; margin-right:10px;" href=\"#\">View Answer</a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="columns group">
                                            <div class="column is-2">
                                                <img class="user-img" src= "https://www.flaticon.com/premium-icon/icons/svg/2633/2633302.svg">
                                            </div>
                                            <div class="column is-10 has-text-centered pr-1">
                                                <p class="justify-text">Can the products be delivered to the buyers? </p>
                                                <a style="color:#626567; font-size:16px; text-align:right!important; margin-right:10px;" href=\"#\">View Answer</a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="columns group">
                                            <div class="column is-2">
                                                <img class="user-img" src= "https://www.flaticon.com/svg/static/icons/svg/843/843298.svg">
                                            </div>
                                            <div class="column is-10 has-text-centered pr-1">
                                                <p class="justify-text">Can we advertise our products in your website?</p>
                                                <a style="color:#626567; font-size:16px; text-align:right!important; margin-right:10px;" href=\"#\">View Answer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-1"></div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
        <div id="askQ">
            <button class="button" onClick="location.href='http://localhost/vegemart/ask_Q.php';"><i class="fa fa-question mr-1" style="font-size:18px; color: white;"></i>Ask a Question</button>
        </div>
        <?php include_once "./includes/footer.php"; ?>      
    </body>
</html>
            