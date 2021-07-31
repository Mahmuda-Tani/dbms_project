<?php 
   
    error_reporting(0);
    $id= (isset($_POST['id']) ? $_POST['id'] : '');
    $con= new mysqli ("localhost", "root","","dbms_project");
    $query="select * from  covid_ward WHERE Hos_id='$id'";
    $xdata=mysqli_query($con,$query);
    $x=mysqli_num_rows($xdata);


    
    $query="select * from  covid_ward WHERE Status='cure' and Hos_id='$id'";
    $adata=mysqli_query($con,$query);
    $a=mysqli_num_rows($adata);


    $query="select * from  covid_ward WHERE Status='under treatment ' and Hos_id='$id' ";
    $bdata=mysqli_query($con,$query);
    $b=mysqli_num_rows($bdata);

    $query="select * from  covid_ward WHERE Status='dead' and Hos_id='$id'";
    $cdata=mysqli_query($con,$query);
    $c=mysqli_num_rows($cdata);



    
    $query="select * from  covid_ward WHERE Vaccine='yes' and Hos_id='$id'";
    $vydata=mysqli_query($con,$query);
    $vy=mysqli_num_rows($vydata);
    
    $query="select * from  covid_ward WHERE Vaccine='no' and Hos_id='$id'";
    $vndata=mysqli_query($con,$query);
    $vn=mysqli_num_rows($vndata);





    $query="select * from  covid_ward WHERE Vaccine='yes' and Status='dead' and Hos_id='$id'";
    $vyddata=mysqli_query($con,$query);
    $vyd=mysqli_num_rows($vyddata);
    

    $query="select * from  covid_ward WHERE Vaccine='no'and Status='under treatment' and Hos_id='$id'";
    $vncdata=mysqli_query($con,$query);
    $vnc=mysqli_num_rows($vncdata);




?>


<!DOCTYPE html>
<html lang="en">
<head>
 <title>Display</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <link rel="stylesheet" type="text/css" href="table.css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
 




<style>
       
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Cantora One";

  }

  body{
    background-image: linear-gradient(  #6e6d6d ,#d5d8dc,#6e6d6d);
    
       /* background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('bimg_3.jpg');*/
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%; 
  }

       .container_a{
           height:500px;
          
       }


  .extra_div{
    background: #625261;
    border: medium none;
    padding: 50px !important;
    border-radius: 3px;
    transition: 0.3s;
    width:800px;
    height:500px;
    margin-left:auto;
    margin-right:auto;
    box-shadow: 0 0 35px 0 #2D5C34;
    /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81); */
  

}


.extra_div2{
    background:  #625261;
    border: medium none;
    padding: 50px !important;
    border-radius: 3px;
    transition: 0.3s;
    width:800px;
    height:380px;
    margin-left:auto;
    margin-right:auto;
    box-shadow: 0 0 35px 0 #2D5C34;
    background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81);
  

}


.extra_div:hover{
   
  
   /* transform:translateY(-10px) ; */
   
}

.extra_div2:hover{
   
  
   /* transform:translatey(+10px) ; */
   
}



h3{
    font-size:0.9rem!important;
}
.tani{
    padding:150px;
    margin-left:auto;
    margin-right:auto;
}


table{
    border:1px;
    width: 500px!important;
    /* height:5px; */
}
td,th{
    text-align:center!important;
}
.info{
  
    width: 700px!important;
    margin-left:auto;
    margin-right:auto;
    /* border-width: 1px; */
     /* border-color: white;
    background-color:black;  */
    /* margin-top:26px; */
    /* border-collapse:separate;  */
    /* border-spacing:0 5px;  */
    


}
.info td{
    text-align:center!important;
    width:5px;
    background-color:rgb(232, 246, 247);
    border-width:3px;
}
.info th{
    background-color:#2C6245;
    border-width:3px;
}
.info tr{
    border-width:3px;
}

.heading
    {
        box-shadow: 0 0 25px 0 #2D5C34;
        /* background-image: linear-gradient( #7D9A81  ,#d5d8dc,#7D9A81); */
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

</style>
</head>
<body>

<br><br><br><br><br><br><br>
    
<div class="container">
  
 

    <br> <div class="heading"><h2>Covid-19 overview </h2></div><br>

    <div class="extra_div2">
  
        <table border="1" class="info">
           <th>Information</th> <th>Count</th>
           <tr>
           <td>Total number of Cured Patients in Your Hospital is </td><td><?php echo $a?></td>
           </tr>
           
           <tr>
           <td>Total number of Currently in treatment Patients in Your Hospital is </td><td><?php echo $b?></td>
           </tr>
           <tr>
           <td>Total number of Dead Patients in Your Hospital is </td><td><?php echo $c?></td>
           </tr>

           <tr>
           <td>Total number of  Patient who are given Vaccine in Your Hospital is </td><td><?php echo $vy?></td>
           </tr>

           <tr>
           <td>Total number of  Patient who are not given Vaccine in Your Hospital is </td><td><?php echo $vn?> </td>
           </tr>


          

        </table>
    </div> 
    <br>

   
</div>
 </body>
  </html>