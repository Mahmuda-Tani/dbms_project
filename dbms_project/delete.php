<?php
  $con= new mysqli ("localhost", "root","","dbms_project");

  $id=$_GET['id'];

  $Deletequery="delete from hospital where Hos_id='$id'";
  $query=mysqli_query($con , $Deletequery);

  if($query){
    
      echo '<script>alert("Deleted Successfully")</script>';
      
      header('location: admin_loginpage_connect.php');

  }
  else{
    ?>
    <script>alert('Something went wrong!!!');</script>
    <?php

  }
?>




<?php
  $con= new mysqli ("localhost", "root","","dbms_project");

  $id=$_GET['id'];

  $Deletequery="delete from patient where Pat_id='$id'";
  $query=mysqli_query($con , $Deletequery);

  if($query){
    
      echo '<script>alert("Deleted Successfully")</script>';
      
      header('location: admin_loginpage_connect.php');

  }
  else{
    ?>
    <script>alert('Something went wrong!!!');</script>
    <?php

  }
?>


<?php
  $con= new mysqli ("localhost", "root","","dbms_project");

  $id=$_GET['id'];

  $Deletequery="delete from doctor where Doc_id='$id'";
  $query=mysqli_query($con , $Deletequery);

  if($query){
    
      echo '<script>alert("Deleted Successfully")</script>';
      
      header('location: admin_loginpage_connect.php');

  }
  else{
    ?>
    <script>alert('Something went wrong!!!');</script>
    <?php

  }
?>




<?php
  $con= new mysqli ("localhost", "root","","dbms_project");

  $id=$_GET['id'];

  $Deletequery="delete from medical_info where pat_id='$id'";

  $query=mysqli_query($con , $Deletequery);

  if($query){
    
      echo '<script>alert("Deleted Successfully")</script>';
      
      header('location: admin_loginpage_connect.php');

  }
  else{
    ?>
    <script>alert('Something went wrong!!!');</script>
    <?php

  }
?>




<?php
  $con= new mysqli ("localhost", "root","","dbms_project");

  $wid=$_GET['wid'];

  $Deletequery="delete from covid_ward where Ward_id='$wid'";
  
  $query=mysqli_query($con , $Deletequery);

  if($query){
    
      echo '<script>alert("Deleted Successfully")</script>';
      
      header('location:admin_loginpage_connect.php');

  }
  else{
    ?>
    <script>alert('Something went wrong!!!');</script>
    <?php

  }
?>