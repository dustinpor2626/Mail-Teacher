<?php

session_start();

if($_SESSION['true'])
{
    if(isset($_GET['id']))
    {
        
        $query_id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","sourv_singh");
        $sql = "DELETE FROM query WHERE query_id='$query_id'";
        $query = mysqli_query($conn,$sql);
        
        header('Location:homepage.php');
       
    }
    
    
}else
{
    header('Location:index.php?login->error');
}


