<?php
include './connection.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id =$id";

   $result = $conn->query($sql);

    if(true){
        header('location: frontpage.php');
    }else{
        echo "Delete error";
    }
}
?>
