<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
	<meta charset="UTF-8">
	<title>CateList</title>
</head>
<link rel="stylesheet" type="text/css" href="/dulifenzu/Public/Css/bootstrap.min.css">
<script type="text/javascript" src="/dulifenzu/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dulifenzu/Public/Js/bootstrap.min.js"></script>
<body>
   <div class="container">
   	   <table class="table">
   	   	<thead>
   	   		<th>id</th>
   	   		<th>名称</th>
   	   		<th>颜色</th>
   	   		<th>操作</th>
   	   	</thead>
   	       <?php if(is_array($attrs)): foreach($attrs as $key=>$attr): ?><tr>
   	          	<td><?php echo ($attr["id"]); ?></td>
   	          	<td><?php echo ($attr["name"]); ?></td>
   	          	<td>
                 <div style="background-color:<?php echo ($attr['color']); ?> ;height: 20px;width: 20px"></div> 
                </td>
   	          	
   	          	<td>
   	          		<a href="#">修改</a>
   	          		<a href="#">删除</a>
   	          	</td>
   	          </tr><?php endforeach; endif; ?>
   	   </table>
   </div>
</body>
</html>