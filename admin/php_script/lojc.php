<?php
$data = $_GET['data'];
$json_f = file_get_contents('../user.json');
$de_json = json_decode($json_f, true);
if (password_verify($data, $de_json['str'])){
    echo 'd';
}else{
    echo 'n ';
}