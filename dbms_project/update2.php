
<?php
   

   $con= new mysqli ("localhost", "root","","dbms_project");

   if(isset($_POST['submit']))
   {
     

   $id = isset($_GET['id']) ? $_GET['id'] : '';
   $add = isset($_GET['add']) ? $_GET['add'] : '';
   $ph = isset($_GET['ph']) ? $_GET['ph'] : '';

   echo $id,$add,$ph;
  
    $query= "UPDATE student SET Hos_id='$id , Hos_add='$add',  Hos_ph='$ph'  WHERE Hos_id=$id" ;
   
    $data=mysqli_query($con,$query);
    
      if($data)echo "updated";
      else
       echo "not Updated";

    // header('location: admin.php');
   

  }
  else
  {
      echo "h66llo!!!";
  }
  
?>  
