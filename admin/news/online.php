<?php
/*发布新闻信息*/
  header("content-type:text/html;charset=utf-8");
  //连接数据库
  require_once '../connect.php';
  $conn = new Db();
  $conn_db = $conn->connect();
  if ($conn_db) {
    //接收要发布的新闻id
     $ni = isset($_POST['news_id'])?$_POST['news_id']:'';
    // $ol = isset($_POST['online'])?$_POST['online']:'';
    $update = 'UPDATE news SET online=true WHERE newsid ='.$ni;
    $query = mysqli_query($conn_db,$update);
    if ($query) {
      echo "发布成功！！";
    }
    else{
      echo "发布失败";
    }
  }else{
      echo "数据库连接失败！";
  }
?>
