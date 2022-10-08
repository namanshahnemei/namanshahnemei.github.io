<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "qr_review";
$login_id=$_POST["Email"];
$login_password=$_POST["Password"];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

//Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$sql = "select * from admin where email='$login_id' and pass = '$login_password' ";
$result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: admin_dashboard.php"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     



//echo($login_id."<br>". $login_password);
?>