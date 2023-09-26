<?php
include 'connect.php';

if(isset($_GET["id"])){
    $id = $_GET["id"];
    
    $sql = "DELETE FROM `task` WHERE id = $id";
    
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        header("Location: display.php"); 
        exit();
    } else {
        die(mysqli_error($con));
    }
}

mysqli_close($con);
?>
