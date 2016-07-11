<?php 
namespace Admin\Controller;
use Think\Controller;
use MyLib;
/**
* 实现无现级分类
*/
class CateController extends Controller
{
	
	/**分类列表显示**/
	public function index(){
	$cate=M('cate')->order('sort')->select();

	$newCate=new MyLib\Category();
	$cate=$newCate:: unlimitForLevel($cate);
	
	$this->cates=$cate;
		$this->display();
	}




	/**添加分类页面****/
    public function addCate(){
    	$pid=I('pid',0,'intval');
    	$level=(int)$_GET['level'];
      var_dump($level);
    	$this->pid=$pid;
    	$this->level= $level +1;
    	$this->display('addCate');
    }

    /***添加分类操作***/
   public function addCateHandle(){
   	$date=$_POST;
   	 if (M('cate')->data($date)->add()) {
   	 	$this->success('添加成功',U('addCate'));
   	 }else{
   	 	$this->error('添加失败');
   	 }
   }



   /*排序操作**/
   function sortHandle(){
   $sorts=$_POST;
    $data=array();
   $i=0;
   foreach ($sorts as $id =>$sort):

   $data=M('cate')->where(array('id'=>$id))->setField('sort',$sort);
    $i +=$data;
   endforeach;
   if ($i) {
   	$data=array(
      'errno'=>1,
   	'msg'=>'success'
   		);
 }else{
 	$data=array(
      'errno'=>0,
   	'msg'=>'fail'
   		);
 }

 $this->ajaxReturn($data,'json');
 $this->redict('index');


 } 
   
}









 ?>