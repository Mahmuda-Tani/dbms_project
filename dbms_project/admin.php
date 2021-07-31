
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Display</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="table.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <h1 style="text-align:center; color:black;"><u>Rigonal <span style="color: red">Covid-19</span> Tracking System</u></h1>

        <h2 style="text-align:center; color:black;"><u>Hospital</u></h2>

<table border=2px style="width : 40%;"class="hospital">
    <tr>
        <th>Hos_id</th>
        <th>Hos_add</th>
        <th>Hos_ph</th>
       

    </tr>
    <?php

          $con= new mysqli ("localhost", "root","","dbms_project");
        //  error_reporting(0);
          $query="select * from hospital";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);

          if($total !=0)
          {
              while($result=mysqli_fetch_assoc($data))
              {
                  ?>

                  <tr>
                     <td><?php echo $result['Hos_id']; ?></td>
                     <td><?php echo $result['Hos_add']; ?></td>
                     <td><?php echo $result['Hos_ph']; ?></td> 
                     
                   </tr>
                   
               <?php
               
              }
          }
          else{
              echo "no record found";
          }

   ?>
            
</table>


<?php
  $total+=5;
   while($total)
    {
      // echo "<br>";
        $total--;
                       
    }
 ?>
             
             <h2 style="text-align:center; color:black;"><u>Patient</u></h2>

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
                         <th>Doc_id</th>
                
                     </tr>

                     <?php

                           error_reporting(0);
                           $query="select * from patient";
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
                                      <td><?php echo $result['Doc_id']; ?></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
  </table>

  <?php
  $total+=5;
   while($total)
    {
       //echo "<br>";
        $total--;
                       
    }
 ?>
          
          <h2 style="text-align:center; color:black;"><u>Doctor</u></h2>

<table border=2px style="width : 40%;" class="doctor">
                     <tr>
                         <th>Doc_id</th>
                         <th>Doc_name</th>
                         <th>Doc_ph</th>
                         <th>Email</th>
                         <th>Availability</th>
                         <th>Hos_id</th>
                         <th>Ward_id</th>
                         
                         
                     </tr>
                     <?php

                           error_reporting(0);
                           $query="select * from Doctor";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);
                          

                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Doc_id']; ?></td>
                                      <td><?php echo $result['Doc_name']; ?></td>
                                      <td><?php echo $result['Doc_phn']; ?></td>
                                      <td><?php echo $result['Email']; ?></td>
                                      <td><?php echo $result['Availability']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      
                                     
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
            </table>
               
           
                  
                 <?php
                   
                 
                   $total+=5;
                   while($total)
                   {
                     // echo "<br>";
                      $total--;
                       
                   }

                   ?>
                    <h2 style="text-align:center; color:black;"><u>Medical_info</u></h2>
            <table border=2px style="width : 40%;" class="medical_info">
                     <tr>
                         <th>Pat_id</th>
                         <th>Admit_date</th>
                         <th>Doc_id</th>
                         <th>Room_no</th>
                       
                     </tr>
                     <?php

                           error_reporting(0);
                           $query="select * from medical_info";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);
                          

                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Admit_date']; ?></td>
                                      <td><?php echo $result['Doc_id']; ?></td>
                                      <td><?php echo $result['Room_no']; ?></td>
                                      
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
                 <?php
                 
                   $total+=5;
                   while($total)
                   {
                     // echo "<br>";
                      $total--;
                       
                   }
                ?>  
                
                
                <h2 style="text-align:center; color:black;"><u>Covid_Ward</u></h2>
           <table border=2px style="width : 40%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Doc_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                       
                
                     </tr>
                     <?php

                         
                           error_reporting(0);
                           $query="select * from covid_ward";
                           $data=mysqli_query($con,$query);
                           $total=mysqli_num_rows($data);
                          

                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['Pat_id']; ?></td>
                                      <td><?php echo $result['Ward_id']; ?></td>
                                      <td><?php echo $result['Doc_id']; ?></td>
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
               
                  
                 <?php
                   
                 
                   $total+=5;
                   while($total)
                   {
                      echo "<br>";
                      $total--;
                       
                   }
                ?>
           

</body>
</html>

