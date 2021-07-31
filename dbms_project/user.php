<?php
    $con= new mysqli ("localhost", "root","","dbms_project");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <title>Regional Covid-19 Tracking System</title>


    <style>
    
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: "Cantora One";
    }
    body{
       /* background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 ); */
       
       /* background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('bimg_3.jpg');
       background-repeat: no-repeat;
       height:auto;
       background-size: 100% 100%; */
       background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );

    }

    .table{
        background-color: rgb(232, 246, 247);
        margin-left: auto;
        margin-right: auto;
        width:400px;
        height:100px;
        padding:15px;
        box-shadow: 0 0 55px 0 #2D5C34;
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

    p{

        font-size: 1.1rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:600;
        color:#001a1a;
        margin-top: -35px;
        margin-left: 300px;

    }

    .q0,.q1,.q2,.q3,.q4,.q5,.q6,.q7,.qx,.q8,.q9{
        background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
        width:950px;
        height:1000px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 25px 0 #2D5C34;
      
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
        padding:15px;
        /* box-shadow: 0 0 25px 0 #1E6729; */
    }

    .form{
        margin-top: 90px;
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
    .dn{
       
        background-color:red;
        height:40px;
        width:500px;
        margin-left:400px;
        margin-top:-35px;
        display:none;
    }
    .dy{
        background-color:#2c3e50;
        height:40px;
        width:500px;
        margin-left:400px;
        margin-top:-35px;
      
       
    }
    .dy h5{
        font-size: 1.3rem;
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:500;
        color:#001a1a;
    }

  #option{
     width:130px;
     height:30px;
    
    
  }
  .op{
    box-shadow: 0 0 15px 0 #1E6729;
  }

   
    </style>

</head>
<body>
     




<?php
     

     $query="select count(Pat_id) as ct from  covid_ward ";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $t=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward  where Status='cure';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $a=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward where Status='under treatment';" ;
            
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $b=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward where Status='dead';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $c=$result['ct'];
     
 
     $query="select count(Pat_id) as ct from  covid_ward where Vaccine='yes';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $vy=$result['ct'];
      
 
     $query="select count(Pat_id) as ct from  covid_ward where Vaccine='no';";
     $data=mysqli_query($con,$query);
     $result=mysqli_fetch_assoc($data);
     $vw=$result['ct'];
 
  
 
 
 
     ?>
     <br>
       
   <div class="q0">
       <br>
         
       <div class="heading"><h2>Covid Condition Of Bangladesh</h2></div><br>

         <table border="2" class="table" id="t1">
            <th> Informations</th>
            <th>Count</th>
 
            <tr>
            <td>Total number of Covid Patients</td><td> <?php echo $t?></td>
            </tr>
 
            <tr>
            <td>Total number of Cured Patients</td><td> <?php echo $a?></td>
            </tr>
            
            <tr>
            <td>Total number of Currently in treatment</td><td> <?php echo $b?></td>
            </tr>
            <tr>
            <td>Total number of Dead</td><td><?php echo $c?></td>
            </tr>
 
            <tr>
            <td>Total number of  Patient who are given Vaccine</td><td>  <?php echo $vy?></td>
            </tr>
 
            <tr>
            <td>Total number of  Patient who are waiting for vaccine</td><td> <?php echo $vw?></td>
            </tr>
 
 
           
 
         </table>
   </div>
 
<br>


     
     <?php
        
        $query="select Area,count(Pat_id) as 'Num' from hospital inner join covid_ward 
                using(Hos_id) where Status='under treatment' group by Area order by count(Pat_id) desc;";
 
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>



<div class="qx">
     <br>
     <div class="heading"><h2>Top 5 District having most Covid-19 Patients</h2></div><br>
       <table border=2px style="width : 40%;"class="table">
       <tr>
           <th>Area</th>      
           <th>num of covid patient</th>
          
   
       </tr>
      <?php
        
        $t=0;

       if($total !=0)
       {
           while($result=mysqli_fetch_assoc($data))
           {  
               $t++;
               if($t>5)break;
               ?>

               <tr>
                  
                  <td><?php echo $result['Area']; ?></td> 
                  <td><?php echo $result['Num']; ?></td> 
                  
                </tr>
                
            <?php
            
           }
       }
      

   ?>

    </table>
    <br>

    </div>
    <br>




     


    
     <?php
        
       $query="select Hos_id,Hos_name,Hos_add,Hos_ph,count(Pat_id) as 'Num_of_recovery' from hospital inner join covid_ward 
               using(Hos_id) where Status='cure' group by Hos_id order by count(Pat_id) desc;";

       $data=mysqli_query($con,$query);
       $total=mysqli_num_rows($data);

     ?>
     
     <div class="q1">
     <br>
     <div class="heading"><h2>Top 3 hospital having  <span>most Recovery</span> of Covid-19 Patients</h2></div><br>
       <table border=2px style="width : 40%;"class="table">
       <tr>
           <th>Hos_id</th>
           <th>Hos_name</th>
           <th>Hos_add</th>
           <th>Hos_ph</th>
           <th>num_of_recovery</th>
          
   
       </tr>
      <?php
        
        $t=0;

       if($total !=0)
       {
           while($result=mysqli_fetch_assoc($data))
           {  
               $t++;
               if($t>3)break;
               ?>

               <tr>
                  <td><?php echo $result['Hos_id']; ?></td>
                  <td><?php echo $result['Hos_name']; ?></td>
                  <td><?php echo $result['Hos_add']; ?></td>
                  <td><?php echo $result['Hos_ph']; ?></td> 
                  <td><?php echo $result['Num_of_recovery']; ?></td> 
                  
                </tr>
                
            <?php
            
           }
       }
      

   ?>

    </table>
    <br>

    </div>
    <br>


    <?php
        

        $query="select Hos_id,Hos_name,Hos_add,Hos_ph,count('Pat_id') as Num_of_Covid_patient from hospital 
               inner join covid_ward using(Hos_id) where Status='under treatment' group by Hos_add order by count(Pat_id) desc;";
               

 
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>
      
      <div class="q2">
      <br>
       <div class="heading"><h2>Top 3 hospital having most Covid-19 Patients</h2></div><br>
        <table border=2px style="width : 40%;"class="table">
        <tr>
            <th>Hos_id</th>
            <th>Hos_name</th>
            <th>Hos_add</th>
            <th>Hos_ph</th>
            <th>num_of_covid_patient</th>
           
    
        </tr>
       <?php
        
        $t=0;

        if($total !=0)
        {   

            while($result=mysqli_fetch_assoc($data))
            {   
                $t++;
                if($t>3)break;
                ?>
 
                <tr>
                   <td><?php echo $result['Hos_id']; ?></td>
                   <td><?php echo $result['Hos_name']; ?></td>
                   <td><?php echo $result['Hos_add']; ?></td>
                   <td><?php echo $result['Hos_ph']; ?></td> 
                   <td><?php echo $result['Num_of_Covid_patient']; ?></td> 
                   
                 </tr>
                 
             <?php
             
            }
        }
       
 
    ?>
 
     </table>
  </div>

  <br>

   
     <?php
        

        $query="select Hos_id,Hos_name,Hos_add,Hos_ph,count('Pat_id') as Num from hospital 
               inner join covid_ward using(Hos_id) where Vaccine='yes' group by Hos_id order by count(Pat_id) desc;";
               

 
         $data=mysqli_query($con,$query);
         $total=mysqli_num_rows($data);
 
      ?>

      
      <div class="q3">
         
       <br>

       <div class="heading"><h2>Num of patient taken vaccine in each hospital</h2></div><br>
        <table border=2px style="width : 40%;"class="table">
        <tr>
            <th>Hos_id</th>
            <th>Hos_name</th>
            <th>Hos_add</th>
            <th>Hos_ph</th>
            <th>Num of Patient taken vaccine</th>
           
    
        </tr>

       <?php
        
        if($total !=0)
        {
            while($result=mysqli_fetch_assoc($data))
            {
                ?>
 
                <tr>
                   <td><?php echo $result['Hos_id']; ?></td>
                   <td><?php echo $result['Hos_name']; ?></td>
                   <td><?php echo $result['Hos_add']; ?></td>
                   <td><?php echo $result['Hos_ph']; ?></td> 
                   <td><?php echo $result['Num']; ?></td> 
                   
                 </tr>
                 
             <?php
             
            }
        }
       
 
    ?>
 
     </table>
 
     </div>
     <br>

    
     <div class="q4">
     <br>
      
     <div class="heading"><h2>Enter Hospital id to see available doctors information who works there</h2></div>
     <form action="user_q4.php" method="post" class="form" >
       <table class="table_s">
         <tr>
             <td><lebel>Enter Hospital Id: </td>
             <td><input type="text" name="id"></input>
             <td> <button type="submit" class="btn">Result</button></td>
         </tr>
      </table>
     </form>

    </div>

    <br>
    <div class="q5">
    <br>
    <div class="heading"><h2>Enter doctor Name to see his Detail</h2></div>
     <form action="user_q5.php" method="post" class="form" >
       <table class="table_s">
         <tr>
             <td><lebel>Enter doctor name: </td>
             <td><input type="text" name="nm"></input>
             <td> <button type="submit" class="btn">Result</button></td>
         </tr>
      </table>
     </form>

    </div>

    <br>

    <div class="q6">  
    <br>
    <div class="heading"><h2>Enter Area name to know Overall covid Condition of that Area</h2></div>
      <form action="user_q6.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter Area Name: </td>
              <td><input type="text" name="ar"></input>
              <td> <button type="submit" class="btn">Result</button></td>
          </tr>
       </table>
      </form>
 
     </div>

     <br>


     <?php
         

         error_reporting(0);

         $con= new mysqli ("localhost", "root","","dbms_project");
         $id= (isset($_POST['id']) ? $_POST['id'] : '');
         $query="select Availability from doctor where Doc_id=(select Doc_id from patient where Pat_id='$id');";
         $data=mysqli_query($con,$query);
         $result=mysqli_fetch_assoc($data);
         $c=$result['Availability'];
     
   ?>

     <div class="q7">
         <br>
      
     <div class="heading"><h2>Enter patient id to know the availability time of your provided doctor </h2></div>
      <form action="" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter Patient id: </td>
              <td><input type="text" name="id"></input>
              <td> <button type="submit" class="btn">Result</button></td>
          </tr>
       </table>
      </form>


 
      <button id="myBtn" class="btn" style="margin-left: 290px; margin-top:-232px">See Result</button>

      <div class="dn" id="demo">
         <h5> The availability of Your required doctor :  <?php echo $c?></h5>
      </div>

       <br>

    
    

    </div>

<br>

  
    <div class="q8">  
    <br>
    <div class="heading"><h2>Know the overall covid condition for a particular gender. </h2></div>
      <form action="user_q8.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Enter gender: </td>
              <td><input type="text" name="gr"></input>
              <td> <button type="submit" class="btn">Result</button></td>
          </tr>
       </table>
      </form>
 
     </div>

     <br>

     
    <div class="q9">  
    <br>
    <div class="heading"><h2>Know the overall covid condition for a particular age range. </h2></div>
      <form action="user_q9.php" method="post" class="form" >
        <table class="table_s">
          <tr>
              <td><lebel>Choose age range: </td>

             <td> 
               <select name="op" id="option">
               <option value="71-80">71-80</option>
               <option value="61-70">61-70</option>
               <option value="51-60">51-60</option>
               <option value="41-50">41-50</option>
               <option value="31-40">31-40</option>
               <option value="21-30">21-30</option>
               <option value="11-20">11-20</option>
               <option value="1-10">1-10</option>
               </select>
            </td>
              <td> <button type="submit" class="btn">Result</button></td>
          </tr>
       </table>
      </form>
 
     </div>

     <br>









    <br>

     <script >
          document.getElementById("myBtn").addEventListener("click", function() {
           document.getElementById("demo").classList.remove("dn");
           document.getElementById("demo").classList.add("dy");
       });

   </script>
    
</body>
</html>