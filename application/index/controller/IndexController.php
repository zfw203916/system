<?php
namespace app\index\controller;

use app\index\model\Login;
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
     * @易游  内部系统
     */
    public function index()
    {
        return view();
    }

    /**
     * 检查登入状况.
     */
    public function login_check(){


        //echo "test";
    }


    /**
     * @return \think\response\View
     * @Victor need single h5
     * @This is attract person go here.
     * so must need attach data.考虑抓取数据功能,后期考虑
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
