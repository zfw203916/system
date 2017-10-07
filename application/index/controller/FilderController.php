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

class FilderController extends MonBaseController
{

    public function index(){
		
		/*
			$str = "Hello world. I love Shanghai!";
			var_dump(explode(".",$str));die;
		*/
		/*
			$a = ['red','green','blue'];
			$test = array_pop($a);//var_dump($a)... red,green
			var_dump($test);die;//blue
		*/

		return view("index/upload");
	   
    }
	/**
	*上传
	*/
	public function upload(){
		
		try{
			
			$allowtype = array("gif", "png", "jpg","doc");   //设置充许上传的类型为gif, png和jpg
			$size = 1000000;                           //设置充许大小为1M（1000000字节）以内的文件
			$path = "./uploads/images";                       //设置上传后保存文件的路径
					
		   //1. 判断文件是否可以成功上传到服务器，$_FILES['myfile']['error'] 为0表示上传成功
		   if($_FILES['myfile']['error'] > 0){
			   echo "上传错";
			   switch($_FILES['myfile']['error']){
					case 1:  die('上传文件大小超出了PHP配置中的约定值：upload_max_filesize');  
					case 2:  die('上传文件大小超出了表单中的约定值：MAX_FILE_SIZE');  
					case 3:  die('文件只被部分上载'); 
					case 4:  die('没有上传任何文件'); 
					case 5:  die('找不到临时文件夹');
					case 6:  die('文件写入失败');
					default: die('末知错误');
			   }   
		   }
		   
			//var_dump($path);die;
			//2. 判断上传的文件是否为充许的文件类型,通过文件的后缀名
			$arr = explode(".", $_FILES['myfile']['name']);
			$hz= array_pop($arr);//不能连写，有bug. 如：array_pop(explode(".", $_FILES['myfile']['name']));
			//3.通过判断文件的后缀方式，来决定文件是否是充许上传的文件类型
			if(!in_array($hz, $allowtype)) {
				die("这个后缀是<b>{$hz}</b>,不是充许的文件类型!");
			}
			
			//4. 判断上传的文件是否为充许大小
			if($_FILES['myfile']['size'] > $size ) {
				die("超过了充许的<b>{$size}</b>字节大小");
			}
			
			//5. 为了系统安全，也为了同名文件不会被覆盖，上传后将文件名使用系统定义
			$filename = date("YmdHis").rand(100,999).".".$hz;

			 //6. 判断是否为上传文件
			 if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
				 if(!move_uploaded_file($_FILES['myfile']['tmp_name'],$path."/".$filename)) echo "不能移动到新位置";
				 
			 }else{
				 die("上传文件不是{$_FILES['myfile']['name']}一个合法文件: ");
			 }

			 //7.
			echo "文件".$_FILES['myfile']['name']."上传成功,保存在{$path}中，大小为{$_FILES['myfile']['size']}字节";
			//header("Location:",'up_list');
			//$this->success('上传成功','up_list');
		}catch(\Exception $e){
			echo "错误";
		}
		 
	}

	/**
	 * 上传后显示列表,截取后缀名为gif,png等文件。不会。求思路。
	 */
	public function up_list(){
		$allowtype = array("gif", "png", "jpg","doc");   //设置充许上传的类型为gif, png和jpg
		$path = "./uploads";
		$file = scandir($path);
		return end(explode('.',$file));
		//var_dump($type);die;
}
	
	/**
	*下载
	*/
	public function down_load(){
		
		$filename="./uploads/20171007030652696.png";
		$basename=pathinfo($filename);
	
		header("Content-Type: image/png"); //指定下载文件类型的
		header("Content-Disposition:attachment;filename=".$basename["basename"]);
		//指定下载文件的描述信息
		header("Content-Length:".filesize($filename));  //指定文件大小的
		readfile($filename);//将内容输出，以便下载。
			//var_dump(readfile($filename));die;
	}
}