<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\system\public/../application/index\view\index\excel.html";i:1507398493;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>导入</title>
</head>
<body>
	<!--<form action="upload/upload"  method="post" enctype="multipart/form-data">-->

	<!--</form>-->
	<form action="<?php echo url('Excel/Excel_up'); ?>" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<label for="exampleInputFile">导入Excel表格</label>
			<input type="file" name="file" id="exampleInputFile">
		</div>
		<input type="submit" name="submit" class="btn btn-default">提交
	</form>
</body>
</html>