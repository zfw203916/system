<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\phpStudy\WWW\system\public/../application/index\view\h5email\vuetest.html";i:1506268817;s:74:"D:\phpStudy\WWW\system\public/../application/index\view\common\header.html";i:1506265645;s:74:"D:\phpStudy\WWW\system\public/../application/index\view\common\footer.html";i:1506155908;}*/ ?>
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
  <body>
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
    .class1{
        background: #444;
        color: #eee;
    }/* 可以设置不同的进入和离开动画 */
    /* 设置持续时间和动画函数 */
    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active for below version 2.1.8 */ {
        transform: translateX(10px);
        opacity: 0;
    }
</style>
    <div id="app" class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-10">

            <button @click="show = !show">
                Toggle render
            </button>
            <transition name="slide-fade">
                <p v-if="show">hello</p>
            </transition>
        </div>
        <div class="col-xl-1"></div>
    </div>
<script>

    new Vue({
        el: '#example-1',
        data: {
            show: true
        }
    })

</script>
<!--<script src="__PUBLIC__/index/h5email.js"></script>-->
                        <footer style="bottom: 0;width: 100%; font-size:2.5ex;text-align: center">
                            Copyright@2017-2020 易游网络
                        </footer>
                </div>
    </body>
</html>
