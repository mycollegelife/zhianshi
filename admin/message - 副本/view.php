<?php
	header("content-Type:text/html;charset=utf-8");
	require_once '../connect.php';
	$conn = new Db();
	$conn_db = $conn->connect();
	if (!$conn_db) {
		echo "数据库连接失败！";
	}else{
		$index  = isset($_POST['index'])?$_POST['index']:'';

		$sql = "select * FROM messages WHERE id='". $index ."'";

		$result = mysqli_query($conn_db,$sql);

		$row = mysqli_fetch_assoc($result);
		$array[] = $row;

		echo json_encode($array);


	}
