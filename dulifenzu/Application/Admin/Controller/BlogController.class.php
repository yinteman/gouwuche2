<?php 
namespace Admin\Controller;
use Think\Controller;
use MyLib;
use Think;

/**
* 博文类
*/
class BlogController extends Controller
{
	//显示博客类
	public function index()
	{
		$data=D('BlogRelation')->getBlogInfo();

    $this->dataInfo=$data;
    $this->display();
	}

  //点击分类显示博客
  public function showByCate(){
     $cid=I('cid',0,'intval');
     //var_dump($cid);
     $cate=M('cate')->select();
     $unlimt=new MyLib\Category();
     $cates=$unlimt::getChildId($cate,$cid);
     $cates[]=$cid;
     $where = array('cid' => array('IN',$cates));
     $field=array('id','title','time');
     $blogs=M('blog')->field($field)->where($where)->select();
     $this->dataInfo=$blogs;
    $this->display();
  /*    
    if (dataInfo) {
      $data=array(
         'errno'=>1
         
        );
    }else{
      $data=array(
        'errno'=>0,
        );
    }

    $this->ajaxReturn($data,'json');
    */
    
  }


//回收站页面
    public function trash(){
      $data=D('BlogRelation')->getBlogInfo(1);
      $this->dataInfo=$data;
      $this->display('index');
    }
//添加到回收站
    public function toTrash(){
      $id=(int)$_GET['id'];
      $type=(int)$_GET['type'];
      $data = array('id' =>$id ,'isset'=>$type);
      if (M('blog')->save($data)) {
           $this->success('success',U('trash'));
      }else{
        $this->error('failed');
      }
      
    }
  //显示博客内容
    public function showContent(){
      $id=I('id',0,'intval');
      $blog=D('BlogView')->where("blog.id={$id}")->select();
      $array['id']=$id;
      $array['title']=$blog[0]['title'];
      $content=$blog[0]['content'];
      $array['cate']=$blog[0]['name'];
      $array['time']=$blog[0]['time'];
      $preg="/src=['|\"](.*?)['|\"]/is";
      preg_match_all($preg, $content, $arr);
      $array['src']=$arr[0][0];
      $preg1='/(^<.*?>)(.*?)(<img.*?>)(.*?)/is';
      preg_match_all($preg1, $content, $arr1);
      $array['content']=$arr1[2][0];
      //var_dump($array);
      $this->assign($array)->display();
      
    }

	//添加博客页面显示
	public function addBlog()
	{
		$cate=M('cate')->order('sort')->select();
        $unlimit=new \MyLib\Category();
		$cates=$unlimit::unlimitForLevel($cate);
		$this->cates=$cates;

         $attrs=M('attr')->select();
         $this->attrs=$attrs;
		$this->display();
        }
        //设计图片上传的事宜
       public function uplodeImage($fileName){
       	
       	$fileName="E://Demo".$fileName;
       	$imagwater=new MyLib\Image();
         return  $imagwater::text($fileName,'myway');
         }
       	
       //处理博文上传
       function addBlogHandle(){
       	$data=$_POST;
       	$tr=$data['content'];
       	$preg="/src=['|\"](.*?)['|\"]/is";
       	preg_match_all($preg, $fileName, $arr);
       	if (is_array($arr) && $arr[1][0]):
       		$str=$arr[1][0];
       		$this->uplodeImage($str);
       	endif;
        
        $blogs= array(
        	'title' => $data['name'],
        	'content' => $data['content'],
        	'time' =>time(),
        	'cid' => $data['cid'],
        	'num' =>1);
        if ($blog_id =M('blog')->data($blogs)->add()) {
        	if (isset($data['attrs'])) {
        		   
        		foreach ($data['attrs'] as $val):
        			$sql="INSERT INTO th_blog_attr ( `attr_id` , `blog_id`) values ( {$val} , {$blog_id}) ;";
        		    M('blog_attr')->query($sql);
        		endforeach;
        		
                   
        		    
        		}
        		$this->success('成功');
        }else{
        	$this->error('shibai');
        }
       	}
       
       }



?>