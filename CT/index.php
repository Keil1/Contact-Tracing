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

</head>
<body>
<div "bg-img">
    <section class = "registration">
    <h1 class = "title">Registration For Visitor</h1>
         <form action="insert.php" method="POST">
        <div class="contact-form row">
            <div class="form-field col-lg-6">
            <input id="name" class="input-text" type="text" name="name" required placeholder = "Enter Your Name Here..." >
            <label for="name" class="label">Full Name</label>
            </div>
                <div class="form-field col-lg-6">
                <input id="age" class="input-text" type="text" name="age" required placeholder = "Enter Your Age Here...">
                <label for="age" class="label">Age</label>
            </div>
                <div class="form-field col-lg-6">
                <input id="address" class="input-text" type="text" name="address" required placeholder = "Enter Your Address Here...">
                <label for="address" class="label">Address</label>
            </div>
                <div class="form-field col-lg-6">
                <input id="contact" class="input-text" type="text" name="contact" required placeholder = "Enter Your Number Here...">
                <label for="contact" class="label">Contact Number</label>
            </div>
                <div class="form-field col-lg-12">
                <input class="submit-btn" type="submit" value="Register" name="">
            </div>
        </div>
    </div>
    </div>
    </form>

 
</section>
    <form action="register.php" method = "post">
</body>
    </form>
</html>