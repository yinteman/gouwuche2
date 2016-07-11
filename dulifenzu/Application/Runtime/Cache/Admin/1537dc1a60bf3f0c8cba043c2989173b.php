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
   	   		<th>层级</th>
   	   		<th>排序<a id="sort" class="btn">?</a></th>
   	   		<th>操作</th>
   	   	</thead>
   	       <?php if(is_array($cates)): foreach($cates as $key=>$cate): ?><tr>
   	          	<td><?php echo ($cate["id"]); ?></td>
   	          	<td><?php echo ($cate["name"]); ?></td>
   	          	<td><?php echo ($cate["level"]); ?></td>
   	          	<td>
   	          		<input class="sort" sid="<?php echo ($cate['id']); ?>" type="text" value="<?php echo ($cate['sort']); ?>" />
                   
   	          	</td>

   	          	<td>
   	          		<a href="<?php echo U('Admin/Cate/addCate',array('pid'=>$cate['id'],'level'=>$cate['level']));?>">添加子分类<?php echo ($cate["level"]); ?></a>
   	          		<a href="#">修改</a>
   	          		<a href="#">删除</a>
   	          	</td>
   	          </tr><?php endforeach; endif; ?>
   	   </table>
   </div>
</body>
<script type="text/javascript">
	$(function(){

       $('#sort').click(function(){
       	var str='';
            $('input').each(function(){
            	  
            	  var ke=$(this).attr('sid');
                  var v=$(this).val();
                  str +="'"+ke+"' : "+v+" , ";
                  
                  
            });
                var index=str.lastIndexOf(',');
                str=str.substr(0,index);
                str="{"+str+"}";
               
                var obj =  eval('(' + str + ')');
                var url='/dulifenzu/Index.php/Admin/Cate/sortHandle';
                $.post(url,obj,func,'json');

                function func(data){
                    if (data.errno){
                    	alert('排序成功');
                    	location.href='/dulifenzu/Index.php/Admin/Cate/index';
                    }else{
                    	alert("排序失败");
                    }
                }
  })






	})





</script>
</html>