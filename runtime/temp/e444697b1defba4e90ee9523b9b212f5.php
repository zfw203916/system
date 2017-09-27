<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\Program Files\WWW\system\public/../application/index\view\h5email\index.html";i:1506491716;s:79:"D:\Program Files\WWW\system\public/../application/index\view\common\header.html";i:1506070478;s:79:"D:\Program Files\WWW\system\public/../application/index\view\common\footer.html";i:1505906782;}*/ ?>
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
            <div class="col-xl-4 col-md-4"></div>
            <div class="col-xl-4 col-md-4">
                <h2><p v-html="message"></p></h2>
                <p style="color:red">如果不填数值将按随机数据做处理</p>
            </div>
            <div class="col-xl-4 col-md-4"></div>
        </div>
<form action="<?php echo url('setValue'); ?>" method="post">
        <div class="row">
            <div class="col-xl-3 col-md-3"></div>
            <div class="col-xl-7 col-md-7">

                    <!--<input id="line"  name="line" value="">横线条数-->
                    <!--<br>-->
                    <!--<input id="verticalLine"  name="verticalLine" value="">竖线条数-->
                    <!--<br>-->
                    <input id="bgColor" name="bgColor" value="">背景色（填入如：white）
                    <br>
                    <input id="frontColor" name="frontColor" value="">字体颜色(填入如：green)
                    <br>
                    <input name="title" class="">邮件标题
                    <br>
            </div>
            <div class="col-xl-2 col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-3"></div>
            <div class="col-xl-7 col-md-7">
                <textarea name="content" style="width:100%">
                    test 测试
                </textarea>邮件内容
                <br>
                是否开启变量机制（<i style="color:red">否为未开启，即输出原型，可供第三方软件使用</i>）
                <br>
                <select name="select">
                    <option value="1">是</option>
                    <option value="0">否</option>
                </select>
                <br>
                是否开启模板机制(<i style="color:red">只有在开启变量机制后才可使用，提交后，可按F5刷新</i>)
                <br>
                <select name="select2">
                    <option value="1">是</option>
                    <option value="0" selected="selected">否</option>
                </select>
                <br>
                <button class="but" type="submit">提交</button>
            </div>
            <div class="col-xl-2 col-md-2"></div>

        </div>
</form>
<script>
    var exampleData = {
        // 这是我们的Model
        message :'<?php echo $data['title']; ?>'
    }

    /**创建一个 Vue 实例或 "ViewModel"
     * 它连接 View 与 Model
     * */
    new Vue({
        el:'#app',
        data: exampleData
    });

</script>
<!--<script src="__PUBLIC__/index/h5email.js"></script>-->
                        <footer style="bottom: 0;width: 100%; font-size:2.5ex;text-align: center">
                            Copyright@2017-2020 易游网络
                        </footer>
                </div>
    </body>
</html>
