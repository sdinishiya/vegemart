<?php
    @ob_start();
    session_start();
?>
<?php include('./database/dbconfig.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Vegemart</title>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/style.css">

    </head>

    <body>
        <?php
            //session_start();
            include_once "./includes/nav.php";
            
        ?>

        <!--slideshow starts here -->
        <div class="slideshow-container">
            <div class="mySlides">  
                <img src="./images/1.jpg">  
            </div>
            <div class="mySlides">  
                <img src="./images/2.jpg">  
            </div>
            <div class="mySlides">  
                <img src="./images/3.jpg">  
            </div>
            <div class="mySlides">  
                <img src="./images/4.jpg">  
            </div>
            <div class="mySlides">  
                <img src="./images/5.jpg">  
            </div>
            <div class="mySlides">  
                <img src="./images/6.jpg">  
            </div>
            <div class="mySlides">  
                <img src="./images/7.jpg">  
            </div>
            <div class="mySlides">  
                <img src="./images/8.jpg">  
            </div>

            <script>
                var slideIndex = 0;
                showSlides();
                function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }    
                slides[slideIndex-1].style.display = "block";  
                setTimeout(showSlides, 5000); // Change image every 5 seconds
                }
            </script>
        </div>
        <!--slideshow ends here -->       

        <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        </script>

        <!--search box starts here -->
        <form name="theform" action="" method="post">
            <li class="search-box">
                <div class="filter-box">
                    <div class="filter-text" onclick="myFunction()">Filters</div>
                </div>      
                <input type="search" class="search-input" name="search" id="search" placeholder="Search">          
                <div class="dropdown">
                    <div class="ul-class" id="myDropdown">
                        <ul>
                            <li><input type="text" size="1.75" name="min_price" pattern="\d*" title="Should be valid price" class="dropdown-input" placeholder="Min price"></li>            
                            <li><input type="text" size="1.75" name="max_price" pattern="\d*"  title="Should be valid price" class="dropdown-input" placeholder="Max price"></li>
                            <li><select name="location" class="dropdown-input">
                                <option>  Location </option>
                                <?php
                                $sql = "SELECT `address3` FROM `products`;";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <option value="<?php echo $row['address3']; ?>"> <?php echo $row['address3']; ?> </option>
                                <?php
                                }
                                ?>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="submit" class="search-button" name="submit">
                    <label class="icon">
                        <span class="fas fa-search"></span>
                    </label> 
                </button>
                <!-- </div> -->
            </li>
        </form>

        <!--search box ends here -->

        <!-- products block starts here-->
        <div class="items-container">
        <?php
        function showProducts($rowProduct){
            echo "
                <div class= \"block\" onclick=\"bidding_process.php?id={$rowProduct['productID']}\" style=\"cursor: pointer;\">
                    <img src= \"./images/products/{$rowProduct['imageName']}\">
                    <h3>". $rowProduct['name'] ."</h3>
                    <h3>Location: ". $rowProduct['city']." </h3>
                    <h3>Rs. ". $rowProduct['minPrice'] ." (250g)</h3>
                </div>";
        }
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
                $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL  
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            }

            else if($location!="Location" &&  !empty($min_price) && $max_price=="" ){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND `minPrice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL 
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            } 

            else if($location!="Location" &&  !empty($max_price) && $min_price=="" ){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND `minPrice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
                $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL 
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
                    showProducts($rowProduct);
                }         
            }  

            else if($location!="Location" &&  !empty($max_price) && !empty($min_price) ){      
                $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND `minprice` >= '".$min_price."' AND `minprice` <= '".$max_price."'AND name LIKE '$search%'"; //Selecting all data from Table
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
        ?>
        </div>   
        <?php include_once "./includes/footer.php"; ?>      
    </body>
</html>