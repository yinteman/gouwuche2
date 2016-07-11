<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

</style>
<body>


<div id="boutom">
      <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="nav navbar-nav ">
                       <!--  level1 -->
                          <?php if(is_array($cate)): foreach($cate as $key=>$val): ?><li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false" cid="<?php echo ($val['id']); ?>"><?php echo ($val["name"]); ?><span class="caret"></span></a>
                                   <?php if($val['child2']): ?><ul class="dropdown-menu multi-level"  aria-labelledby="dropdownMenu">
                                     <!--  第二层 -->
                                         <?php if(is_array($val['child2'])): foreach($val['child2'] as $key=>$cv): ?><li  class="dropdown-submenu" >
                                           <a href="#" tabindex="-1"> <?php echo ($cv["name"]); ?></a>
                                           <?php if($cv['child3']): ?><ul class="dropdown-menu " >
                                             
                                              <?php if(is_array($cv['child3'])): foreach($cv['child3'] as $key=>$sv): ?><li><a href="#" class="dropdown-toggle"><?php echo ($sv["name"]); ?></a></li><?php endforeach; endif; ?>
                                           </ul><?php endif; ?>
                                            </li><?php endforeach; endif; ?>
                                    <!--  第二层结束 -->     
                                   </ul><?php endif; ?>
                            </li><?php endforeach; endif; ?>
                      <!--  level1 结束-->
                   </ul>
        </div>
    </nav>
</div>
</body>
<script type="text/javascript">
  $(function(){
      $(".dropdown-toggle").dblclick(function(){
           var cid=$(this).attr('cid');
           var url="/dulifenzu/index.php/Admin/Blog/showByCate/cid/"+cid;
           location.href=url;
           /*var url="/dulifenzu/index.php/Admin/Blog/showByCate";
             
           $.post(url,{'cid':cid},func,'json');
           function func(data){
              if (data.errno){
                
              }
             }*/

      });

  })






</script>
</html>