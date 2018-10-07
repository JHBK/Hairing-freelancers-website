
 
 <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $mysqli = new mysqli("localhost", "id6859784_root", "12345", "id6859784_free");

     

    // Check connection


    if($mysqli === false){


        die("ERROR: Could not connect. " . $mysqli->connect_error);

    }

     

    // Escape user inputs for security
     
     $title = $mysqli->real_escape_string($_REQUEST['title']);
 
     $fname = $mysqli->real_escape_string($_REQUEST['firstname']);

     $mail = $mysqli->real_escape_string($_REQUEST['email']);

  
     $add = $mysqli->real_escape_string($_REQUEST['address']);
  
    $town = $mysqli->real_escape_string($_REQUEST['city']);
  
    $st = $mysqli->real_escape_string($_REQUEST['state']);
  
    $zip = $mysqli->real_escape_string($_REQUEST['zip']);
  
    $cna = $mysqli->real_escape_string($_REQUEST['cardname']);
  
    $cno = $mysqli->real_escape_string($_REQUEST['cardnumber']);
  
    $expm = $mysqli->real_escape_string($_REQUEST['expmonth']);
  
    $expy = $mysqli->real_escape_string($_REQUEST['expyear']);

     

    // attempt insert query execution

    $sql = "INSERT INTO lancer (title,firstname,email , address,city,state,zip,cardname,cardnumber,expmonth,expyear) 

             VALUES ('title','$fname', '$mail', '$add','$town','$st','$zip','$cna','$cno','$expm',' $expy')";

	
  
	
    if($mysqli->query($sql) === true){

	     header('Location: back.html');
      

    } else{

        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;

    }

    

    // Close connection

    $mysqli->close();

    ?>

