<title>Contact Tracing Website</title>
    <link rel="icon" type="image/png" href="img/Spcflogo.png">

<center>
    <?php

    $name = $_POST['name'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
        
    $data_array = [
        'name' => $name,
        'age' => $age,
        'address' => $address,
        'contactNumber' => $contact
        ];

    $data = json_encode($data_array);

    $url = 'https://attendance-system-app.herokuapp.com/api/visitors';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: da37dbde-49f8-49bc-9340-2e04ecb9fc6a',
        'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    ?>
	

</center>
<?php include('register.php'); ?>