<?php
// 启用session
session_start();

// 输入类input
include('password/input.class.php');
$input=new input();
// 连接数据库
include('connect.php');
$conn = new Db();
$conn_db = $conn->connect();
//
$act=$input->get('act');
if ($act!==false) {
	$username=$input->post('username');
	$password=$input->post('password');
	$sql="SELECT * from user WHERE username='{$username}' and password='{$password}'";

	$mysqli_result=mysqli_query($conn_db,$sql);

	if($row=$mysqli_result->fetch_array()){
         $_SESSION['username']=$row['username'];
         header("location:manage.php");
     }else{
         echo "密码或者用户名错误";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
    *{
      padding: 0px;
      margin: 0;
    }
    html,body,#container{
        width: 100%;
        height: 100%;
       background-image: -webkit-linear-gradient(top left, #C2FFD8 10%, #465EFB 100%);
       background-image: -o-linear-gradient(top left, #C2FFD8 10%, #465EFB 100%);
       background-image: linear-gradient(to bottom right, #C2FFD8 10%, #465EFB 100%);
    }

    #container {
        position: relative;
    }
    #login {
        position: absolute;
        top: 25%;
        left: 30%;
        width: 500px;

        background: white;
        border-radius: 5px;
        box-shadow:2px 2px 2px #888888;
    }

    #login-title {
        width: 100%;
        height: 64px;
        margin-bottom: 1px;
        text-align: center
    }
    form{
        width: 100%;
        margin-top: 20px;
    }
    #login input {
        width: 90%;
        height: 48px;
        line-height: 48px;
        display: block;
        border-radius: 4px;
        border: 1px solid #e8e8e8;
        padding: 0 20px;
        font-size: 16px;
        color: #73787c;
        margin: 28px auto;
    }
    #login input:last-child{
        cursor:pointer;
        background: #38adff;
        color: white;
    }
</style>
</head>
<body>
    <div id="container">
        <div id="login">
            <div id="login-title">
                <h1>智安仕后台管理系统</h1>
            </div>
            <form action="login.php?act=chk" method="post" >
                <input type="text" name="username" placeholder="请输入用户名" autofocus="true">
                <input type="password" name="password" placeholder="请输入密码" >
                <input type="submit" value="登陆">
            </form>
        </div>
    </div>
</body>
</html>












