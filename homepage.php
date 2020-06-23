<?php
session_start();

?>
<html>
    <head><link rel="stylesheet" href="home.css">
    
    <script src="jquery-3.3.1/jquery-3.3.1.js" type="text/javascript"></script>
        <script type="text/javascript" src="home.js">

        </script>
    
    
    
    </head>
    <title>start page</title>
    <body>
    <div id="upper" style="background-color:black">
        
        <img  id="nit_png" src="select.png" style="display:inline-block" height="100%" width="150">
       <b> <ul>
            <li><a href="homepage.php" style="  background-image:radial-gradient(white,white,black);color:black;padding:3px;text-decoration:underline">HOME</a></li>
            <li><a href="faculty.php">FACULTY</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="querydatabase.php">QUERY</a></li>
            <li><a href="logout.php">LOGOUT</a></li> 
           </ul></b>
    
    </div>
        </body>
</html>
<?php
if($_SESSION['true']=="true")
{
$conn = mysqli_connect("localhost","root","","sourv_singh");

$usermail = $_SESSION['name'];
$sql = "SELECT * FROM query WHERE email='$usermail' ORDER BY query_id DESC";

$query = mysqli_query($conn,$sql);

    echo "<div id='homepage_content'>";
while($row = mysqli_fetch_assoc($query))
{
 echo "<br><br>";
    echo $row['query'];
    echo "<br>";
    $id = $row['query_id'];
    $sql2 = "SELECT * FROM comment WHERE query_id='$id'";
    $query2 = mysqli_query($conn,$sql2);
    $num=mysqli_num_rows($query2);
    
    echo "<br><p style='float:right;margin:0 40 20 0'>".$row['date_time']."</p><a href='comment.php?id=".$row['query_id']."' style='display:inline-block;padding-right:40px;'>".$num." comments </a><a href='delete_query.php?id=".$row['query_id']."'>delete</a>";
     echo "<br><br><hr>";
    
}
    echo "</div>";
   ?>

<html>
<body>
    
    </body>
</html>



<?php    
}
else{
    header('Location:index.php?login->error');
}

?>