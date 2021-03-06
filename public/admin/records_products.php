<?php
    include ('../../config/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/deliverer-home.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Product Records | Vegemart</title>
    </head>
    <body>
        <?php include "../includes/admin_nav.php"; ?>
        <div class="row">
            <h1 class="has-text-left ml-2 mb-0">Product Sales</h1>
            <div class="columns group mt-0">
                <div class="column is-4 pl-1">
                    <div class="card mt-1 pb-0 pl-2 pr-1">
                        <div class="columns group">
                            <div class="column is-3 pl-0 has-text-left">
                                <i class="fa fa-shopping-cart mt-1 mb-1" style="font-size:50px; padding:0.2em 0.1em; margin:0.2em 0;color:#138D75;"></i>
                            </div>
                            <div class="column is-5 pl-0 has-text-left">
                                <h2 style="font-size:22px;" class="mb-0 pb-0">568</h2>
                                <h3 class="mt-0 pt-0">Total Sales</h3>
                            </div>
                            <div class="column is-4 pl-0 has-text-left">
                                <i class="fa fa-bar-chart mt-1 mb-1" style="font-size:50px; padding:0.2em 0.1em; margin:0.2em 0;color:#E5E7E9;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4 pl-1">
                    <div class="card mt-1 pb-0 pl-2 pr-1">
                        <div class="columns group">
                            <div class="column is-3 pl-0 has-text-left">
                                <i class="fa fa-check-circle mt-1 mb-1" style="font-size:50px; padding:0.2em 0.1em; margin:0.2em 0;color:#34DB98;"></i>
                            </div>
                            <div class="column is-5 pl-0 has-text-left">
                                <h2 style="font-size:22px;" class="mb-0 pb-0">546</h2>
                                <h3 class="mt-0 pt-0">Successfully sold</h3>
                            </div>
                            <div class="column is-4 pl-0 has-text-left">
                                <i class="fa fa-bar-chart mt-1 mb-1" style="font-size:50px; padding:0.2em 0.1em; margin:0.2em 0;color:#E5E7E9;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4 pl-1">
                    <div class="card mt-1 pb-0 pl-2 pr-1">
                        <div class="columns group">
                            <div class="column is-3 pl-0 has-text-left">
                                <i class="fa fa-exclamation-circle" style="font-size:50px; padding:0.2em 0.1em; margin:0.2em 0;color:#EB694F ;"></i>
                            </div>
                            <div class="column is-5 pl-0 has-text-left">
                                <h2 style="font-size:22px;" class="mb-0 pb-0">12</h2>
                                <h3 class="mt-0 pt-0">Failed Orders</h3>
                            </div>
                            <div class="column is-4 pl-0 has-text-left">
                                <i class="fa fa-bar-chart mt-1 mb-1" style="font-size:50px; padding:0.2em 0.1em; margin:0.2em 0;color:#E5E7E9;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns group mb-1">
                <div class="column is-1"> </div>
                <div class="column is-5 pl-1">
                    <h2 style="font-size:22px;" class="has-text-left">No Of Sales based on Product Type</h2>
                    <div class="card pl-1 pr-1 pt-1 pb-1">                       
                        <canvas id="product_type_chart"></canvas>
                    </div>
                </div>
                <div class="column is-5 pl-1">
                    <h2 style="font-size:22px;" class="has-text-left">No Of Sales based on Location</h2>
                    <div class="card pl-1 pr-1 pt-1 pb-1">                       
                        <canvas id="product_location_chart"></canvas>
                    </div>
                </div>
                <div class="column is-1"> </div>
            </div>
            <hr>
            <div class="columns group mt-0">
                <div class="column is-4 pl-3 pr-3 mt-0 mb-2">
                        <h2 style="font-size:22px;" class="has-text-left">Total Products sold</h2>
                        <div class="card has-text-centered pt-1 pb-1 pl-1 pr-1">
                            <img id="cash" src="https://www.flaticon.com/svg/static/icons/svg/3082/3082050.svg" alt="cash">
                            <h2 style="font-size:22px;" class="has-text-centered pt-0 pb-0 mb-0">177 kg</h2>
                            <h3 class="has-text-centered mt-0 pt-0">December 2020</h3>
                            <hr>
                            <div class="columns group">
                                <div class="column is-6 pl-2 has-text-left">
                                    <h3>Total Quantity</h3>
                                </div>
                                <div class="column is-6 pl-2 has-text-right">
                                    <h3>5,313 kg</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4 pl-3 pr-3 mt-0 mb-2">
                        <h2 style="font-size:22px;" class="has-text-left">Total Income</h2>
                        <div class="card has-text-centered pt-1 pb-1 pl-1 pr-1">
                            <img id="cash" src="https://www.flaticon.com/svg/static/icons/svg/2331/2331717.svg" alt="cash">
                            <h2 style="font-size:22px;" class="has-text-centered pt-0 pb-0 mb-0">Rs. 1,920</h2>
                            <h3 class="has-text-centered mt-0 pt-0">December 2020</h3>
                            <hr>
                            <div class="columns group">
                                <div class="column is-6 pl-2 has-text-left">
                                    <h3>Total Income</h3>
                                </div>
                                <div class="column is-6 pl-2 has-text-right">
                                    <h3>Rs. 538,260</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-4 pl-3 pr-3 mt-0 mb-2">
                        <h2 style="font-size:22px;" class="has-text-left">Total Profit</h2>
                        <div class="card has-text-centered pt-1 pb-1 pl-1 pr-1">
                            <img id="cash" src="https://www.flaticon.com/svg/static/icons/svg/639/639365.svg" alt="cash">
                            <h2 style="font-size:22px;" class="has-text-centered pt-0 pb-0 mb-0">Rs. 920</h2>
                            <h3 class="has-text-centered mt-0 pt-0">December 2020</h3>
                            <hr>
                            <div class="columns group">
                                <div class="column is-6 pl-2 has-text-left">
                                    <h3>Total Profit</h3>
                                </div>
                                <div class="column is-6 pl-2 has-text-right">
                                    <h3>Rs. 78,260</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <script>
            var chart = new Chart('product_type_chart', {
                type: 'bar',
                data: {
                    labels: ['Beans', 'Beetroot', 'Broccoli', 'Cabbage', 'Carrot', 'Cucumber', 'Eggplant', 'Garlic', 'Onion', 'Pumpkin',' Potato', 'Tomato'],
                    datasets: [{
                        barPercentage: 1,
                        barThickness: 2,
                        maxBarThickness: 3,
                        minBarLength: 1,
                        backgroundColor: '#c46998',
                        backgroundColor:'rgba(189, 58, 87, 0.8)',
                        borderColor:'rgba(189, 58, 87, 1)',
                        borderWidth: 1,
                        label: 'Number of products sold in (kg)',
                        data: [765, 323, 451, 195, 383, 652, 497, 757, 153, 524, 436, 177]
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }],
                        yAxes: [{
                            ticks: {
                            beginAtZero: true
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }]
                    }
                }
            });

            var PieChart  = new Chart('product_location_chart', {
                type: 'pie',
                data: {
                    labels: ['Kandy', 'Matale', 'Nuwara Eliya', 'Badulla', 'Anuradhapura'],
                    datasets: [{
                        label: 'Number of Sales',
                        backgroundColor: ['#F1948A','#5DADE2' ,'#E163BB', '#F9E79F', '#76D7C4',],
                        borderWidth: 0.5,
                        data: [ 32, 45, 19, 38, 15]
                    }]
                },
                options: {
                    title: {
                        display: true,
                    }
                }
            });
        </script>
        <br>
    </body>
</html>