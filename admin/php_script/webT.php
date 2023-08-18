<?php
$text = $_GET['text'];
$jsonf = file_get_contents('../../web.json');
$de_json = json_decode($jsonf, true);
$de_json['webTitle'] = $text;
$en_json = json_encode($de_json);
file_put_contents('../../web.json', $en_json);
echo '完成';