<?php
require('./myConnect/connect.php');

header("content-type:text/html;charset=utf-8");

$num = $_GET['num'];





//获取所有的列表
$sqlall = "select * from list order by id desc";
  
$resall = mysql_query($sqlall);

while($row = mysql_fetch_assoc($resall)){
    $rows[] = $row;
}

//获取未完成的列表
$sqlzero = "select * from list where isCom = 0 order by id desc";

$reszero = mysql_query($sqlzero);

$total = mysql_num_rows($reszero);

while($rowzero = mysql_fetch_assoc($reszero)){
    $rowszero[] = $rowzero;
}

//获取已完成的列表
$sqlone = "select * from list where isCom = 1 order by id desc";

$resone = mysql_query($sqlone);

while($rowone = mysql_fetch_assoc($resone)){
    $rowsone[] = $rowone;
}

$myrow = $rows;

if($num == 0){
    $myrow = $rowszero;
}else if($num == 1){
    $myrow = $rowsone;
}else if($num == 2){
    $myrow = $rows;
}
//var_dump($rows);
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="./css/index.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <!--顶部单独放这里-->
        <div class="div-top">
            <div class="top-left">Result</div>
            <img src="./img/yun.png"></img>
            <div class="top-right">
                <a href="#">Edit in JSFiddle</a>
            </div>
        </div>
        
        <div class="contain">
            <div class="top">todos</div>
            
            <div class="bottom">
                <div class="bottom-top">
                    <div class="bottom-left" onclick="select()">
                        <img id="img_select" src="./img/l1.png">
                    </div>
           
               

                    <div>
                        <form action="./admin/insertController.php" method="post">
                            <input type="text" name="list" value="" placeholder="What needs to be done?">
                            <!-- <input type="submit" value="提交"> -->
                        </form>
                    </div>
                </div>
                    
                <div class="bottom-list">
                    <ul class="content-list">
                            
                        <?php foreach($myrow as $k=>$v):?>
                            <li>
                                <a href="./admin/changeiscom.php?id=<?php echo $v['id'];?>"> <img onclick="changethis(<?php echo $v['id'] ?>,this)" class="left" src="./img/c0.png"><a>
                                <p id = <?php echo $v['id'] ?> class="my_p"><?php echo $v['content'] ?></p>
                            </li>
                        <?php endforeach;?>
                          
                    </ul>
                    <div class="list-bottom">
                        <div class="list-bottom-left"><?php echo $total ?> item left</div>
                        <a href="./admin/delateCom.php"><div class="list-bottom-right" id = "clear_completed">Clear completed</div>
                        <div></a>
                            <ul>
                                <a href="./admin/switch.php?num=1"><li>Completed</li></a>
                                <a href="./admin/switch.php?num=0"><li>Active</li></a>
                                <a href="./admin/switch.php?num=2"><li>All</li></a>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    
    <script src="./js/index.js" type="text/javascript"></script>
    </body>
</html>