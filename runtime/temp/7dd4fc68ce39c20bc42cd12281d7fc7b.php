<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\system\public/../application/index\view\index\excel.html";i:1507656786;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>导入</title>
</head>
<body>
	<form action="<?php echo url('Excel/Excel_native'); ?>" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<label for="exampleInputFile">导入Excel表格</label>
			<input type="file" name="file" id="exampleInputFile">
		</div>
		<input type="submit" name="submit" class="btn btn-default">提交
	</form>

		<br>
	<div class="container">
		<table class="table table-bordered" width="60%">
			<thead>
			<tr>
				<th width="30">ID</th>
				<th width="50">姓名</th>
				<th width="30">年龄</th>
				<th width="30">班级</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr>
				<td><?php echo $v['id']; ?></td>
				<td><?php echo $v['name']; ?></td>
				<td><?php echo $v['age']; ?></td>
				<td><?php echo $v['class']; ?></td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<button type="button" onclick="window.open('<?php echo url('Php_import'); ?>')">导出Excel</button>
	</div>

</body>
</html>