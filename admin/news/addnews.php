<?php
    header("content-type:text/html;charset=utf-8");
        require_once '../connect.php';
        $conn = new Db();
        $conn_db = $conn->connect();

        if (!$conn_db) {
            echo "请检查网络连接！";
        }else{
            //接收数据
            $title = isset($_POST['news_title'])?$_POST['news_title']:'';
            $content = isset($_POST['news_content'])?$_POST['news_content']:'';
            $time = isset($_POST['news_time'])?$_POST['news_time']:'';
            $newsid = isset($_POST['news_id'])?$_POST['news_id']:'';

            $addsql="insert into news(newsid,title,content,newstime,online)
            values('". $newsid."','".$title."','".$content."','".$time."','false')";

            if(mysqli_query($conn_db,$addsql)){
               echo '添加成功！';
             }else{
               echo '添加失败,请检查网络连接！';
            }
        }
?>
