
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
 
 <form action="" method="POST" class="contact-form" style="width: 600px;  height: 730px; margin-top:5px;">
 	 <h2>Insert</h2>
   <table>
     <tr>
   <td> <label>Pat_id</label></td>
   <td> <input type="text" name="id"  required></td>

    </tr>
     
    <tr>
   <td><label>Pat_add</label></td>
   <td><input type="text" name="add"required></td>
</tr>

<tr>

   <td> <label>Name</label></td>
   <td><input type="text" name="nm"  required><td>
</tr>

<tr>
   <td><label>Pat_ph</label></td>
   <td><input type="text" name="ph"   required></td>
</tr>
<tr>
   <td><label>Gender</label></td>
   <td><input type="text" name="gr" required></td>
</tr>

<tr>
   <td><label>Blood_grp</label></td>
   <td><input type="text" name="bg"   required></td>
</tr>
<tr>
   <td><label>Age</label></td>
  <td> <input type="text" name="ag"  required></td>

</tr>

<tr>
   <td><label>Hos_id</label></td>
   <td><input type="text" name="Hos_id" required></td>
</tr>

<tr>

  <td> <label>Doc_id</label></td>
   <td><input type="text" name="Doc_id"   required></td>

</tr>

</table>

   <br>
 
   <button type="submit" name="submit">Insert</button>


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



 
  
     $query= "insert into patient values('$id','$add','$nm','$ph' ,'$gr', '$bg',
     '$ag','$Hos_id','$Doc_id') ";
    
     $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:admin_loginpage_connect.php");
       }
       else
       {
        echo "something went wrong";
       }

    
    

   }
  
?>  


