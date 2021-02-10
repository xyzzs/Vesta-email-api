<!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/amazeui.min.css">
<title>临时邮箱在线申请</title> 
</head>
<style>
    .header {
		padding:0;margin:0 auto;
      text-align: center;
	  max-width:670px;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
	
	
.tabs{
	max-width: 200px; word-wrap: break-word;
}
  </style>
<body>


<div class="header">

<hr/>

<div class="am-g">
<div class="am-u-md-8 am-u-sm-centered">
<p style="color:red;font-size:50px">临时邮箱</p>

<form class="am-form" method="get">
<fieldset class="am-form-set">
<input type="text" id="user" placeholder="输入用户名">
</fieldset>
<fieldset class="am-form-set">
<select id="v">
<option value="" style="display: none;" disabled selected>请选择</option>
<?php
require_once 'function.php';
foreach ($domain as $id=>$v){
	
	echo '<option value="'.$id.'">'.$v['1'].'</option>
';
	
}

?>

</select>
</fieldset>
<fieldset class="am-form-set">
<input type="email" id="mail" placeholder="要转发的邮箱">
</fieldset>

<!--fieldset class="am-form-set">
<select id="only">
<option value="1">服务器不保留已转发邮件 [荐]</option>
<option value="0">服务器保留已转发邮件</option>
  
</select>
</fieldset-->

<fieldset class="am-form-set">
<input type="text" id="key" placeholder="请输入邀请码">
</fieldset>

 <a href="javascript:void(0)" id="atext" onclick="query()"class="am-btn am-btn-primary am-btn-block">确定</a>
</form>

<br>==返回结果==<br>
<pre class="am-pre" style=" text-align: left;" id="Email" >
请一定要谨慎填写相关信息，此信息不支持修改！
没有任何保证，申请后请及时申请相关业务！


</pre>


</div>
</div>


<footer class="am-footer am-footer-default">
<div class="am-footer-miscs ">
<p>由 Hostloc 用户提供技术支持</p>
<p>CopyRight©2020 临时邮箱</p>
</div>
</footer>
</div>

<script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="./js/query.js?202008051"></script>
 
</body>
</html>