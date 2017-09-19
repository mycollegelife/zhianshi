<h3>产品列表</h3>
<style type="text/css">
    #container{
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
        margin: 0 auto;
        padding-left: 0px 3%;


        position: relative;
    }
    .article .content{
        height: auto;

    }
    .article .content a.n_title{
        width: 50%;
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
        height: 60px;
        padding: 5px;
        margin-bottom: 10px;
        overflow: hidden;

        text-overflow: ellipsis;
        text-indent: 32px;
    }
    .article .content span{
        float: right;
    }
    .article .content button{
        margin-left: 10px;
        float: right;
        padding: 1px 5px;
        letter-spacing: 1px;
    }
    .img{
        height: 120px;
        padding-left: 2%;
        overflow-x:auto;
    }



    .img div.bg{
        width: 19%;
        height: 98%;
        float: left;
        margin-right: 1%;
        position: relative;
	}



    .img img{
        width:100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
    }
    .img div.bg div.bg_head{
		width:100%;
        height: 25px;
        color: #fff;
        font-size: 20px;
        line-height: 25px;
        background: rgba(0,0,0,.5);
        position: absolute;
        top: -25px;
        left: 0px;
        transition: 0.5s;
    }
    .img div.bg:hover > div.bg_head{
        top: 0px;
    }
    .img div.bg div.bg_head span{
    	width: 10px;
    	height: 10px;
    	float: right;
    	display: block;
		transform: rotate(45deg);
		cursor: pointer;
    }

    .img div.bg:last-of-type{
    	margin-right: 0px;
    	border: 1px solid #e8e6e6;
    	background: rgba(168,168,168,.1);
    	color: #fff;
    	font-size: 100px;
    	text-align: center;
    	line-height: 100px;
    	cursor: pointer;
    	float: left;
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
    <div id="container" class="page">
    	<nav>
    		<ul class="c_top">
    			<li><a href="#">发布产品</a></li>
    			<li><a href="#">增加产品</a></li>
    			<li><a href="#">删除产品</a></li>
    		</ul>
    	</nav>
        <div class="hr"></div>

        <div id="article">
<!--
        <div class="article">
            <div class="content">
                <b class="display">20170809</b>
                <input type="checkbox" class="check">
                <a href="" class="n_title red1">智安仕带您看看马牌的自修复防扎防爆轮胎您看看马牌的自修复防扎防爆轮胎</a>
                <button>删除</button>
                <button>发布</button>
                <button>编辑</button>
                <button>预览</button>
                <span>2017-7-18</span>
                <p class="n_content">我们泰瑞克自修复防扎防爆轮胎项目从启动到现在也有半年时间了，期间接触了很多咨询的客户，兴趣都很大，这也让我们泰瑞克看到了市场前景，鼓励我们一直做下去。但还是有些客户对这行了解太少这也让我们泰瑞克看到了市场前景，鼓励我们一直做下去。但还是有些客户对这行了解太少启动到现在也有半年时间了，期间接触了</p>
            </div>
            <div class="img">
                <div class="bg" >
                	<img src="img/luntai.jpg" alt="">
                	<div class="bg_head"><span>+</span></div>
                </div>
                <div class="bg" id="bg">+</div>
    		</div>
        </div>
        <div class="hr" id="hr"></div> -->

        </div>
    </div>
<script type="text/javascript">
(function(){
//头部按钮
    var $contain = $('#manage-container');
    var $li = $('#nav li:nth-of-type(4)');
    var $btn1 = $('ul.c_top li:nth-of-type(1)');
    var $btn2 = $('ul.c_top li:nth-of-type(2)');
    var $btn3 = $('ul.c_top li:nth-of-type(3)');

    $btn2.click(function(){
        $contain.load('product/product.php');
        $li.addClass('hover').siblings().removeClass('hover');//左边栏切换效果
    });//增加产品

$.post("product/getProducts.php",{}, function(data,state){
    var temp=eval(data);
    var $article = $('#article');
    //列出产品
       	var article = '';
        $article.html('');
        for (var i = 0; i < temp.length; i++) {
            article +='<div class="article"><div class="content"><b class="display">'+temp[i].productid+'</b><input type="checkbox" class="check"><a href="" class="n_title red'+temp[i].online+'"">'+temp[i].title+'</a><button>删除</button><button>发布</button><button>编辑</button><button>预览</button><span>'+temp[i].newstime+'</span><p class="n_content">'+temp[i].content+'</p></div><div class="img"><div class="bg" ><img src="img/luntai.jpg" alt=""><div class="bg_head"><span>+</span></div></div><div class="bg" id="bg">+</div></div></div><div class="hr" id="hr"></div>';
        };
        $article.html(article);
    //进入产品详情页
        var $container = $("#container");
        var $n_title = $("#article .content a.n_title ");
        var $n_content = $('#article p.n_content');
        var $n_check = $('#article input.check');
        var $n_bth1 = $('#article button:nth-of-type(1)');
        var $n_bth2 = $('#article button:nth-of-type(2)');
        var $n_bth3 = $('#article button:nth-of-type(3)');
        var $n_bth4 = $('#article button:nth-of-type(4)');

        $n_title.click(function(){
            window.open("product/productDetail.php",function(){

            });
        });
        $n_bth4.click(function(){
            window.open("product/productDetail.php",function(){

            });
        });
    //编辑产品
        $n_bth3.click(function(){
            var $index = $(this).parent().find("b.display").html();
            $contain.load('product/productEdit.html',function(){
                $.post('product/productEdit.php',{productid:$index},function(data,staus){
                    var data = eval(data);

                    var $product_title = $("#product_title");
                    var $product_content = $("#product_content");
                    var $productid= $("#product b.display");
                    var $sub = $("#sub");
                    $productid.html(data[0].productid);
                    $product_title.val(data[0].title);
                    $product_content.val(data[0].content);

                    $sub .click(function(){
                     //获取title和content内容
                        var til = $product_content.val();
                        var nle = $product_title.val();
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
                            $.post("product/addProduct.php",{
                                 product_title:nle,
                                 product_content : til,
                                 product_time:Da,
                                 product_id:id,
                                },function(data,status){
                                    alert(data)
                                    var $product_id = $productid.html();
                                    $.post("product/removeproduct.php",{product_id:$product_id},function(data){
                                    	$sub .attr("disabled","disabled");
                                        $contain.load('product/list.php');
                                    });
                            });
                        }
                    })
                })
            })
        });
    //发布产品
        //获取产品id
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
            var $product_id = $(this).parent().find("b.display").html();
            var $product_a = $(this).parent().find("a.n_title");

            if ($product_a.is(".red1")) {
            	alert("改产品已被发布！")
            }else{
            	if(confirm('确定发布这个产品吗?')){
            	    $.post("product/online.php",{product_id:$product_id},function(data){
            	        $product_a.css('color','#38adff')
            	    });
            	}
            }

        });
        //发布多条新闻
        $btn1.click(function(){
            if (arr.length>0) {

                if(confirm('确定发布这些产品吗?')){
                    for (var i = 0; i < arr.length; i++) {
                        $.post("product/online.php",{product_id:arr[i]},function(data){
                               for (var i = 0; i < arra.length; i++) {
                                   arra[i].css('color','#38adff')
                                }
                        });
                    }
                }
            }else{
                alert("请选择产品！")
            }
        });
    //删除产品
        $n_bth1.click(function(){
            var $product_id = $(this).parent().find("b.display").html();
            if(confirm('确定删除这个产品吗?')){
                $.post("product/removeproduct.php",{product_id:$product_id},function(data){
                    $contain.load('product/list.php');
                });
            }
        });
        //删除多个产品
        $btn3.click(function(){
            if (arr.length>0) {
                if(confirm('确定删除这些产品吗?')){
                    for (var i = 0; i < arr.length; i++) {
                        $.post("product/removeproduct.php",{product_id:arr[i]},function(data){
                            $contain.load('product/list.php');
                        });
                    }
                }
            }else{
                alert("请选择产品！")
            }
        });









    // 删除图片
    	$("div.bg_head span").click(function(){
    		alert("删除图片")
    	});
    // 图片增加
    	$("#bg").click(function(){
    		alert("增加图片")
    	});
});

})();








</script>
