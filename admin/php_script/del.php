<?php
$did = $_GET['id'];
$did = intval($did); // 将 $did 转换为整数
require '../../config.php';
global $dbconfig;
//连接数据库
$dblink = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['pwd'], $dbconfig['dbname']);
if (!$dblink){
    echo 'sqlerror1';
    exit();
}
$did = mysqli_real_escape_string($dblink, $did);
$sql = "DELETE FROM output WHERE id = $did";
$query = mysqli_query($dblink, $sql);
if ($query){
    echo 'suc'; // 删除成功
} else {
    echo 'sqlerror2'; // 删除失败
}
