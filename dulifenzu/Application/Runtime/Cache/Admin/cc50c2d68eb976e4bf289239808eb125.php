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
	<form method="post" action="<?php echo U('Admin/Rbc/accessHandle');?>">
		<table class="table">
		
		 <thead>
		 	<td>应用名称</td>
	
 
		 	
           </thead>
           <tbody >
			<?php if(is_array($node)): foreach($node as $key=>$app): ?><tr>
                     <td>
                     	<tr class='app'>
                     		<td>
                     		<div class="checkbox" >
                               <label>
                               <input type="checkbox" value="<?php echo ($app["id"]); ?>_1" name="node[]" level="1"  <?php if($app['access']): ?>checked="checked"<?php endif; ?>
                                 />
                                <?php echo ($app["title"]); ?>
                            </label>
                           </div>
                     	   </td>

                     		<td>
                     		<table class="table table-hover">
                     		<thead>
                     		<td >控制器名称</td>
                     		 <td>方法名称</td>
                     		</thead>
                     		
                     		<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$controller): ?><tr class="controller">
                     			<td>
                     			<div class="checkbox">
                                   <label>
                                    <input type="checkbox" value="<?php echo ($controller["id"]); ?>_2" name="node[]" level="2"<?php if($controller['access']): ?>checked="checked"<?php endif; ?>
                                      />
                                     <?php echo ($controller["title"]); ?>
                                  </label>
                                  </div>
                     		         </td>
                                   <td>
                                   <?php if(is_array($controller["child"])): foreach($controller["child"] as $key=>$method): ?><ul style="list-style:none;float: left;">
                     			     	<li>
                     			     	<div class="checkbox">
                                          <label>
                                           <input type="checkbox" value="<?php echo ($method["id"]); ?>_3" name="node[]"level="3" <?php if($method['access']): ?>checked="checked"<?php endif; ?> >
                                            <?php echo ($method["title"]); ?>
                                           </label></div>
                                          </li>
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
		<input type="hidden" value="<?php echo ($rid); ?>" name="rid"></input>
		<input type="submit" class="btn btn-default" value="保存权限分配"></input>
    </form>
	</div>
</body>
<script type="text/javascript">
	$(function(){
         






        $('input[level=1]').click(function(){
        	var inputs=$(this).parents('.app').find('input');
     
        	$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
        });
       $('input[level=2]').click(function(){
       	    var inputs=$(this).parents('.controller').find('input');
       	    $(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
       })
     




	})





</script>
</html>