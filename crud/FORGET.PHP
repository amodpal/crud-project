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
    
          <input type="EMAIL" placeholder="username" class="textfield" name="email">
          <input type="submit" name="login" value="login" class="btn">

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
        $query = "SELECT * FROM form1 WHERE email= '$email' ";

        $data = mysqli_query($conn,$query);
         
        $total = mysqli_num_rows($data);
        
        if ($total == 1) {
         
         header('location:pass_for.php');

        }
        else {
            echo "nahi";
        }

        


        
 

    }
    ?>