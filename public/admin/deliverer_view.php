<?php include('../../config/dbconfig.php'); ?>
<?php
    session_start();
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> View Deliverer | Vegemart </title>
        <link rel="stylesheet" type="text/css" href="../css/admin1.css">

        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div>
            <?php include "../includes/admin_nav.php"; ?>
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
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
    <!-- Adding the table with customer details -->
        
        <table class="user" id="myTable">
            <tr>
                <th>Deliverer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Deliverer Email</th>
                <th>Contact No.</th>
                <th>No</th>
                <th>Street</th>
                <th>City</th>
                <th>Vehicle</th>
                <th>Vehicle Number</th>
                <th>Status</th>
            </tr>
        
            <?php
                $userType="deliverer";
                $sql ="SELECT * FROM `users` WHERE userType='$userType'";
                $result = mysqli_query($con,$sql);        
                while($row = mysqli_fetch_assoc($result)){ 
                $delivererID=$row['id']; 
                $sql_deliverer ="SELECT * FROM `deliverer` WHERE delivererID='$delivererID'"; 
                $result_deliverer = mysqli_query($con,$sql_deliverer);
                while($row_deliverer = mysqli_fetch_assoc($result_deliverer)){
                    if ($row['active_status'] == 1){
                        $active_status = "active";
                    }
                    else{
                        $active_status = "Non-active";
                    }
            
                    echo "
                        <tr>                  
                            <td>".$row['id']."</td>
                            <td>".$row_deliverer['fName']."</td>
                            <td>".$row_deliverer['lName']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row_deliverer['phoneNum']."</td>
                            <td>".$row_deliverer['address1']."</td>
                            <td>".$row_deliverer['address2']."</td>
                            <td>".$row_deliverer['city']."</td>
                            <td>".$row_deliverer['vehicle']."</td>
                            <td>".$row_deliverer['vehicleNo']."</td>
                            <td> $active_status</td>
                        </tr>";
                    
                    } 
                }
            echo "</table>";
            ?>

        
        
        </div>

<script>
    var table = document.getElementById('myTable');
                
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {
                document.getElementById("fname").value = this.cells[1].innerHTML;
                document.getElementById("id").value = this.cells[0].innerHTML;
                document.getElementById("lname").value = this.cells[2].innerHTML;
                document.getElementById("email").value = this.cells[3].innerHTML;
                document.getElementById("street").value = this.cells[6].innerHTML;
                document.getElementById("postal_number").value = this.cells[5].innerHTML;
                document.getElementById("city").value = this.cells[7].innerHTML;
                document.getElementById("contact_number").value = this.cells[4].innerHTML;
                document.getElementById("active_status").value = this.cells[10].innerHTML;
                document.getElementById("vehicle").value = this.cells[8].innerHTML;
                document.getElementById("vehicle_no").value = this.cells[9].innerHTML;
            };
        }

</script>
    </div>

         <div class="row">
            <div class="col-0"></div>
            <div class="col-11">
         <h3>Details of Selected Deliverer</h3>
                
         <form action= "deliverer_details.php" method ="POST">       
                <div class="update-box">

                    <table>
                        <tr>
                            <th>Deliverer ID :</th>
                            <td><input class="input-l" type="text" placeholder="ID" id="id" name="id" readonly=true required></td>
                            <th>Deliverer Email :</th>
                            <td><input class="input-l" type="text" placeholder="Customer Email" id="email" name="email"  required></td>
                            <th>Postbox No. :</th>
                            <td><input class="input-m" type="text" placeholder="Postbox" id="postal_number" name="address1" required></td>
                            
                            
                        </tr>
                        <tr>
                            <th>First Name :</th>
                            <td><input width="50px" class="input-l" type="text" placeholder="First Name" id="fname" name="fName" required></td>
                            <th>Vehicle :</th>
                            <td><input class="input-l" type="text" placeholder="Vehicle" id="vehicle" name="vehicle" required></td>  
                            <th>Street Name :</th>
                            <td><input class="input-l" type="text" placeholder="Street" id="street" name="address2" required></td>                  

                        </tr>
                        <tr>
                            <th>Last Name :</th>
                            <td><input width="50px" class="input-l" type="text" placeholder="Last Name" id="lname" name="lName" required></td>
                            <th>Vehicle No. :</th>
                            <td><input class="input-l" type="text" placeholder="Number plate" id="vehicle_no" name="vehicleNo"  required></td>
                            <th>City :</th>
                            <td><input class="input-l" type="text" placeholder="City" id="city" name="city"required></td>
                            
                        </tr>
                        <tr>
                            <th>Contact No. :</th>
                            <td><input class="input-l" type="text" placeholder="Contact" id="contact_number" name="phoneNum"  required></td>
                            <th>Active Status :</th>
                            <td><input class="input-s" type="text" id="active_status" placeholder="Status" name="active_status" required></td>
                            <!-- <td></td> -->
                            
                        </tr>
                    </table>

                </div>
                <div class="row">
                <div class="col-3"></div>
                <div class="col-2"><input name= "update" type ="submit" value="Update "class="button"></div>
                <div class="col-2"><input name= "delete" type ="submit" value="Delete "class="button"></div>

                <div class="col-2"><a href="logs.php" class="button"> View Activity Logs </a></div>
                <div class="col-2"><a href="admin-dash.php" class="button"> Back </a></div>
    
                </div>
            </form>
        </div>
        <br/> 
        <div>
                  
    
    </body>
</html>
