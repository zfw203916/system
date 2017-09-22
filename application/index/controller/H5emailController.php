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

        
    }

}