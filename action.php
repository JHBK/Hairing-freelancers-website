
 <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $mysqli = new mysqli("localhost", "id6859784_root", "12345", "id6859784_free");

     

    // Check connection


    if($mysqli === false){


        die("ERROR: Could not connect. " . $mysqli->connect_error);

    }

     

    // Escape user inputs for security
     

 
     $fname = $mysqli->real_escape_string($_REQUEST['name']);

     $phone = $mysqli->real_escape_string($_REQUEST['phone']);

  
     $sub = $mysqli->real_escape_string($_REQUEST['subject']);

     

    // attempt insert query execution

    $sql = "INSERT INTO ctable (name,phone,subject) 

             VALUES ('$fname','$phone','$sub')";

	
  
	
    if($mysqli->query($sql) === true){

	     header('Location:cb.html');
      

    } else{

        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;

    }

    

    // Close connection

    $mysqli->close();

    ?>

