<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Class";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    echo "Connnction Error. ".$conn->connect_error;
}

?>