<?php
	header("content-Type:text/html;charset=utf-8");
	require_once '../connect.php';
	$conn = new Db();
	$conn_db = $conn->connect();
	if (!$conn_db) {
		echo "数据库连接失败！";
	}else{
		$pagenum = isset($_POST['pagenum'])?$_POST['pagenum']:'';
		//从指定地方提取
		if ($pagenum!='') {
			$pn = 10*($pagenum-1);
			$select = "select * from messages LIMIT 10 offset ".$pn;
			$query = mysqli_query($conn_db,$select);
			$arr = array();
			while ($one_news = mysqli_fetch_assoc($query)) {
				array_push($arr,$one_news);
			}
			echo json_encode($arr);
		}else{
			echo "数据库未接受到数据！！！";
		}
	}
?>