<?php
    session_start();
?>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Deliverer Sign up</title>
        <link type="text/css" rel=stylesheet href="../css/deliverer-signup1.css">
    </head>
    <body>
        <div class="row">
            <div class="columns group\">
                <div class="column is-4 pl-1 pr-1"></div>
                <div class="column is-4 pl-1 pr-1">
                    <div class="row">
                        <div class="signupForm">
                            
                            <div class="row"><h2>Deliverer Registration</h2></div>
                            
                            <form id ="deliverer-signup" action="../../src/deliverer/deliverer_signup_process.php" method="post" enctype="multipart/form-data">
                            <div class="columns group">
                                
                                <div class="column is-12">
                                    <div class="input-row">
                                        <input type="text" name="fName" placeholder="First Name" required>
                                    </div>
                                    <div class="input-row">
                                        <input type="text" name="lName" placeholder="Last Name" required>
                                      
                                    </div>
                                    <div class="input-row">
                                        <input type="email" name="email" placeholder="Email" required>
                                       
                                    </div> 
                                    <div class="input-row">
                                        <input type="text" name="phoneNum" placeholder="Mobile" required>
                                         
                                    </div>  
                                    <div class="input-row">
                                        <label for="vehicle">Choose Vehicle:</label>
                                        <select id="vehicle" name="vehicle" form="deliverer-signup">
                                            <option value="bike">Bike</option>
                                            <option value="tuk">Tuk</option>
                                            <option value="lorry">Lorry</option>
                                        </select>   
                                    </div>
                                    <div class="input-row">
                                        <input type="text" name="vehicleNo" placeholder="Vehicle Registration Number" required>
                                    
                                    </div>
                                    <div class="input-row">
                                        <input type="text" name="city" placeholder="City" required>
                              
                                    </div>
                                    <div class="input-row">
                                        <label>Display Picture</label>
                                        <input class type="file" id="profilePic" placeholder="Display Picture" name="profilePic"/>
                           
                                    </div>
                                    <div class="input-row">
                                        <input type="text" name="username" placeholder="Username" required>
                         
                                    </div>
                                    <div class="input-row">
                                        <input type="password" name="password" id="password" onkeyup="check()" placeholder="Password">                                         
               
                                    </div> 
                                    <div class="input-row">
                                        <input type="password" name="confirmPassword" id="confirm_password" onkeyup="check()" placeholder="Confirm password" required> 
                       
                                    </div>                                    
                                    <span id="message" style="background-color: transparent;"></span>
                                </div>
                                
                                </div>
                                <div class="row">
                                    <input class="form-button" type="submit" name="register" value="Sign up">
                                    <input class="form-button" type="reset" name="" value="Reset">                                         
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
                <div class="column is-4 pl-1 pr-1\"></div>
            </div>
        </div>        

    <script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password is matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').style.backgroundColor = 'white';
                document.getElementById('message').innerHTML = 'Password does not match';
            }
        }
    </script>
        
    </body>
</html>