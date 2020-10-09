<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
  <title>Login</title>
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
    top: -10%;
    left: 50%;
    transform: translate(-50%,50%);
    width: 27%;
    height: 60%;
    padding: 45px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}

.login h2
{
    margin: 0 0 30px;
    margin-left: -5%;
    padding: 0;
    color: #fff;
    text-align: center;

}

.login .inputBox
{
    position: relative;
}

.login .inputBox input
{
    width: 100%;
    padding: 12px 0;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 16px;
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
   padding: 15px 0;
   font-size: 18px; 
   color: #fff;
   pointer-events: none;
   transition: .5s;

}
.login .inputBox input:focus ~ label,
.login .inputBox input:valid ~ label 
{
    top: -20px;
    left: 0;
    color: #03a9f4;
    font-size: 14px;

} 

.login input[type="submit" i]
{
    margin-top: 8px;  
    margin-left: 13%;
    margin-bottom: 2px;
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
    margin-top: 8px;  
    margin-left: 15%;
    margin-bottom: 2px;
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
.anchor{
  display: block;
  position: relative;
  top: 0px;  
  margin-bottom: 15px;    
}

</style>  
</head>
<body>
  <div class="login">
    <h2>Login</h2>    
    <form class="" action="./includes/login-process.php" method="post">
        <div class="inputBox">
          <input type="text" name="email" required="">
          <label>Email</label>
        </div>
        <div class="inputBox">
          <input type="password" name="password" required="">
          <label>Password</label> 
        <div class="anchor">
          <a href="./reset/email_verify.php" style="color:blue;text-decoration:none;">Forgot password?</a>
        </div>   

        </div>      
          <input type="submit" name="login" value="Login">
          <input type="reset" name="" value="Reset">
          <p style= "color:Yellow;font-size:16px; margin-top:10%px;;">Don't have an account?  &nbsp<a  href="signup.php" style="color:blue;text-decoration:none;">Sign up</a> </p>
         
      </form>
    
  </div>

</body>
</html>
