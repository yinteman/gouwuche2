<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="container">
		<dl>

			<dt><?php echo ($title); ?></dt>
			<dd>
				<img <?php echo ($src); ?> style="width: 200px;height: 200px" />
				<p><?php echo ($content); ?><p>
			</dd>
            <dt>分类</dt>
            <dd>{name}</dd>
            <dt>上传时间</dt>
            <dd><?php echo (date("y-m-r",$time)); ?></dd>




		</dl>
        


	</div>
</body>
</html>