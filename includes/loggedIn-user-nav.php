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
  color: #f2f2f2;
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
  margin-right: 2%;
}
ul li a{
  color: #fff;
  font-size: 16px;
  font-weight: 550;
  text-decoration: none;
  padding: 0px 14px;
  margin-top:2px;
}
ul li.logo-name{
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
  margin-left: -0.5%;
  margin-top: -1.6%; 
}
.nav-item-has-dropdown .sub-menu-1{
  display: none;
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
    </div>    
    <li class="nav-item-has-dropdown">  
      <a href="#" class="profile">  <img class="profile" src="./images/bg.jpg" alt="Avatar"></a>
        <div class="sub-menu-1">
            <ul>
              <li><a href="#" class="drop">View Profile</a></li>
              <li><a href="#" class="drop">Log out</a></li>             
            </ul>
        </div>     
    </li>    
  </ul>
</nav>
               
<script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
  </script>

  </body>
</html>