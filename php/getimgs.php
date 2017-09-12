<?php
/*
得到所有的轮播图片
*/
  header("content-type:text/html;charset=utf-8");
  //连接数据库
  require_once 'connect.php';
  $conn = new Db();
  $conn_db = $conn->connect();
  if ($conn_db) {
     $addsql = "SELECT * from img ORDER BY imgid ASC";
     $query = mysqli_query($conn_db,$addsql);
     if($query){
        $imgarr = array();
        while ($arr = mysqli_fetch_assoc($query)) {
          array_push($imgarr,$arr);
        }
        echo json_encode($imgarr);
     }
  }else{
      echo "数据库连接失败！";
  }
?>
