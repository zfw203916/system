<?php
namespace app\index\controller;

use app\index\model\Login;
use app\index\model\User;
use think\Db;

/**
 * Class IndexController
 * @package app\index\controller
 * @author Frank
 */
class IndexController extends MonBaseController
{
    /**
     * @return \think\response\View
     * @����  �ڲ�ϵͳ
     */
    public function index()
    {
        return view();
    }

    /**
     * ������״��.
     */
    public function login_check(){

        $data = User::all();
        var_dump($data);die;

        //echo "test";
    }


    /**
     * @return \think\response\View
     * @Victor need single h5
     * @This is attract person go here.
     * so must need attach data.����ץȡ���ݹ���,���ڿ���
     */
    /*
    public function  attract(){
        return view();
    }

    public function test(){
        return view();
    }
    */
}
