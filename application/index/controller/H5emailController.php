<?php
/**
 * Created by PhpStorm.
 * User: FrankZhang
 * Date: 9/21/2017
 * Time: 12:46 PM
 */

namespace app\index\controller;


class H5emailController extends MonBaseController
{
    public function index(){

        $this->assign('data',$data = [
            'title'=>'易游邮件发送管理'
        ]);
        return view();
    }

    /**
     * @modify value
     * @return int
     */
    public function setValue(){

        $data =[
            'title'=>'易游游戏',
            'line'=>input('line'),
            'bgColor'=>input('bgColor'),
            'other'=>input('other')
        ];

        $this->assign('data', $data);
        return view('h5email/h5view');
    }

}