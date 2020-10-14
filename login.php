<?php
    session_start();
?>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link type="text/css" rel=stylesheet href="./css/login.css">
        
    </head>
    <body>
        <div class="login">
            <h2>Login</h2>    
            <form action="./PHP/login_process.php" method="post">
                <div class="inputBox">
                    <input type="text" name="email" required="">
                    <label>Email</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required="">
                    <label>Password</label> 
                    <div class="anchor">
                        <a href="../reset/email_verify.php">Forgot password?</a>
                    </div>   
                </div>      
                <input class="button" type="submit" name="login" value="Login">
                <input class="button" type="reset" name="" value="Reset">
                <p style="color:Yellow; font-size:16px; margin-top:10%;">Don't have an account?  &nbsp<a  href="signup.php">Sign up</a> </p>                             
            </form>             
        </div>
    </body>
</html>
