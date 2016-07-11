<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="./Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./Js/index.js"></script>
<link rel="stylesheet" href="/dulifenzu/Public/Css/public.css" />
<link rel="stylesheet" href="/dulifenzu/Public/Css/index.css" />
<script type="text/javascript" src="/dulifenzu/Public/Js/jquery-1.7.2.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
	<div class="container">
	<form action="<?php echo U('Admin/Rbc/addAdminHandle');?>" method="post">
		<table class="table">
		  
		      <tr>
		      	<td>用户名称</td>
		      	<td><input name="username" type="text"/></td>
		      </tr>
		   	 <tr>
		      	<td>用户密码</td>
		      	<td><input name="password" type="password"/></td>
		      </tr>
             <tr >
		      	<td>
		      	<select name="role_id[]" >
		      	        <option value="" selected="selected">请选择</option>
		      		<?php if(is_array($roles)): foreach($roles as $key=>$role): ?><option value="<?php echo ($role['id']); ?>" ><?php echo ($role["name"]); ?></option><?php endforeach; endif; ?>
		      	</select>
                 </td>
                 <td><span class="addrole">添加角色</span></td>
		      </tr>

		      <tr id="last">
		        <td colspan="2">
		          <input type="submit" class="btn" value="提交" />
		          </td>
		      </tr>
		   
		</table>
		</form>
	</div>
</body>
<script type="text/javascript">
	$(function(){

		$('.addrole').click(function(){
            //alert("djkfjks");
			var obj=$('.addrole').parents('tr').clone();
			obj.find('.addrole').remove();
			$('#last').before(obj);
			
			
		});
		
	})





</script>
</html>