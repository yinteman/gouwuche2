<?php 

function node_merge($node, $access='' ,$pid=0){
	$array=array();
	foreach ($node as $val):
        if (is_array($access)) {

            $val['access']=in_array( $val['id'], $access)?1:0;
           }
        if ($val['pid'] == $pid) {
        	$val['child']=node_merge($node,$access,$val['id']);
        	$array[]=$val;
        }
    endforeach;
		
   return $array;
	
}






 ?>