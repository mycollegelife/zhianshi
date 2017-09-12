<?php
	header("content-Type:text/html;charset=utf-8");
	require_once '../connect.php';
	$conn = new Db();
	$conn_db = $conn->connect();
	if (!$conn_db) {
		echo "数据库连接失败！";
	}else{
		$newpass = isset($_POST['newpass'])?$_POST['newpass']:'';
		$select="update user set password = '".$newpass."' where username = '794594866'";
		$back = '...3秒后返回<script>setTimeout(function(){window.location.assign("../manage.php")},3000);</script> ';
		if (mysqli_query($conn_db,$select)) {
			echo "密码修改成功！".$back;
		}else{
			echo "密码修改失败".$back;
		}
	}
?>
