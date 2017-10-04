<?php
/**
 * User: FrankZhang
 * Date: 10/3/2017
 * Time: 2:23 PM
 */

namespace app\index\controller;

/**
 * Class DataController
 * @package app\index\controller
 * @email 获取邮件数据 for eddy.
 */
class DataController extends MonBaseController
{
        public function _initialize(){
            //echo session('?username');//die;
        }
        public function index(){

            $this->assign([
                'title'=>'获取已点击的邮件数据',

            ]);
            //var_dump($_SESSION);die;
            return view('data/index');
        }

        public function data_obtain($test){

            echo $test;
        }

        public function url_data(){
            return view();
        }

}