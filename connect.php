<?php
    $con = new mysqli("localhost","root","","crudtask");

    if(!$con){
        die(mysqli_error($con));
    }
?>