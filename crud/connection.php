<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reasponsive3";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "connection ok";
}
else
{
    echo "connection false" .mysqli_connect_error();
}

?>