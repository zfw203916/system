<?php
/**
 * Created by PhpStorm.
 * User: FrankZhang
 * Date: 8/25/2017
 * Time: 6:54 PM
 */

return [
    // 控制器类后缀
    'controller_suffix'      => true,
    'view_replace_str'       => [
        '__PUBLIC__'=>'static',
        '__IMG__'  => 'static/index/setmail',
        '__PUBLIC_VALIDATE__'=>'/static/validate',
        '__3WBD__'=>'http://apps.bdimg.com/libs/',
        '__3WBD_CSS__'=>'http://apps.bdimg.com/libs/bootstrap/3.3.4/css',
        '__3WBD_JS__'=>'http://apps.bdimg.com/libs/bootstrap/3.3.4/js',
        '__3WBD_JQ__'=>'http://apps.bdimg.com/libs/jquery/2.1.4',
        '__3WBD_VUE__'=>'http://apps.bdimg.com/libs/vue/1.0.8'
    ],
    'prefix' => 'mon',

    // +----------------------------------------------------------------------
    // | 会话设置
    // +----------------------------------------------------------------------

    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'mon',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
    ],

    // +----------------------------------------------------------------------
    // | Cookie设置
    // +----------------------------------------------------------------------
    'cookie'                 => [
        // cookie 名称前缀
        'prefix'    => '',
        // cookie 保存时间
        'expire'    => 0,
        // cookie 保存路径
        'path'      => '/',
        // cookie 有效域名
        'domain'    => '',
        //  cookie 启用安全传输
        'secure'    => false,
        // httponly设置
        'httponly'  => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ],

];
