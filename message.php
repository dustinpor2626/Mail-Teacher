<?php
session_start();

    if($_SESSION['true']=="true")
    {
        if(isset($_GET['fac_email']))
        {
            
            $fac_mail = $_GET['fac_email'];
            $conn = mysqli_connect("localhost","root","","sourv_singh");
            
            $sql = "SELECT * FROM faculty WHERE email='$fac_mail'";
            
            $query = mysqli_query($conn,$sql);
            $rows = mysqli_fetch_assoc($query);
            $num = mysqli_num_rows($query);

            
                if($num==1)
                {
                $name = $rows['name'];
                $contact = $rows['contact'];
                }
            else
            {
                header('Location:faculty.php?query=error');
            }
    
            
            
            
         echo "    <html>
    <head><link rel='stylesheet' href='home.css'>
            <script type='text/javascript' src='home.js'>

        </script>
         <script src='jquery-3.3.1/jquery-3.3.1.js' type='text/javascript'></script>
         <script src='home.js' type='text/javascript'></script>
    </head>
    <title>start page</title>
    <body  style='background-image:linear-gradient(blue,blue,white);'>
    <div id='upper' style='background-color:black'>
         <img id='nit_png'  src='select.png' style='display:inline-block' height='100%' width='150'>
        <ul>
           <b> <li><a href='homepage.php'>HOME</a></li>
              <li><a href='faculty.php'>FACULTY</a></li>
            <li><a href='books.php'>BOOKS</a></li>
            <li><a href='querydatabase.php'>QUERY</a></li> 
               <li><a href='logout.php'>LOGOUT</a></li> </b>
        </ul>
    
    </div>
    
    
    <h1 style='background-image:linear-gradient(white,blue);border-radius:5px; text-align:center; padding:10px ;text-shadow:1px 1px 8px red'><b>
    ".$name."</b>
    </h1>
    <br><br>
    
    <form action='timeline.php?fac_mail=".$fac_mail."' method='POST'>
    <h1 style='margin:10px 20px;text-shadow:2px 2px grey;'>QUERY</h1><br><textarea name='send_sms' cols='150%' rows='10' style='padding:3px 10px; margin:10px 20px;box-shadow:5px 5px 7px black;'>
    
    </textarea>
    <br>
    <input type='submit' value='send query' name='timeline' style='margin:10px 20px'>
        </form>
        
    </html>  ";

        }
      
        else
        {
            header('Location:homepage.php?query=error2');
        }    
        
        
   }
  else
  {
    header('Location:index.php?LOG_IN=error');
  }

?>