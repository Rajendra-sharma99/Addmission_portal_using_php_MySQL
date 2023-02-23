<?php
if(isset($_POST['name'])) {
 $server = "localhost";
 $username = "root";
 $password = "";
 
 $con = mysqli_connect($server, $username, $password);

 if(!$con) {
    die("Connection to this databse failed due to".
    mysqli_connect_error());
 } 
// echo "Database sucessfully connected";

$name =$_POST['name'];
$gender =$_POST['gender'];
$age =$_POST['age'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$desc =$_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`) 
 VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc');";
// echo $sql;

if($con->query($sql) == true) {
    echo "Your Record has Successfully submited";
} else {
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wellcome to addmission_portal </title>
</head>

<body>
    <div class="cantainer">
        <h1>Wellcome to NIT JAMSHEDPUR Admission portal</h1>
        <p>Please enter your deatils for Admission</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text" name="age" id="age" placeholder="Enter your age" required>
            <input type="text" name="gender" id="age" placeholder="Enter your Gender" required> 
            <input type="email" name="email" id="emai" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Mobile Number" required>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other deatails"></textarea required>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>

    </div>

</body>

</html>