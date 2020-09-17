<?php 

    $connect = mysqli_connect('localhost', 'root', '', 'assignment3');

    if($connect){
        //echo "Database connected successfully";
    }else{
        die("Database connection failed");
    }
?>  