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

        <title>Activity Logs | Vegemart</title>
    </head>
    <body>
        <?php include "../includes/admin_nav.php"; ?>       
        <div class="row">
            <h1 id="title" class="has-text-left ml-2 mt-1 mb-0">Activity Logs</h1>
            <div class="columns group mt-0">
                <div class="column is-1"></div>
                <div class="column is-10 ml-1 mr-1">
                    <table class="user" id="myTable">
                        <tr>
                            <th>Date & Time</th>
                            <th>User</th>
                            <th>Active Status</th>
                            <th>Login Status</th>
                            
                        </tr>
                        <tr>    
                            <td>10.12.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Adam Fernando</td>
                            <td>Active</td>

                            <td class="has-text-centered">Login successfully</td>
                            
                        </tr>
                        <tr>    
                            <td>10.12.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Adam Fernando</td>
                            <td>Active</td>

                            <td class="has-text-centered">Login successfully</td>
                            
                        </tr>
                        <tr>    
                            <td>10.12.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Adam Fernando</td>
                            <td>Active</td>

                            <td class="has-text-centered">Login successfully</td>
                            
                        </tr>
                        <tr>    
                            <td>10.12.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Adam Fernando</td>
                            <td>Active</td>

                            <td class="has-text-centered">Login successfully</td>
                            
                        </tr>
                        <tr>    
                            <td>10.12.2020</td>    
                            <td><img class="user-image mt-0 mb-0" src="https://www.flaticon.com/premium-icon/icons/svg/1993/1993736.svg" alt="">
                            <br>Adam Fernando</td>
                            <td>Active</td>

                            <td class="has-text-centered">Login successfully</td>
                            
                        </tr>
                    </table>
                </div>
                <div class="column is-1"></div>
            </div>
        </div>
    </body>
</html>