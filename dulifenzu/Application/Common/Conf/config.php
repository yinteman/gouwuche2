<?php
return array(
	//配置多个独立快一个入口文件
	'MODULE_ALLOW_LIST'=>array('Home','Admin','Wap'),
	'DEFAULT_MODULE'=>'Home',
    
    //数据库的配置；
    'DB_TYPE'=>'Mysql', // 数据库类型
    'DB_HOST'=>'localhost',
    'DB_USER'=>'root',
    'DB_NAME'=>'rbc',
    'DB_PWD'=>'',
    'DB_PREFIX' => 'th_', // 数据库表前缀 
    'DB_CHARSET'=> 'utf8', // 字符集
   

   //RBC数据配置；
    "USER_AUTH_ON" => true,                    //是否开启权限验证(必配)
    "USER_AUTH_TYPE" => 1,                     //验证方式（1、登录验证；2、实时验证）
 
    "USER_AUTH_KEY" => 'uid',                  //用户认证识别号(必配)
    "ADMIN_AUTH_KEY" => 'superManager',          //超级管理员识别号(必配)
    "USER_AUTH_MODEL" => 'user',               //验证用户表模型 ly_user
   
    "RBAC_SUPERADMIN" => 'admin',              //超级管理员名称
 
 
    "NOT_AUTH_MODULE" => 'Index',       //无需认证的控制器
    "NOT_AUTH_ACTION" => 'index,',              //无需认证的方法
 
    'REQUIRE_AUTH_MODULE' =>  'access',              //默认需要认证的模块
    'REQUIRE_AUTH_ACTION' =>  '',              //默认需要认证的动作
 
   ' GUEST_AUTH_ON' =>'true',
 
    "RBAC_ROLE_TABLE" => 'th_role',            //角色表名称(必配)
    "RBAC_USER_TABLE" => 'th_user_role',            //用户表名称(必配)
    "RBAC_ACCESS_TABLE" => 'th_access',        //权限表名称(必配)
    "RBAC_NODE_TABLE" => 'th_node',            //节点表名称(必配)


    'LOAD_EXT_CONFIG' =>'verify',            //加载配置文件;
    
    'AUTOLOAD_NAMESPACE' => array(
        'MyLib'    => APP_PATH.'MyLib',  //拓张自己的类库；
        
  ),

    'TAGLIB_BUILD_IN'=>"Html,Cx",
     'TAGLIB_PRE_LOAD'=>"TagLib\\My"
     
    )

?>