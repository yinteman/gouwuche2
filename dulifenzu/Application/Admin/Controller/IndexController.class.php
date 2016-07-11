<?php
namespace Admin\Controller;
use Think\Controller;
use MyLib;
class IndexController extends Controller {
    public function login(){
       $this->display('login');


    }
    function checkLogin(){

   if (!$this->check_verify(I('code'))) {
            $this->error('验证码错误');
      }
     $map=array();//生成认证条件;

     /*支持使用绑定账号*/
     $map['username']=$_POST['username'];
     $RBC=new \Org\Util\Rbac();
     $authInfo=$RBC::authenticate($map);

     /******使用用户名、密码、和状态认证**********/
     if ($authInfo==false) {
     	$this->error('禁用');
     }
     $authInfo['password']==md5($_POST['password'])||$this->error('账号错误');
     $_SESSION[C('USER_AUTH_KEY')]=$authInfo['id'];
     if ($authInfo['username']=='admin') {
     	session(C('ADMIN_AUTH_KEY'),true);
     }
     //缓存访问权限；
     $RBC::saveAccessList();
     $this->redirect('Admin\Rbc');

    }

    function check_verify($code, $id = ''){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
     public function verify(){

    	/*//引入验证码；
    	$verify=new \Think\Verify();
    	 // 配置验证码参数
        $verify->fontSize = 20;     // 验证码字体大小
        $verify->length = 1;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
*/
        $verify=new MyLib\Image(); 
        $verify::verify(4,252,60);
    }
}