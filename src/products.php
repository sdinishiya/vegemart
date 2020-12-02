<?php
    include ('../src/session.php'); 
    include ('../config/dbconfig.php');
    
    if (basename($_SERVER['PHP_SELF']) == "products.php"){
        
        $retrieveCart = "SELECT * FROM `cart`";
        $resultCart = mysqli_query($con, $retrieveCart);
        if(mysqli_num_rows($resultCart) > 0){
            while ($rowCart = mysqli_fetch_assoc($resultCart)) {            
                $rowUserID=$rowCart['userID'];          
                $userID=$_SESSION["loggedInUserID"];
                $productID=$rowCart['productID'];  
                $retrieveSeller = "SELECT sellerID FROM `products` WHERE productID='".$productID."' "  ;
                $resultSeller = mysqli_query($con, $retrieveSeller);
                while ($rowSeller = mysqli_fetch_assoc($resultSeller)) {
                    $sellerID=$rowSeller['sellerID'];  
                    if($userID==$rowUserID){
                        if(isset($_POST["submit"]))
                        {
                            $min_price = $_POST["min_price"];
                            $max_price = $_POST["max_price"];
                            $location = $_POST["location"];
                            $search = $_POST["search"];
                            
                            if($max_price=="" && $location=="Location" && $min_price==""){
                                $retrieveProduct = "SELECT * FROM `products` WHERE name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            }
                            // $_GET['id]

                            else if(!empty($min_price) && $max_price=="" && $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            }
                            
                            else if(!empty($max_price) && $min_price=="" && $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` <= '".$max_price."' AND name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            }

                            else if(!empty($max_price) && !empty($min_price)&& $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            }

                            else if($location!="Location" &&  $min_price=="" && $max_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            }

                            else if($location!="Location" &&  !empty($min_price) && $max_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` >= '".$min_price."' AND name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            } 

                            else if($location!="Location" &&  !empty($max_price) && $min_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            }  

                            else if($location!="Location" &&  !empty($max_price) && !empty($min_price) ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minprice` >= '".$min_price."' AND `minprice` <= '".$max_price."'AND name LIKE '$search%' AND sellerID='".$sellerID."'"; //Selecting all data from Table
                            }
                        }
                        else{
                            $retrieveProduct = "SELECT * FROM `products` WHERE sellerID='".$sellerID."'; ";
                        }
                        
                    }
                    
                    
                    else{
                        
                        if(isset($_POST["submit"]))
                        {
                            
                            $min_price = $_POST["min_price"];
                            $max_price = $_POST["max_price"];
                            $location = $_POST["location"];
                            $search = $_POST["search"];
                            
                            if($max_price=="" && $location=="Location" && $min_price==""){
                                $retrieveProduct = "SELECT * FROM `products` WHERE name LIKE '$search%' "; //Selecting all data from Table
                            }
                            // $_GET['id]

                            else if(!empty($min_price) && $max_price=="" && $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }
                            
                            else if(!empty($max_price) && $min_price=="" && $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }

                            else if(!empty($max_price) && !empty($min_price)&& $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }

                            else if($location!="Location" &&  $min_price=="" && $max_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }

                            else if($location!="Location" &&  !empty($min_price) && $max_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            } 

                            else if($location!="Location" &&  !empty($max_price) && $min_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }  

                            else if($location!="Location" &&  !empty($max_price) && !empty($min_price) ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minprice` >= '".$min_price."' AND `minprice` <= '".$max_price."'AND name LIKE '$search%'"; //Selecting all data from Table
                            }
                        }
                        else{
                            $retrieveProduct = "SELECT * FROM `products`"; //Selecting all data from Table
                        }
                    }
                    $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL 
                }  
            } 
        }
        else{
            if(isset($_POST["submit"]))
                        {
                            
                            $min_price = $_POST["min_price"];
                            $max_price = $_POST["max_price"];
                            $location = $_POST["location"];
                            $search = $_POST["search"];
                            
                            if($max_price=="" && $location=="Location" && $min_price==""){
                                $retrieveProduct = "SELECT * FROM `products` WHERE name LIKE '$search%' "; //Selecting all data from Table
                            }
                            // $_GET['id]

                            else if(!empty($min_price) && $max_price=="" && $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }
                            
                            else if(!empty($max_price) && $min_price=="" && $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }

                            else if(!empty($max_price) && !empty($min_price)&& $location=="Location"){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `minPrice` >= '".$min_price."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }

                            else if($location!="Location" &&  $min_price=="" && $max_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }

                            else if($location!="Location" &&  !empty($min_price) && $max_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            } 

                            else if($location!="Location" &&  !empty($max_price) && $min_price=="" ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                            }  

                            else if($location!="Location" &&  !empty($max_price) && !empty($min_price) ){      
                                $retrieveProduct = "SELECT * FROM `products` WHERE `city`= '".$location."' AND `minprice` >= '".$min_price."' AND `minprice` <= '".$max_price."'AND name LIKE '$search%'"; //Selecting all data from Table
                            }
                        }
                        else{
                            $retrieveProduct = "SELECT * FROM `products`"; //Selecting all data from Table
                        }
                        $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL 
        }
    }
    elseif(basename($_SERVER['PHP_SELF']) == "bid.php"){
        $retrieveProduct = "SELECT * FROM `products` WHERE productID='".$productID."'"; //Selecting all data from Table
        $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL  
    }     
?>