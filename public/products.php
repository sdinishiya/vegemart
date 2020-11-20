<?php
    include_once ('./includes/nav.php');                       
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Vegemart</title>
        <link href="images/logo.png" rel="shortcut icon">
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/footer.css">
        
    </head>

    <body>
        
        <!--slideshow starts here -->
    <div class="slideshow-container">
        <div class="text ml-5 mr-5 mt-4">
            <h1>Want some? Get some</h1>
            <p>Get your vagetables delivered to your door step</p>
        </div>
        <div class="advertisements">  
            <img src="./images/card1.png">  
        </div>
        <div class="advertisements">  
            <img src="./images/card2.png">  
        </div>
        <div class="advertisements">  
            <img src="./images/card3.png">  
        </div>
        <!-- <div class="advertisements">  
            <img src="./images/4.jpg">  
        </div>
        <div class="advertisements">  
            <img src="./images/5.jpg">  
        </div>
        <div class="advertisements">  
            <img src="./images/6.jpg">  
        </div>
        <div class="advertisements">  
            <img src="./images/7.jpg">  
        </div>
        <div class="advertisements">  
            <img src="./images/8.jpg">  
        </div> -->
        <div class="promotions">  
            <img src="./images/1.jpg">  
        </div>
        <div class="promotions">  
            <img src="./images/2.jpg">  
        </div>
        <div class="promotions">  
            <img src="./images/3.jpg">  
        </div>
        <div class="promotions">  
            <img src="./images/4.jpg">  
        </div>
        <div class="promotions">  
            <img src="./images/5.jpg">  
        </div>
        <div class="promotions">  
            <img src="./images/6.jpg">  
        </div>
        <div class="promotions">  
            <img src="./images/7.jpg">  
        </div>
        <div class="promotions">  
            <img src="./images/8.jpg">  
        </div>
        
    </div>

        <script>
            var slideIndex1 = 0;
            showSlides1();
            function showSlides1() {
            var j;
            var slides = document.getElementsByClassName("advertisements");
            for (j = 0; j < slides.length; j++) {
                slides[j].style.display = "none";  
            }
            slideIndex1++;
            if (slideIndex1 > slides.length) {
            slideIndex1 = 1;
            }    
            slides[slideIndex1-1].style.display = "block";  
            setTimeout(showSlides, 5000); // Change image every 5 seconds
            }
        </script>
        <script>
            var slideIndex = 0;
            showSlides();
            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("promotions");
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
    
    <!--slideshow ends here -->       

        
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
                                    <?php include ('../src/filter.php'); ?>
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

        <!-- products block starts here-->
        <div class="items-container">
            
            <?php 
            function showProducts($rowProduct){?>
                <div class= "block" onclick= "window.location.href = 'bid.php?id=<?php echo $rowProduct['productID'] ?>'" style="cursor: pointer;">
                    <img src= images/products/<?php echo $rowProduct['imageName'] ?>>
                    <h3><?php echo $rowProduct['name'] ?></h3>
                    <h3>Location: <?php echo $rowProduct['city'] ?> </h3>
                    <h3>Rs. <?php echo $rowProduct['minPrice']  ?>(250g)</h3>
                </div>
            <?php
            }
            include_once ('../src/products.php');
            ?>
            
             
        </div>   
        <?php include_once "./includes/footer.php"; ?>      
    </body>
</html>