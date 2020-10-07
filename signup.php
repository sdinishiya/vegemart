<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
  <title>Sign up</title>
  <style>
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(./images/bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;

}

.login{
    position: absolute;
    top: -49%;
    left: 50%;
    transform: translate(-50%,50%);
    width: 35%;
    padding: 15px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}

.login h2
{
    margin: 0 0 3px;
    padding: 2px;
    color: #fff;
    text-align: center;

}

.login .inputBox
{
    position: relative;
}

.login .inputBox input
{
    width: 90%;
    padding: 7px 0;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 14px;
    margin-left: 5%;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.login .inputBox label
{
   position: absolute;
   top: 0;
   left: 0;  
   padding: 10px 0;
   margin-left: 5.5%;
   font-size: 18px; 
   color: #fff;
   pointer-events: none;
   transition: .5s;

}
.login .inputBox input:focus ~ label,
.login .inputBox input:valid ~ label 
{
    top: -22px;
    left: 0;
    color: #03a9f4;
    font-size: 14px;

} 

.login input[type="submit" i]
{
    margin-top: 13px;  
    margin-left: 20%;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    display: inline-block;
    font-size: 16px;
}

.login input[type="reset" i]
{
    margin-top: 13px;  
    margin-left: 15%;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    display: inline-block;
    font-size: 16px;
}
.login input[type="reset" i]:hover
{
    background-color: #3e8e41;
    color: white;
}
.login input[type="submit" i]:hover
{
    background-color: #3e8e41;
    color: white;
}
.login .form-check-inline input[type="radio" i]{
  float: left;
  display: inline-block;
  margin-left: 22%;
  border: 1px solid black;
  margin-bottom: 10px; 
}

.login .form-check-inline label{
  float: left;
  display: inline-block;
  margin-left: 5px;
  font-size: 18px;
  color: #fff;
}
a {
  position: relative;
  top: 0px; 
  left: 5px; 
  text-decoration: none;
  display: inline-block;
  padding: 6px 11px;
  
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  font-size: 20px;
  color: white;
}


.round {
  border-radius: 50%;
} 
  </style>   
</head>
<body>
  <div class="login">
    <a href="./login.php" class="previous round">&#8249;</a>
    <h2>Sign up</h2>    
      <form class="" action="./includes/signup-process.php" method="post">>
        <div class="inputBox">
          <input type="text" name="fname" required="">
          <label>First Name</label>
        </div>
        <div class="inputBox">
          <input type="text" name="lname" required="">
          <label>Last Name</label>    
        </div>
        <div class="inputBox">
          <input type="text" name="username" required="">
          <label>Username</label>    
        </div>
        <div class="inputBox">
          <input type="text" name="street" required="">
          <label>Street</label>    
        </div>
        <div class="inputBox">
          <input type="text" name="city" required="">
          <label>City</label>    
        </div>
        <div class="inputBox">
          <input type="text" name="pnumber" required="">
          <label>Phone number</label>    
        </div>  
        <div class="inputBox">
          <input type="text" name="email" required="">
          <label>Email</label>    
        </div> 
        <div class="inputBox">
          <input type="text" name="password" required="">
          <label>Password</label>    
        </div> 
        <div class="inputBox">
          <input type="text" name="confirm_password" required="">
          <label>Confirm Password</label>    
        </div> 
        <div class="form-check-inline">
        <input type="radio" id="user" name="type" value="user" required>
        <label for="user">User</label>
        <input type="radio" id="seller" name="type" value="seller" required>
        <label for="seller">Seller</label> 
        </div>
            
          <input type="submit" name="register" value="Sign up">
          <input type="reset" name="" value="Reset">
      </form>
    
  </div>

</body>
</html>
