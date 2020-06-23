<?php
session_start();

if($_SESSION['true']=="true")
{
         echo "    <html>
    <head><link rel='stylesheet' href='home.css'>
        <script src='jquery-3.3.1/jquery-3.3.1.js' type='text/javascript'></script>
        <script src='home.js' type='text/javascript'></script>
        </head>
    <title>start page</title>
    <body style='background-color:aliceblue'>
    <div id='upper' style='background-color:black'>
         <img id='nit_png'  src='select.png' style='display:inline-block' height='100%' width='150'>
        <ul>
          <b>  <li><a href='homepage.php'>HOME</a></li>
              <li><a href='faculty.php'>FACULTY</a></li>
            <li><a href='books.php'>BOOKS</a></li>
            <li><a href='querydatabase.php' style='background-image:radial-gradient(white,white,black);color:black;padding:3px;text-decoration:underline'>QUERY</a></li> 
               <li><a href='logout.php'>LOGOUT</a></li> </b>
        </ul>
    
    </div>";
  echo "<br><br>";
$conn = mysqli_connect("localhost","root","","sourv_singh");
$sql = "SELECT * FROM query ORDER BY query_id DESC";

$query = mysqli_query($conn,$sql);



while($row = mysqli_fetch_assoc($query))
{
    echo "<b><p style='display:inline-block'>".md5($row['email'])."</p></b><br><p1 style='float:right;margin:10 100 5 0'>".$row['date_time']."</p1>";
    echo "<br>";
    echo $row['query'];
    $id=$row['query_id'];
    $sql2 = "SELECT * FROM comment WHERE query_id='$id'";
    $query2 = mysqli_query($conn,$sql2);
    $num=mysqli_num_rows($query2);
    
    echo "<br><br>";
    echo "<form action='commentareaajax.php?id=".$row['query_id']."' method='POST'><fieldset style='background-color:white'><a href='comment.php?id=".$row['query_id']."'>".$num." comments</a><br><textarea rows='2' cols='100' name='commentarea' style='display:inline-block'></textarea><br><input type='submit' name='comment' value='comment' style='margin:10;background-color:yellow'></fieldset></form><hr>";
 
}
    
}
else
{
header('Location:index.php?login->error');
}

