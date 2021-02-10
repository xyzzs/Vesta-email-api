# 【PHP源码】基于Vesta 的自助临时邮箱申请


已经实现功能：

1.自助申请邮箱

2.自动转发邮箱到设置的

3.可以设置是否保留转发邮箱

其他功能，你们说我来写上


当前临时邮箱必须同时满足以下条件：

1.必须使用Vesta

2.vps/服务器必须开通邮件端口



首先 ，先安装Vesta，这里我推荐使用Ubuntu系统
# Connect to your server as root via SSH
ssh root@your.server
# Download installation script
curl -O http://vestacp.com/pub/vst-install.sh
# Run it
bash vst-install.sh

然后修改function.php里面的相关配置信息

Vesta面板用户，建议这里新建一个用户


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

