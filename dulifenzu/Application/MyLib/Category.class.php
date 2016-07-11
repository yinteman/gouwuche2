<?php 
namespace MyLib;

Class Category{
   /***********合并为一个数组**********************/
     static function unlimitForlevel($cate,$pid=0,$html='---'){
     	$arr=array();
     	foreach ($cate as  $val):
           if ($val['pid'] == $pid) {
           	$val['name']=str_repeat($html, $val['level'] -1).$val['name'];
           	$arr[]=$val;
           	$arr=array_merge($arr,self::unlimitForlevel($cate,$val['id'],$html));}
         endforeach;
        return $arr;
     		
     	
     }
 /******************组合成多个数组*****************************/

      static function unlimtForLayer($cate,$pid=0){
      	 $arr= array();
      	 foreach ($cate as $val):
      	 	if ($val['pid'] == $pid) {
                
      	 		$name ='child'.($val['level']+1);
      	 		$val[$name]=self::unlimtForLayer($cate,$val['id']);
      	 		$arr[]=$val;
      	 	}
      	endforeach;
      	return $arr;
      }
   /*************************组合成Link型的***************/
    static function unlimitForLink($cate,$id){
    	$arr=array();
    	foreach ($cate as $val):
    		if ($val['id'] ==$id) {
    			$arr[]=$val;
    			$arr=array_merge(self::unlimitForLink($cate,$val['pid']),$arr);//如果将array_merge($arr1,$arr2)中的数组置换，则顺序会颠倒；
    		}
    	endforeach;
    	return $arr;
    }
/********************获取所有子类的ID******************************/
       static function getChildId($cate,$pid){
        $arr=array();
           foreach ($cate as  $val):
             if ($val[pid] == $pid) {
               $arr[]=$val['id'];
               $arr=array_merge($arr,self::getChildId($cate,$val['id']));
             }
           endforeach;
           return $arr;
       }


}








 ?>