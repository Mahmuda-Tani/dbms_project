<?php

  $con= new mysqli ("localhost", "root","","dbms_project");

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $nm = isset($_GET['nm']) ? $_GET['nm'] : '';
    $ph = isset($_GET['ph']) ? $_GET['ph'] : '';
    $em = isset($_GET['em']) ? $_GET['em'] : '';
    $av= isset($_GET['av']) ? $_GET['av'] : '';
    $Hos_id= isset($_GET['Hos_id']) ? $_GET['Hos_id'] : '';
    $Ward_id = isset($_GET['Ward_id']) ? $_GET['Ward_id'] : '';

 
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
 

 <form action="" method="POST" class="contact-form">
   <h2>Update</h2>

   <table>
    
    <tr>
      <td><label>Doc_id</label></td>
      <td><input type="text" name="id"  value="<?php echo $id?> " required> </td>
    </tr>
   

    <tr>
    <td><label>Doc_name</label></td>
    <td> <input type="text" name="nm" value="<?php echo $nm ?>"required></td>
    </tr>
   
   <tr>
   <td><label>Doc_ph</label></td>
   <td><input type="text" name="ph"  value="<?php echo $ph?>" required></td>
   </tr>
   
   <tr>
    <td>
   <label>Email</label></td>
   <td>
   <input type="text" name="em" value="<?php echo $em?>"  required>
   </td>
   </tr>
   
   <tr>
    <td>
   <label>Availability</label></td>
   <td>
   <input type="text" name="av"  value="<?php echo $av?>" required>
   </td>
   </tr>

   <tr>

    <td>
   <label>Hos_id</label>
   </td>
   <td>
   <input type="text" name="Hos_id"  value="<?php echo $Hos_id?>"  required>
   </td>

   </tr> 

   <tr>
    <td>
   <label>Ward_id</label></td>
   <td>
   <input type="text" name="Ward_id"  value="<?php echo $Ward_id?> " required>
   </td>

   </tr>

  </table>

 
   <button type="submit" name="submit">Insert</button>


 </form>

</body>
</html>







<?php
   
       
  
   $con= new mysqli ("localhost", "root","","dbms_project");
    
   

    if(Isset($_POST['submit']))
    {
      


    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $nm = isset($_POST['nm']) ? $_POST['nm'] : '';
    $ph = isset($_POST['ph']) ? $_POST['ph'] : '';
    $em = isset($_POST['em']) ? $_POST['em'] : '';
    $av= isset($_POST['av']) ? $_POST['av'] : '';
    $Hos_id= isset($_POST['Hos_id']) ? $_POST['Hos_id'] : '';
    $Ward_id = isset($_POST['Ward_id']) ? $_POST['Ward_id'] : '';



 
  
     $query= "UPDATE Doctor SET Doc_id='$id' ,  Doc_name='$nm', Doc_phn='$ph' , Email='$em', 
     Availability='$av', Hos_id='$Hos_id', Ward_id='$Ward_id' WHERE Doc_id=$id" ;
    
     $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:admin_loginpage_connect.php");
       }
       else
        echo "not Updated";

    
    

   }
  
?>  


