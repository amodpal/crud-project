<?php
include("connection.php");

$i =  $_GET['id'];

$qu = "DELETE FROM form1 WHERE id = '$i'";
$data = mysqli_query($conn,$qu);

if($data)
{
    echo "<script>alert('click ok data delete!')</script>";
}
?>

<meta http-equiv = "refresh" content = "0; url = http://localhost:8080/webly/crud/display.php" />

<?php
            
?>