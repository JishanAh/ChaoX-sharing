<?php
$name = $_GET['name'];
if (empty($name)){
    echo 'hk';
    exit();
}
$jsonf = file_get_contents('../user.json');
$de_json = json_decode($jsonf, true);
$de_json['username'] = $name;
$en_json = json_encode($de_json);
file_put_contents('../user.json', $en_json);