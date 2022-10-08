<?php 
//require('conn.php');
// require('citizen_form.php'); 
// include('style.css');

$servername = "localhost";
$username = "root";
$password = "";
$db = "qr_review";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM complain";

$res=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="f0c7">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
  <!-- <script>
    function addRow()
            {
                // get input values
                var fname = document.getElementById('fname').value;
                 var lname = document.getElementById('lname').value;
                  var age = document.getElementById('age').value;
                  
                  // get the html table
                  // 0 = the first table
                  var table = document.getElementsByTagName('table')[0];
                  
                  // add new empty row to the table
                  // 0 = in the top 
                  // table.rows.length = the end
                  // table.rows.length/2+1 = the center
                  var newRow = table.insertRow(table.rows.length);
                  
                  // add cells to the row
                  var cel1 = newRow.insertCell(0);
                  var cel2 = newRow.insertCell(1);
                  var cel3 = newRow.insertCell(2);
                  
                  // add values to the cells
                  cel1.innerHTML = fname;
                  cel2.innerHTML = lname;
                  cel3.innerHTML = age;
            }
  </script> -->
</head>
<body>
<div class="sidebar">
     <div class="logo_content">
       <div class="logo">
         <div class="logo_name">QR Code</div>
       </div>
       <i class='bx bx-menu' id="btn"></i>
     </div>
     <ul class="nav_list">
       <li>
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
       </li>
       <li>
        <a href="#dashboard">
         <i class='bx bx-grid-alt'></i>
         <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      
       <li>
         <a href="#user">
          <i class='bx bx-user'></i>
          <span class="links_name">User</span>
         </a>
         <span class="tooltip">User</span>
       </li>
      <li>
        <a href="#">
         <i class='bx bx-pie-chart-alt-2'></i>
         <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
      <li>
        <a href="#">
         <i class='bx bx-cog'></i>
         <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
     </ul>
     <div class="content">
       <div class="user">
         <div class="user_details">
           <img src="user_icon.jpg" alt="">
           <div class="name_job">
             <div class="name">Officer Name</div>
             <div class="job">ASP</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out"></i>
       </div>
     </div>
   </div>
   
   <div class="home_content">
    <!-- <div class="nav"></div> -->
     <div id="dashboard" class="text">Police Officer Dashboard</div>
     <div class="dashboard_content">
      <form action="" method="post">
        <div class="dashboard_nav">
        <div class="crt_del_qr">
          <div class="download_qr">
            <i class="fas fa-plus"></i>
          </div>
          <div class="delete_qr">
            <!-- <i class="fal fa-save"></i> -->
            Save QR
          </div>
        </div>
        <div class="create_qr">
        <i class="fas fa-trash"></i>
        </div>
        </div>
     <div style="margin: 50px 0 0 0" class="text">User Details</div>
        <table class="user_table">
  <tr>
    <!-- <th>First Name</th>
    <th>Last Name</th>
    <th>Phone</th>
    <th>Email</th> -->
    <th>How did you come to the police station?</th>
    <th>After how much time you were heard in PS</th>
    <th>How would you describe your experience with police
officers in the police station?</th>
  </tr>
  <?php
 
 error_reporting(0);
   if($res-> num_rows>0) {
    while($row = $res->fetch_assoc()){
      //$key= $row["stationID"];
      echo ("<tr><td>" . $row["how_reached"] . "</td><td>" . $row["heard_after"] . "</td><td>" . $row["comlaint_desc"] . "</td><tr>");
    }
  }
      ?>
</table>
<div style="margin: 50px 0 0 0" class="text">Analytics</div>
      </form>
     </div>
     </div>
   
    </div>
   
	<script src="main.js"></script>

</body>
</html>
        