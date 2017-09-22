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


    public function loin(){
        $this->assign([
            'title'=>'ϵͳ����ҳ'
        ]);
        return view();
    }
    /**
     * ������״��.
     */
    public function login_check(){

        $data = User::get([
            'user'=>input('user'),
            'password'=>input('password')
        ]);


        if($data){
            $this->success("����ɹ�",'admin/index');
        }else{
            $this->error("����ʧ��");
        }
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
