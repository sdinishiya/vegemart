<?php include('../../config/dbconfig.php'); ?>
<?php
    session_start();
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/admin-side-nav.css">
        <link rel="stylesheet" type="text/css" href="../css/admin1.css">
        <title> Manage Seller | Vegemart </title>

        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div>
             <?php include "../includes/admin_nav.php"; ?>
        </div>
        <!--End of nav-->
    <!--heading starts-->
          <div class="row">
            <div class="col-5"></div>
            <div class="col-4">
                <h1>MANAGE SELLERS </h1></div>   
            </div>
          </div>
    <!--heading ends -->
<!--side nav bar starts here-->
    <div class="tab">
      <button class="tablinks" onclick="openfun(event, 'View')" id="defaultOpen">View | Edit | Delete Seller</button>
      <button class="tablinks" onclick="openfun(event, 'Add')"> View Sales </button>
      <button class="tablinks" onclick="openfun(event, 'Update')"> View Seller Feedback </button>
      <button class="tablinks" onclick="openfun(event, 'Add')"> View Products Sold</button>
      <button class="tablinks" onclick="openfun(event, 'Update')"> View Seller Ratings</button>
    </div>

<!--view content starts here-->
<div id="View" class="tabcontent">
  <div class="search-user-container">
            <form name="form-display-selected">
            <h3>Search From Name , Email or ID</h3>
            <!--Input-------->
            <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionCustomer()" 
                    placeholder="Enter Name , Email or ID"/>
                </div>
                <br/>
            </form>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
    <!-- View the table with customer details -->  
        <table class="user" id="myTable">
            <tr>
                <th>Seller ID</th>
                <th>Seller Name</th>
                <th>Seller Email</th>
                <th>Contact No.</th>
                <th>DoB</th>
                <th>Postbox</th>
                <th>Street</th>
                <th>City</th>
                <th>Products Sold</th>
                <th>Quantity Available</th>
                <th>Ranking</th>
                <th>Status</th>
            </tr>
        
        <?php
        
        $sql ="SELECT * FROM `seller`";

        $result = mysqli_query($con,$sql);        
        while($row = mysqli_fetch_assoc($result)){
        
            echo "
                <tr>                  
                    <td>".$row['user_id']."</td>
                    <td>".$row['user_name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['dob']."</td>
                    <td>".$row['postal_number']."</td>
                    <td>".$row['street']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['products']."</td>
                    <td>".$row['quantity']."</td>
                    <td>".$row['rankings']."</td>
                    <td>".$row['active_status']."</td>
                </tr>";
                
        } 
        echo "</table>";
        ?>
        
        
        </div>
    </table>
</div>
</div>
<!--view content ends here-->

<!--Add content starts here-->
<div id="Add" class="tabcontent">
  <h3>Add</h3>
  <p>Add details</p> 
</div>
<!--Add content ends here-->

<!--Update content starts here-->
<div id="Update" class="tabcontent">
  <h3>Update</h3>
  <p>Edit or Delete Details</p>
</div>
<!--Update content ends here-->

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
<!--side nav bar ends here-->  


    </body>
</html>
