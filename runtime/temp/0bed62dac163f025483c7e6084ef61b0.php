<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\Program Files\WWW\system\public/../application/index\view\index\index.html";i:1506509502;s:79:"D:\Program Files\WWW\system\public/../application/index\view\common\header.html";i:1507020562;s:79:"D:\Program Files\WWW\system\public/../application/index\view\common\footer.html";i:1505906782;}*/ ?>
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
        <?php echo \think\Session::get('username'); ?>
        <div class="row">
          <div class="col-xl-12">

              <div class="pull-right"
                   onclick="location.href='<?php echo url('admin/login_out'); ?>'"
                   style="cursor:pointer;">
                <button class="btn btn-block btn-danger">注销登录</button>
              </div>
            &nbsp;
              <div class="pull-right"
                   onclick="location.href='<?php echo url('admin/change_pwd'); ?>'"
                   style="cursor:pointer;">
                <button class="btn btn-block btn-primary">修改密码</button>
              </div>
            &nbsp;
            <div class="pull-right"
                 onclick="location.href=''"
                 style="cursor:pointer;">
              <button class="btn btn-block btn-warning">后退</button>
            </div>
          </div>
        </div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 hui-margin-top-30 hui-padding-all-20 hui-background-color-white">
        <form role="form" action="<?php echo url('login_check'); ?>" method="post">
            <div class="form-group">
                <label for="zh">用户名：</label>
                <input type="text" name="username" class="form-control" id="zh"  value="">
            </div>
            <div class="form-group">
                <label for="mm">密码</label>
                <input type="password" name="password" class="form-control" id="mm" value="" placeholder="密码">
            </div>
            <button type="submit" class="btn btn-primary btn-block">登录</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
<script src="__PUBLIC_VALIDATE__/js/validate.js"></script>
                        <footer style="bottom: 0;width: 100%; font-size:2.5ex;text-align: center">
                            Copyright@2017-2020 易游网络
                        </footer>
                </div>
    </body>
</html>
