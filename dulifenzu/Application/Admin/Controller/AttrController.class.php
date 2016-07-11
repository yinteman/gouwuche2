<?php 
namespace Admin\Controller;
use Think\Controller;
/**
* 属性控制器；
*/
class AttrController extends Controller
{
	
	function index()
	{
		$attrs=M('attr')->select();
		$this->attrs=$attrs;
		$this->display('listAttr');
		
	}

	function addAttr(){
        $this->display('addAttr');
	}
	function addAttrHandle(){
		if (M('attr')->data($_POST)->add()) {
			$this->success('添加成功',U('Attr/index'));
		}else{
			$this->error('添加失败');
		}
	}

	
}








 ?>