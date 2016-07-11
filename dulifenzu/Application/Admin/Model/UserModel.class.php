<?php 

namespace Admin\Model;
use Think\Model\RelationModel;
 /**
 * 
 */
 class UserModel extends RelationModel
 {
 	
 	protected $tableName='user';
  protected $autoReadRelations = true;
  

 	protected $_link=array(
               'role'=>array(
                      'mapping_type'      =>  self::MANY_TO_MANY,
                       'class_name'        =>  'role',
                       'mapping_name'      =>  'roles',
                       'foreign_key'       =>  'user_id',
                        'relation_foreign_key'  => 'role_id',
                        'mapping_fields'     =>   'remark, name' , 
                        
                        'relation_table'    =>  '__USER_ROLE__' ,//此处应显式定义中间表名称，且不能使用C函数读取表
                        //'relation_deep'    =>'true'
                        
                        )
                );
 }









 ?>
