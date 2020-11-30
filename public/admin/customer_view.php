<?php include('../../config/dbconfig.php'); ?>
<?php
    session_start();
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> View Customer | Vegemart </title>
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
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Contact No.</th>
                <th>DoB</th>
                <th>Postbox</th>
                <th>Street</th>
                <th>City</th>
                <th>Status</th>
            </tr>
        
        <?php
        
        $sql ="SELECT * FROM `customer`";

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
                    <td>".$row['active_status']."</td>
                </tr>";
                
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
                document.getElementById("cus_name").value = this.cells[1].innerHTML;
                document.getElementById("cus_id").value = this.cells[0].innerHTML;
                document.getElementById("email").value = this.cells[2].innerHTML;
                document.getElementById("dob").value = this.cells[4].innerHTML;
                document.getElementById("contact_number").value = this.cells[3].innerHTML;
                document.getElementById("street").value = this.cells[6].innerHTML;
                document.getElementById("postal_number").value = this.cells[5].innerHTML;
                document.getElementById("city").value = this.cells[7].innerHTML;
                document.getElementById("active_status").value = this.cells[8].innerHTML;
            };
        }

</script>
    </div>

         <div class="row">
            <div class="col-0"></div>
            <div class="col-11">
         <h3>Details of Selected Customer</h3>
                
                <div class="update-box">

                    <table>
                        <tr>
                            <th>Customer ID :</th>
                            <td><input class="input-s" type="text" placeholder="ID" id="cus_id" name="id" readonly="true" required></td>
                            <th>Customer Name :</th>
                            <td><input width="50px" class="input-l" type="text" placeholder="Customer Name" id="cus_name" readonly="true" required></td>
                            <th>Customer Email :</th>
                            <td><input class="input-l" type="text" placeholder="Customer Email" id="email" readonly="true" required></td>
                            
                        </tr>
                        <tr>
                            <th>Contact No. :</th>
                            <td><input class="input-m" type="text" placeholder="Contact" id="contact_number" readonly="true" required></td>
                            <th>Date of Birth :</th>
                            <td><input class="input-m" type="text" placeholder="yyyy-mm-dd" id="dob" readonly="true" required></td>
                            <th>Active Status :</th>
                            <td><input class="input-s" type="text" id="active_status" placeholder="Status" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Postbox No. :</th>
                            <td><input class="input-m" type="text" placeholder="Postbox" id="postal_number" readonly="true" required></td>
                            <th>Street Name :</th>
                            <td><input class="input-m" type="text" placeholder="Street" id="street" readonly="true" required></td>
                            <th>City :</th>
                            <td><input class="input-m" type="text" placeholder="City" id="city" readonly="true" required></td>

                        </tr>
                    </table>


                </div>
                
            </form>
        </div>
        <br/> 
        <div>

       <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    <div class="row">
            <div class="col-7"></div>
            <div class="col-1"><a href="#" class="button"> Update </a></div>
            <div class="col-0"></div>
            <div class="col-1"><a href="#" class="button"> Delete </a></div>
            <div class="col-0"></div>
            <div class="col-1"><a href="admin-dash.php" class="button"> Back </a></div>
            <div class="col-1"></div>

        </div>


    </body>
</html>
