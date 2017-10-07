<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2017
 * Time: 11:44 PM
 */

namespace app\index\controller;

/*
*原生
*/

class ExcelController extends MonBaseController
{

    public function index(){
		return view('index/excel');
	}

	/**
	 * 原生导入表格
	 */
	public function Excel_native(){

		try{
			//submit 要设置变量 ,name
			if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == 'POST'){
				$path = './uploads/excel';
				var_dump($path);die;
			}else{
				echo 'get';
			};
		}catch(Exception $frank){
			$frank->getMessage();
			exit;
		}

	}

	/**
	 * TP导入表格
	 */
	public function Excel_up(){

		try{
			if(request()->isPost()) {
				$file = request()->file('file');
				// 移动到框架应用根目录/public/uploads/excel/ 目录下
				$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'excel');

				if($info){
					//获取文件所在目录名
					$path = ROOT_PATH . 'public' . DS.'uploads'.DS .'excel/'.$info->getSaveName();

					//加载PHPExcel类
					vendor("PHPExcel.PHPExcel");
					//实例化PHPExcel类（注意：实例化的时候前面需要加'\'）
					$objReader=new \PHPExcel_Reader_Excel5();
					$objPHPExcel = $objReader->load($path,$encode='utf-8');//获取excel文件
					var_dump($objPHPExcel);die;
				}else{
					// 上传失败获取错误信息
					$this->error($file->getError());
				}//end if $info;
			}//end if request();


		}catch(Exception $frank) {
			$frank->getMessage();
			exit;
		}//end try;

}

