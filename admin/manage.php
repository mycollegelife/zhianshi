<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>用户管理界面</title>
  <!-- 引入jquery -->
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- 页面结构

  左右结构

    div#manage-nav
      图片管理
      资讯管理
      修改密码

    div#manage-container

   -->
  <style>
/*公共样式*/
    *{
       padding: 0px;
       margin: 0px;
       text-decoration: none;
    }
    html,body{
        height: 100%;
        width: 100%;
        font-family: '微软雅黑';
        font-size: 16px;
    }
    h3{
        width: 100%;
        height: 40px;
        line-height: 40px;
        font-size: 1.3em;
        letter-spacing: 0.15em;
        color:#fff;
        background: rgba(66,79,99,0.4);
        text-align: center;
        cursor: pointer;
    }
    .page{
        width: 96%;
        padding: 0px 2%;
    }
    b.display{
        display: none;
    }/*匹配id*/
    #alertdiv{
        width: 440px;
        height: 140px;
        border: 1px solid #EAEAEA;
        background: #FDFDFD;
        border-radius: 5px;
        box-shadow: 0px 0px 2px #EAEAEA;
        position: absolute;
        top: -200px;
        left: 50%;
        margin-left: -220px;
        padding: 10px 20px;
        transition: all 0.5s;
        /*display: none;*/
    }
    #alertdiv nav{
        font-size: 18px;
    }
    #alertdiv p{
       font-size: 12px;
       margin-top: 10px;
    }/*弹出框*/

/*````````````````````````主页面·······························*/
    #manage-nav{
        width: 18%;
        height: 100%;
        float: left;
        background-color: rgba(66,79,99,0.8);
        color: white;
        position: fixed;
        padding: 1%;
    }
    #manage-nav h2{
        font-size: 26px;
        text-align: center;
         margin-top: 30px;
    }
    #nav{
        list-style: none;
        margin-top: 3.5em;
        padding: 0em 2em;
    }
    #nav li{
        text-align: center;
        list-style: none;
    }
    #nav li:hover>a{
        color: #65CEA7;
    }
    #nav li a{
        display: block;
        height: 2.5em;
        width: 100%;
        color: white;
        text-align: center;
        line-height: 2.5em;
        text-decoration-line: none;
    }
    #nav li.hover>a{
        background-color:rgba(66,79,99,1);
        color: #65CEA7;
    }
    #manage-container{
        width: 80%;
        height: 100%;
        float: right;
    }
/*··································图片管理``````````````````*/
    #img{
        text-align: center;
    }
    #img ul{
        list-style: none;
        float: left;
    }
    #img ul li{
        width: 30%;
        float: left;
        margin: 66px 5px;
        position: relative;
    }
    img{
        width: 100%;
        height: 200px;
    }
    .upfile{
        width: 100%;
        height: 100%;
        opacity: 0;
        position: absolute;
        left: 0;
        bottom: 0;
        cursor: pointer;
        text-align: center;
    }
    img:hover{
        cursor: pointer;
    }
/*`````````````````````````````````资讯管理··················*/
/*增加新闻*/
    #new{
        display: block;
        margin: 100px auto;
    }
    #new input {
        width: 88%;
        height: 48px;
        line-height: 48px;
        display: block;
        border-radius: 4px;
        border: 1px solid #e8e8e8;
        padding: 0 20px;
        font-size: 16px;
        color: #73787c;
        margin: 28px auto;
        outline: none;
    }
    #new input:last-child{
        cursor:pointer;
        background: #38adff;
        color: white;
    }
    #editor{
        width: 93%;
        margin:20px auto;
    }
/*新闻列表*/

/*··································修改密码··················*/
  </style>
</head>
<body>
    <div id="manage-nav">
        <h2>智安仕后台管理系统</h2>
        <ul id="nav">
            <li class="hover"><a href="javascript:0;">图片管理</a></li>
            <li><a href="javascript:0;">增加新闻</a></li>
            <li><a href="javascript:0;">新闻列表</a></li>
            <li><a href="javascript:0;">增加产品</a></li>
            <li><a href="javascript:0;">产品管理</a></li>
            <li><a href="javascript:0;">留言管理</a></li>
            <li><a href="javascript:0;">修改密码</a></li>
        </ul>
    </div>
    <div id="manage-container">
    </div>

<script>
// 公共js
    function alertdiv(data){
         var $alertdiv = $("#alertdiv");
         $alertdiv.find("p").html(data);
         $alertdiv.css({"top":"100px"});
    };
(function(){
    // ajax 的load方法加载页面
        var $contain = $('#manage-container');
        var $li = $('#nav li');
        var index = 0;
        var arr=['replaceImg/img.php','news/news.php','news/list.php','product/addProduct.php','product/product.php','message/message.php','password/password.php',]
        $contain.load('replaceImg/img.php');

        $li.click(function(){
            index = $(this).index();
            $contain.load(arr[index]);//加载页面
            $(this).addClass('hover').siblings().removeClass('hover');//左边栏切换效果
        });

}());

 </script>


</body>
</html>


