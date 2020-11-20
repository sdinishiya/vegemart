<?php include('../database/dbconfig.php'); ?>
<?php
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <title> View Deliverer | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin-logout-nav.php"; ?>
        </div>



<h2> Deliverer Details Table </h2>

<table>
  <?php
    
    $sql ="SELECT * FROM `deliverer`";

    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)> 0){
                    
    echo   " <thead>
    <tr>
      <td>Deliverer ID</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>E-mail</td>
      <td>Phone No.</td>
      <td>Address</td>
      <td>City</td>
      <td>Car-Type</td>
      <td>Car Number</td>


    </tr>
    </thead> <tbody> ";
while($row = mysqli_fetch_assoc($result))
    {

      echo   " <tr>";
      echo   " <td>".$row["ID"]."</td>  ";
      echo   " <td>".$row["fname"]."</td> ";
      echo   " <td>".$row["lname"]."</td> ";
      echo   " <td>".$row["email"]."</td> ";
      echo   " <td>".$row["phone"]."</td> ";
      echo   " <td>".$row["add1"].", ".$row["add2"]."</td> ";
      echo   " <td>".$row["add3"]."</td> ";
      echo   " <td>".$row["c_type"]."</td> ";
      echo   " <td>".$row["c_num"]."</td> ";


      /*echo "<td class='align-middle' width='48'><a href='update-product.php?id=".$row["id"]."'><img class='mp-icons' src='../images/edit.png' alt='' width='20' height='22' /></a></td>  ";
      echo " <td class='align-middle' width='48'><a href='delete-product.php?id=".$row["id"]."'><img class='mp-icons' src='../images/delete.png' alt='' width='20' height='22' /></a></td> ";*/
      echo "</tr>";

    }
     echo "</tbody>";
                  }
                  ?>
          </table>
          <div class="row">
            <div class="col-10"></div>
            <div class="col-1"><a href="user-mgt.php" class="button"> Back </a></div>
        </div>
</body>
</html>

