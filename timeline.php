<?php
session_start();         
           use PHPMailer\PHPMailer\PHPMailer;
           use PHPMailer\PHPMailer\Exception;

if($_SESSION['true']=="true")
{
if(isset($_POST['timeline']))
{
    $timeline = $_POST['send_sms'];
    $email = $_SESSION['name'];
    $fac_mail = $_GET['fac_mail'];
     $date = date('Y-m-d H:i:s');
    
    $conn = mysqli_connect("localhost","root","","sourv_singh");
        
    $sql = "INSERT INTO query(email,query,query_to,date_time) VALUES('$email','$timeline','$fac_mail','$date')";
        if(mysqli_query($conn,$sql))
        {

            
            require 'PHPMailer-master/PHPMailer-master/vendor/autoload.php';
            
            $mail = new PHPMailer();
            try{
                    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'Youremail@gmail.com';                 // SMTP username
    $mail->Password = 'your_password';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;  
                
                $mail->setFrom($email);
                $mail->addAddress('Your_faculty_mail');
                
                
                $mail->isHTML(true);
                $mail->subject = 'hii';
                $mail->body = $timeline;
                
                $mail->send();
                
                   echo 'Message has been sent';
                
            }
            catch(Exception $e)
            {
                header('Location:homepage.php?send_query->fail->contact_management');
            }
            
                 
   
        }else{
              echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    
}
    else
    {
        header('Location:homepage.php?error-->loading_page');
    }
}
else
{
    header('Location:index.php?login->error');
}
