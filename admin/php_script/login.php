<?php
$username = $_GET['username'];
$password = $_GET['password'];
$sj = $_GET['sj'];
$md5_pwd = md5($password);
$jsonf = file_get_contents('../user.json');
$de_json = json_decode($jsonf, true);
if ($md5_pwd === $de_json['pwd'] && $username === $de_json['username']){
    $hash_data = password_hash($sj, PASSWORD_DEFAULT);
    $de_json['str'] = $hash_data;
    $en_json = json_encode($de_json);
    file_put_contents('../user.json', $en_json);
    echo 'true';
}else{
    echo 'error';
}