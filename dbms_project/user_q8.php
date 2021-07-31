<?php
    $con= new mysqli ("localhost", "root","","dbms_project");
    $gr= (isset($_POST['gr']) ? $_POST['gr'] : '');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>user</title>
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <meta name="viewport" content="width=device-width, initial-scale=1">
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

    
    .q8{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:950px;
        height:550px;
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
        padding:15px;
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
     

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $t=$result['ct'];
    

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr' and Status='cure';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $a=$result['ct'];
    

     $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr'
            and Status='under treatment';";

    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $b=$result['ct'];
    

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr' and Status='dead';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $c=$result['ct'];
    

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr' and Vaccine='yes';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $vy=$result['ct'];
     

    $query="select count(Pat_id) as ct from covid_ward inner join patient using (Pat_id) where Gender='$gr'and Vaccine='no';";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    $vw=$result['ct'];

 



    ?>
      
  <div class="q8">
        <br><div class="heading"><h2>Covid Condition of <?php echo $gr?> patients in Bangladesh</h2></div><br>
        <table border="2" class="table">

           <th>Information</th>
           <th>Count</th>

           <tr>
           <td>Total number of <php echo $gr ?> Covid Patient</td><td> <?php echo $t?></td>
           </tr>

           <tr>
           <td>Total number of <php echo $gr ?> Cured Patient</td><td> <?php echo $a?></td>
           </tr>
           
           <tr>
           <td>Total number of <php echo $gr ?>Currently in treatment patient</td><td> <?php echo $b?></td>
           </tr>
           <tr>
           <td>Total number of <php echo $gr ?> Dead patinet</td><td><?php echo $c?></td>
           </tr>

           <tr>
           <td>Total number of <php echo $gr ?> Patient who are given Vaccine</td><td>  <?php echo $vy?></td>
           </tr>

           <tr>
           <td>Total number of <php echo $gr ?> Patient who are waiting for vaccine</td><td> <?php echo $vw?></td>
           </tr>


          

        </table>
  </div>

</body>
</html>