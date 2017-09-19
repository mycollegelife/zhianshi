<?php
/*发布产品信息*/
  header("content-type:text/html;charset=utf-8");
  //连接数据库
  require_once '../connect.php';
  $conn = new Db();
  $conn_db = $conn->connect();
  if ($conn_db) {
    //接收要发布的新闻id
     $ni = isset($_POST['product_id'])?$_POST['product_id']:'';
    // $ol = isset($_POST['online'])?$_POST['online']:'';
    $update = 'UPDATE products SET online=true WHERE productid ='.$ni;
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
