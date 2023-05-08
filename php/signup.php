<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$idno=$_POST['idno'];
$fullname=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
$psw=$_POST['psw'];
$confirmpsw=$_POST['confirmpsw'];

$database="pharmastore";
$password="";
$username="root";

if($idno && $name && $email && $address  && $phoneno && $psw && $confirmpsw)
{
   $conn = new mysqli("localhost" , $username , $password , $database) or die("Unable to log into db");
}
   $sql = "INSERT INTO users (ID, fullname, email, addresss, phoneno, passwordd)
   VALUES ('$idno', '$fullname', '$email', '$address', '$phoneno', '$psw')";
   
   if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       header("<location:>index.html");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
?>
</body>
</html>