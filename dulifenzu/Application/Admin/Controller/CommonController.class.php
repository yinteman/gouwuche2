<?php 
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class CommonController extends Controller
{
	
	function _initilize()
	{
		if (!isset($_SESSION[C('USER_AUTH_KEY')])) {
			$this->redirect('Admin\Index\login');
		}
		if (C('USER_AUTH_ON')) {
			$RBC=new \Org\Util\Rbac();
			$RBC::AccessDecision(GOURP_NAME)||$this->error('错误');
		}
	}
}












 ?>