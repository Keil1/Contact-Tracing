<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Tracing Website</title>
    <link rel="icon" type="image/png" href="img/Spcflogo.png">
    <link rel="stylesheet" href="css/style.css">
    <link href ="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300&display=swap" rel="stylesheet">
</head>
<body>
    <center>
<img src="img/head.png">
</center>
     <div class="container mt-5">
    <h3 class="text-center mb-3">Contact Tracing</h3><br>
    <div class = "form-inline">
    <label for="search" class = "font-weight-bold lead text-dark">Search Record:</label>&nbsp;&nbsp;
    <input type="text" name = "search" id = "search_text" class = "form-control form-control rounded-15 border-primary" placeholder="Search..">
    </div>
    <?php

    $con=mysqli_connect("localhost","root","","contact");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM tracing");
    
?>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id = "table_data">
        <thead>
          <tr class="bg-dark text-white">
            <th scope="col"><center>Name</center></th>
            <th scope="col"><center>Age</center></th>
            <th scope="col"><center>Address</center></th>
            <th scope="col"><center>Contact Number</center></th>
            <th scope="col"><center>Time</center></th>
            <th scope="col"><center>Date</center></th>
          </tr>
<?php
          while($row = mysqli_fetch_array($result))

{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['date'] . "</td>";

echo "</tr>";



}
echo "</table>";
mysqli_close($con);
?>
        </thead>
</body>

</html>