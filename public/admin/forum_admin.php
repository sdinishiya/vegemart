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

        <title>Forum Reports | Vegemart</title>
    </head>
    <body>
        <?php include "../includes/admin_nav.php"; ?>
        <div class="row">
            <h1 id="title" class="has-text-left ml-2 mt-1 mb-0">Forum Reports</h1>
            <div class="columns group mt-0">
                <div class="column is-1"></div>
                <div class="column is-12 ml-1 mr-1">
                    <table class="user" id="myTable">
                        <tr>
                            <th>Post owner</th>
                            <th>Post Title</th>
                            <th>Date Created</th>
                            <th>Report count</th>
                            <th style="color:white;">.</th>
                            <th style="color:white;">.</th>
                        </tr>
                        <tr>        
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt=""><br>
                            Nimal Bandara</td>
                            <td>Is Gardening worth it?</td>
                            <td>10.11.2020</td>
                            <td>2</td>
                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="red-button mt-0 mb-0" style="border-radius: 20px;!important" onClick="location.href='#';">Remove Post</button></td>
                        </tr>
                        <tr>        
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt=""><br>
                            Kamal Rathne</td>
                            <td> Do you add soil before you plant a crop?</td>
                            <td> 12.11.2020</td>
                            <td>1</td>
                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="red-button mt-0 mb-0" style="border-radius: 20px;!important" onClick="location.href='#';">Remove Post</button></td>
                        </tr>
                        <tr>        
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt=""><br>
                            Prem Gunasena</td>
                            <td>Do you spray your crops for pests and diseases?</td>
                            <td>16.11.2020</td>
                            <td>1</td>
                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="red-button mt-0 mb-0" style="border-radius: 20px;!important" onClick="location.href='#';">Remove Post</button></td>
                        </tr>
                        <tr>        
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt=""><br>
                            Sunimal Silva </td>
                            <td> Where does the water come from that you use on your crops?</td>
                            <td>16.11.2020</td>
                            <td>1</td>
                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="red-button mt-0 mb-0" style="border-radius: 20px;!important" onClick="location.href='#';">Remove Post</button></td>
                        </tr>
                        <tr>        
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt=""><br>
                            Akil Senerathna</td>
                            <td>Have you tested your soil for heavy metals and pollutants</td>
                            <td>29.11.2020</td>
                            <td>1</td>
                            <td class="has-text-centered"><a href="#"> View Post</a></td>
                            <td><button class="red-button mt-0 mb-0" style="border-radius: 20px;!important" onClick="location.href='#';">Remove Post</button></td>
                        </tr>
                    </table>
                </div>
                <div class="column is-1"></div>
            </div>
        </div>
    </body>
</html>