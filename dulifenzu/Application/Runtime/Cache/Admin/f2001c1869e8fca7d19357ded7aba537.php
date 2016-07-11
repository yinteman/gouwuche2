<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="./Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./Js/index.js"></script>
<link rel="stylesheet" href="/dulifenzu/Public/Css/public.css" />
<link rel="stylesheet" href="/dulifenzu/Public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

</head>
<body>


    <table class="table">
    	<thead>添加角色</thead>
    	<form action="<?php echo U('Admin/Rbc/addRoleHandle');?>" method="post">
        <tbody>
        	<tr>
        		<td><span>角色名称</span></td>
        		<td>
        			<input name="name" type="text"></input>
        		</td>
        	</tr>
        	<tr>
        		<td><span>角色备注</span></td>
        		<td>
        			<input name="remark" type="text"></input>
        		</td>
        	</tr>
        	<tr>
        		<td><span>角色开启</span></td>
        		<td>
        			<input name="status" type="radio"checked="checked" value="1">开</input>
        			<input name="status" type="radio"  value="0">关</input>
        		</td>
        	</tr>
             <tr>
        		<td colspan="2">
        			<input type="submit" class="btn" value="提交"></input>
        		</td>
        	</tr>


               </tbody>

        </form>

       </table>

	
</body>
</html>