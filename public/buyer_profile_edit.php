<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel=stylesheet href="./css/profile-edit.css">
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/footer.css">
        <title>Edit Profile</title>
    </head>
    <body>

    <?php 
        include "./includes/nav.php";
        include ('../src/buyer_profile_details.php'); 
    ?>        

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
        <?php include_once "./includes/footer.php"; ?>   
    </body>
</html>