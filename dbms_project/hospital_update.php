<?php

  $con= new mysqli ("localhost", "root","","dbms_project");

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $nm = isset($_GET['nm']) ? $_GET['nm'] : '';
    $add = isset($_GET['add']) ? $_GET['add'] : '';
    $ar = isset($_GET['ar']) ? $_GET['ar'] : '';
    $ph = isset($_GET['ph']) ? $_GET['ph'] : '';
    
  //  echo  $id,$nm,$add,$ar,$ph;

 
?>






<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  
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
 
 <form action="" method="POST" class="contact-form" style="  width: 520px; height: 500px;">
 	 <h2>Update</h2>
    
    <table>
      <tr>
      <td> <label>Hos_id</label></td>
      <td><input type="text" name="id" value="<?php echo $id?> " required></td>
      </tr>

      <tr>
      <td><label>Hos_name</label></td>
      <td><input type="text" name="nm" value="<?php echo $nm?> " required></td>
     </tr>



      <tr>
       <td><label>Hos_add</label></td>
       <td><input type="text" name="add" value="<?php echo $add?>" required></td>
     </tr>

     <tr>
      <td><label>Area</label></td>
      <td><input type="text" name="ar" value="<?php echo $ar?> " required></td>
     </tr>

     <tr>
     <td><label>Hos_ph</label></td>
     <td> <input type="text" name="ph" value="<?php echo $ph?>"  required></td>
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
      

    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $add = isset($_POST['add']) ? $_POST['add'] : '';
    $ph = isset($_POST['ph']) ? $_POST['ph'] : '';
    $nm = isset($_POST['nm']) ? $_POST['nm'] : '';
    $ar = isset($_POST['ar']) ? $_POST['ar'] : '';
    
 
   
       $query= "UPDATE hospital SET Hos_id='$id' , Hos_name='$nm',Hos_add='$add', Area='$ar', Hos_ph='$ph'  WHERE Hos_id=$id " ;
    
       $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:admin_loginpage_connect.php");
       }
       else
        echo "not Updated";

    
    

   }
  
?>  



