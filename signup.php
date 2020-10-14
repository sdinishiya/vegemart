<?php
    session_start();
?>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sign up</title>
        <link type="text/css" rel=stylesheet href="./css/signup.css">
    </head>
    <body>
        <div class="login">
            <a href="./login.php" class="previous round">&#8249;</a>
            <h2>Sign up</h2>    
            <form class="" action="./PHP/signup_process.php" method="post" enctype="multipart/form-data">
                <div class="inputBox">
                    <input type="text" name="fName" required="">
                    <label>First Name</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="lName" required="">
                    <label>Last Name</label>    
                </div>
                <div class="inputBox">
                    <input type="email" name="email" required="">
                    <label>Email</label>    
                </div> 
                <div class="inputBox">
                    <input type="text" name="phoneNum" required="">
                    <label>Phone number</label>    
                </div>  
                <div class="inputBox">
                    <input type="text" name="address1" required="">
                    <label>Address Line 1</label>    
                </div>
                <div class="inputBox">
                    <input type="text" name="address2" required="">
                    <label>Address Line 2</label>    
                </div>
                <div class="inputBox">
                    <input type="text" name="city" required="">
                    <label>City</label>    
                </div>
                <div class="inputBox">
                    <input type="file" id="profilePic" name="profilePic"/>
                    <label>Display Picture</label>    
                </div>
                <div class="inputBox">
                    <input type="text" name="username" required="">
                    <label>Username</label>    
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required="">
                    <label>Password</label>    
                </div> 
                <div class="inputBox">
                    <input type="password" name="confirm_password" required="">
                    <label>Confirm Password</label>    
                </div> 
                <div class="form-check-inline">
                    <input type="radio" id="user" name="type" value="user" required>
                    <label for="user">User</label>
                    <input type="radio" id="seller" name="type" value="seller" required>
                    <label for="seller">Seller</label> 
                </div> 
                <div>
                    <input class="button" type="submit" name="register" value="Sign up">
                    <input class="button" type="reset" name="" value="Reset">
                </div>                     
            </form>              
        </div>
    </body>
</html>
