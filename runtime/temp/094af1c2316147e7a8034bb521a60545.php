<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\Program Files\WWW\system\public/../application/index\view\h5email\h5view.html";i:1506340031;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="__3WBD_CSS__/bootstrap.min.css">
    <script src="__3WBD_JQ__/jquery.min.js"></script>
</head>
<style>
    .row{
        border:2px dashed #3AB2FF !important;
    }
    #id1{

    }
    #id2{

    }
    #id2a{
        background: red;
    }
    #id3{
        background-color: #977964;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row" id="id1">
            <div class="col-xl-2"></div>
            <div id="id1a" class="col-xl-8">邮件标题:<?php echo $data['title']; ?></div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row" id="id2">
            <!--整体背景色: -->
            <div id="id2a" class="col-xl-12">
                <p id="frontColor"><?php echo $data['content']; ?></p>
                <!--<img src="http://img1.cache.netease.com/cnews/img/logo2013/s/news.png" alt="网易新闻">-->
                <img src="__ROOT__/public/static/index/setmail/img/f<?php echo $data['jpg']; ?>.jpg" alt="易游游戏">
            </div>
        </div>
    </div>
</body>
<script>
    $("#id2a").attr("style",'background-color:<?php echo $data['bgColor']; ?>;border:2px dashed #3AB2FF;font-size:16px;text-align:left');
    $('#frontColor').attr("style",'color:<?php echo $data['frontColor']; ?>');
</script>
</html>