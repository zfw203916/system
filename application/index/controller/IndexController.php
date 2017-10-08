<?php
namespace app\index\controller;
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
     * @易游  内部系统
     */
    public function index()
    {
        return view();
    }


    public function loin(){
        $this->assign([
            'title'=>'内部系统管理页'
        ]);
        return view();
    }
    /**
     * 检查登入状况.
     */
    public function login_check(){

        $data = User::get(function($query){
            $query->where(['username'=>trim(input('username')), 'password'=>trim(md5(input('password'))),'status'=>1]);
        });

        if($data['status'] > 0){
            session_start();
            $_SESSION = [
                'username'=>$data['username'],
                'uid'=>$data['uid'],
                'group'=>$data['group']
            ];

            if($_SESSION['group'] == 1) {

                $this->success("登入成功", 'h5email/index');
            } else if($_SESSION['group'] == 2){

                $this->success("登入成功","data/index");

            }else{
                $this->error("登入失败",'index');
            }


        }else if($data['status'] == '0'){
            $this->error('当前用户已被禁用','index');

        }else{
            $this->error('当前用户已被删除','index');

        }


    }


    /**
     * @return \think\response\View
     * @Victor need single h5
     * @This is attract person go here.
     * so must need attach data.考虑抓取数据功能,后期考虑
     */


}
