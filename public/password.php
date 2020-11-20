<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <form class="center-block" method="post" >

<input type="text" id="password" class="form-control input-lg">

<progress max="100" value="0" name="value" id="meter"></progress>

<input class="button" type="submit" name="register" value="Sign up">

</form>

  <div class="textbox text-center"> password </div>
  
</body>
<script>
var code = document.getElementById("password");

var strengthbar = document.getElementById("meter");
var display = document.getElementsByClassName("textbox")[0];

code.addEventListener("keyup", function() {
  checkpassword(code.value);
});


function checkpassword(password) {
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[$@#&!]+/)) {
    strength += 1;

  }

  switch (strength) {
    case 0:
      strengthbar.value = 0;
      break;

    case 1:
      strengthbar.value = 25;
      break;

    case 2:
      strengthbar.value = 50;
      break;

    case 3:
      strengthbar.value = 75;
      break;

    case 4:
      strengthbar.value = 100;
      break;
  }
}

</script>
</html>

<?php
if(isset($_POST["register"])){
    $fName = $_POST["value"];;
    echo $fName;
}

?>