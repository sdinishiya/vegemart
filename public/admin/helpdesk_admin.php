<?php
    include ('../../config/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">

        <title>Help Desk | Vegemart</title>
    </head>
    <body>
        <?php include "../includes/admin_nav.php"; ?>       
        <div class="row">
            <h1 id="title" class="has-text-left ml-2 mt-1 mb-0">Help Desk (Administration)</h1>
            <div class="columns group mt-0">
                <div class="column is-1"></div>
                <div class="column is-10 ml-1 mr-1">
                    <table class="user" id="myTable">
                        <tr>
                            <th>Date Created</th>
                            <th>Client</th>
                            <th>Question</th>
                            <th style="color:white;">.</th>
                            <th style="color:white;">.</th>
                        </tr>
                        <tr>    
                            <td>10.11.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Adam Fernando</td>
                            <td>How Long does a bid last?</td>

                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="green-button mt-0 mb-0" style="border-radius: 20px; !important" onClick="location.href='#';">Answer</button></td>
                        </tr>
                        <tr>    
                            <td>12.11.2020</td>      
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Namal Bandara </td>
                            <td>What is the lowest quantity that we can bid for?</td>

                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="green-button mt-0 mb-0" style="border-radius: 20px; !important" onClick="location.href='#';">Answer</button></td>
                        </tr>
                        <tr>    
                            <td>17.11.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Andrene Perera</td>
                            <td>Can we request for deliverers?</td>

                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="green-button mt-0 mb-0" style="border-radius: 20px; !important" onClick="location.href='#';">Answer</button></td>
                        </tr>
                        <tr>    
                            <td>21.11.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Saman De silva</td>
                            <td>How can I add an advertisement?</td>

                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="green-button mt-0 mb-0" style="border-radius: 20px; !important" onClick="location.href='#';">Answer</button></td>
                        </tr>
                        <tr>    
                            <td>28.11.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Hemal Silva</td>
                            <td>How can I join the community?</td>

                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="green-button mt-0 mb-0" style="border-radius: 20px; !important" onClick="location.href='#';">Answer</button></td>
                        </tr>
                    </table>
                </div>
                <div class="column is-1"></div>
            </div>
        </div>
    </body>
</html>