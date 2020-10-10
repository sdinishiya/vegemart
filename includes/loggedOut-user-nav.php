<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Navbar with Search Box | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
nav{
  background: #171c24;
  padding: 7px 40px 3.5px 70px;
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1;
}
nav ul{
  display: flex;
  list-style: none;
  align-items: center;
  justify-content: center;
  margin-right: -3%;
}
nav ul li a{
  color: #fff;
  font-size: 16px;
  font-weight: 550;
  text-decoration: none;
  padding: 0px 14px;
  margin-top:2px;
}
nav ul li.logo-name{
  flex: 1;
}
.logoimage{
  width: 1.54em;  
  margin-left: -50px;
  margin-top: 5%;
}
.logo-name a{
  font-size: 33px;
  font-weight: 650;
  margin-left: -10px;
}
.items{
  display: inline-flex;
  padding: 0 25px;
}
a:hover{
  color: #15470F;
}
.nav-item-has-dropdown .profile{
  position:absolute;
  border-radius: 100%;
  height: 45px;
  width: 45px;  
  margin-top: -1.6%; 
  cursor:pointer;
}

.sub-menu-1{
  display: none;
  font-weight: 550;
  position:absolute;
  background-color: #171c24;
  width: 10%;
  border-radius: 0 0 10px 10px;
  position: absolute;  
  z-index: 9999;
  top:11%;
  right: 20px;
  overflow: hidden;
  position: fixed;
}
.sub-menu-1 ul{
  list-style: none;
  font-size: 16px;
}
.sub-menu-1 ul li{
  display:flex;
  padding: 10px 10px 10px 10px;
}
.sub-menu-1 ul li a{
  text-decoration: none;
  color: white;
}

.sub-menu-1 .drop a:hover{
  display: block;
  position: absolute;
  background: white;
  margin-top: 15px;
  margin-left: -15px;
}

</style>
</head>
<body>
<nav>
  <ul>
    <li class="logo-image"><a class="logo-link" href="./index.php"><img class="logoimage" src="./images/logo.png" alt=""></a></li>
    <li class="logo-name"><a href="./index.php">Vegemart </div>
    <div class="items">    
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Blogs</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Feedback</a></li>
      <li><a href="#">Login</a></li>
    </div>    
  </ul>
</nav>
  <script>
    let visible = false
    let dropdown = document.getElementById("sub-menu-1")
    let image = document.getElementById("profile")
    image.addEventListener('click', () => {
      if(visible !== true) {
        dropdown.style.display = 'block'
        visible = true;
      } else {
        dropdown.style.display = 'none'
        visible = false;
      }
    } );
  </script>

  <!-- <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("profile-drop").classList.toggle("showP");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.profile')) {
    var dropdowns = document.getElementsByClassName("sub-menu-1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('showP')) {
        openDropdown.classList.remove('showP');
      }
    }
  }
}
</script> -->
  </body>
</html>