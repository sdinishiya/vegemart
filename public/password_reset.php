<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
  <title>Reset</title>
  <link rel="stylesheet" href="css/password_reset.css"> 
  <link href="http://localhost/vegemart/public/images/logo.png" rel="shortcut icon">
</head>

<body>
    <div class="reset">
    <?php 
      if(isset($_POST['send'])){
        echo $alert;
    }
    ?> 
        <form method="POST" action="../src/password_reset.php">
        <input type="hidden" id="token" name="token" value="<?php echo $_GET['token']?>" required/><br>            
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label>Enter the password</label>
            </div>
            <div class="inputBox">
                <input type="password" name="re_password" required="">
                <label>Re-enter the password</label>
            </div>
            <input type="submit" name="reset" value="Reset">
        </form> 
    </div>  
</body>
</html>