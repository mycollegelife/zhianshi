
<?php
// 获取列表新闻
  header("content-type:text/html;charset=utf-8");
  //连接数据库
  require_once '../connect.php';
  $conn = new Db();
  $conn_db = $conn->connect();
  if ($conn_db) {

  	$productid = isset($_POST['productid'])?$_POST['productid']:'';

    $sql = "select * from products where productid = '".$productid."'";
    $query = mysqli_query($conn_db,$sql);
    $arr = array();

    while ($one_news = mysqli_fetch_assoc($query)) {
      array_push($arr,$one_news);
    }

    $data = json_encode($arr);
    echo $data;


  }else{
      echo "数据库连接失败！";
  }
?>
