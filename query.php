<?php
    session_start();

$_SESSION['true']="false";

if(isset($_POST['submit']))
{
$conn = mysqli_connect("localhost","root","","sourv_singh");
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']) ;
    
    
    $password = md5('$password');
 
$result = "SELECT * FROM login WHERE email='$username' AND password='$password';";
$check = mysqli_query($conn,$result);
$number = mysqli_num_rows($check);

if($number==1)
{
    echo "login successful";
    header('Location:homepage.php');
    $_SESSION['name']= $username;
    $_SESSION['pass']=$password;
    $_SESSION['true']="true";
}
else if($number==0)
{
    echo "register first";
}
else
{
    echo "somethings going wrong";
}
    
}
else
    header("Location:index.php?LOG_IN=fail");



 
?>