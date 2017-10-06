<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\system\public/../application/index\view\index\upload.html";i:1507316670;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
	<form action="upload/upload"  method="post" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
		<input type="file" name="myfile">
		<input type="submit" value="上传文件">
	</form>
</body>
</html>