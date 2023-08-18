<?php
$fip = $_GET['fip'];
require '../../config.php';
global $dbconfig;
//连接数据库
$dblink = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['pwd'], $dbconfig['dbname']);
if (!$dblink) {
    echo 'sqlerror1';
    exit();
}
$did = mysqli_real_escape_string($dblink, $fip); // 转义 $did，防止 SQL 注入
$sql = "INSERT INTO fip (ip) VALUES ('$fip')";
$query = mysqli_query($dblink, $sql);
if ($query) {
    echo 'suc'; // 成功
} else {
    echo 'sqlerror2'; // 失败
}
