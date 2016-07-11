<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="./Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./Js/index.js"></script>
<link rel="stylesheet" href="/dulifenzu/Public/Css/public.css" />
<link rel="stylesheet" href="/dulifenzu/Public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="<?php echo U('Admin/Rbc/addAdmin');?>">添加用户</a>
			<a href="<?php echo U('Admin/Rbc/addRole');?>">添加角色</a>
			<a href="<?php echo U('Admin/Rbc/addNode');?>">添加节点</a>
		
		</div>
		<div class="exit">
			<a href="#" target="_self">退出</a>
			<a href="http://bbs.houdunwang.com" target="_blank">获得帮助</a>
			<a href="http://www.houdunwang.com" target="_blank">后盾网</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>功能标题</dt>
			<dd><a href="#">用户列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbc/listRole');?>">角色列表</a></dd>
			<dd><a href="<?php echo U('Admin/Rbc/listNode');?>">节点列表</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="#"></a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
	</div>
	<div id="right">
		<table class="table">
			<thead>
			<td>用户id</td>
			<td>用户名</td>
			<td>用户角色</td>
			</thead>
            <tbody>
            	<?php if(is_array($userInfos)): foreach($userInfos as $key=>$user): ?><tr>
            			<td><?php echo ($user["id"]); ?></td>
            			<td><?php echo ($user["username"]); ?></td>
            			<td>
            			<?php if(is_array($user["roles"])): foreach($user["roles"] as $key=>$vo): ?><p><?php echo ($vo["remark"]); ?></p>&nbsp;&nbsp;<?php endforeach; endif; ?>
                         </td>
            		</tr><?php endforeach; endif; ?>
            </tbody>


		</table>
	</div>
</body>
</html>