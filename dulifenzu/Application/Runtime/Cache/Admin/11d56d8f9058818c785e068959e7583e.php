<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<head>
	<meta charset="UTF-8">
	<title>listNode</title>
	<link rel="stylesheet" type="text/css" href="/dulifenzu/Public/Css/bootstrap.min.css">
<script type="text/javascript" src="/dulifenzu/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dulifenzu/Public/Js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<table class="table">
		 <thead>
		 	<td>应用名称</td>
	
             
		 	
           </thead>
           <tbody >
			<?php if(is_array($node)): foreach($node as $key=>$app): ?><tr>
                     <td>
                     	<tr>
                     		<td><?php echo ($app["title"]); ?>
                     		<a href="<?php echo U('Admin/Rbc/addNode',array('pid'=>$app['id'],'level'=>2));?>" class="btn">添加控制器</a>
                     		<a href="<?php echo U('Admin/Rbc/deleteNode',array('id'=>$app['id']));?>" class="btn">删除应用</a>
                     	   </td>

                     		<td>
                     		<table class="table table-hover">
                     		<thead>
                     		<td >控制器名称</td>
                     		 <td>方法名称</td>
                     		</thead>
                     		
                     		<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$controller): ?><tr >
                     			<td><?php echo ($controller["title"]); ?>
                                    <a href="<?php echo U('Admin/Rbc/addNode',array('pid'=>$controller['id'],'level'=>3));?>" class="btn">添加方法</a>
                     		        <a href="<?php echo U('Admin/Rbc/deleteNode',array('pid'=>$controller['pid'],'id'=>$controller['id']));?>" class="btn">删除控制器</a>
                     		         </td>
                                   <td>
                                   <?php if(is_array($controller["child"])): foreach($controller["child"] as $key=>$method): ?><ul style="list-style:none;float: left;">
                     			     	<li><label><?php echo ($method["title"]); ?></label>|<a href="<?php echo U('Admin/Rbc/deleteNode',array('pid'=>$method['pid'],'id'=>$menthod['id']));?>">删除方法</a></li>
                     			     </ul><?php endforeach; endif; ?>                   				
                                    </td>
                     		       </tr><?php endforeach; endif; ?>
                     		 </table>
                     		</td>
                     	</tr>

                     </td>
                </tr><?php endforeach; endif; ?>
		</tbody>
		</table>
	</div>
</body>
</html>