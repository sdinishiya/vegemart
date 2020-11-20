<?php
    include ('../src/session.php'); 
    include ('../config/dbconfig.php');
        
        if(isset($_POST["submit"]))
        {
            $min_price = $_POST["min_price"];
            $max_price = $_POST["max_price"];
            $location = $_POST["location"];
            $search = $_POST["search"];
            
            if($max_price=="" && $location=="Location" && $min_price==""){
            $retrieveProduct = "SELECT * FROM `products` WHERE name LIKE '$search%' "; //Selecting all data from Table
            $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL             
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
                    showProducts($rowProduct);
                }         
            }
            // $_GET['id]

            else if(!empty($min_price) && $max_price=="" && $location=="Location"){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL             
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
                    showProducts($rowProduct);
                }         
            }
            
            else if(!empty($max_price) && $min_price=="" && $location=="Location"){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL             
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
                    showProducts($rowProduct);
                }         
            }

            else if(!empty($max_price) && !empty($min_price)&& $location=="Location"){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL             
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            }

            else if($location!="Location" &&  $min_price=="" && $max_price=="" ){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL  
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            }

            else if($location!="Location" &&  !empty($min_price) && $max_price=="" ){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL 
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            } 

            else if($location!="Location" &&  !empty($max_price) && $min_price=="" ){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL 
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            }  

            else if($location!="Location" &&  !empty($max_price) && !empty($min_price) ){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minprice` >= '".$min_price."' AND `minprice` <= '".$max_price."'AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            }
            
            }else{
                $retrieveProduct = "SELECT * FROM `products`"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL          
                    while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                        showProducts($rowProduct);
                    }                                    
            }
            mysqli_close($con);
        ?>