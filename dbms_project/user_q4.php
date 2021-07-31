<?php
    $con= new mysqli ("localhost", "root","","dbms_project");
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>user</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <!-- <link rel="stylesheet" type="text/css" href="table.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

</head>

<style>

*{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
 
    }
    body{
       background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );
       height:100vh;
       width:100%;
       background-repeat: no-repeat;

    }

    
    .q4{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:950px;
        height:500px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 55px 0 #2D5C34;
        margin-top:100px;
      
    }


    .table{
        background-color: rgb(232, 246, 247);
        margin-left: auto;
        margin-right: auto;
        margin-top:100px;
        width:400px;
        height:100px;
        padding:10px;
        box-shadow: 0 0 55px 0 #2D5C34;
    }
  


    th,td{
        text-align:center;
    }


    .heading
    {
        box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
        /* background-color:#b3b3b3; */
        margin-left: auto;
        margin-right: auto;
        padding:1px;
        height:35px;
        text-align:center;
        width:800px;
       
    }
    .heading h2{
       
        font-size: 1.1rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:600;
        color:#001a1a;
    }



 



</style>

<body>
   
     <?php
        
        $id= (isset($_POST['id']) ? $_POST['id'] : '');
      
        $query="select * from doctor where Hos_id='$id';";   
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>

      <br><br>
      
      <div class="q4">

      <div class="heading"><h2>Doctors Detail of your required hospital</h2></div><br>
        <br>
         <table border=2px style="width : 40%;" class="table">
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
  </div>

</body>
</html>