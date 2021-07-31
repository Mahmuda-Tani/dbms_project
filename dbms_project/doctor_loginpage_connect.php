<?php 
  
   
    $email = (isset($_POST['email']) ? $_POST['email'] : '');
    $pass = (isset($_POST['password']) ? $_POST['password'] : '');
    $id= (isset($_POST['id']) ? $_POST['id'] : '');

    //Database connection here
   

    $con= new mysqli ("localhost", "root","","dbms_project");
    
    if($con-> connect_error)
    {
    	die("Failed to connect : ".$con->connect_error);
    }
    else
    {
    	$stmt = $con->prepare("select * from doctor_login where email=?");
    	$stmt->bind_param("s",$email);
    	$stmt->execute();
        
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows>0)
        {
            $data= $stmt_result->fetch_assoc();
            if($data['password']===$pass)
            {
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>Display</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="table.css"/>
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 




<style>
       
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Cantora One";

  }

  body{
    /* background-image: linear-gradient(#D3D3D3,	#2F4F4F,#A9A9A9); */
    background-image: linear-gradient(  #6e6d6d ,#d5d8dc,#6e6d6d);

    /* background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('bimg_3.jpg');
       background-repeat: no-repeat;
       height:auto;
       background-size: 100% 100%; */
  }

 .container_a{
     
        height:500px;
         
       }

   

  .extra_div{
    background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
    /* border: 5px solid black; */
    padding: 50px !important;
    border-radius: 3px;
    transition: 0.3s;
    width:600px;
    margin-left:auto;
    margin-right:auto;
    box-shadow: 0 0 25px 0 #2D5C34;
    height:500px;
    position:relative;
    
  

}

.extra-div{
    background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
    /* border: 4px solid black!important; */
    padding: 50px !important;
    border-radius: 10px;
    transition: 0.3s;
    width:350px!important;
    height:500px;
    margin-left:auto;
    margin-right:auto;
    box-shadow: 0 0 25px 0 #2D5C34;
   
  

}


.extra_div:hover{
   
  
   transform:translateY(-10px) ;
   
}

.extra-div:hover{
   
  
   transform:translateY(-10px) ;
   
}

h3{
    font-size:0.9rem!important;
}
.tani{
    padding:10px;
    margin-left:auto;
    margin-right:auto;
    /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
    box-shadow: 0 0 25px 0 #2D5C34; */
}

.tani h2{
    font-size:1.1rem!important;
    font-weight:600;
    box-shadow: 0 0 20px 0 black;
    padding:13px;
    color:#001a1a;
}

.tani label{
    border:2px solid black!important;
    font-weight:bold !important;
    
}
.tani input{
    border:2px solid black;
    border-radius: 5px;
    background-color:white;
    font-size:1rem;
    width:200px;
   
}

.tani button{
    border:2px solid black;
    border-radius: 10px;
    background-color:#696969;
    font-size:1rem;
    width:100px;
   
}
.form{
    box-shadow: 0 0 10px 0 black;
    padding :15px;
    background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
   
}
table{
  border:2;
  width: 300px!important;
  /* height:5px; */
  margin-left:auto;
  margin-right:auto;
}
td,th{
  text-align:center!important;

}

.doctor,.patient,.covid_ward,.hospital,.medical_info{
    box-shadow: 0 0 20px 0 #2D5C34;
    padding:15px;
}
#x{width:200px!important;}


.heading
    {
        /* box-shadow: 0 0 20px 0 rgba(0,0,0,0.3); */
        /* border: 2px solid  #184d47; */
        margin-left: auto;
        margin-right: auto;
        padding:1px;
        height:35px;
        text-align:center;
        width:800px;
        /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81); */
        /* background-color:#03506f; */
    }
.heading h2{
       
        font-size: 1.5rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:700;
        color:#001a1a;
        box-shadow:  0 0 25px 0 #2D5C34;
        
    }
    h3{
        font-size: 1.1rem!important;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:700;
        color:#001a1a;
    }




</style>


</head>
<body>
   

    
<div class="container_a">
  
 <br>
  <!-- <div class="heading"><h2>All Patients  Detail  Who are  Under  Your  Observation</h1></div> -->
  <br>
  <br>
  <br>
  <div class="heading" style="width:500px; margin-top:-40px;"><h2> Patients  Detail   Under  Your  Observation</h2></div> <br><br> 

<div class="extra_div">
    
   <!-- <div class="heading" style="width:500px; margin-top:-40px;"><h2>All Patients  Detail  Who are  Under  Your  Observation</h2></div><br><br> -->
    <h3 style="text-align:center; color:black;"><u>Patient Info</u></h3>
   <table border="1" style="width : 40%;" class="patient">
                      <tr>
                        <th>Pat_id</th>
                         <th>Pat_add</th>
                         <th>Name</th>
                         <th>Pat_ph</th>
                         <th>Gender</th>
                         <th>Blood_grp</th>
                         <th>Age</th>
                         <th>Hos_id</th>
                        
                
                     </tr>

                     <?php

                           error_reporting(0);
                           $query="select * from patient where  Doc_id='$id'";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);
                         

                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Pat_add']; ?></td>
                                      <td><?php echo $result['Name']; ?></td>
                                      <td><?php echo $result['Pat_ph']; ?></td>
                                      <td><?php echo $result['Gender']; ?></td>
                                      <td><?php echo $result['Blood_grp']; ?></td>
                                      <td><?php echo $result['Age']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                     
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
    </table>

    <br>

    <h3 style="text-align:center; color:black;">Total number of Patient Under Your Observation is : <?php echo $total ?></h3>
 </div>


 </div>

 <br><br>
 <br><br>
 <br><br>
 <br><br>


   <?php
          

   

          error_reporting(0);
          $query="select * from  patient inner join covid_ward using(Pat_id)  WHERE (Status='cure' and Doc_id='$id')";
          $adata=mysqli_query($con,$query);
          $a=mysqli_num_rows($adata);


          $query="select * from  patient inner join covid_ward using(Pat_id)  WHERE (Status='under treatment' and Doc_id='$id')";
          $bdata=mysqli_query($con,$query);
          $b=mysqli_num_rows($bdata);


          $query="select * from  patient inner join covid_ward using(Pat_id)  WHERE (Status='dead' and Doc_id='$id')";
          $cdata=mysqli_query($con,$query);
          $c=mysqli_num_rows($cdata);

          $t=$a+$b+$c;






   ?>

   <br> <br> <br>
  
    
<div class="container">
    
  

   <div class="heading"><h2 >Covid Patient Details under Your Observation</h2></div>


   <br><br>

   <div class="row">
  
    <div class="a extra-div col-lg-4 col-md-4 col-12">

     <h3 style="text-align:center; color:black;"><u>Cured</u></h3>
     <br>
           <table border=3px style="width : 40%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                       
                
                     </tr>
                     <?php


                           if($a !=0)
                           {
                               while($result=mysqli_fetch_assoc($adata))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
             <br><br><br><br><br><br>

                 <h3 style="text-align:center; color:black;">Total number of Cured Patients  :<?php echo $a ?> <h3 >
               
                  
                 <?php
                     
                   while($a)
                   {
                      echo "<br>";
                      $a--;
                       
                   }
                ?>

     </div>

      <div class="b extra-div col-lg-4 col-md-4 col-12">
          

      <h3 style="text-align:center; color:black;"><u> Currently In Treatment</u></h3><br>
           <table border=2px style="width : 40%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                       
                
                     </tr>
                     <?php


                           if($b !=0)
                           {
                               while($result=mysqli_fetch_assoc($bdata))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
           <br> <br><br><br><br>

                 <h3 style="text-align:center; color:black;">Total number of Currently in Treatment Patients  : <?php echo $b ?><h3 >
                  
                 <?php
                   
                 
                   while($b)
                   {
                      echo "<br>";
                      $b--;
                       
                   }
                ?>

      </div>

    <div class="c extra-div col-lg-4 col-md-4 col-12">



    <h3 style="text-align:center; color:black;"><u>Dead</u></h3><br>

           <table border=2px style="width : 40%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                       
                
                     </tr>
                     <?php


                           if($c!=0)
                           {
                               while($result=mysqli_fetch_assoc($cdata))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
           <br> <br><br><br><br><br>
                 <h3 style="text-align:center; color:black;" >Total number of Dead Patients : <?php echo $c ?><h3 >
               
                  
                 <?php
                   
                 
                   
                   while($c)
                   {
                      echo "<br>";
                     $c--;
                       
                   }
                ?>

                </div>

         </div>
        
        <br><br><br>  <br><br><br>  <br><br><br>
      <div class="tani">
          <h2>Know The Condition Of Covid_Ward Patient For Any Hospital </h2>
     <form action="doctor_hospital.php" method="post" class="form" >
       <table>
         <tr>
             <td><lebel id="#">Enter hospital id: </td>
             <td><input type="text" name="id" style="width:100px;"></input>
             <td> <button type="submit">Submit</button></td>
         </tr>
      </table>
     </form>

    </div>

<br><br><br>

    <div class="tani">
          <h2>Know The Covid Overview Of Any hospital</h2>
     <form action="doctor_l.php" method="post" class="form" >
       <table>
         <tr>
             <td><lebel id="#">Enter hospital id: </td>
             <td><input type="text" name="id" style="width:100px;"></input>
             <td> <button type="submit">Submit</button></td>
         </tr>
      </table>
     </form>

    </div>


  </div>
  <br><br>
   
 


</body>
 </html> 


             <?php
            }
            else
            {
            	 echo"<h2>Invalid Email or Password</h2>";
                 ?>
                 <a href="login_developer.html">Back to login page</a>
                <?php
            }
        }
        else
        {
        	echo "<h2>Invalid Email or Password</h2>";
            ?>
            <a href="login_developer.html">Back to login page</a>
           <?php
            
        }

    }


 ?>