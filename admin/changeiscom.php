<?php
    require('../myConnect/connect.php');
    
    header("content-type:text/html;charset=utf-8");
    
    $id = $_GET['id'];
    
    $sql = "update list set isCom = 1 where id='{$id}'";

    $res = mysql_query($sql);

    



    



    
    