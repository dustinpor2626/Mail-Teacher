<?php
    session_start();
if($_SESSION['true']=="true")
{

?>
    <html>
    <head><link rel="stylesheet" href="home.css">
        <script type="text/javascript" src="jquery-3.3.1/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="home.js"></script>
        
        </head>
    <title>start page</title>
    <body>
    <div id="upper" style="background-color:black">
        
        <img id="nit_png"  src="select.png" style="display:inline-block" height="100%" width="150">
        <ul>
         <b>   <li><a href="homepage.php">HOME</a></li>
              <li><a href="faculty.php" style="background-image:radial-gradient(white,white,black);color:black;padding:3px;text-decoration:underline">FACULTY</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="querydatabase.php">QUERY</a></li> 
             <li><a href="logout.php">LOGOUT</a></li> </b>
        </ul>
    
    </div>
        <br><br><center><form action="message.php" method="post" >
      <table cellspacing="20px 10px 20px 10px" cellpadding="15px 10px 15px 10px" bordercolor="black" bgcolor="white"  width="80%" >
            
            <?php 
    
     $conn = mysqli_connect("localhost","root","","sourv_singh");
    $result = "SELECT * FROM faculty";
    $check = mysqli_query($conn,$result);    
   
  
    
    while( $row= mysqli_fetch_assoc($check)) 
            {          
?>
              
                <tr align='center'>

                    <td><?php echo $row['name']?></td>
                      <td><?php echo $row['info']?></td>
                        <td><?php echo $row['email']?></td>
                    <td>
                        <form action="message.php?fac_email=<?php echo $row['email'] ?> " method="post">
                            <button type="submit" style="background-image:radial-gradient(red,white,white);border-radius:20px;border-style:none"><img src="images/ask_ques.png" height="50px" width="60px"></button>
                        </form></td></tr>
            
       
                        <?php
   
            }
    
        }
else
{
    header('Location:index.php?LOG_IN=error');
}
  
            ?>
        </table></form></center>

    </body>
</html>