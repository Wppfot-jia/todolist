<?php
    require('../myConnect/connect.php');
    
    header("content-type:text/html;charset=utf-8");
    
    $list = $_POST['list'];

    $sql = "insert into list values('','{$list}','0')";
    
    $res = mysql_query($sql);

    if(!$res){
	    echo "<script>alert('添加失败！');
	    window.location.href='../index.php';</script>";
	
    }else{
	    echo "<script>window.location.href='../index.php';</script>";
    }

?>