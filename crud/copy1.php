<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css"/>
</head>
<body>
    

  <div class="center">
    <h1>login</h1>
    <form method="post" action="#" autocomplete="off">
    <div class="form">
    
          <input type="text" placeholder="username" class="textfield" name="email">
          <input type="password" class="textfield" name="pwd" placeholder="password">
          <div class="forgetpassword" onclick="message()"><a href="recover.php" class="link">forget password ?</a></div>
          <input type="submit" name="login" value="login" class="btn">
          <div class="signup">New Member ?<a href="form.php" class="link">sign up here</a></div>

    </div>
  </div>
</form>
  
<script src="login.js"></script>
</body>
</html>

<?php
    include("connection.php");

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $pwd   = $_POST['pwd'];

        $query = "SELECT * FROM form1 WHERE email= '$email' && pwd = '$pwd' ";

        $data = mysqli_query($conn,$query);
         
        $total = mysqli_num_rows($data);
        //echo $total;

        
if($total == 1)
{    
  $_SESSION['user_name'] = $email;
  header('location:website.php');
}
else
{       
  echo "<script>alert('plz enter valid email and password !')</script>";
}

        
 

    }
    ?>