<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>main</title>
<link rel="stylesheet" type="text/css" href="../style/admin.css" />
</head>
<body id="main">

<div class="map">
	管理首页 &gt;&gt; 后台首页
</div>

<table cellspacing="0">
	<tr><th><strong>快捷操作</strong></th></tr>
	<tr><td><input type="button" onclick="javascript:location.href='main.php?action=delcache'" value="清理缓存" /> ( 缓存目录现有 <strong><?php echo $this->_vars['cacheNum'];?></strong> 个文件 )</td></tr>
</table>

</body>
</html>