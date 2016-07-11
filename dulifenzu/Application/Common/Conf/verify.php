<?php 

return array(

/**********验证码配置项**********/
//验证码长度
'VERIFY_LENGTH' => 4,
//验证码图片宽度(像素)
'VERIFY_WIDTH' => 250,
//验证码图片高度(像素)
'VERIFY_HEIGHT' => 60,
//验证码背影颜色(16进制色值)
'VERIFY_BGCOLOR' => '#000000',
//验证码种子
'VERIFY_SEED' => '3456789aAbBcCdDeEfFgGhHjJkKmMnNpPqQrRsStTuUvVwWxXyY',
//验证码字体文件
'VERIFY_FONTFILE'=> 'Public/Css/newcut.ttf',
//验证码字体大小
'VERIFY_SIZE'=> 30,
//验证码字体颜色(16进制色值)
'VERIFY_COLOR'=> '#444444',
//SESSION识别名称
'VERIFY_NAME'=> 'verify',
//存储验证码到SESSION时使用函数
'VERIFY_FUNC'=> 'strtolower',


/**********水印配置项**********/
//水印图路径
'WATER_IMAGE'=> './water.png',
//水印位置
'WATER_POS'=>6,
//水印透明度
'WATER_ALPHA'=> 60,
//JPEG图片压缩比
'WATER_COMPRESSION'=> 100 ,
//水印文字
'WATER_TEXT'=> 'HouDunWang.com',
//水印文字旋转角色
'WATER_ANGLE'=> mt_rand(-15,15),
//水印文字大小
'WATER_FONTSIZE'=> 30,
//水印文字颜色
'WATER_FONTCOLOR'=> '#0000',
//水印文字字体文件(写入中文字时需使用支持中文的字体文件)
'WATER_FONTFILE'=> "E://Demo/dulifenzu/Public/Css/newcut.ttf",
//文字字符编码
'WATER_CHARSET'=> 'UTF-8',


/**********缩略图配置项**********/
//缩略图宽度
'THUMB_WIDTH'=> 200,
//缩略图高度
'THUMB_HEIGHT'=> 120,

)












 ?>