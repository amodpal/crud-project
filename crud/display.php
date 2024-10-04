<?php
session_start();
echo "<h1>WELCOME  ".$_SESSION['user_name'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
     body{
        background-color:#D071f9;
        padding: 0px;
        margin:0px;
     }
     h1{
      color:white;
      text-align:center;
      font-size:40px;
      background:black;
     }
     

     table{
        background-color:white;
     }
     .update, .delete{
        background:green;
        color:white;
        border-radius:5px;
        cursor: pointer;
        outline:none;
        border:0px;
        height:23px;
        width: 80px;
        font-weight:bold;
        margin-left:15px;
        margin-top:8px;
     }
     .dele{
        background: blue;
        color:white;
        border-radius:5px;
        cursor: pointer;
        outline:none;
        border:0px;
        height:23px;
        width: 80px;
        font-weight:bold;
        margin-left:15px;
        margin-top:8px;
     }

     .delete{
        background:red;
     }
     h2{
      color:black;
      text-align:center;
      width: 220px;
      margin:30px auto;
      background-color:yellow;
     }
     
     td {
      color:black;
      padding:10px;
      animation: bg 10s infinite;
     }

     h6
     {
        color:white;
        font-size:70px;
        margin-top:250px;
        text-align:center;
    box-shadow: 
    -10px -10px 15px rgba(255,255,255,0.5),
    10px 10px 15px rgba(70,70,70,0.12);
     }


     
     @keyframes bg
        {
            0%
            {
                background-color: #6666ff;
            }
            25%
            {
                background-color: #3398db;
            }
            50%
            {
background-color: skyblue;
            }
            75%
            {
background-color: #3398db;
            }
            100%
            {
background-color: #6666ff;
            }
        }

        th
        {
        
background-color: #6666ff;
font-size:20px;
        }
    </style>
</head>




<?php
include("connection.php");
error_reporting(0);

 $usern = $_SESSION['user_name'];

 if($usern == true)
 {

 }

 else
 {
    header('location:login.php');
 }
$query = "SELECT * FROM form1";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
//echo $total;

if($total != 0)
{
    ?>
          <h2>Display all recodes</h2>
          <center>
          <table border="3" width="100%">
            <tr>
            <th width="3%">ID</th>
            <th width="8%">Image</th>
<th width="8%"><p>First name</p></th>
<th width="8%">Last name</th>
<th width="4%">Gender</th>
<th width="19%">Email</th>
<th width="10%">Phone</th>
<th width="6%">caste</th>
<th width="22%">Address</th>
<th width="41%">OPERATION</th>
</tr>

          


<?php
    //echo "table has records";
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['id']."</td>

        <td><img src= '".$result['form3']."' height='100px' width='100%' required></td>

        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
         <td>".$result['caste']."</td>
        <td>".$result['address']."</td>
        <td><a href='update.php?id= $result[id]'><input type='submit' value='Update' class='update' ></a>


        <a href='delete.php?id= $result[id]'><input type='submit' value='Dlete' class='delete' onclick = 'return a()'></a>
                 

                 <a href='logout.php?id= $result[id]'><input type='submit' value='logout' class='dele' onclick = 'return b()'></a></td>
                 </tr>";
    }
}
else
{
 echo "<h6>no recorder found</h6>";
}
?>
</table>
</center>
</body>

<script>

    function a()
    {
        return confirm('Are you sure you want delete this data record? ');
    }


    function b()
    {
        return confirm('Are you sure you want logout to data base? ');
    }
    </script>


