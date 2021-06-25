
<center>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "contact");
$IDnumber = "0";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$IDnumber = mysqli_real_escape_string($link, $_REQUEST['IDnumber']);
$sql = "DELETE FROM tracing WHERE IDnumber='$IDnumber'" ;
if(mysqli_query($link, $sql)){
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>


</center>
<?php include('admin.php'); ?>