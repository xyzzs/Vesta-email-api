<?php

require_once 'function.php';


$acount = $_GET['user']??'';//用户名
$forward=$_GET['mail']??'';//转发邮箱
$only=$_GET['only']??'1';//是否保存
$value=$_GET['v']??'free-a1';//a1



//没有邀请码
if(!$_GET['key']){
	echo 0;
	exit;
}



// 邀请码
$key='./key/'.$_GET['key'];

//邀请码验证
if(!file_exists($key)){
	echo 0;
	exit;
}


//邮箱验证
if(!filter_var($forward, FILTER_VALIDATE_EMAIL)){
	echo '您输入的转发邮箱有误，请重新输入';
	exit;	
}


	//提示语
	$only_note=['保留已转发的邮件','不保留已转发的邮件'];
	//邮箱域名
	$domain=$domain[$value]['0'];
	
	$user['domain']=$domain;//所提交的域名
	
	//判断转发邮箱是否正确
	$addmail= addmail($user,$acount);

	if($addmail==0){
		//删除邀请码
		unlink($key);
		
		//邮件转发，检测邮箱
		$forwards=forward($user,$acount,$forward);
		
		if($only){
			//转发并不保存副本
			$forward_only=forward_only($user,$acount);
		}
		
		if($forwards==0){
			
			echo "邮箱创建成功！！！\r\n请及时保存以下信息！\r\n申请邮箱：<m style='color:red;font-size:14px'>".$acount.'@'.$domain."</m>\r\n并转发到：<m style='color:red;font-size:14px'>".$forward."</m>\r\n转发设置：<m style='color:red;font-size:14px'>不保留已转发的邮件</m>";
		}
		
	}elseif($addmail==4){
		
		echo '当前邮箱已被注册，请重新注册！';
		exit;
		
	}elseif($addmail==5){
		
		echo '当前域名禁止增加邮箱，请重新注册！';
		exit;
		
	}else{
		
		echo '注册失败，请重新注册！';
		exit;
		
	}





