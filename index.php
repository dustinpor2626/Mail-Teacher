
<html><head><title>form_validation</title>
    <link rel="stylesheet" href="home.css"></head>
<body style="background-image: url(images/form_back.jpg)">

    
    <form id="form2" action="register.php" method="post" >
        <fieldset style="background-image: url(images/index_back.jpg);opacity:0.8 ; border-radius:20px;padding:20 100 20 100">
            
  <em style="color:white"><b>FIRST NAME</b>  <input type='text' name='first_name' required style='border-radius: 10px ;height: 25'><br><br>        
    
        <b>LAST NAME</b> <input type='text' name='last_name' required style='border-radius: 10px ; height: 25'><br><br>
        
       <b>EMAIL</b> <input type='email' name='email' required style='border-radius: 10px ; height: 25'><br><br>
        
        <b>PASSWORD</b><input type='password' name='password' required style='border-radius: 10px ; height: 25'><br><br>
            
   
        
        <b>CONTACT </b></em><input type='number' name='contact' style='border-radius: 10px ; height: 25'><br><br>
            
            <input type='submit' style='border-radius: 5px ; height: 25' >

        </fieldset>
   </form >
    
    

    
        <form id="form1" action="query.php" method="post" style="padding:250 50 10 100">
               
 <fieldset style="background-image: url(images/index_back.jpg);opacity:0.8 ; border-radius:10px;padding:20 100 20 100">
     <em style="color:white"><b>EMAIL-ID</b><br><br><input type='text' name='username' placeholder=' e-mail' required style='border-radius: 10px ;height: 25'>
        <br><br>
            <b>PASSWORD</b></em><br><br><input type='password' name='password' placeholder='password' required style='border-radius: 10px ;height: 25'>
        <br><br>
        <input type='submit' value='LOG_IN' name='submit'>
            </fieldset>
    </form>
    </body>

</html> 
