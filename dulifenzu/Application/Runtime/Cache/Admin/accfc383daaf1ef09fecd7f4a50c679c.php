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
   <div id="top">
       <nav class="navbar navbar-default">
              <div class="container-fluid">
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="nav navbar-nav">
                                         <?php
 $sort=$attr['order']; $cate=M('cate')->order($sort)->select(); $unlimit=new \MyLib\Category(); $cate= $unlimit::unlimtForLayer($cate); foreach($cate as $val): ?><li class="dropdown">
                                 <a href="#" 
                                  <?php if($val['child2']): ?>class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"<?php endif; ?>><?php echo ($val["name"]); ?><span class="caret"></span></a>

                                      <ul class="dropdown-menu">
                                         <?php if(is_array($val['child2'])): foreach($val['child2'] as $key=>$cv): ?><li>
                                           <a href="#" 
                                           <?php if($cv['child3']): ?>class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"<?php endif; ?>>
                                           <?php echo ($cv["name"]); ?></a></li>
                                           <?php $cv['child3'] ?>
                                           <?php if($cv['child3']): if(is_array($cv['child3'])): foreach($cv['child3'] as $key=>$sv): ?><ul class="dropdown-menu">
                                                   <li><a href="#"><?php echo ($sv["name"]); ?></a></li>
                                                   </ul><?php endforeach; endif; endif; endforeach; endif; ?>
                                         
                                </ul>
                                
                                     </li><?php endforeach;?>
                   </ul>
        </div>
    </nav>
</div>

<!-- 添加部分 -->
   <form class="form-horizontal" action="<?php echo U('Admin/Attr/addAttrHandle');?>" method="post">
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label" >添加属性名称</label>
             <div class="col-md-10">
              <input type="text" class="form-control" id="inputName" name='name'>
             </div>
         </div>
  <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label" >颜色</label>
             <div class="col-md-10">
              <input type="text" class="form-control" id="inputSort" name='color' >
             </div>
         </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>

</form>
	</div>
</body>
</html>