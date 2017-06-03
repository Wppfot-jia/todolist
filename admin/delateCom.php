<?php
    require('../myConnect/connect.php');
    
    header("content-type:text/html;charset=utf-8");

    $sql = "delete from list where isCom = 1";

    $res = mysql_query($sql);

    echo "<script>window.location.href='../index.php';</script>";