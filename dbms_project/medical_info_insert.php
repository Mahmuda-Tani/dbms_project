

<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
  
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
 
 <form action="" method="POST" class="contact-form" style="  width: 520px;height: 430px;">
 	 <h2>Update</h2>
 <table>
   <tr>
    <td><label>Pat_id</label></td>
    <td><input type="text" name="id" required></td>
  </tr>
<tr>
  <td><label>Admit_date</label></td>
  <td> <input type="text" name="ad" required></td>
</tr>

<tr>
   <td><label>Doc_id</label></td>
  <td> <input type="text" name="Doc_id"   required></td>
</tr>

<tr>
 <td> <label>Room_no</label></td>
 <td>  <input type="text" name="rn"  required></td>
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
      $ad = isset($_POST['ad']) ? $_POST['ad'] : '';
      $Doc_id = isset($_POST['Doc_id']) ? $_POST['Doc_id'] : '';
      $rn = isset($_POST['rn']) ? $_POST['rn'] : '';



 
  
     $query= "insert into medical_info values('$id' ,'$ad','$Doc_id' ,'$rn')" ;
    
     $data=mysqli_query($con,$query);
     
       if($data)
       {
           header("location:admin_loginpage_connect.php");
       }
       else
        echo "not Updated";

    
    

   }
  
?>  


