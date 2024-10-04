<?php include('connection.php');



session_start();
//echo "welcome ".$_SESSION['user_name'];



$usern = $_SESSION['user_name'];

 if($usern == true)
 {

 }

 else
 {
    header('location:login.php');
 }



$id =  $_GET['id'];
$query = "SELECT * FROM form1 where id='$id'";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if($result)
{
    //echo "haa";
}
else
{
    //echo "nahi";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form with user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
    <div class="title">
        Update form
    </div>
      <form action="#" method="POST">
    <div class="form">





        <div class="input_field">
            <lable>First name</lable>
            <input type="text" value="<?php  echo $result['fname'];?>" class="input" name="fname">
        </div>
        <div class="input_field">
            <lable>Last name</lable>
            <input type="text" value="<?php  echo $result['lname'];?>" class="input" name="lname">
        </div>
        <div class="input_field">
            <lable>Password</lable>
            <input type="password" value="<?php  echo $result['pwd'];?>" class="input" name="pwd">
        </div>
        <div class="input_field">
            <lable>Cpassword</lable>
            <input type="password" value="<?php  echo $result['cpwd'];?>" class="input" name="cpwd">
        </div>
        <div class="input_field">
            <lable>Gender</lable>
            <div class="selectbox">

            <select name="gender" required>
                <option value="NOT SELECTED">Select</option>
                <option value="male"

                <?php
                if($result['gender'] == 'male')
                {
                    echo "selected";
                }
                ?>
                >
                    
                male</option>
                <option value="female"
                
                <?php
                if($result['gender'] == 'female')
                {
                    echo "selected";
                }
                ?>                
                >
                
                
                female</option>
                </select>
</div>
        </div>
        <div class="input_field">
            <lable>Email Address</lable>
            <input type="text" value="<?php  echo $result['email'];?>" class="input" name="email">
        </div>
        <div class="input_field">
            <lable>Phone Number</lable>
            <input type="number" value="<?php  echo $result['phone'];?>" class="input" name="phone">
        </div>
                 
        <div class="input_field">
            <lable style="margin-right: 100px;">Caste</lable>
            <input type="radio"  name="obc" value="general" required
            
            <?php
            if($result['caste'] == "general")
            {
                echo "checked";
            }
            ?>
            
            ><lable style="margin-left:5px;">General</lable>
            <input type="radio"  name="obc" value="obc" required
            
            <?php
            if($result['caste'] == "obc")
            {
                echo "checked";
            }
            ?>
            
            ><lable style="margin-left:5px;">OBC</lable>
            <input type="radio"  name="obc" value="sc" required
            
            <?php
            if($result['caste'] == "sc")
            {
                echo "checked";
            }
            ?>
            
            ><lable style="margin-left:5px;">SC</lable>
            <input type="radio"  name="obc" value="st" required
            
            <?php
            if($result['caste'] == "st")
            {
                echo "checked";
            }
            ?>
            
            
            ><lable style="margin-left:5px;">ST</lable>
        </div>

        <div class="input_field">
            <lable>Address</lable>
            <textarea name="address" required><?php echo $result['address'];?></textarea>
        </div>

                    
        <div class="input_field terms">
          <lable class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </lable>
          <P>Agree to terms and condition<P>
        </div>
        
        <div class="input_field">
            <input type="submit" name="update" value="Update" class="btn">
        </div>

    </div>
</form>


</div>

</body>
</html>

<?php
if(isset($_POST['update']))
{
            $name = $_POST['fname'];
            $lname = $_POST['lname'];
            $pwd   = $_POST['pwd'];
            $cpwd  = $_POST['cpwd'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $caste = $_POST['obc'];
            $add   = $_POST['address'];

                   
$query = "update form1 set fname='$name',lname='$lname',pwd='$pwd',cpwd='$cpwd',gender='$gender',email='$email',phone='$phone',caste='$caste',address='$add' WHERE id='$id'";
                         

           $data = mysqli_query($conn,$query);

           if($data)
           {
            echo "<script>alert('ok updated to data')</script>";
            ?>

<meta http-equiv = "refresh" content = "0; url = http://localhost:8080/webly/crud/display.php" />

            
<?php

           }
           else
           {
             echo "nahi";
           }
        
    }
?>