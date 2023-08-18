<?php
$title = $_GET['title'];
$type = $_GET['type'];
$link = $_GET['link'];
$ip = $_GET['ip'];
$time = $_GET['time'];
//防sql注入
$title = isset($_GET['title']) ? trim($_GET['title']) : '';
$type = isset($_GET['type']) ? trim($_GET['type']) : '';
$link = isset($_GET['link']) ? trim($_GET['link']) : '';
$ip = isset($_GET['ip']) ? trim($_GET['ip']) : '';
$time = isset($_GET['time']) ? trim($_GET['time']) : '';
if (empty($title) || empty($type) || empty($link)){
    echo 'hk';
    exit();
}else{
    require '../config.php';
    global $dbconfig;
    //连接数据库
    $dblink = mysqli_connect($dbconfig['dbhost'], $dbconfig['dbuser'], $dbconfig['dbpwd'], $dbconfig['dbname']);
    //判断是否链接成功
    if (!$dblink){
        echo 'sqlerror1';
        exit();
    }
    //sql写入语句
    $sql = "INSERT INTO output (title,type,time,ip,link) VALUES ('$title','$type','$time','$ip','$link')";
    $query = mysqli_query($dblink, $sql);
    if (!$query){
        echo 'sqlerror2';
        exit();
    }
    echo 'suc';
}