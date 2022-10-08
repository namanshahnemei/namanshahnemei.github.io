<?php 
    session_start();

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    //$mobile = $_POST[""];

    
        if($_POST["flexRadioDefault"]=="1"){

            $question1="Through a person known to a police officer";
        }
        else if($_POST["flexRadioDefault"]=="2"){

            $question1="With a neighbour / local leader";
        }

         else/*($_POST["flexRadioDefault"]=="Through a person known to a police officer")*/{

            $question1="On your own";
        }


   
    //else {$question1="not set";}

    
        if($_POST["flexRadioDefault1"]=="1"){

            $question2="More than 15 mir";
                
        }
        else if($_POST["flexRadioDefault1"]=="2"){

            $question2="15 min";
        }

        else if($_POST["flexRadioDefault1"]=="3"){

            $question2="10 min";
        }
        else if($_POST["flexRadioDefault1"]=="4"){

            $question2="5 min";
        }
        else/*($_POST["flexRadioDefault1"]=="Immediately")*/{

            $question2="Immediately";
        }


  
    
   // $question2 =  $_POST["flexRadioDefault1"];
    $question3 =  $_POST["question3"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "qr_review";
    $conn = mysqli_connect($servername, $username, $password,$db);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "INSERT INTO complain (how_reached, heard_after, comlaint_desc)
      VALUES ('$question1','$question2','$question3' )";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    //echo($fname ."<br>". $lname."<br>".$email."<br>". $question1 ."<br>".$question2."<br>".$question3);
?>
