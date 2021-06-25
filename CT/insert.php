<title>Contact Tracing Website</title>
    <link rel="icon" type="image/png" href="img/Spcflogo.png">

<center>
    <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "contact");

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
   

    // Escape user inputs for security

    //$FruitID = mysqli_real_escape_string($link, $_REQUEST['FruitID']);


    $name = mysqli_real_escape_string($link, $_POST['name']);
    $age = mysqli_real_escape_string($link, $_POST['age']);
    $contact = mysqli_real_escape_string($link, $_POST['contact']);
    date_default_timezone_set("Asia/Hong_Kong");
    $datetime = new DateTime();
	$time = date("h:i:s");
    $date = date("Y/m/d");
    $address = mysqli_real_escape_string($link, $_POST['address']);
		
     
    // attempt insert query execution

    $sql = "INSERT INTO tracing (name,age,contact,time,date,address) VALUES ('$name','$age','$contact','$time','$date','address')";

    if(mysqli_query($link, $sql)){


 } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

    // close connection

    mysqli_close($link);

    ?>
	

</center>
<?php include('register.php'); ?>