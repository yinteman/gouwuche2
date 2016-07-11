<?php 
namespace Admin\Model;
use Think\Model\RelationModel;


/**
* 博客的关联模型
*/
class BlogRelationModel extends RelationModel
{
	protected  $trueTableName="th_blog";

	protected $_link=array(
		'attr' => array(
			'mapping_type' =>self::MANY_TO_MANY ,
			'class_name' =>'attr' ,
			'mapping_name' =>'attrs',
			'foreign_key'=>'blog_id',
			'relation_foreign_key'=>'attr_id',
			'relation_table'=>'th_blog_attr',
			) , 
        'cate'=> array(
        	'mapping_type' =>self::BELONGS_TO ,
        	'class_name'    => 'cate',
        	'foreign_key'   => 'cid',
        	'mapping_name' =>'cates',
        	'mapping_field' =>'name',
        	'as_field' =>'name:cate' ),
		);

	function getBlogInfo($type=0){
		$field=array('isset');
        $where=array('isset'=>$type);
   return $data=$this->field($field,true)->where($where)->relation(true)->select();
	}
	
}








 ?>