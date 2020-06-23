<?php
session_start();

if($_SESSION['true']=="true")
{
    $conn = mysqli_connect("localhost","root","","sourv_singh");
    
    if(isset($_GET['id']))
    {
        $var = $_GET['id'];
        $_SESSION['query_id'] = $var;
         

        $sql3 = "SELECT * FROM comment WHERE query_id='$var' ORDER BY  comment_id DESC";
        $query3 = mysqli_query($conn,$sql3);
         
    while( $row3 = mysqli_fetch_assoc($query3))
    {
         echo "<br><table cellspacing='20px' cellpadding:'35 10 20 10' >
         <tr>
         <td align='center'><b>". md5($row3['email'])."</b></td>
          <td style='width:800px;border:1px solid blue' align='center'><br>". $row3['comment']."</td>
         
        <td align='right' style='padding-left:100'> ".$row3['date_time']."</td>
         </tr>
         </table>";
        
         
    }
            if(isset($_POST['commentarea']))
    {
        $date = date('Y-m-d H:i:s');
        $comment = $_POST['commentarea'];
        $email = $_SESSION['name'];
        $sql2 = "INSERT INTO comment(email,comment,query_id,date_time) VALUES('$email','$comment','$var','$date')";
        mysqli_query($conn,$sql2);
        header('Location:comment.php');
    }
        

    }
 else
    {
      header('Location:querydatabase.php');
        
    }

}
else
{
    header('Location:index.php?login->error');
}
