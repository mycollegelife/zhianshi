
<style>
	#password{
		width: 600px;
		margin: 100px auto;
	}
	#password input {
	  	width: 60%;
	  	height: 48px;
	  	line-height: 48px;
	  	display: block;
	  	border-radius: 4px;
	  	border: 1px solid #e8e8e8;
	  	padding: 0 20px;
	  	font-size: 16px;
	  	color: #73787c;
	  	border-color: #c1bebe;
	  	margin: 14px 0px;
	  	float: left;
	}
	#password span{
		width: 32%;
		height: 48px;
		line-height: 48px;
	  	margin: 14px 0px;
		color: #f00;
		font-size: 14px;
		float: right;
	}

	#password input[name="submit"]{
	  	width: 16%;
	  	height: 35px;
	  	line-height: 35px;
	  	cursor:pointer;
	  	background: #38adff;
	  	color: white;
	  	margin-left: 28%;
	  	user-select:none;
	}
</style>
<h3>密码修改</h3>
<form  action="password/change_password.php" method="post" id="password">
	<input type="password" name="prepass" placeholder="请输入原密码">
	<span>*输入密码时注意大小写</span>
	<input type="password" name="newpass" placeholder="请输入新密码">
	<span></span>
	<input type="password" name="newpassagain" placeholder="请重复输入新密码">
	<span></span>
	<input type="button" name="submit" value="提交">
</form>
<script type="text/javascript">
	var $prepass = $('input[name="prepass"]');
	var $newpass = $('input[name="newpass"]');
	var $newpassagain = $('input[name="newpassagain"]');
	var $span1 = $('span:nth-of-type(1)');
	var $span2 = $('span:nth-of-type(2)');
	var $span3 = $('span:nth-of-type(3)');
	var $btn = $('input[name="submit"]');
	var a,b,c;
	$prepass.blur(function(){
		if ($prepass.val() == '') {
			$span1.html('*请输入原始密码！')
		}else if ($prepass.val() ==
			// 打印原始value值
			<?php
				require_once '../connect.php';
				$conn = new Db();
				$conn_db = $conn->connect();
				if (!$conn_db) {
					echo "数据库连接失败！";
				}else{
					$select = "select password from user";
					$query = mysqli_query($conn_db,$select);
					$arr = mysqli_fetch_assoc($query);
					echo $arr['password'];
				}
			?>
			){
			$span1.html('');
			a = 'true'
		}else{
			$span1.html('*请输入正确的原始密码！')
		}
	});
	$newpass.blur(function(){
		if ($newpass.val() == '') {
			$span2.html('*请输入新密码')
		}else if($newpass.val() == $prepass.val()){
			$span2.html('*新密码与原始密码不能一样')
		}else if($newpassagain.val() == $newpass.val()){
			$span2.html('');
			$span3.html('');
			b = 'true'
		}
		else{
			$span2.html('');
			b = 'true'
		}
	});
	$newpassagain.blur(function(){
		if ($newpassagain.val() == '') {
			$span3.html('*请再次输入新密码')
		}else if($newpassagain.val() == $newpass.val()){
			$span3.html('');
			c = 'true'
		}else{
			$span3.html('*两次输入密码不一致')
		}
	});
	$btn.click(function(){
		if (a == 'true' &&  b == 'true' && c == 'true') {
			$btn.attr('type','submit')
		}
	})
</script>





















