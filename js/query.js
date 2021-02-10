function query() {

    var v = $('#v').val().replace(/\s/g,"");
	var mail = $('#mail').val().trim().replace(/\s/g,"");
	var user = $('#user').val().trim().replace(/\s/g,"");
	//var only = $('#only').val().trim().replace(/\s/g,"");
	var key = $('#key').val().trim().replace(/\s/g,"");
	$("#atext").text('正在提交中...');
	$('#atext').removeAttr('onclick');
	$("#atext").css("background-color","#848484");
	
    $.get("in.post.php?mail=" + mail +'&user='+ user +'&v='+ v +'&key='+ key,function(result) {
		
		if(result=='0'){
			alert('您输入的邀请码有误，请重新输入。');
			window.location.reload();
		}else{
			
			$("#Email").html(result);
			$("#atext").text('重新申请，请刷新！');
			
		}
		
    });
	

}

