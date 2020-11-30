<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/admin-side-nav.css">

</head>
<body>
        <div>
            <?php include "../includes/nav.php"; ?>
        </div>
<br>
<!--side nav bar starts here-->
<div class="tab">
  <button class="tablinks" onclick="openfun(event, 'View')" id="defaultOpen">View</button>
  <button class="tablinks" onclick="openfun(event, 'Add')">Add</button>
  <button class="tablinks" onclick="openfun(event, 'Update')">Update</button>
</div>

<!--view content starts here-->
<div id="View" class="tabcontent">
  <h3>View</h3>
  <p>View Details</p>
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
