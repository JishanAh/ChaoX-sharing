<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="btn.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/loader.js"></script>
    <style>
        .input-group {
            display: flex;
            align-items: center;
            margin: 30px 0 0 40vw;
        }

        .input {
            min-height: 50px;
            max-width: 150px;
            padding: 0 1rem;
            color: #fff;
            font-size: 15px;
            border: 1px solid #5e4dcd;
            border-radius: 6px 0 0 6px;
            background: rgba(255, 255, 255, 0.5);
        }

        .button--submit {
            min-height: 50px;
            padding: .5em 1em;
            border: none;
            border-radius: 0 6px 6px 0;
            background-color: #5e4dcd;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            transition: background-color .3s ease-in-out;
        }

        .button--submit:hover {
            background-color: #5e5dcd;
        }

        .input:focus, .input:focus-visible {
            border-color: #3898EC;
            outline: none;
        }
        .td button{
            padding: 20px;
            border: none;
            border-radius: 15px;
            background: white;
            margin-top: 50px;
        }
        .td button:hover{
            color: black;
        }
    </style>
</head>
<body>
    <script>
        function pa(page){
            if (page == 'nrgl'){
                $(".nrgl").css("display", "block")
                $(".ip").css("display", "none")
                $(".home").css("display", "none")
                $(".sz").css("display", "none")
            }else if (page == 'ip'){
                $(".nrgl").css("display", "none")
                $(".ip").css("display", "block")
                $(".home").css("display", "none")
                $(".sz").css("display", "none")
            }else if (page == 'sz'){
                $(".nrgl").css("display", "none")
                $(".ip").css("display", "none")
                $(".home").css("display", "none")
                $(".sz").css("display", "block")
            }
        }
    </script>
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
    <div class="every">
        <ul class="top">
            <li onclick="pa('nrgl')">内容管理</li>
            <li onclick="pa('ip')">IP解禁</li>
            <li onclick="pa('sz')">网站设置</li>
        </ul>
        <!--进入后显示-->
        <div class="home">
            <h1>Hi!</h1>
        </div>
        <!--内容管理-->
        <div class="nrgl">
            <h1 class="dtitle">内容管理</h1>
            <?php
            require '../config.php';
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
                $ip = $result_arr['ip'];
                $id = $result_arr['id'];
                echo "<div class='nd'><div>" . htmlspecialchars($title) . "</div><div>" . htmlspecialchars($type) . "</div><a href='" . htmlspecialchars($link) . "'><div>" . htmlspecialchars($link) . "</div></a><div>" . htmlspecialchars($time) . "</div><div>" . htmlspecialchars($ip) . "</div><button onclick='del($id)'>删除</button><button onclick=\"fip('" . htmlspecialchars($ip) . "')\">封禁IP</button></div> \n";
            }
            ?>
        </div>
        <div class="ip">
            <h1 class="dtitle">IP解禁</h1>
            <p>点击ip即可解禁</p>
            <?php
            require '../config.php';
            global $dbconfig;
            //连接数据库
            $dblink = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['pwd'], $dbconfig['dbname']);
            //判断是否链接成功
            if (!$dblink){

            }
            $selsql = 'SELECT * FROM fip';
            $result = mysqli_query($dblink, $selsql);
            while ($result_arr = mysqli_fetch_assoc($result)){
                $jip = $result_arr['ip'];
                echo "<button onclick=\"jip('" . htmlspecialchars($jip) . "')\">" . htmlspecialchars($jip) . "</button>";
            }
            ?>
        </div>
        <div class="sz">
            <h1 class="dtitle">网站设置</h1>
            <!--网站标题修改-->
            <div class="input-group">
                <input type="text" class="input" id="webT" placeholder="页面标题" autocomplete="off">
                <input class="button--submit" value="确定" type="submit" onclick="webTitle()">
            </div>
            <!--浏览器标题标题修改-->
            <div class="input-group">
                <input type="text" class="input" id="broT" placeholder="浏览器标题" autocomplete="off">
                <input class="button--submit" value="确定" type="submit" onclick="broTitle()">
            </div>
            <!--管理员用户名修改-->
            <div class="input-group">
                <input type="text" class="input" id="name" placeholder="修改管理员用户名" autocomplete="off">
                <input class="button--submit" value="确定" type="submit" onclick="username()">
            </div>
            <!--管理员密码修改-->
            <div class="input-group">
                <input type="text" class="input" id="pwd" placeholder="修改管理员密码" autocomplete="off">
                <input class="button--submit" value="确定" type="submit" onclick="password()">
            </div>
            <div class="td">
                <button onclick="td()">退出登录</button>
            </div>
        </div>
    </div>
    <script>
        //删除内容
        function del(id){
            $.ajax({
                method: "GET",
                url: "php_script/del.php",
                data: {"id":id},
                success: function (response){
                    if (response === 'sqlerror1'){
                        alert("数据库连接失败")
                    }else if (response === 'sqlerror2'){
                        alert("删除失败")
                    }else if (response === 'suc'){
                        alert("删除成功")
                        location.reload()
                    }
                }
            })
        }
        //封禁IP
        function fip(ip){
            $.ajax({
                method: "GET",
                url: "php_script/fip.php",
                data: {"fip":ip},
                success: function (response){
                    if (response === 'sqlerror1'){
                        alert("数据库连接失败")
                    }else if (response === 'sqlerror2'){
                        alert("封禁失败")
                    }else if (response === 'suc'){
                        alert("封禁成功")
                        location.reload()
                    }
                }
            })
        }
        //解封ip
        function jip(ip){
            $.ajax({
                method: "GET",
                url: "php_script/jip.php",
                data: {"jip":ip},
                success: function (response){
                    if (response === 'sqlerror1'){
                        alert("数据库连接失败")
                    }else if (response === 'sqlerror2'){
                        alert("解禁失败")
                    }else if (response === 'suc'){
                        alert("解禁成功")
                        location.reload()
                    }
                }
            })
        }
        //修改网站标题
        function webTitle(){
            let data = {
                "text":$("#webT").val()
            }
            $.ajax({
                method: "GET",
                url: "php_script/webT.php",
                data: data,
                success: function (response){
                    alert(response)
                }
            })
        }
        //修改浏览器标题
        function broTitle(){
            let data = {
                "text":$("#broT").val()
            }
            $.ajax({
                method: "GET",
                url: "php_script/broT.php",
                data: data,
                success: function (response){
                    alert(response)
                }
            })
        }
        //修改管理员用户名
        function username(){
            let data = {
                "name":$("#name").val()
            }
            $.ajax({
                method: "GET",
                url: "php_script/name.php",
                data: data,
                success: function (response){
                    if (response === 'hk'){
                        alert("用户名不得为空")
                    }else{
                        alert("修改完成")
                        localStorage.removeItem("login")
                        alert("请重新登陆")
                        location.reload()
                    }
                }
            })
        }
        //修改管理员密码
        function password(){
            let data = {
                "pwd":$("#pwd").val(),
            }
            $.ajax({
                method: "GET",
                url: "php_script/pwd.php",
                data: data,
                success: function (response){
                    if (response === 'hk'){
                        alert("密码不得为空")
                    }else{
                        alert("修改成功")
                        localStorage.removeItem("login")
                        alert("请重新登陆")
                        location.reload()
                    }
                }
            })
        }
        //退出登录
        function td(){
            localStorage.removeItem("login")
            location.reload()
        }
        $.ajax({
            method: "GET",
            url: "php_script/lojc.php",
            data: {data:localStorage.getItem("login")},
            success: function (response){
                if (response !== 'd'){
                    localStorage.removeItem("login")
                    location.href = 'login.html'
                }
            }
        })
    </script>
</body>
</html>