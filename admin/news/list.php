<style type="text/css">
    #container{
        position: relative;
        margin: 0 auto;
    }
    nav{
        width: 100%;
        height: 48px;
        margin: 20px auto;
    }
    nav ul{
        width: 100%;
        text-align: center;
        list-style: none;
        float: left;
    }
    nav ul li{
        width: 90px;
        height: 35px;
        line-height: 35px;
        background: #38adff;
        border: 1px solid transparent;
        border-radius: 2px;
        display: inline-block;
        margin: 0px 20px;
        font-size: 1em;
    }
    nav ul li a{
        width: 100%;
        height: 100%;
        display: inline-block;
        text-align: center;
        color: white;
    }
    nav ul li a:hover{
        color: rgba(255,255,255,.5);
    }
    .article{
        width: 94%;
        height: 160px;
        margin: 0 auto;
        padding-left: 0px 3%;
    }
    .article .content{
        width: 70%;
        height: 150px;
        float: left;
    }
    .article .content a.n_title{
        width: 80%;
        display: inline-block;
        overflow: hidden;
        white-space:nowrap;
        text-overflow: ellipsis;
        color: black;
        font-size: 1.5em;
        cursor: pointer;
    }
    .article .content a.n_title:hover{
        text-decoration: underline;
    }
    .article .content a.red1{
        color: #38adff;
    }
    .article .content input.check{
        width: 30px;
        height:15px;
        position: relative;
        top: -5px;
    }
    .article .content p.n_content{
        height: 75px;
        padding: 10px 5px;
        margin-bottom: 10px;
        overflow: hidden;

        text-overflow: ellipsis;
        text-indent: 32px;
    }
    .article .content button{
        margin-left: 10px;
        float: right;
        padding: 1px 5px;
        letter-spacing: 1px;
    }
    .img{
        width: 28%;
        height: 100%;
        padding-left: 2%;
        float: right;

    }
    .img div.bg{
        width: 100%;
        height: 100%;
        border: 1px solid #e8e6e6;
        background: rgba(168,168,168,.1);
        color: #fff;
        font-size: 100px;
        text-align: center;
        line-height: 160px;
        cursor: pointer;
        display: none;
    }

    .img img{
        margin: 0 auto;
        width: 100%;
        height: 100%;

    }
    .hr{
        width: 100%;
        background: gray;
        height: 1px;
        margin:13px auto;
    }
    #hr{
        width: 94%;
    }
    #news{
        display: none;
    }
</style>
    <h3>新闻列表</h3>
    <div id="container" class="page">
    	<nav>
    		<ul class="c_top">
    			<li><a href="#">发布新闻</a></li>
    			<li><a href="#">增加新闻</a></li>
    			<li><a href="#">删除新闻</a></li>
    		</ul>
    	</nav>
        <div class="hr"></div>

        <div id="article">
     <!--    <div class="article">
            <div class="content">
                <b class="display">20170809</b>
                <input type="checkbox" class="check">
                <a href="" class="n_title red1">智安仕带您看看马牌的自修复防扎防爆轮胎您看看马牌的自修复防扎防爆轮胎</a>
                <p class="n_content">我们泰瑞克自修复防扎防爆轮胎项目从启动到现在也有半年时间了，期间接触了很多咨询的客户，兴趣都很大，这也让我们泰瑞克看到了市场前景，鼓励我们一直做下去。但还是有些客户对这行了解太少这也让我们泰瑞克看到了市场前景，鼓励我们一直做下去。但还是有些客户对这行了解太少启动到现在也有半年时间了，期间接触了</p>
                <span>2017-7-18</span>
                <button>删除</button>
                <button>发布</button>
                <button>编辑</button>
                <button>预览</button>
            </div>
            <div class="img">
                <div class="bg">+</div>
    			<img src="img/luntai.jpg" alt="">
    		</div>
        </div>
        <div class="hr" id="hr"></div> -->
        </div>

        <div id="news">
        </div>
    </div>
<script>
(function(){
//头部按钮
    var $contain = $('#manage-container');
    var $li = $('#nav li:nth-of-type(2)');
    var $btn1 = $('ul.c_top li:nth-of-type(1)');
    var $btn2 = $('ul.c_top li:nth-of-type(2)');
    var $btn3 = $('ul.c_top li:nth-of-type(3)');

    $btn2.click(function(){
        $contain.load('news/news.php');
        $li.addClass('hover').siblings().removeClass('hover');//左边栏切换效果
    });//增加新闻

$.post("news/getnews.php",{}, function(data,state){
    var temp=eval(data);
    var $article = $('#article');
    var $content = $('#news');
    //列出新闻
        var article = '';
        var contents = '';
        var content = '';

        $article.html('');

        for (var i = 0; i < temp.length; i++) {
            contents =  temp[i].content;
            $content.html(contents);
            content = $content.children().html();

            article +='<div class="article"><div class="content"><b class="display">'+temp[i].newsid+'</b><input type="checkbox" class="check"><a class="n_title red'+temp[i].online+'">'+temp[i].title+'</a><p class="n_content">'+content+'</p><span>'+temp[i].newstime+'</span><button>删除</button><button>发布</button><button>编辑</button><button>预览</button></div><div class="img"><div class="bg">+</div><img src="img/luntai.jpg" alt=""></div></div><div class="hr" id="hr"></div>';
        };
        $article.html(article);
    //进入新闻详情页
        var $container = $("#container");
        var $n_title = $("#article .content a.n_title ");
        var $n_content = $('#article p.n_content');
        var $n_check = $('#article input.check');
        var $n_bth1 = $('#article button:nth-of-type(1)');
        var $n_bth2 = $('#article button:nth-of-type(2)');
        var $n_bth3 = $('#article button:nth-of-type(3)');
        var $n_bth4 = $('#article button:nth-of-type(4)');

        $n_title.click(function(){
            window.open("news/newsDetail.php",function(){

            });
        });
        $n_bth4.click(function(){
            window.open("news/newsDetail.php",function(){

            });
        });
    //编辑新闻
        $n_bth3.click(function(){
            var $index = $(this).parent().find("b.display").html();

            $contain.load('news/newsEdit.html',function(){
                $.post('news/newsEdit.php',{newsid:$index},function(data,staus){
                    var data = eval(data);
                    var $news_title = $("#news_title");
                    var $news_content = $("#editor .w-e-text");
                    var $newsid= $("#new b.display");

                    $newsid.html(data[0].newsid);
                    $news_title.val(data[0].title);
                    $news_content.html(data[0].content);

                    $("#sub").click(function(){
                        // $("#sub").attr('type','submit');
                     //获取title和content内容
                        var til = $.trim($("#editor .w-e-text").html());
                        var nle = $("#news_title").val();
                     //获取时间和得到news_id
                         var date = new Date();
                         var year = date.getFullYear();
                         var month = date.getMonth()+1;
                         var dat = date.getDate();
                         var hours = date.getHours();
                         var minute = date.getMinutes();
                         var seconds = date.getSeconds();
                         var id = year +""+ month+""+dat+""+hours+""+minute+""+seconds;
                         var Da = year +'-'+ month+'-'+dat;
                     //发送新闻信息
                        if ( nle == '' && til == '<p><br></p>') {
                            alert('请求输入新闻标题和内容！')
                        }else if(nle == ''){
                            alert('请求输入新闻标题！')
                        }else if(til == '<p><br></p>'){
                            alert('请求输入新闻内容！')
                        }
                        else{
                            $.post("news/addnews.php",{
                                 news_title:nle,
                                 news_content : til,
                                 news_time:Da,
                                 news_id:id,
                                },function(data,status){
                                    var $news_id = $newsid.html();
                                    $.post("news/removenews.php",{news_id:$news_id},function(data){
                                        $contain.load('news/list.php');
                                    });
                            });
                        }
                    })
                })
            })
        });
    //发布新闻
        //获取新闻id
        var  $checked = $("#article div.article input.check");
        var arr = [];
        var arra = [];
        $checked.click(function(){
            var $index = $(this).parent().find('b.display').html();
            var $new_a = $(this).parent().find("a.n_title");
            arr.push($index);
            arra.push($new_a);
        });
        //发布一条新闻
        $n_bth2.click(function(){
            var $news_id = $(this).parent().find("b.display").html();
            var $new_a = $(this).parent().find("a.n_title");

            if(confirm('确定发布这条新闻吗?')){
                $.post("news/online.php",{news_id:$news_id},function(data){
                    $new_a.css('color','#38adff')
                });
            }
        });
        //发布多条新闻
        $btn1.click(function(){
            if (arr.length>0) {

                if(confirm('确定发布这些新闻吗?')){
                    for (var i = 0; i < arr.length; i++) {
                        $.post("news/online.php",{news_id:arr[i]},function(data){
                               for (var i = 0; i < arra.length; i++) {
                                   arra[i].css('color','#38adff')
                                }
                        });
                    }
                }
            }else{
                alert("请选择新闻！")
            }
        });
    //删除新闻
        $n_bth1.click(function(){
            var $news_id = $(this).parent().find("b.display").html();
            if(confirm('确定删除这条新闻吗?')){
                $.post("news/removenews.php",{news_id:$news_id},function(data){
                    $contain.load('news/list.php');
                });
            }
        });
        //删除多条新闻
        $btn3.click(function(){
            if (arr.length>0) {
                if(confirm('确定删除这些新闻吗?')){
                    for (var i = 0; i < arr.length; i++) {
                        $.post("news/removenews.php",{news_id:arr[i]},function(data){
                            $contain.load('news/list.php');
                        });
                    }
                }
            }else{
                alert("请选择新闻！")
            }
        });
});

})();
</script>
