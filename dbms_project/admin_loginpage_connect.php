
             <?php
               $con= new mysqli ("localhost", "root","","dbms_project");
             ?>



                <!DOCTYPE html>
                 <html lang="en">
                 <head>
                  <title>Display</title>
                  <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
                  <link rel="stylesheet" type="text/css" href="table.css"/>
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    




               <style>

                     body{
                       background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );
                        background-repeat: no-repeat;
                       background-size: 100% 100%;
                       height: auto;


                       
       /* background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('bimg_3.jpg');
       background-repeat: no-repeat;
       height:auto;
       background-size: 100% 100%; */
                     }

                     .doctor,.patient,.covid_ward,.hospital,.medical_info{
                           box-shadow: 0 0 40px 0 #2D5C34;
                           padding:15px;
                       }

                       *{font-family: "Cantora One";}

                       td{
                         width:500px !important;
                       }


                 </style>
                  </head>
                 <body>

                    
                   <br>
                   <h1 style="text-align:center; color:black;"><u>Rigonal <span style="color: red">Covid-19</span> Tracking System</u></h1>

                   <h2 style="text-align:center; color:black;"><u>Hospital</u></h2>

                  <table border=2px style="width : 40%;" class="hospital">
                     <tr>
                         <th>Hos_id</th>
                         <th>Hos_name</th>
                         <th>Hos_add</th>
                         <th>Area</th>
                         <th>Hos_ph</th>
                         <th colspan="2">Operation</th>
                
                     </tr>
                     <?php

                           //include("connection.php");
                           error_reporting(0);
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
                                      <td><?php echo $result['Hos_name']; ?></td>
                                      <td><?php echo $result['Hos_add']; ?></td>
                                      <td><?php echo $result['Area']; ?></td>
                                      <td><?php echo $result['Hos_ph']; ?></td> 
                                      <td><a href="hospital_update.php?id=<?php echo $result['Hos_id']; ?> & nm=<?php echo $result['Hos_name']; ?>
                                      & add=<?php echo $result['Hos_add']; ?> & ar=<?php echo $result['Area']; ?>&  ph=<?php echo $result['Hos_ph']; ?>" style="display:block;">&nbsp;<i class="fa fa-edit"></i></a></td>
                                      <td><a href="delete.php?id=<?php echo $result['Hos_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-trash"></i></a></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           
                           

                    ?>

                 </table>
                  
                 <br>
               


                 <form action="Hospital_insert.php">
                   <button type="submit"  class="insert">Insert</button>
                 </form>
                 
                 <?php
                   
                 
                  // $total+=5;
                   while($total)
                   {
                     // echo "<br>";
                      $total--;
                       
                   }
                ?>
               
                   
               <h2 style="text-align:center; color:black;"><u>Patient</u></h2>
              
                 <table border=2px style="width : 40%;" class="patient">
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
                         
                         <th colspan="2">Operation</th>
                
                     </tr>
                     <?php

                           //include("connection.php");
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
                                      
                                      <td><a href="patient_update.php?id=<?php echo $result['Pat_id']; ?> & add=<?php echo $result['Pat_add']; ?>
                                       & nm=<?php echo $result['Name']; ?>  & ph=<?php echo $result['Pat_ph']; ?>  & gr=<?php echo $result['Gender']; ?>
                                       & bg=<?php echo $result['Blood_grp']; ?>  & ag=<?php echo $result['Age']; ?> 
                                       & Hos_id=<?php echo $result['Hos_id']; ?>  & Doc_id=<?php echo $result['Doc_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-edit"></i></a></td>

                                      <td><a href="delete.php?id=<?php echo $result['Pat_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-trash"></i></a></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
                 <br>
           

                 <form action="patient_insert.php">
                   <button type="submit"  class="insert" >Insert</button>
                 </form>
                  
                 <?php
                   
                 
                   //$total+=5;
                   while($total)
                   {
                     // echo "<br>";
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
                         
                         <th colspan="2">Operation</th>
                
                     </tr>
                     <?php

                           //include("connection.php");
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
                                      
                                      <td><a href="Doctor_update.php?id=<?php echo $result['Doc_id']; ?> & nm=<?php echo $result['Doc_name']; ?>
                                       & ph=<?php echo $result['Doc_phn']; ?>  & em=<?php echo $result['Email']; ?>
                                       & av=<?php echo $result['Availability']; ?>   & Hos_id=<?php echo $result['Hos_id']; ?> 
                                       & Ward_id=<?php echo $result['Ward_id']; ?>" style="display:block;"> &nbsp;  <i class="fa fa-edit"></i></a></td>

                                      <td><a href="delete.php?id=<?php echo $result['Doc_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-trash"></i></a></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
                 <br>
           

                 <form action="Doctor_insert.php">
                   <button type="submit"  class="insert" >Insert</button>
                 </form>
                  
                 <?php
                   
                 
                  // $total+=5;
                   while($total)
                   {
                     // echo "<br>";
                      $total--;
                       
                   }
                ?>


            <h2 style="text-align:center; color:black;"><u>Medical_Info</u></h2>
              
           <table border=2px style="width : 40%;" class="medical_info">
                     <tr>
                         <th>Pat_id</th>
                         <th>Admit_date</th>
                         <th>Doc_id</th>
                         <th>Room_no</th>
                         <th colspan="2">Operation</th>
                
                     </tr>
                     <?php

                           //include("connection.php");
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
                                      
                                      <td><a href="medical_info_update.php?id=<?php echo $result['Pat_id']; ?> & ad=<?php echo $result['Admit_date']; ?>
                                       & Doc_id=<?php echo $result['Doc_id']; ?>  & rn=<?php echo $result['Room_no']; ?>" style="display:block;"> &nbsp;  <i class="fa fa-edit"></i></a></td>

                                      <td><a href="delete.php?id=<?php echo $result['Pat_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-trash"></i></a></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
                 <br>
           

                 <form action="medical_info_insert.php">
                   <button type="submit"  class="insert" >Insert</button>
                 </form>
                  
                
              
          <h2 style="text-align:center; color:black;"><u>Covid_Ward</u></h2>

           <table border=2px style="width : 40%;" class="covid_ward">
                     <tr>
                         <th>Pat_id</th>
                         <th>Ward_id</th>
                         <th>Hos_id</th>
                         <th>Status</th>
                         <th>Vaccine</th>
                         <th colspan="2">Operation</th>
                
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
                                      <td><?php echo $result['Hos_id']; ?></td>
                                      <td><?php echo $result['Status']; ?></td>
                                      <td><?php echo $result['Vaccine']; ?></td>
                                      
                                      <td><a href="Covid_ward_update.php?pid=<?php echo $result['Pat_id']; ?> 
                                       & wid=<?php echo $result['Ward_id']; ?>  & did=<?php echo $result['Doc_id']; ?> & hid=<?php echo $result['Hos_id']; ?> 
                                       & st=<?php echo $result['Status']; ?> & vc=<?php echo $result['Vaccine']; ?> " style="display:block;"> &nbsp;  <i class="fa fa-edit"></i></a></td>

                                      <td><a href="delete.php?wid=<?php echo $result['Ward_id']; ?>" style="display:block;">&nbsp;<i class="fa fa-trash"></i></a></td>
                                      
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
                 </table>
                 <br>
           

                 <form action="covid_ward_insert.php">
                   <button type="submit"  class="insert" >Insert</button>
                 </form>
                 <br>
                  
                 <?php
                   
                 
                  // $total+=5;
                   while($total)
                   {
                     // echo "<br>";
                      $total--;
                       
                   }
                ?>
  




                 </body>
                 </html>
                 