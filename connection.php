<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "demo";

$conn = new mysqli($host, $user, $pass, $db);   
if ($conn->connect_error) {
    die("". $conn->connect_error);
}
else{
    $sql = "connetion successfully connected";
}

$con = mysqli_connect($host, $user, $pass, $db);

if($con){
    echo "Database connected successfully";
}
else{
    echo "Data base not connected successfully";
}

?>

