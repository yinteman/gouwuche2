<?php 

namespace Admin\Widget;
use Think\Controller;
use MyLib;
/**
* 自定义widget
*/
class HotWidget extends Controller
{
	
	public function menu($data){
	
	$data=M('cate')->order('sort')->select();

	$unlimit=new \MyLib\Category();
	$cate=$unlimit::unlimtForLayer($data);
	//var_dump($cate);
    $this->cate=$cate;
	$this->display('Hot:menu');

	}
}






 ?>