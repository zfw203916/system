<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2017
 * Time: 11:44 PM
 */

namespace app\index\controller;
use think\Db;
/*
*原生
*/
class ExcelController extends MonBaseController
{


	public function index()
	{
		$list = Db::name('student')->select();
		$this->assign('list',$list);
		return view('index/excel');
	}

	/**
	 * 原生导入表格,只做到了上传是表格功能。
	 */
	public function Excel_native()
	{

		try {
			//submit 要设置变量 ,name
			if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == 'POST') {
				$path = './uploads/excel/';
				$file = $_FILES['file'];

				if($file['type'] == 'application/octet-stream' || $file['type'] == 'application/vnd.ms-excel'){
					$fileInfo = move_uploaded_file($file['tmp_name'],$path.$_FILES['file']['name']);
					if($fileInfo){
						echo "文件：",$fileInfo,"<br/>";
					}else{
						echo "不存在";
					}

				}else{
					echo "只能表格";
				}


			} else {
				echo 'get';
			};
		} catch (Exception $frank) {
			$frank->getMessage();
			exit;
		}

	}

	/**
	 * TP导入表格
	 */
	public function Excel_up()
	{

		try {
			if (request()->isPost()) {
				$file = request()->file('file');

				// 移动到框架应用根目录/public/uploads/excel/ 目录下
				$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'excel');

				if ($info) {
					//获取文件所在目录名
					$path = ROOT_PATH . 'public' . DS . 'uploads' . DS . 'excel/' . $info->getSaveName();

					//加载PHPExcel类
					vendor("PHPExcel.PHPExcel");
					//实例化PHPExcel类（注意：实例化的时候前面需要加'\'）

					$extension = $info->getExtension();
					if($extension == "xlsx"){
						$objReader = new \PHPExcel_Reader_Excel2007();
					}else{
						$objReader = new \PHPExcel_Reader_Excel5();
					}

					$objPHPExcel = $objReader->load($path, $encode = 'utf-8');//获取excel文件
					$sheet  = $objPHPExcel->getSheet(0);//激活当前的表
					$highestRow = $sheet->getHighestRow();// 取得总行数
					$highestColumn = $sheet->getHighestColumn(); // 取得总列数
					$a=0;
					//将表格里面的数据循环到数组中
					for($i=2;$i<=$highestRow;$i++){
						//*为什么$i=2? (因为Excel表格第一行应该是姓名，年龄，班级，从第二行开始，才是我们要的数据。)
						$data[$a]['name'] = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();//姓名
						$data[$a]['age'] = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();//年龄
						$data[$a]['class'] = $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();//班级
						// 这里的数据根据自己表格里面有多少个字段自行决定
						$a++;
					}

						//往数据库添加数据
						$res = Db::name('student')->insertAll($data);
						if($res){
							echo 'success';
							$this->success('操作成功！');//没成功调用。可能继承出问题了。
						}else{
							echo 'error';
							$this->error('操作失败！');
						}


				} else {
					// 上传失败获取错误信息
					$this->error($file->getError());
				}//end if $info;
			}else{
				echo 'it is get';
			}//end if request();


		} catch (\Exception $frank) {
			$frank->getMessage();
			exit;
		}//end try;

	}

	/**
	 * TP导出表格
	 */

	public function Tp_import(){
		//2.加载PHPExcle类库
		vendor('PHPExcel.PHPExcel');
		//3.实例化PHPExcel类
		$objPHPExcel = new \PHPExcel();
		//4.激活当前的sheet表
		$objPHPExcel->setActiveSheetIndex(0);
		//5.设置表格头（即excel表格的第一行）
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A1', 'ID')
			->setCellValue('B1', '姓名')
			->setCellValue('C1', '年龄')
			->setCellValue('D1', '班级');

		//设置F列水平居中
		$objPHPExcel->setActiveSheetIndex(0)->getStyle('F')->getAlignment()
			->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		//设置单元格宽度
		$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('E')->setWidth(15);
		$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('F')->setWidth(30);
		//6.循环刚取出来的数组，将数据逐一添加到excel表格。
		for($i=0;$i<count($list);$i++){
			$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+2),$list[$i]['id']);//添加ID
			$objPHPExcel->getActiveSheet()->setCellValue('B'.($i+2),$list[$i]['name']);//添加姓名
			$objPHPExcel->getActiveSheet()->setCellValue('C'.($i+2),$list[$i]['age']);//添加年龄
			$objPHPExcel->getActiveSheet()->setCellValue('D'.($i+2),$list[$i]['class']);//添加班级
			$objPHPExcel->getActiveSheet()->setCellValue('E'.($i+2),$list[$i]['tel']);//添加电话
			$objPHPExcel->getActiveSheet()->setCellValue('F'.($i+2),$list[$i]['email']);//添加邮箱
		}

		//7.设置保存的Excel表格名称

	}

	/**
	 * php导出表格
	 */

	public function Php_import(){

		echo 'test';
	}


	/**
	 * 加载和实例化自定义扩展类
	 */
	public function my_vendor(){
		vendor("My.Test");
		$app = new Test();
		var_dump($app->sayHello());
	}

}