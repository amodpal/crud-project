<?php include('connection.php');
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
        Registration form
    </div>
      <form action="#" method="POST" enctype="multipart/form-data">
    <div class="form">

    <div class="input_field">
    <lable>upload Image</lable>
    <input type="file" name="pic" style="width:100%;">
        </div>
        

        <div class="input_field">
            <lable>First name</lable>
            <input type="text" class="input" name="fname">
        </div>

        <div class="input_field">
            <lable>Last name</lable>
            <input type="text" class="input" name="lname">
        </div>
        <div class="input_field">
            <lable>Password</lable>
            <input type="password" class="input" name="pwd">
        </div>
        <div class="input_field">
            <lable>Cpassword</lable>
            <input type="password" class="input" name="cpwd">
        </div>
        <div class="input_field">
            <lable>Gender</lable>
            <div class="selectbox">
            <select name="gender">
                <option value="NOT SELECTED">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
</div>
        </div>
        <div class="input_field">
            <lable>Email Address</lable>
            <input type="text" class="input" name="email">
        </div>
        <div class="input_field">
            <lable>Phone Number</lable>
            <input type="number" class="input" name="phone">
        </div>


        <div class="input_field">
            <lable style="margin-right: 100px;">Caste</lable>
            <input type="radio"  name="obc" value="general" required><lable style="margin-left:5px;">General</lable>
            <input type="radio"  name="obc" value="obc" required><lable style="margin-left:5px;">OBC</lable>
            <input type="radio"  name="obc" value="sc" required><lable style="margin-left:5px;">SC</lable>
            <input type="radio"  name="obc" value="st" required><lable style="margin-left:5px;">ST</lable>
        </div>



        <div class="input_field">   
            <lable>Address</lable>
            <textarea name="address"></textarea>
        </div>

        <div class="login">Old Member ?<a href="login.php" class="link">login here</a></div>
        <div class="input_field">
            <input type="submit" name="submit" value="register" class="btn">
        </div>
        


    </div>
</form>


</div>

</body>
</html>

<?php
if(isset($_POST['submit']))
{



$filename = $_FILES["pic"]["name"];
$tem_file =  $_FILES["pic"]["tmp_name"];
$folder = "image/" .$filename;
move_uploaded_file($tem_file, $folder);



            $name = $_POST['fname'];
            $lname = $_POST['lname'];
            $pwd   = $_POST['pwd'];
            $cpwd  = $_POST['cpwd'];
           $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $caste = $_POST['obc'];
            $add   = $_POST['address'];



           if($folder != "" && $name != "" && $lname != "" && $pwd != "" && $cpwd != "" && $gender != "" && $email != "" && $phone != "" && $caste != "" && $add != "")
           {
           $sql = "INSERT INTO form1 (std_image,fname,lname,pwd,cpwd,gender,email,phone,caste,address) VALUES('$folder','$name','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$add')";
                   
           $data = mysqli_query($conn,$sql);

           if($data)
           {
             echo "<script>alert('ok data to send data base')</script>";
           }
           else
           {
            echo "<script>alert('Faield to data!')</script>";
           }
           ?>
           
<meta http-equiv = "refresh" content = "0; url = http://localhost:8080/webly/crud/copy1.php" />
           <?php
        }
        else
        {
            echo "<script>alert('plz fill all box to form!')</script>";
        }
        }
?>