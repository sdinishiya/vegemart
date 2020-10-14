<?php include('../database/dbconfig.php'); ?>
<?php
    if(empty(session_id())){
        session_start();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel=stylesheet href="../css/seller-profile-edit.css">
        <title>Edit Profile</title>
    </head>
    <body>

    <?php include "../includes/logout-nav.php"; ?>
            <?php   
                $userID = $_SESSION["loggedInSellerID"];
                
                $selectusers = "SELECT * FROM users WHERE id='$userID'";

                $userquery = mysqli_query($con,$selectusers);

                while($row = mysqli_fetch_assoc($userquery)){
                    echo "<div class=\"row\">
                    <div class=\"columns group\">
                        <div class=\"column is-3 pl-1 pr-1\"></div>
                        <div class=\"column is-6 pl-1 pr-1\">
                            <div class=\"row\">
                                <div class=\"updateForm\">
                                    <h2>My Profile</h2>
                                    <form id=\"UpdateProduct\" action=\"seller_product_edit_submit.php\" method=\"post\" enctype=\"multipart/form-data\">
                                    <div class=\"columns group\">
                                        <div class=\"column is-1 pl-1 pr-1\"></div>
                                        <div class=\"column is-10\">
                                            <div class=\"image-row\">
                                                <img class=\"user-img\" src= \"../images/users/{$row['profilePic']}\">
                                            </div>
                                            <div class=\"input-row\">
                                                <label>Display Picture</label>
                                                <input class=\"image-input\" type=\"file\" id=\"profilePic\" name=\"profilePic\"/>   
                                            </div>
                                            <div class=\"input-row\">
                                                <label>First Name</label>
                                                <input class=\"input-box\" type=\"text\" name=\"editFName\" placeholder=\"Edit first name\" value=\"{$row['fName']}\" required>      
                                            </div>
                                            <div class=\"input-row\">
                                                <label>Last Name</label>
                                                <input class=\"input-box\" type=\"text\" name=\"editLName\" placeholder=\"Edit last name\" value=\"{$row['lName']}\" required>
                                            </div>
                                            <div class=\"input-row\">
                                                <label>Email</label> 
                                                <input class=\"input-box\" type=\"email\" name=\"editEmail\" placeholder=\"Edit email\" value=\"{$row['email']}\" required>
                                            </div>
                                            <div class=\"input-row\">
                                                <label>Phone number</label>
                                                <input class=\"input-box\" type=\"text\" name=\"editPhoneNum\" placeholder=\"Edit contact number\" value=\"{$row['phoneNum']}\" required>
                                            </div>
                                            <div class=\"input-row\">
                                                <label>address1</label> 
                                                <input class=\"input-box\" type=\"text\" name=\"editAddress1\" placeholder=\"Address line 1\" value=\"{$row['address1']}\" required>                                    
                                            </div>
                                            <div class=\"input-row\">
                                                <label>address2</label> 
                                                <input class=\"input-box\" type=\"text\" name=\"editAddress2\" placeholder=\"Address line 2\" value=\"{$row['address2']}\" required>                                    
                                            </div>
                                            <div class=\"input-row\">
                                                <label>City</label> 
                                                <input class=\"input-box\" type=\"text\" name=\"editCity\" placeholder=\"Edit city\" value=\"{$row['city']}\" required>                            
                                            </div>
                                            <div class=\"input-row\">
                                                <label>Username</label>    
                                                <input class=\"input-box\" type=\"text\" name=\"editUsername\" placeholder=\"Edit username\" value=\"{$row['username']}\" required>                                         
                                            </div>
                                            <div class=\"input-row\">
                                                <label> Password</label> 
                                                <input class=\"input-box\" type=\"password\" name=\"Password\" placeholder=\"Current password\" required>                                         
                                            </div>
                                            <div class=\"input-row\">
                                                <label> New Password</label> 
                                                <input class=\"input-box\" type=\"password\" name=\"editPassword\" id=\"new_password\" onkeyup=\"check()\" placeholder=\"Change password\">                                         
                                            </div>
                                            <div class=\"input-row\">
                                                <label>Confirm new Password</label> 
                                                <input class=\"input-box\" type=\"password\" name=\"editConfirmPassword\" id=\"confirm_new_password\" onkeyup=\"check()\" placeholder=\"Confirm password\"> 
                                            </div>
                                            <span id=\"message\"></span>
                                        </div>
                                        <div class=\"column is-1 pl-1 pr-1\"></div>
                                    </div>
                                    <div class=\"row\">
                                        <input type=\"hidden\" value=\"{$row['id']}\" name=\"editID\">
                                        <input class=\"form-button\"  type=\"submit\" name=\"submit\" value=\"Save\">
                                        <input class=\"form-button\" type=\"button\" name=\"cancel\" onclick=\"window.location.replace('seller_home.php')\" value=\"Cancel\">                                           
                                        <a style=\"color:#3e8e41; font-size:16px; margin-top:10%;\" href=\"#\">Deactivate account</a>
                                        </div>
                                    </form>
                                    <h3 class=\"error-msg\"><?php include_once('../includes/message.php'); ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"column is-3 pl-1 pr-1\"></div>
                    </div>
                </div>";
                }     
            ?>              
        </div>

        <script>
        var check = function() {
            if (document.getElementById('new_password').value == document.getElementById('confirm_new_password').value){
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