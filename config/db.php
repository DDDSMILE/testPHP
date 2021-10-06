<?php
    $connect = mysqli_connect('localhost', 'root','','php1fpt');
    if($connect){
        mysqli_query($connect, "SET NAMES 'UTF8");
        header("Content-type: text/html; charset=utf-8");
        mysqli_set_charset($connect, 'UTF8');
        // echo "ket noi thanh cong";
    } else{
        echo 'ket noi that bai';
    }
?>