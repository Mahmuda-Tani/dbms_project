<?php

  $con= new mysqli ("localhost", "root","","dbms_project");

    $pid = isset($_GET['pid']) ? $_GET['pid'] : '';
    $wid = isset($_GET['wid']) ? $_GET['wid'] : '';
    $hid = isset($_GET['hid']) ? $_GET['hid'] : '';
    $st = isset($_GET['st']) ? $_GET['st'] : '';
    $vc= isset($_GET['vc']) ? $_GET['vc'] : '';
    

 
?>




<!DOCTYPE html>
<html>
<head>
	<title>update</title>
  
	<link rel="stylesheet" type="text/css" href="insert_update.css"/>
	<link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
   <style>

body{
     /* background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh; */
        
       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('bimg_3.jpg');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
  }

</style>

</head>
<body>
 
  <form action="" method="POST" class="contact-form" style="width: 520px;height: 600px;">
 	 <h2>Update</h2>
 
<table>

  <tr>
  <td> <label>Pat_id</label></td>
  <td> <input type="text" name="pid" value="<?php echo $pid?>"  required></td>
</tr>
 
 <tr>
   <td><label>Ward_id</label></td>
   <td><input type="text" name="wid" value="<?php echo $wid?>"  required></td>
</tr>
<tr>
   <td><label>Hos_id</label></td>
   <td><input type="text" name="hid" value="<?php echo $hid?>"  required></td>
</tr>
<tr>
   <td><label>Status</label></td>
   <td><input type="text" name="st" value="<?php echo $st?>"  required></td>
</tr>
<tr>
   <td><label>Vaccine</label></td>
   <td><input type="text" name="vc" value="<?php echo $vc?>"  required></td>

</tr>
</table>
   <br>
 
   <button type="submit" name="submit">Update</button>


 </form>

</body>
</html>




<?php
   
       
  
   $con= new mysqli ("localhost", "root","","dbms_project");
    
   

    if(Isset($_POST['submit']))
    {
      

        $pid = isset($_POST['pid']) ? $_POST['pid'] : '';
        $wid = isset($_POST['wid']) ? $_POST['wid'] : '';
        $hid = isset($_POST['hid']) ? $_POST['hid'] : '';
        $st = isset($_POST['st']) ? $_POST['st'] : '';
        $vc= isset($_POST['vc']) ? $_POST['vc'] : '';



 
  
     $query= "UPDATE covid_ward SET Pat_id='$pid' , Ward_id='$wid', Hos_id='$hid' , Status='$st', Vaccine='$vc'
      WHERE Ward_id=$wid" ;
    
     $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:admin_loginpage_connect.php");
       }
       else
        echo "not Updated";

    
    

   }
  
?>  


