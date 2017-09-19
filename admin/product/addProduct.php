<?php
    header("content-type:text/html;charset=utf-8");
        require_once '../connect.php';
        $conn = new Db();
        $conn_db = $conn->connect();

        if (!$conn_db) {
            echo "请检查网络连接！";
        }else{
            // 接收数据
            $title = isset($_POST['product_title'])?$_POST['product_title']:'';
            $content = isset($_POST['product_content'])?$_POST['product_content']:'';
            $time = isset($_POST['product_time'])?$_POST['product_time']:'';
            $productid = isset($_POST['product_id'])?$_POST['product_id']:'';

            $addsql="insert into products(productid,title,content,newstime,online)
            values('". $productid."','".$title."','".$content."','".$time."','false')";

            if(mysqli_query($conn_db,$addsql)){
               echo '添加成功！';
             }else{
               echo '添加失败,请检查网络连接！';
            }
        }
?>
