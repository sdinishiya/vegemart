<?php include('../../config/dbconfig.php'); ?>
<?php session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/admin-side-nav.css">
        <link rel="stylesheet" type="text/css" href="../css/admin1.css">
        <title> Manage Co-admin | Vegemart </title>
    </head>
    <body>
        <div>
            <?php include "../includes/admin_nav.php"; ?>
        </div>
<br>
<!--heading-->
  <div class="row">
    <div class="col-4"></div>
    <div class="col-0"></div>
    <div class="col-4">
        <h1>MANAGE CO-ADMINISTRATOR </h1></div>   
    </div>
  </div>
<!--side nav bar starts here-->
  <div class="tab">
  <button class="tablinks" onclick="openfun(event, 'View')" id="defaultOpen">View | Edit | Delete Co-Admin</button>
  <button class="tablinks" onclick="openfun(event, 'Add')">Add Co-Admin</button>
</div>

<!--view content starts here-->
<div id="View" class="tabcontent">
              <div class="coadmin-table">

              <table class="user" id="myTable">
                          <tr>
                              <th>Co-Admin ID</th>
                              <th>Co-Admin Name</th>
                              <th>Co-Admin Email</th>
                              <th>Contact No.</th>
                              <th>No.</th>
                              <th>Street</th>
                              <th>City</th>
                              <th>Status</th>
                          </tr>
                      
                      <?php
                      $userType="coadmin";
                      $sql ="SELECT * FROM `users` WHERE userType='$userType'";
                      $result = mysqli_query($con,$sql);        
                      while($row = mysqli_fetch_assoc($result)){ 
                        $adminID=$row['id']; 
                        $sql_admin ="SELECT * FROM `admin` WHERE adminID='$adminID'"; 
                        $result_admin = mysqli_query($con,$sql_admin);
                        while($row_admin = mysqli_fetch_assoc($result_admin)){                       
                          echo "
                              <tr>                  
                                  <td>".$row['id']."</td>
                                  <td>".$row_admin['name']."</td>
                                  <td>".$row['email']."</td>
                                  <td>".$row_admin['contactNum']."</td>
                                  <td>".$row_admin['address1']."</td>
                                  <td>".$row_admin['address2']."</td>
                                  <td>".$row_admin['city']."</td>
                                  <td>".$row_admin['status']."</td>                                  
                              </tr>";                         
                    }
                  }
                      echo "</table>";
                      ?>
              </div>
              <div class="vl"></div>
              <div class="coadmin-dashboard">
                  <form class="update-box" method="POST" action="submit-co-admin.php">
                      <table>
                          <tr>
                              <th> ID : </th>
                              <td><input class="input-l" type="text" placeholder="ID" id="id" name="id" readonly=true required></td>
                          </tr>
                          <tr>
                              <th> Name : </th>
                              <td><input class="input-l" type="text" placeholder="Admin Name" id="name" name="name" pattern="^[A-Za-z ]+$" required></td>
                          </tr>
                          <tr>
                              <th> Email : </th>
                              <td><input class="input-l" type="email" placeholder="Admin Email" id="email" name="email" required></td>
                          </tr>
                          <tr>
                              <th>Contact No. : </th>
                              <td><input class="input-l" type="text" placeholder="Contact" id="contact_no" name="contact" pattern='^\+?\d{11}' required></td>
                          </tr>
                          <tr>
                              <th> No : </th>
                              <td><input class="input-l" type="text" placeholder="Postal number" id="postal" name="postal"  required></td>
                          </tr>
                          <tr>
                              <th> Street : </th>
                              <td><input class="input-l" type="text" placeholder="Street" id="street" name="street"  required></td>
                          </tr>
                          <tr>
                              <th> City : </th>
                              <td><input class="input-l" type="text" placeholder="City" id="city" name="city"  required></td>
                          </tr>
                          <tr>
                              <th>Password : </th>
                              <td><input class="input-l" type="password" placeholder="Password" id="password" name="password"
                              pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"></td>
                          </tr>
                          <tr>
                              <th> Status : </th>
                              <td><input class="input-m" type="text" placeholder="Active status" id="status" name="status"  required></td>
                          </tr>

                      </table>

                      <input type="submit" style="width: 40%" class="btn-coadmins"  name="update" value="Update">
                      <input type="submit" style="width: 40%" class="btn-coadmins"  name="delete" value="Delete">
                      <a href="admin-dash.php" class="button"> Back </a>
                  </form>
              </div>
          </div>
          


  <script>
      var table = document.getElementById('myTable');
                  
          for(var i = 1; i < table.rows.length; i++)
          {
              table.rows[i].onclick = function()
              {
                  document.getElementById("id").value = this.cells[0].innerHTML;
                  document.getElementById("name").value = this.cells[1].innerHTML;
                  document.getElementById("email").value = this.cells[2].innerHTML;
                  document.getElementById("contact_no").value = this.cells[3].innerHTML;
                  document.getElementById("postal").value = this.cells[4].innerHTML;
                  document.getElementById("street").value = this.cells[5].innerHTML;
                  document.getElementById("city").value = this.cells[6].innerHTML;
                  document.getElementById("status").value = this.cells[7].innerHTML;
                  // document.getElementById("password").value = this.cells[3].innerHTML;
                  
              };
          }

  </script>

          <!--script for onClickNav() for the navigation menu-->
      <script src="../../js/onClickNav.js"></script>

</div>

<!--view content ends here-->

<!--add content starts here-->
<div id="Add" class="tabcontent">
  <div class="row">
       <div class="col-4"></div>
       <div class="col-4">
                   <img src="../images/users/co-admin.png" alt="image" class="pg">
       </div>
     </div>
       
     <div class="row">
       <div class="col-3"></div>
       <div class="col-4">
         <form action="add_coadmin.php" method="POST">
         <div class="row">
           <div class="col-3">
             <label for="name">Name</label>
           </div>
           <div class="col-6">
             <input class="input-l" type="text" placeholder="Name" id="name" name="name" pattern="^[A-Za-z ]+$" style="width: 100%" required>
           </div>
         </div>

     <div class="row">
       <div class="col-3">
         <label for="email">E-mail</label>
       </div>
       <div class="col-6">
         <input class="input-l" type="email" placeholder="Co-Admin Email" id="email" name="email" required>
       </div>
     </div>

     <div class="row">
       <div class="col-3">
         <label for="password">Password</label>
       </div>
       <div class="col-6">
         <input class="input-m" type="password" placeholder="Password" id="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
       </div>
     </div> 

     <div class="row">
       <div class="col-3">
         <label for="phone">Contact Number</label>
       </div>
       <div class="col-6">
         <input class="input-l" type="text" placeholder="Contact Number" id="phone" name="contact" pattern='^\+?\d{11}'  required>
       </div>
     </div>
     <div class="row">
         <div class="col-3">
           <label for="add1">Profile picture</label>
         </div>
         <div class="col-6">
           <input class="input-l" type="file" id="profilePic" name="profilePic">
         </div>
       </div>
     

     <div class="row">
         <div class="col-3">
           <label for="add1">Address</label>
         </div>
         <div class="col-6">
           <input class="input-l" type="text" placeholder="House number" id="add1" name="address1" required>
         </div>
       </div>

       <div class="row">
         <div class="col-3">
           <label for="street"> Street </label>
         </div>
         <div class="col-6">
         <input type="text" id="street" name="address2" placeholder="address2" style="width: 100%" required />
         </div>
       </div>

       <div class="row">
         <div class="col-3">
           <label for="city">City</label>
         </div>
         <div class="col-6">
         <input type="text" id="city" name="city" placeholder="City" style="width: 100%" required />
         </div>
       </div>
     
     <div class="row">
       <div class="col-3"></div>
       <div class="col-3">
        <input type="submit" name="submit" class="submit"/><br><br>
       </div>
       <div class="col-3">
       <input type="reset" value="Reset">
       </div>
      </div>

      <div class="row">
       <div class="col-10"></div>
       <div class="col-2">
        <a href="admin-dash.php" class="button"> Back </a>
       </div>
      </div>

    </form>
   </div>
   </div>

     

</div>
<!--view content ends here-->

<script>
function openfun(evt, funcname) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(funcname).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<br>
    </body>
    </html>