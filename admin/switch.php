<?php
    $num = $_GET['num'];
    
    if($num == 1){
        echo "<script>window.location.href='../index.php?num=1';</script>";
    }else if($num == 0){
        echo "<script>window.location.href='../index.php?num=0';</script>";
    }else if($num == 2){
        echo "<script>window.location.href='../index.php?num=2';</script>";
    }