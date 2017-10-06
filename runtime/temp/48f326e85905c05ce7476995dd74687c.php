<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\phpStudy\WWW\system\public/../application/index\view\h5email\index.html";i:1506264781;s:74:"D:\phpStudy\WWW\system\public/../application/index\view\common\header.html";i:1506155908;s:74:"D:\phpStudy\WWW\system\public/../application/index\view\common\footer.html";i:1506155908;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>易游内部系统</title>
    <link rel="stylesheet" href="__3WBD_CSS__/bootstrap.min.css">
    <script src="__3WBD_JQ__/jquery.min.js"></script>
    <script src="__3WBD_JS__/bootstrap.min.js"></script>
    <script src="__3WBD_VUE__/vue.min.js"></script>
  </head>
  <body id="app">
      <div class="container-fluid">
        <style>
            #row1{
                background-color: #006666;
            }
            #row2{
                background-color: #2E5CD5;
            }
            #row3{
                background-color: #977964;
            }
        </style>
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <p v-html="message"></p>
            </div>
            <div class="col-xl-1"></div>
        </div>
    <form action="<?php echo url('setValue'); ?>" method="post">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <input id="line"  name="line" value="">线条数
                <br/>
                <input id="bgColor" name="bgColor" value="">背景色
                <input id="other" name="bgColor" value="">其它
            </div>
            <div class="col-xl-1"></div>
            <button class="but" type="submit">提交</button>
        </div>
    </form>
<script>
    var exampleData = {
        // 这是我们的Model
        message :'<?php echo $data['title']; ?>',
    }

    /**创建一个 Vue 实例或 "ViewModel"
     * 它连接 View 与 Model
     * */
    new Vue({
        el:'#app',
        data: exampleData,
        data1: {
            class1 : false
        }


    });

</script>
<!--<script src="__PUBLIC__/index/h5email.js"></script>-->
                        <footer style="bottom: 0;width: 100%; font-size:2.5ex;text-align: center">
                            Copyright@2017-2020 易游网络
                        </footer>
                </div>
    </body>
</html>
