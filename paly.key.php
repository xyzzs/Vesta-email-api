<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action=""  method="get">

数量:<br>
<select name="sum">
  <option value="1">1 邀请码</option>
  <option value="5">5 邀请码</option>
  <option value="10">10 邀请码</option>
  <option value="20">20 邀请码</option>
  <option value="20">50 邀请码</option>
</select>
<br><br>
<input type="submit" value="submit">
</form> 
<br><br>
<?php
error_reporting(0);
function getRandomString($len, $chars=null)
{
    if (is_null($chars)){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    }

    for ($i = 0, $str = '', $lc = strlen($chars)-1; $i < $len; $i++){
        $str .= $chars[mt_rand(0, $lc)];
    }
    return $str;
}


//GET
if($_GET['sum']){
	for($i=0;$i<$_GET['sum'];$i++){
		$keys[]=$key=getRandomString(8);
		file_put_contents('./key/'.$key );
		
	}
}

if($_GET['sum']){
	
	echo '<textarea rows="10" cols="30">';
	foreach($keys AS $v){
		
		ECHO $v."\r\n";
		
	}
echo '</textarea>';
	
}

?>


</body>
</html>
