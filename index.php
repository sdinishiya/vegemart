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
  <link rel="stylesheet" href="./css/styles.css">
<style>
    
body {
font-family: Verdana, sans-serif;
background-color:#FFFFFF ;

}
/* slideshow css starts here */
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
/* slideshow css ends here */

/* search-box css starts here */
.search-box{
  height: 55px;
  width: 50%;
  display: flex;
  background: white;
  border-radius: 5px;
  margin-left: 20%;
  margin-top: 19.25%;
  z-index: 1;  
  color:black;
  background: rgba(0,0,0,.6);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  display: flex; 
}
/* search text */
::placeholder { 
  color: #D2DFD1;
  font-size: 18px;
  font-weight: bold;
  opacity: 1;
}
/* input inside search*/
.search-input{
  margin-left: -1%;
  height: 100%;
  width: 87%;
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
/*clickable filter box*/
.filter-box{
  margin-top: 0%;
  margin-left: 0%;
  font-size: 22px;
  font-weight: bold;
  box-sizing: border-box;
  box-shadow: 0 15px 50px rgba(0,0,0,.5);
  background-color: rgba(0,0,0,.5);
  border-radius: 10px;   
  cursor: pointer;
  height: 100%;
  width: 18%; 
  z-index=1;
}
/*filters text*/
.filter-text{
  margin-top: 12%;
  margin-left: 15%;
  color: white;
}
.filter-box::before{
  content: "";
  border-width: 6px 6px 0 6px;
  border-style: solid;
  border-color: white transparent;  
  position: absolute;
  top: 45.7%;
  left: 27.2%;
}
/*dropdown filter box*/
.dropdown{  
  margin-left: -95%;
  margin-top: 8%;  
}
.ul-class{
  display:none;
}
.ul-class ul{
  list-style:none;
  background-color: rgba(0,0,0,1);
  position: absolute;  
  width: 14.2%;
  border-radius: 0 0 10px 10px;
  display: flex;  
}

.ul-class ul li{
  padding: 20px 0px 20px 0px;
  font-size: 18px;
}

.dropdown-input{  
  margin-top:4%;
  margin-left:8%;
  margin-right: -40%;
  height:30px;
  color: white;
  font-size: 16px;
  border-radius: 5px;
  background: rgba(0,0,0,1);
}

/*search icon*/
.search-button{  
  background: transparent;
  margin-left: 87.3%;
  width: 8%;
  border-radius: 10px;
  border: none;
  cursor: pointer;
  
}
.icon{   
  margin-left: 0%;
  color: white;
  z-index: -1; 
  width: 80px; 
  font-size: 30px;
  cursor: pointer;
}

.search-icon span{
  
  position:relative;
  top:-40px;
  left: 2%;  
  width: 55px;
  
  margin-top: 0%;
  margin-left: 3px;  
}

/*css flex for retrived images*/
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
/*products block*/
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
.show{
  display:block;
}

</style>
</head>
<body>
<?php
  //session_start();
  if (isset($_SESSION["loggedInUserID"])) {
    include "./includes/loggedIn-user-nav.php";
  }else{
    include "./includes/loggedOut-user-nav.php";
  }
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
                while($row = mysqli_fetch_assoc($result))
                {
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
    </div>      
  </li>
</form>

<!--search box ends here -->

<?php
  
  if(isset($_POST["submit"]))
  {
    $min_price = $_POST["min_price"];
    $max_price = $_POST["max_price"];
    $location = $_POST["location"];
    $search = $_POST["search"];
    
    if($max_price=="" && $location=="Location" && $min_price==""){
      $retrieveProduct = "SELECT * FROM `products` WHERE name LIKE '$search%' "; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
      echo"<div class=\"row-100\">";              
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
          echo "<div class=\"row-25\">
                  <div class= \"block\" onclick=\"bidding_process.php?id={$rowProduct['productID']}\" style=\"cursor: pointer;\">
                    <img src= \"./images/products/{$rowProduct['image_name']}\">
                    <h3 class=\"name\">". $rowProduct['name'] ."</h3> 
                    <h3 class=\"location\">Location: ". $rowProduct['address3']."</h3>
                    <h3 class=\"price\">Rs. ". $rowProduct['minprice'] ." (1kg)</h3>             
                  </div>                          
                </div>";
          }         
      echo"</div>";
    }
    // $_GET['id]

    else if(!empty($min_price) && $max_price=="" && $location=="Location"){      
      $retrieveProduct = "SELECT * FROM `products` WHERE `minprice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
      echo"<div class=\"row-100\">";              
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
          echo "<div class=\"row-25\">
                  <div class= \"block\" onclick=\"bidding_process.php?id={$rowProduct['productID']}\" style=\"cursor: pointer;\">
                    <img src= \"./images/products/{$rowProduct['image_name']}\">
                    <h3 class=\"name\">". $rowProduct['name'] ."</h3> 
                    <h3 class=\"location\">Location: ". $rowProduct['address3']."</h3>
                    <h3 class=\"price\">Rs. ". $rowProduct['minprice'] ." (1kg)</h3>             
                  </div>                          
                </div>";
          }         
      echo"</div>";
    }
    
    else if(!empty($max_price) && $min_price=="" && $location=="Location"){      
      $retrieveProduct = "SELECT * FROM `products` WHERE `minprice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
      echo"<div class=\"row-100\">";              
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
      echo"</div>";
    }
    else if(!empty($max_price) && !empty($min_price)&& $location=="Location"){      
      $retrieveProduct = "SELECT * FROM `products` WHERE `minprice` >= '".$min_price."' AND `minprice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
        echo"<div class=\"row-100\">";             
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
      echo"</div>";
    }
    else if($location!="Location" &&  $min_price=="" && $max_price=="" ){      
      $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND name LIKE '$search%'"; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
        echo"<div class=\"row-100\">";   
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
      echo"</div>";
    }
    else if($location!="Location" &&  !empty($min_price) && $max_price=="" ){      
      $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND `minprice` >= '".$min_price."' AND name LIKE '$search%'"; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
        echo"<div class=\"row-100\">";   
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
      echo"</div>";
    } 
    else if($location!="Location" &&  !empty($max_price) && $min_price=="" ){      
      $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND `minprice` <= '".$max_price."' AND name LIKE '$search%'"; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
        echo"<div class=\"row-100\">";   
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
      echo"</div>";
    }  
    else if($location!="Location" &&  !empty($max_price) && !empty($min_price) ){      
      $retrieveProduct = "SELECT * FROM `products` WHERE `address3`= '".$location."' AND `minprice` >= '".$min_price."' AND `minprice` <= '".$max_price."'AND name LIKE '$search%'"; //Selecting all data from Table
      $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
        echo"<div class=\"row-100\">";   
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
      echo"</div>";
    }
     
    
  }else{
  $retrieveProduct = "SELECT * FROM `products`"; //Selecting all data from Table
  $resultProduct = mysqli_query($con, $retrieveProduct); //Passing SQL
  echo"<div class=\"row-100\">";           
    while($rowProduct  = mysqli_fetch_assoc($resultProduct)){              
      echo "<div class=\"row-25\" >
              <div class= \"block\" onclick=\"location.href='bidding_process.php?id={$rowProduct['productID']}';\" style=\"cursor: pointer;\">
                <img src= \"./images/products/{$rowProduct['image_name']}\">
                <h3 class=\"name\">". $rowProduct['name'] ."</h3> 
                <h3 class=\"location\">Location: ". $rowProduct['address3']."</h3>
                <h3 class=\"price\">Rs. ". $rowProduct['minprice'] ." (1kg)</h3>             
              </div>                          
            </div>";
    }       
  echo"</div>";
  }
   

?>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>  

  

</body>
</html>

