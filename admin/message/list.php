<?php
	header("content-Type:text/html;charset=utf-8");
	require_once '../connect.php';
	$conn = new Db();
	$conn_db = $conn->connect();
	if (!$conn_db) {
		echo "数据库连接失败！";
	}else{
		$select = "select * from messages  order by time desc";
		$query = mysqli_query($conn_db,$select);
		$arr = array();
		while ($one_news = mysqli_fetch_assoc($query)) {
			array_push($arr,$one_news);
		}
		echo json_encode($arr);
	}
