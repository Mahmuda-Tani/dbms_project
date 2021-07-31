<?php

  $con= new mysqli ("localhost", "root","","dbms_project");

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $add = isset($_GET['add']) ? $_GET['add'] : '';
    $nm = isset($_GET['nm']) ? $_GET['nm'] : '';
    $ph = isset($_GET['ph']) ? $_GET['ph'] : '';
    $gr = isset($_GET['gr']) ? $_GET['gr'] : '';
    $bg= isset($_GET['bg']) ? $_GET['bg'] : '';
    $ag = isset($_GET['ag']) ? $_GET['ag'] : '';
    $Hos_id= isset($_GET['Hos_id']) ? $_GET['Hos_id'] : '';
    $Doc_id = isset($_GET['Doc_id']) ? $_GET['Doc_id'] : '';

 
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
 
 <form action="" method="POST" class="contact-form" style="width: 650px;  height: 750px;">
   <h2>Update</h2>
   <table>
     <tr>
   <td> <label>Pat_id</label></td>
   <td> <input type="text" name="id" value="<?php echo $id?>"  required></td>

    </tr>
     
    <tr>
   <td><label>Pat_add</label></td>
   <td><input type="text" name="add"  value="<?php echo $add?>"required></td>
</tr>

<tr>

   <td> <label>Name</label></td>
   <td><input type="text" name="nm"  value="<?php echo $nm ?>" required><td>
</tr>

<tr>
   <td><label>Pat_ph</label></td>
   <td><input type="text" name="ph" value="<?php echo $ph?>"   required></td>
</tr>
<tr>
   <td><label>Gender</label></td>
   <td><input type="text" name="gr"value="<?php echo $gr?>" required></td>
</tr>

<tr>
   <td><label>Blood_grp</label></td>
   <td><input type="text" name="bg"value="<?php echo $bg?>" required></td>
</tr>
<tr>
   <td><label>Age</label></td>
  <td> <input type="text" name="ag"  value="<?php echo $ag?>" required></td>

</tr>

<tr>
   <td><label>Hos_id</label></td>
   <td><input type="text" name="Hos_id" value="<?php echo $Hos_id?>"required></td>
</tr>

<tr>

  <td> <label>Doc_id</label></td>
   <td><input type="text" name="Doc_id"  value="<?php echo $Doc_id?>"  required></td>

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
    $nm = isset($_POST['nm']) ? $_POST['nm'] : '';
    $ph = isset($_POST['ph']) ? $_POST['ph'] : '';
    $gr = isset($_POST['gr']) ? $_POST['gr'] : '';
    $bg= isset($_POST['bg']) ? $_POST['bg'] : '';
    $ag = isset($_POST['ag']) ? $_POST['ag'] : '';
    $Hos_id= isset($_POST['Hos_id']) ? $_POST['Hos_id'] : '';
    $Doc_id = isset($_POST['Doc_id']) ? $_POST['Doc_id'] : '';



 
  
     $query= "UPDATE patient SET Pat_id='$id' , Pat_add='$add', Name='$nm', Pat_ph='$ph' , Gender='$gr', Blood_grp='$bg',
     Age='$ag', Hos_id='$Hos_id', Doc_id='$Doc_id' WHERE Pat_id='$id'" ;
    
     $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:admin_loginpage_connect.php");
       }
       else
        {
         header("location:admin.php");
        }

    
    

   }
  
?>  


