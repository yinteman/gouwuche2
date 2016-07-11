<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
	<meta charset="UTF-8">
	<title>addNode</title>
</head>
<link rel="stylesheet" type="text/css" href="/dulifenzu/Public/Css/bootstrap.min.css">
<script type="text/javascript" src="/dulifenzu/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dulifenzu/Public/Js/bootstrap.min.js"></script>
<body>
<div  class="contianer">
   <form class="form-horizontal" action="<?php echo U('Admin/Rbc/addNodeHandle');?>" method="post">
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label" >添加<?php echo ($type); ?>属性</label>
             <div class="col-md-10">
              <input type="text" class="form-control" id="inputName" name='name'>
             </div>
         </div>
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">添加<?php echo ($type); ?>名称</label>
    <div class="col-md-10">
      <input type="text" class="form-control" id="inputTitle3" name="title">
    </div>
  </div>
  
 <div class="col-md-offset-2">
 <label class="radio-inline" >
  <input type="radio" name="status" id="inlineRadio1" value="1" checked>开
</label>
<label class="radio-inline">
  <input type="radio" name="status" id="inlineRadio2" value="2">关
</label>
</div>

      <input type="hidden" name="pid" value="<?php echo ($pid); ?>"></input>
      <input type="hidden" name="level" value="<?php echo ($level); ?>"></input>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>

</form>
	</div>
</body>
</html>