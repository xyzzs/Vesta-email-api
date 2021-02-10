<?php
error_reporting(0);
/*Vesta 配置 */
$user=[
	'ip'=>'127.0.0.1',//Vesta服务器IP
	'username'=>'username',//Vesta面板用户
	'passwd'=>'passwd',//Vesta面板密码
];
	


//业务域名

$domain=[
	//['域名','描述']
	'a1'=>['baidu.com','A1 1T '],//A1网盘
	
	];

	
	
//添加邮箱
function addmail($user,$acount){
	
	$postvars = array(
		'user' => $user['username'],
		'password' => $user['passwd'],
		'returncode' => 'yes',
		'cmd' => 'v-add-mail-account',
		'arg1' => $user['username'],
		'arg2' => $user['domain'],
		'arg3' => strtolower($acount),
		'arg4' => 'SDdfsf'.mt_rand(500,1000),//密码随机，以防被登陆用以发送邮件
		'arg5' => '5',//空间大小M
	);
	
	return add_account($user['ip'],$postvars);


	
}

//邮件转发
function forward($user,$acount,$forward){
		$postvars = array(
		'user' => $user['username'],
		'password' => $user['passwd'],
		'returncode' => 'yes',
		'cmd' => 'v-add-mail-account-forward',
		'arg1' => $user['username'],
		'arg2' => $user['domain'],
		'arg3' => strtolower($acount),
		'arg4' => $forward,
	);
	return add_account($user['ip'],$postvars);
}

//不保存邮件
function forward_only($user,$acount){
	
		$postvars = array(
		'user' => $user['username'],
		'password' => $user['passwd'],
		'returncode' => 'yes',
		'cmd' => 'v-add-mail-account-fwd-only',
		'arg1' => $user['username'],
		'arg2' => $user['domain'],
		'arg3' => strtolower($acount),
	);

	return add_account($user['ip'],$postvars);
}

function add_account($vst_hostname,$postvars=array()){

	$postdata = http_build_query($postvars);
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
	$answer = curl_exec($curl);
	 return ($answer);

}