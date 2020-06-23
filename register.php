<?php


$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sourv_singh";

$conn  = mysqli_connect($dbserver ,$dbuser , $dbpass , $dbname);

$firstname = mysqli_real_escape_string($conn,$_POST['first_name']);
$lastname = mysqli_real_escape_string($conn,$_POST['last_name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$contact = mysqli_real_escape_string($conn,$_POST['contact']);

$password = md5('$password');

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($contact))
{
$sql = "INSERT INTO login(first_name,last_name,email,password,contact) VALUES('$firstname','$lastname','$email','$password','$contact')";

    if(mysqli_query($conn,$sql))
    { 
      header('Location:index.php?register=>saved');
    }
    else 
    { echo "error".mysqli_error($conn); }

    mysqli_close($conn);
    
         }
else
{
    header('Location:index.php?register=>error');
}


    

?>