<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/loading.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/php_script.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/loader.js"></script>
</head>
<body>
    <div id="wifi-loader">
        <svg class="circle-outer" viewBox="0 0 86 86">
            <circle class="back" cx="43" cy="43" r="40"></circle>
            <circle class="front" cx="43" cy="43" r="40"></circle>
            <circle class="new" cx="43" cy="43" r="40"></circle>
        </svg>
        <svg class="circle-middle" viewBox="0 0 60 60">
            <circle class="back" cx="30" cy="30" r="27"></circle>
            <circle class="front" cx="30" cy="30" r="27"></circle>
        </svg>
        <svg class="circle-inner" viewBox="0 0 34 34">
            <circle class="back" cx="17" cy="17" r="14"></circle>
            <circle class="front" cx="17" cy="17" r="14"></circle>
        </svg>
        <div class="text" data-text="加载中"></div>
    </div>
    <div class="every" style="display: none">
        <div class="nav">
            <span class="iconfont icon-menu" onclick="menu('block')"></span>
            <span class="iconfont icon-x" onclick="menu('none')"></span>
            <div class="navbut"></div>
            <p class="nT"></p>
        </div>
        <div class="nl">
            <ul class="nle">
                <li onclick="jump('/')">首页</li>
                <li onclick="jump('../add')">提交内容</li>
                <li onclick="jump('../')"></li>
            </ul>
        </div>
        <div class="oc">
            <?php
            require './config.php';
            global $dbconfig;
            //连接数据库
            $dblink = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['pwd'], $dbconfig['dbname']);
            //判断是否链接成功
            if (!$dblink){
                echo "<script>bT('error');</script>";
                die('数据库连接失败');
            }
            $selsql = 'SELECT * FROM output';
            $result = mysqli_query($dblink, $selsql);
            while ($result_arr = mysqli_fetch_assoc($result)){
                $title = $result_arr['title'];
                $type = $result_arr['type'];
                $link = $result_arr['link'];
                $time = $result_arr['time'];
                echo "<a href='$link'>
            <div class='card ocd'>
                <h3 class='card__title'>$title</h3>
                <p class='card__content'>$type</p>
                <div class='card__date'>$time</div>
                <div class='card__arrow'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' height='15' width='15'>
                        <path fill='#fff' d='M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z'></path>
                    </svg>
                </div>
            </div>
        </a> \n";
            }
            ?>
        </div>
    </div>
    <?php
    $webJson = file_get_contents('./web.json');
    $wjData = json_decode($webJson, true);
    //变量转义
    $broTitle = htmlspecialchars($wjData['broTitle']);
    $webTitle = htmlspecialchars($wjData['webTitle']);
    echo "    <script>bT('$broTitle');wT('$webTitle');</script> \n";
    ?>
    <script>
        let myip;
        $.getJSON("https://api.ipify.org?format=json", function (data){
            $.ajax({
                method: "GET",
                url: "fip.php",
                data: {"ip":data.ip},
                success: function (response){
                    if (response === 'sqlerror1'){
                        alert("数据库连接失败")
                    }else if (response === 'sqlerror2'){
                        alert("查询失败")
                    }else if (response === 'true'){
                        location.href = "/fip.html"
                    }else{
                        return;
                    }
                    console.log(response)
                }
            })
        })
    </script>
</body>
</html>