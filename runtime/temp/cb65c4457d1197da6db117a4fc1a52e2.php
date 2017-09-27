<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\Program Files\WWW\system\public/../application/index\view\h5email\cicada.html";i:1506498861;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<style>
    .list {
        margin: 10px;
        display: inline-block;
        width: 168px; height: 168px;
        border: 4px solid #00C7E9;
        border-radius: 87% 91% 98% 100%;
        -webkit-transition: all .35s;
        transition: all .35s;
        overflow: hidden;
    }

    .list:hover {
        border-radius: 95% 70% 100% 80%;
        transform: rotate(-2deg);
    }

    .list:nth-child(2n+1) {
        border-radius: 59% 52% 56% 59%;
        transform: rotate(-6deg);
    }

    .list:nth-child(2n+1):hover {
        border-radius: 51% 67% 56% 64%;
        transform: rotate(-4deg);
    }

    .list:nth-child(3n+2) {
        border-radius: 84% 94% 83% 72%;
        transform: rotate(5deg);
    }

    .list:nth-child(3n+2):hover {
        border-radius: 69% 64% 53% 70%;
        transform: rotate(0deg);
    }

    .list:nth-child(5n+3) {
        border-radius: 73% 100% 82% 100%;
        transform: rotate(7deg);
    }

    .list:nth-child(5n+3):hover {
        border-radius: 73%;
        transform: rotate(7deg);
    }

    .list:nth-child(7n+5) {
        border-radius: 93% 90% 85% 78%;
        transform: rotate(-2deg);
    }

    .list:nth-child(7n+5):hover {
        border-radius: 53% 70% 85% 68%;
        transform: rotate(-2deg);
    }

    .list:nth-child(11n+7) {
        border-radius: 68% 68% 83% 53%;
        transform: rotate(-2deg);
    }

    .list:nth-child(11n+7):hover {
        border-radius: 58% 98% 78% 83%;
        transform: rotate(3deg);
    }
</style>
<body>
<div class="constr">

    <div class="list">
        <div><?php echo $data['content']; ?></div>
    </div>

    <div class="list"><img src="mm1.jpg"></div>
    <div class="list"><img src="mm2.jpg"></div>
    <div class="list"><img src="mm3.jpg"></div>
    <div class="list"><img src="mm4.jpg"></div>
    <div class="list"><img src="mm3.jpg"></div>
    <div class="list"><img src="mm4.jpg"></div>
    <div class="list"><img src="mm2.jpg"></div>
    <div class="list"><img src="mm1.jpg"></div>
    <div class="list"><img src="mm4.jpg"></div>
    <div class="list"><img src="mm2.jpg"></div>
    <div class="list"><img src="mm1.jpg"></div>
    <div class="list"><img src="mm3.jpg"></div>
</div>
</body>
</html>