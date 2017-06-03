<?php

require('./myConnect/connect.php');

header("content-type:text/html;charset=utf-8");

$sql = "select * from list order by id desc";
  
$res = mysql_query($sql);

while($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
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
                            
                        <?php foreach($rows as $k=>$v):?>
                            <li>
                                <img onclick="changethis(<?php echo $v['id'] ?>,<?php echo $v['isCom'] ?>,this)" class="left" src="./img/c0.png">
                                <p id = <?php echo $v['id'] ?> class="my_p"><?php echo $v['content'] ?></p>
                            </li>
                        <?php endforeach;?>
                          
                    </ul>
                    <div class="list-bottom">
                        <div class="list-bottom-left">3 item left</div>
                        <div class="list-bottom-right" id = "clear_completed">Clear completed</div>
                        <div>
                            <ul>
                                <li>Completed</li>
                                <li>Active</li>
                                <li>All</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    
    <script src="./js/index.js" type="text/javascript"></script>
    </body>
</html>