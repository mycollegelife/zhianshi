<?php
    header("content-type:text/html;charset=utf-8");
    //接收删除新闻的id
    $productid = isset($_POST['product_id'])?$_POST['product_id']:'';
        //连接数据库
        require_once '../connect.php';
        $conn = new Db();
        $conn_db = $conn->connect();
        if ($conn_db) {

           $removesql = "DELETE FROM products WHERE productid =".$productid;
           $query = mysqli_query($conn_db,$removesql);
           if($query){
              echo "删除成功！";
           }
        }else{
            echo "数据库连接失败！";
        }
?>
