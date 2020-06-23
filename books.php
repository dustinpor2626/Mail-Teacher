<?php
session_start();
$name=$_SESSION['name'];

if($_SESSION['true']=="true")
{
?>
        <html>
    <head><link rel='stylesheet' href='home.css'>
            <script type="text/javascript" src="jquery-3.3.1/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="home.js">

        </script>
            
            </head>
    <title>start page</title>
    <body>
    <div id='upper' style='background-color:black'>
         <img id="nit_png"  src='select.png' style='display:inline-block' height='100%' width='150'>
        <ul>
           <b><li><a href='homepage.php'>HOME</a></li>
              <li><a href="faculty.php">FACULTY</a></li>
            <li><a href='books.php' style="background-image:radial-gradient(white,white,black);color:black;padding:3px;text-decoration:underline">BOOKS</a></li>
            <li><a href='querydatabase.php'>QUERY</a></li>
               <li><a href='logout.php'>LOGOUT</a></li> </b>
        </ul>
    
        </div>
       
         <table cellspacing="60px" cellpadding="10px" width="100%">
             
               
        <tr align="center"><td><a href="books/1.pdf"><img src="images/hacking-exposed(1).png" width="120px" height="150px">
            <br>How_to_hack</a></td>
             <td><a href="books/2.pdf"><img src="images/hacking-mobile-exposed.jpg" width="120px" height="150px">
            <br>Mobile_hacking</a></td>
             <td><a href="books/Hacking%20Exposed%20Wireless.pdf"><img src="images/hacking-wireless-exposed.jpg" width="120px" height="150px">
            <br>Wireless_hacking</a></td>
             <td><a href="books/ethical_hacking_tutorial.pdf"><img src="images/ethical-hacking-tutorial.jpg" width="120px" height="150px">
            <br>Ethical_hacking</a></td></tr>
            
                     <tr align="center"><td><a href="books/1.pdf"><img src="images/hacking-exposed(1).png" width="120px" height="150px">
            <br>How to hack</a></td>
             <td><a href="books/Gray%20Hat%20Hacking,%203rd%20Edition.pdf.pdf"><img src="images/" width="120px" height="150px">
            <br>Mobile hacking</a></td>
             <td><a href="books/9780735622623%20-%20Shortcut.lnk"><img src="images/window-command-line.jpg" width="120px" height="150px">
            <br>Window_command-line</a></td>
             <td><a href="books/Hacking%20Exposed(1).pdf"><img src="images/hacking-7-exposed.jpg" width="120px" height="150px">
            <br>Network_security</a></td></tr>
        
            <br><br> 
        
    
         
               
            <tr align="center"><td><a href="books/CCNA%20Electronic%20Book%206th%20edition.pdf"><img src="images/" width="120px" height="150px">
            <br>how to hack</a></td>
             <td><a href="books/CCNP-ROUTE-Complete-Guide-1st-Edition_20131220.pdf"><img src="images/ccnp_edtion1.png" width="120px" height="150px">
            <br>CCNP_route</a></td>
             <td><a href="books/Windows%20Command%20Reference%20-%20Shortcut.lnk"><img src="images/window_c.jpg" width="120px" height="150px">
            <br>Window_command_prompt</a></td>
             <td><a href="books/lsw_book.pdf"><img src="images/hacking-7-exposed.jpg" width="120px" height="150px">
            <br>how to hack</a></td></tr>
          <br><br>

            
            <tr align="center"><td><a href="books/CPlusPlusProgramming.pdf"><img src="images/c++.png" width="120px" height="150px">
            <br>C++_guide</a></td>
             <td><a href="books/beginning_php_and_mysql_from_novice_to_professional_4th_edition.pdf"><img src="images/Beginning+PHP+and+MySQL.png" width="120px" height="150px">
            <br>Php_mysql_beginning</a></td>
             <td><a href="books/duckett.pdf"><img src="images/html&css.jpg" width="120px" height="150px">
            <br>Html_css_guide</a></td>
             <td><a href="books/Expert%20PHP%20and%20MySQL.pdf"><img src="images/expert_php.png" width="120px" height="150px">
            <br>Php_mysql_expert</a></td></tr>
            <br><br>
                        <tr align="center"><td><a href="books/Java%20-%20O'Reilly%20Java%20Servlet%20Programming.pdf"><img src="images/javaservlet.png" width="120px" height="150px">
            <br>Java_servlet</a></td>
             <td><a href="books/javascript.pdf"><img src="images/javascript.jpg" width="120px" height="150px">
            <br>Javascript</a></td>
             <td><a href="books/TheSwiftProgrammingLanguage_Swift3_(MP).pdf"><img src="images/swift.png" width="120px" height="150px">
            <br>Swift_programming</a></td>
             <td><a href="books/programming-ruby.pdf"><img src="images/programming_ruby.jpg" width="120px" height="150px">
                 <br>Programming_in_ruby</a></td></tr>
                            
        
        
        </table>
            </body>
</html>
<?php

}
else{
    header('Location:index.php?login->error');
}


?>
