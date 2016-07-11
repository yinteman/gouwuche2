<?php 
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class RbcController extends CommonController
{
	
  public function index()
	{ 
    $db=D('User');
    $field=array('id','username');
    $result=$db->field($field)->relation(true)->select();
    $this->userInfos=$result;
    
   $this->display();
	}
	public function listRole(){
    $db=M('role');
    $field=array('id','name','status');
    $roles=$db->field($field)->select();
    $this->roles=$roles;
    $this->display('listRole');
	}

	public function listNode(){
	  $field=array('id','name','title','pid');
	  $node['pid']=intval($node['pid']);
	  $node=M('node')->field($field)->order('sort')->select();
	  $node=node_merge($node);
	 //var_dump($node);
	 $this->assign('node',$node)->display();

	}

	public function addAdmin(){
    $field=array('id','name','remark');
    $roles=M('role')->field($field)->select();
    $this->roles=$roles;
    $this->display('addAdmin');

	}
  public function addAdminHandle(){
    $user= array(
      'username' =>I('username'),
      'password' =>I('password','','md5'),
      'logintime'=>time(),
      'loginip'=>get_client_ip());
    $role_user=array();
   $uid=M('user')->data($user)->add();
     
    if ($uid) {
      
       
        foreach ($_POST['role_id'] as $rid):
        $role_user= array(
          'user_id' =>intval($uid),
          'role_id'=>intval($rid));



    if (M('user_role')->data($role_user)->add($role_user)) {
        $this->success('添加成功');
      }else{
      $this->error('添加失败');
      }
      endforeach;
   
      
    }else{ $this->error('添加失败');
  }

  }

	public function addRole(){
		
       $this->display('addRole');
	}

	public function addRoleHandle(){
      if(!IS_POST){die;}
        
        $data=$_POST;
        
      if (M('role')->data($data)->add()) {
      	$this->success('添加成功',U('Admin/Rbc/index'));
      }else{
      	$this->error('添加失败');
      }
	}


	public function addNode(){
      $pid=I('pid', 0, 'intval');
      $level=I('level', 1,'intval');
      $this->pid=$pid;
      //var_dump($pid);
      $this->level=$level;
      switch ($this->level) {
      	case '1':
      		$this->type="应用";
      		break;
      	case '2':
      		$this->type="控制器";
      		break;
      	case '3':
      		$this->type="方法";
      		break;
      }
      $this->display('addNode');
	}
	public function addNodeHandle(){
      $pid=I('pid', 0, 'intval');
      $level=I('level', 1,'intval');
      var_dump($data=$_POST);
      $data=$_POST;
      $data['pid']=$pid;
      $data['level']=$level;
     //var_dump($data);
       if (M('node')->data($data)->add()) {
       	$this->success('添加成功',U('Admin/Rbc/listNode'));
       }else{
       	$this->error('添加失败');
       }
	}

 //权限配置入口页面 
  public function access(){
  $rid=I('rid',1,'intval');

  $access=M('access')->where(array('role_id'=>$rid))->getField('node_id',true);
  $access=array_map('intval', $access);
  $node=M('node')->order('sort')->select();
  $node=node_merge($node,$access);
  $this->node=$node;
  $this->rid=$rid;
  //var_dump($node);
  $this->display('access');
}
//解决权限保存权限；
 public function accessHandle(){
  //var_dump($_POST);
  $rid=I('rid',1,'intval');
  $data=array();

  $node=$_POST['node'];
 foreach ($node as $val){
   $tmp=explode('_', $val);
   $data[]=array(
    'role_id'=>$rid,
    'node_id'=>$tmp['0'],
    'level'=>$tmp['1']
    );}
   $db=M('access');
   $db->where(array('role_id'=>$rid))->delete();
    $msg= $db->addAll($data);
   var_dump($msg);
  if ($msg) {
    $this->success("添加权限成功",U('Admin/Rbc/index'));
  }else{
    $this->error('添加失败');
  }
 }






}




 ?>