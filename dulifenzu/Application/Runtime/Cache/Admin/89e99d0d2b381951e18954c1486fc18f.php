<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博文管理</title>
<link rel="stylesheet" type="text/css" href="/dulifenzu/Public/Css/bootstrap.min.css">
<script type="text/javascript" src="/dulifenzu/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dulifenzu/Public/Js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">
   <?php echo W('Hot/Menu');?>

   	   <table class="table">
   	   	<thead>
   	   		<th>id</th>
   	   		<th>名称</th>
   	   		<th>分类</th>
   	   		<th>编写时间</th>
   	   		<th>操作</th>
   	   	</thead>
   	       <?php if(is_array($dataInfo)): foreach($dataInfo as $key=>$data): ?><tr>
   	          	<td><?php echo ($data["id"]); ?></td>
   	          	<td><?php echo ($data["title"]); ?>
                     <span style="color:<?php echo ($data['attrs'][0]['color']); ?>; font-size: 10px;">[<?php echo ($data['attrs'][0]['name']); ?>]</span>

   	          	</td>
   	          	<td>
   	          		<?php echo ($data['cates']['name']); ?>
   	          	</td>
   	          	<td>
                 <?php echo (date("y-m-d",$date['time'])); ?>
                </td>
   	          	
   	          	<td>
   	          	<?php if(ACTION_NAME == 'index'): ?><a href="#">修改</a>
   	          		<a href="<?php echo U('Admin/Blog/toTrash',array('id'=> $data['id'],'type'=>1));?>">放入回收站</a>
   	          		<?php else: ?>
                    <a href="<?php echo U('Admin/Blog/toTrash',array('id'=> $data['id'],'type'=>0));?>">还原</a>
   	          		<a href="<?php echo U('Admin/Blog/toTrash',array('id'=> $data['id'],'type'=>1));?>">彻底删除</a><?php endif; ?>
   	          	</td>
   	          </tr><?php endforeach; endif; ?>
   	   </table>
   </div>
   
   
</body>

</html>