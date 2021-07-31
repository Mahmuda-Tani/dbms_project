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
       background-repeat: no-repeat;
       width:100%;
       height:100vh;

    }

    .table{
        background-color: rgb(232, 246, 247);
        margin-left: auto;
        margin-right: auto;
        width:400px;
        height:100px;
        padding:15px;
    }
   #t1{
       width:600px;
       height:150px;
     
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
        width:600px;
    }
    .heading h2{
       
        font-size: 1.1rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:600;
        color:#001a1a;
       
    }

    

    .q5{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:650px;
        height:380px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 25px 0 #2D5C34;
        margin-top:100px;
      
    }

    .btn{
        border:2px;
        border-radius:0px;
        /* background-color:#A89D93; */
        background-image: linear-gradient( #64645B  ,#5B855B,#64645B);
        box-shadow: 0 0 15px 0 #1E6729;
        width:100px;
        height:30px;

    }


    .table_s{
      
        margin-left: auto;
        margin-right: auto;
        width:400px;
        height:100px;
        padding:2px;
        margin-top:-30px;
        box-shadow: 0 0 25px 0 #1E6729;
    }

    .form{
        margin-top: 50px;
        margin-right: auto;
       
    }
    label{
        /* font-size: 1.2rem; */
        line-height: 1.2;
        word-spacing: 1px;
        font-weight:500;
        color:#001a1a;
        box-shadow: 0 0 15px 0 #1E6729;
       
     
    }
    input{
      
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:500;
        color:#001a1a;
        width:120px;
        box-shadow: 0 0 15px 0 #1E6729;
    }

</style>

<body>
   
     <?php
        
        $nm= (isset($_POST['nm']) ? $_POST['nm'] : '');
        $query="select * from doctor where Doc_name LIKE '%$nm%';";   
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>
      
      <div class="q5">
        <br>
      <div class="heading"><h2>Doctors list named <?php echo  $nm?></h2></div><br>
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
<br>


    
  <div>
      <br><br>
      <div class="heading " style="width:900px;"><h2 style="width:900px;">Enter Hospital id of Your Doctor see Other doctors information working at the same Hospital</h2></div>
      <form action="user_q4.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter Hospital Id: </td>
              <td><input type="text" name="id"></input>
              <td> <button type="submit" class="btn">Submit</button></td>
          </tr>
       </table>
      </form>
 
     </div>



     


</body>
</html>