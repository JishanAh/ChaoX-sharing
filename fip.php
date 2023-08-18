<?php
$ip = $_GET['ip'];
require './config.php';
//全局变量
global $dbconfig;
//连接数据库
$dblink = mysqli_connect($dbconfig['dbhost'], $dbconfig['dbuser'], $dbconfig['dbpwd'], $dbconfig['dbname']);
//判断是否链接成功
if (!$dblink) {
    echo "<script>bT('error');</script>";
    die('数据库连接失败');
}
$selsql = "SELECT ip FROM fip WHERE ip = '$ip'";
$result = mysqli_query($dblink, $selsql);
if (mysqli_num_rows($result) > 0) {
    // 数据库中存在查询的内容
    echo 'true';
} else {
    // 数据库中不存在查询的内容
    echo 'false';
}
mysqli_close($dblink);