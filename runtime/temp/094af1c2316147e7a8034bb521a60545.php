<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\Program Files\WWW\system\public/../application/index\view\h5email\h5view.html";i:1506500392;}*/ ?>
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
    body {
        margin: 0px;
        padding: 0px;
        color: #fff;
        /*background: #333 url("img/bgBody.gif") repeat-x 0px 150px;*/
    }
    * #BodyImposter {
        color: #fff;
        background: #333 url("img/bgBody.gif") repeat-x 0px 150px;
        width: 100%;
        margin: 0px;
        padding: 0px;
        text-align: center;
    }
    * #BodyImposter li,
    * #BodyImposter p,
    * #BodyImposter td {
        font-size: 12px;
        line-height: 1.5em;
        font-family: Helvetica, Arial, sans-serif;
        text-align: justify;
    }
    * #BodyImposter p,
    * #BodyImposter ol,
    * #BodyImposter ul {
        margin: 0em 0em 1em 0em;
    }
    * #BodyImposter img {
        border: 0px;
    }
    * #Primary img {
        float: right;
        margin: 5px 0px 15px 15px;
        border: 1px solid #999;
        padding: 2px;
    }
    * #BodyImposter small {
        font-size: 10px;
        line-height: 1.3em;
    }
    * #BodyImposter ol {
        padding-left: 1em;
    }
    * #Primary ul {
        padding-left: 1em;
        padding-right: 1em;
    }
    * #BodyImposter ol li {
        margin: 0px;
        padding: 0px;
    }
    * #BodyImposter ul li {
        background: url("img/bullet.gif") no-repeat 0em 0.5em;
        padding: 0px 0px 0px 8px;
        margin: 0px;
        list-style: none;
    }

    /* links
    --------------------------------------------------*/

    * #BodyImposter a {
        text-decoration: underline;
    }
    * #Primary a:link,
    * #Primary a:visited {
        color: #000;
        background: #fff;
    }
    * #Helpful a:link,
    * #Helpful a:visited {
        color: #bdbcbc;
        background: #fff;
    }
    * #Legal a:link,
    * #Legal a:visited {
        color: #7d822b;
        background: #d3dd2e;
    }
    * #BodyImposter a:hover {
        text-decoration: none;
    }
    * #BodyImposter a:active {
        color: #668d3c;
        background: #fff;
        text-decoration: none;
    }

    /* heads
    --------------------------------------------------*/

    * #BodyImposter h1,
    * #BodyImposter h2,
    * #BodyImposter h3 {
        font-family: Helvetica, Arial, sans-serif;
        font-weight: normal;
        line-height: normal;
        margin: 0em 0em 0.5em 0em;
        padding: 0px;
        text-align: left;
    }
    * #Masthead h1 {
        font-size: 28px;
        color: #fff;
        background: transparent;
        margin-bottom: 0.1em;
        padding-top: 5px;
        text-align: center;
    }
    * #Primary h2 {
        font-size: 22px;
        background: url("img/ornament.gif") no-repeat center top;
        color: #4f7282;
        background: #fff;
    }
    * #Primary h3 {
        font-size: 18px;
        color: #4f7282;
        background: #fff;
    }

    /* boxes
    --------------------------------------------------*/

    * #Box {
        color: #666;
        background: #fff url("img/bgContent.gif") repeat-y;
        margin: 0px auto;
    }
    * #Content td#Primary {
        padding-bottom: 30px;
    }
    * #Helpful {
        color: #bdbcbc;
        background: #fff;
    }
    * #Helpful p {
        margin: 0px;
        padding: 15px 0px;
    }
    * #Legal {
        color: #7d822b;
        background: #5dc7db;
    }
    * #Legal p {
        margin: 0px;
        padding: 0px;
        font-size: 11px;
        text-align: center;
    }
    * #Masthead {
        color: #fff;
        background: #5dc7db url("static/index/setmail/img/bgMasthead.gif") no-repeat center 11px;
    }
    * #Masthead p {
        text-align: center;
        font-size: 14px;
        margin: 0px;
    }
    * #Top {
        padding-top: 0px;
        padding-bottom: 8px;
        background: url("img/bgBottom.gif") no-repeat center bottom;
    }
    /*
    The asterisks preceding every selector ensure styles are rendered in Dot Mac.
    The inline styles in headlines are for Outlook 2007.
    */

</style>
<body>
    <div class="container-fluid">
        <div class="row" id="id1">
            <div class="col-xl-2"></div>
            <div id="id1a" class="col-xl-8" style="color:#000000"><?php echo $data['title']; ?></div>
            <div class="col-xl-2"></div>
        </div>
        <div class="row" id="id2" style="background-color: {背景色变量}">
            <!--整体背景色: -->
            <div id="id2a" class="col-xl-12">
                <p id="frontColor"><?php echo $data['content']; ?></p>
                <img src="http://test.eu8007.com/f<?php echo $data['jpg']; ?>.png" width="40" height="40" alt="易游游戏">
                <i style="color:#000">日期:<?php echo $data['time']; ?></i>
                <i style="display:none">易游随机隐藏数值<?php echo $data['val']; ?></i>
            </div>
        </div>
    </div>
</body>
<script>
    $("#id2a").attr("style",'background-color:<?php echo $data['bgColor']; ?>;border:2px dashed #3AB2FF;font-size:16px;text-align:left');
    $('#frontColor').attr("style",'color:<?php echo $data['frontColor']; ?>');
</script>
</html>