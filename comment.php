<?php
session_start();

if($_SESSION['true']=="true")
{
echo "<html>
    <head><link rel='stylesheet' href='home.css'></head>
    <title>start page</title>
    <body>
    <div id='upper' style='background-color:black'>
        
        <img src='select.png' style='display:inline-block' height='100%' width='150'>
        <ul>
          <b>  <li><a href='homepage.php'>HOME</a></li>
            <li><a href='faculty.php'>FACULTY</a></li>
            <li><a href='books.php'>BOOKS</a></li>
            <li><a href='querydatabase.php'>QUERY</a></li> 
               <li><a href='logout.php'>LOGOUT</a></li> </b>
        </ul>
    
    </div>
        </body>
</html>";
    
   
               if(isset($_GET['id']))
               {
                   $var = $_GET['id'];
               }else
               {
                      $var = $_SESSION['query_id'];
               }
    
    
         $conn = mysqli_connect("localhost","root","","sourv_singh");
         $sql = "SELECT * FROM query WHERE query_id='$var'";
         $query = mysqli_query($conn,$sql);
         $row= mysqli_fetch_assoc($query);
         echo "<br><b>".md5($row['email'])."<br></b><br>".$row['query']."<br><br>";
    

      echo "<html><head>
     <script src='jquery-3.3.1/jquery-3.3.1.js'></script>
             <script type='text/javascript' src='home.js'>

        </script>
        <script type='text/javascript'>
        $(document).ready(function(){
        
        setInterval(function(){
        
        $('#commentareadiv').load('commentareaajax.php?id=".$var."');
        
        },100);
              
        });
        </script>
        </head><body><form action='commentareaajax.php?id=".$var."' method='post'>
            <textarea rows='2' cols='100' name='commentarea'></textarea>
            <input type='submit' name='submit' value='comment'>
        </form><br><br><hr><div id='commentareadiv'></div></body></html>";
   
}
else
{
    header('Location:index.php?login->error');
}




