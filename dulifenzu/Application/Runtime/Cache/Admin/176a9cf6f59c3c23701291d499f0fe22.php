<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="./Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./Js/index.js"></script>
<link rel="stylesheet" href="/dulifenzu/Public/Css/public.css" />
<link rel="stylesheet" href="/dulifenzu/Public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<body>
	<table class="table">
	  <thead>
	  	<th>id</th>
	  	<th>角色名称</th>
	    <th>权限分配</th>
	  </thead>
		<tbody>
			<?php if(is_array($roles)): foreach($roles as $key=>$role): ?><tr>
			    	<td><?php echo ($role["id"]); ?></td>
			    	<td><?php echo ($role["name"]); ?></td>
			    	<td><a href="<?php echo U('Admin/Rbc/access',array('rid'=>$role['id']));?>" class="btn">权限分配</a></td>
			    </tr><?php endforeach; endif; ?>




		</tbody>
	</table>
</body>
</html>