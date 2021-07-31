<?php 
  
   
    $email = (isset($_POST['email']) ? $_POST['email'] : '');
    $pass = (isset($_POST['password']) ? $_POST['password'] : '');

    //Database connection here

    $con= new mysqli ("localhost", "root","","dbms_project");
    
    if($con-> connect_error)
    {
    	die("Failed to connect : ".$con->connect_error);
    }
    else
    {
    	$stmt = $con->prepare("select * from admin where email=?");
    	$stmt->bind_param("s",$email);
    	$stmt->execute();
        
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows>0)
        {
            $data= $stmt_result->fetch_assoc();
            if($data['password']===$pass)
            {
            	// echo  "<h2>Logged in successfully!!</h2>";
                
               ?>
                 

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged in as Admin</title>

    <style>
        *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family: "Cantora One";

         }

         body{
            /* background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 62vh; */

            
       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('bimg_3.jpg');
       background-repeat: no-repeat;
       height:62vh;
       background-size: 100% 100%;



            
            padding: 0;
            margin: 0;
            padding: 0;
             box-sizing: border-box;
             font-family: 'Poppins', sans-serif;
           
         }
         .img{
             height:120px;
             width:120px;
             margin-top:280px;
             margin-left:410px;
             box-shadow: 0 0 40px 0 #050505;
             border:2px;
           
         }
         .heading{
            margin-top:-96px;
            margin-left:550px;
            font-size:1.7rem;
            font-weight:bold;
            line-height: 1.1;
            word-spacing: 4px;
            /* text-shadow: 0 2px #7b241c, 0 3px #566573; */
            color:#1c2833;
            text-shadow: 1px 1px #4682B4
         
           
         }
        
         .link
         {
            margin-top:10px;
            margin-left:550px;
            font-size:0.9rem;
            font-weight:400;
            color: ;
            /* text-decoration:none; */
           
         }
         .x{
             /* border:2px solid black; */
         }
        
    </style>


</head>
<body>

 <div class="x">
     
    <div class="img">
        <img src="bimg_1.jpg" alt="covid_19" style="width: 120px; height: 120px;">
    </div>
    
   <div>
    <h2 class="heading ">Welcome To  Regional <span style="color:#7b241c;">Covid-19</span> Tracking System-<span style="font-weight:700; color: #212f3c ;">Admin Page</span></h2>
    <br>
    <a class="link" href="admin_loginpage_connect.php">Click here to go to Tables</a>
   </div>

 </div> 
    
</body>
</html>
                 
                

 <?php

            }
            else
            {
            	 echo"<h2>Invalid Password</h2>";
                 ?>
                 <a href="login_developer.html">Back to login page</a>
                <?php
            }
        }
        else
        {
        	echo "<h2>Invalid Email or Password</h2>";
        }

    }


 ?>