<?php 
namespace Admin\Model;
use Think\Model\ViewModel;

/**
* 
*/
class BlogViewModel extends ViewModel
{
	
	protected $viewFields = array( 
		

		'blog' =>array('id','title','time','content') ,
		'cate'=>array('name','_on'=>"blog.cid=cate.id") ,
		
		);

	public function getAll($where,$limit){
		return $this->where($where)->limit($limit)->select();
	}
}



















 ?>