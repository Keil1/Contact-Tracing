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

    $url = 'https://attendance-system-app.herokuapp.com/api/visitors';
    $curl = curl_init();
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: da37dbde-49f8-49bc-9340-2e04ecb9fc6a',
        'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $res = curl_exec($curl);
    if(!$res){die("Connection Failure");}
    curl_close($curl);

    $response = json_decode($res, true);
    $data = $response['result'];
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

foreach($data as $user){
    echo "<tr>";
    echo "<td>" . $user['name'] . "</td>";
    echo "<td>" . $user['age'] . "</td>";
    echo "<td>" . $user['address'] . "</td>";
    echo "<td>" . $user['contactNumber'] . "</td>";
    echo "<td>" . date('h:i:s', strtotime($user['time'])) . "</td>";
    echo "<td>" . date('Y-m-d', strtotime($user['date'])) . "</td>";
    echo "</tr>";
}


echo "</table>";
?>
        </thead>
</body>

</html>