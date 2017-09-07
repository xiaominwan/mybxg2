<?php
//var_dump($_SERVER);
$dir="main";//默认路径名称
$filename="index";//默认文件名称
//
if(array_key_exists("PATH_INFO",$_SERVER)){
//去掉路径中的第一个/;
$path = $_SERVER["PATH_INFO"];
$str=substr($path,1);//截取掉路径中的第一个/
	//获取url中的路径
	//分割路径和文件名称
	$arr=explode("/",$str);
	if(count($arr)==2){
	$dir=$arr[0];
	$filename=$arr[1];
	
	}else{
		//如果不是两层路径就跳转到登录页面
	$filename="login";
	}


}
include("./views/".$dir."/".$filename.".html");

?>