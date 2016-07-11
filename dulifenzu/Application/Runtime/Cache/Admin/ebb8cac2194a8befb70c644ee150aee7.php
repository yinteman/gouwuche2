<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
	<meta charset="UTF-8">
	<title>addNode</title>
</head>
<link rel="stylesheet" type="text/css" href="/dulifenzu/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="/dulifenzu/Public/Ueditor/themes/default/css/ueditor.css"/>  



<script type="text/javascript" src="/dulifenzu/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dulifenzu/Public/Js/bootstrap.min.js"></script>


<script type="text/javascript" src="/dulifenzu/Public/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/dulifenzu/Public/Ueditor/ueditor.all.min.js"></script>


<script type="text/javascript">

  window.UEDITOR_HOME_URL = "/dulifenzu/Public/Ueditor/";
  
  $(function(argument) {

    /*UE.Editor.prototype._bkGetActionUrl = UE.Editor.prototype.getActionUrl;
     UE.Editor.prototype.getActionUrl = function(action) {
    if (action == 'uploadimage' || action == 'uploadscrawl' || action == 'uploadimage') {
        return "<?php echo U('Admin/Blog/uplodeImage','','php');?>";
    } else if (action == 'uploadvideo') {
        return 'http://a.b.com/video.php';
    } else {
        return this._bkGetActionUrl.call(this, action);
    }
}*/

    var ue = UE.getEditor('container',{
   
    initialFrameWidth:1000,
    initialFrameHeight:800,

   
});
    

  })

</script>
<body>
<div  class="contianer">
   <form class="form-horizontal" action="<?php echo U('Admin/Blog/addBlogHandle');?>" method="post">
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label" >长传博文名称</label>
             <div class="col-md-10">
              <input type="text" class="form-control" id="inputName" name='name'>
             </div>
         </div>
      <div class="form-group">
             <label for="inputTitle" class="col-sm-2 control-label">分类别名</label>
             <div class="col-md-10">
              <select class="form-control" name="cid">
                <?php if(is_array($cates)): foreach($cates as $key=>$cate): ?><option value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["name"]); ?></option><?php endforeach; endif; ?> 
              </select>
              </div>
   </div>
   <div class="roww">
     <div class=" col-md-offset-2">
   <?php if(is_array($attrs)): foreach($attrs as $key=>$attr): ?><div class="checkbox-inline">
               <label>
              <input type="checkbox" value="<?php echo ($attr["id"]); ?>" name="attrs[]">
              <?php echo ($attr["name"]); ?>
            </label>
          </div><?php endforeach; endif; ?>
   </div>
</div>
   <div class="form-group">
             <label for="inputTitle" class="col-sm-2 control-label">博文内容</label>
             <div class="col-md-10">
               
                   <script id="container" name="content" type="text/plain">

                   </script>
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