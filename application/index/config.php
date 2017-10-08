<?php
/**
 * Created by PhpStorm.
 * User: FrankZhang
 * Date: 8/25/2017
 * Time: 6:54 PM
 */

return [
    // ���������׺
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
    // | �Ự����
    // +----------------------------------------------------------------------

    'session'                => [
        'id'             => '',
        // SESSION_ID���ύ����,���flash�ϴ�����
        'var_session_id' => '',
        // SESSION ǰ׺
        'prefix'         => 'mon',
        // ������ʽ ֧��redis memcache memcached
        'type'           => '',
        // �Ƿ��Զ����� SESSION
        'auto_start'     => true,
    ],

    // +----------------------------------------------------------------------
    // | Cookie����
    // +----------------------------------------------------------------------
    'cookie'                 => [
        // cookie ����ǰ׺
        'prefix'    => '',
        // cookie ����ʱ��
        'expire'    => 0,
        // cookie ����·��
        'path'      => '/',
        // cookie ��Ч����
        'domain'    => '',
        //  cookie ���ð�ȫ����
        'secure'    => false,
        // httponly����
        'httponly'  => '',
        // �Ƿ�ʹ�� setcookie
        'setcookie' => true,
    ],

];
