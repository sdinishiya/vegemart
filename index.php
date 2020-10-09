<?php include('./database/dbconfig.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Vegemart</title>
  <link rel="stylesheet" href="./css/styles.css">
<style>
    * {box-sizing: border-box;}
body {
font-family: Verdana, sans-serif;
background-color:#FFFFFF ;
background-repeat: no-repeat;
 background-size: cover;
}
.mySlides {
    display: none;
}

.slideshow-container > div {
    position: absolute;
    max-width: 100%;
    width: 100%;
    height: 485px;
    max-height: 100%;
    margin-left: 0%;
    margin-top:-17%;
    z-index: -1;    
}

.slideshow-container > div > img {
    height: 100%;
    width: 100%;
}
.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 15s;
  animation-name: fade;
  animation-duration: 15s;
}

@-webkit-keyframes fade {
  from {opacity: 0.7} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 0.99} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.search-icon{
  height: 60px;
  width: 50%;
  display: flex;
  background: white;
  border-radius: 5px;
  margin-left: 25%;
  margin-top: 19.25%;
  z-index: 1;  
  color:black;
  background: rgba(0,0,0,.6);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
    display: flex; 
}
::placeholder { 
  color: white;
  font-size: 18px;
  opacity: 1;
}
.search-icon input{
  height: 100%;
  width: 218%;
  border: none;
  outline: none;
  padding: 0 10px;
  color: white;
  font-size: 16px;
  border-radius: 5px 0 0 5px;
  background: rgba(0,0,0,1);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px; 
   
}
.icon{  
  cursor: pointer;
  margin-left: -12.5%;
}

.icon span{
  position:relative;
  top:-40px;
  left: 232%;
  color: white;
  width: 55px;
  font-size: 22px;
  margin-top: -1px;
  margin-left: 3px;
  margin-bottom: -10px;
}
.row-25{
    float: left;
    position: relative;
    padding: 14px;
    display: inline-block; 
    margin-top: 1%;   
}
.row-25{
    width:25%;
}

.row-100{
    margin-top: 15%;
    width:100%;
}
.block{ 
  background: white; 
  height:325px; 
  width:300px; 
  display:flex; 
  border-style: solid;
  border-color: black;   
} 
.block img{
    height: 210px;
    width: 280px;
    display: flex;
    margin-top: 2.5%;
    margin-left: 2.4%;  
}
.block .name{
    position: absolute;
    color: black;
    margin-left: 3%;
    margin-top: 67%;
    display:flex;
}
.block .location{
    position: absolute;
    color: black;
    margin-left: 3%;
    margin-top: 75.5%;
    display:flex;
}
.block .price{
    position: absolute;
    color: black;
    margin-left: 3%;
    margin-top: 85%;
    display:flex;
}

  </style>
</head>
<body>
  <?php
  session_start();
    include "./includes/loggedIn-user-nav.php";
  ?>


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

</div>
<li class="search-icon">
      <form action="#">
        <input type="search" placeholder="Search">
        <label class="icon">
          <span class="fas fa-search"></span>
        </label>
      </form>
</li>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!-- Fetching Products PHP -->
    <?php
    
        $retrieveProduct = 'SELECT * FROM `products`'; //Selecting all data from Table
        $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL

    ?>
<!-- End of Fetching Products PHP -->


<div class="row-100">
    <?php
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
            echo "<div class=\"row-25\">
                    <div class= \"block\">
                        <img src= \"./images/products/{$rowProduct['image_name']}\">
                        <h3 class=\"name\">". $rowProduct['name'] ."</h3> 
                        <h3 class=\"location\">Location: ". $rowProduct['address3']."</h3>
                        <h3 class=\"price\">Rs. ". $rowProduct['minprice'] ." (1kg)</h3>             
                    </div>                          
                </div>";
        }
    ?>   
</div> 


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
</body>
</html>

