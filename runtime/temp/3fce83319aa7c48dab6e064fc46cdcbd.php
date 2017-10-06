<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\WWW\system\public/../application/index\view\h5email\h5view.html";i:1506155908;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="__3WBD_CSS__/bootstrap.min.css">
    <script src="__3WBD_JQ__/jquery.min.js"></script>
</head>
<style>
    #id1{
        background-color: #006666;
    }
    #id2{

    }
    #id3{
        background-color: #977964;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row" id="id1">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">线条数：<?php echo $data['line']; ?></div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row" id="id2" style="background-color: #2E5CD5;">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">背景色：<?php echo $data['bgColor']; ?></div>
                <div class="col-xl-2"></div>
        </div>
        <div class="row" id="id3">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">其它：<?php echo $data['other']; ?></div>
                <div class="col-xl-2"></div>
         </div>
    </div>
</body>
<script>
    $("#id2").attr("style",'<?php echo $data['bgColor']; ?>');
</script>
</html>