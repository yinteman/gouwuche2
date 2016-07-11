<?php 

namespace TagLib;
use Think\Template\TagLib;
defined('THINK_PATH') or exit();

use MyLib;
/**
* 自定义标签库
*/
class My extends TagLib
{
	
	protected  $tags  = array(
		'unlimit'  =>array(
			'attr' => 'order',
			'close'=>1 ),
		);
	public  function _unlimit($attr,$content){
        $str=<<<str
              <?php

              \$sort=\$attr['order'];
		\$cate=M('cate')->order(\$sort)->select();
		\$unlimit=new \MyLib\Category();
	    \$cate= \$unlimit::unlimtForLayer(\$cate);
	      foreach(\$cate as \$val):
	      	     
                 ?>
str;
         $str .= $content;
         $str.="<?php endforeach;?>";
        return $str;
	}
	
}








 ?>