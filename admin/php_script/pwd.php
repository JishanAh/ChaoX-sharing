<?php
$pwd = $_GET['pwd'];
if (empty($pwd)){
    echo 'hk';
    exit();
}
$pwd_md5 = md5($pwd);
$jsonf = file_get_contents('../user.json');
$de_json = json_decode($jsonf, true);
$de_json['pwd'] = $pwd_md5;
$en_json = json_encode($de_json);
file_put_contents('../user.json', $en_json);