<h3>留言管理</h3>
<style type="text/css">
/*两个页面都有的样式*/
    .messages {
        max-width: 90%;
        margin:40px 0px 0px 50px;
        min-height: 300px;
    }
    .messages .m_pagination{
        width: 50%;
        min-width: 200px;
        margin:100px auto;
        display: none;
    }
    .messages .m_pagination span{
        font-size: 0.9em;
        cursor: pointer;
        margin-right: 0.2em;
    }
    .messages .m_pagination span:hover{
        color: #38adff;
        text-decoration:underline;
    }
/*列表页面的样式*/
    .messages ol{
        height: 410px;
    }
	.messages ol li{
		height: 20px;
		line-height: 20px;
		margin-top: 20px;
		cursor: pointer;
	}
	.messages ol  li p{
		display: block;
		float: left;
		margin-right: 1%;
		overflow: hidden;
		white-space:nowrap;
	}
	.messages ol  li p:nth-of-type(1){
		font-size: 0.8em;
		max-width: 20%;
	}
	.messages ol  li p:nth-of-type(2){
		max-width: 50%;
		text-overflow: ellipsis;
	}
	.messages ol  li p:nth-of-type(2)>a{
		color: #000;
	}
	.messages ol  li p:nth-of-type(2)>a:hover{
		text-decoration:underline;
	}
	.messages ol  li p:nth-of-type(3){
		font-size: 0.8em;
		max-width: 10%;
	}
	.messages ol  li p:nth-of-type(4),.messages ol  li p:nth-of-type(5){
		max-width: 7%;
	}
	.messages ol  li p button{
		padding: 1px 2px;
		letter-spacing: 1px;
	}
    .messages .pagination{
        display: block;
        margin: 0px;
        width: 200px;
        margin: 30px 0px 50px 200px;
    }
</style>
<div class="page messages">
	<ol>
     <!--    <li>
            <p>1815642007@qq.com</p>
            <p><a>轮胎质量怎么样轮胎质量怎么样轮胎质量怎么样轮胎质量轮胎质量怎么样轮胎质量怎么样轮胎质量怎么样轮胎质量</a> </p>
            <p>2017-09-06</p>
            <p><button>查看</button></p>
            <p><button>回复</button></p>
        </li>  -->
	</ol>
    <div class="m_pagination" id="pagination">
        <span>首页</span>
        <span>上一页</span>
        <span>下一页</span>
        <span>尾页</span>
    </div>
</div>
<script type="text/javascript">
(function(){
    var $contain = $('#manage-container');
    var $message = $('div.messages');
   	var $ol = $('div.messages ol');
// 获取列表
    $.post('message/list.php',{},function(data,status){

        var Txt=eval(data);
    	var $content ='';
    	$ol.html('');
        var page = Math.floor(Txt.length/10);

        for (var i = 0; i < 10; i++) {
    		$content+='<li><b class="display">'+Txt[i].id+'</b><p>'+Txt[i].mail+'</p><p><a>'+Txt[i].theme+'</a> </p><p>'+Txt[i].time+'</p><p><button>查看</button></p><p><button>回复</button></p></li>';
        };

    	$ol.html($content);










        //分页
            if (Txt.length>10) {
                $('#pagination').addClass('pagination');

            }









        // 查看详细页面
            $('.messages li p:nth-of-type(2) a').click(function(){
            	var $index = $(this).parent().parent().find('b').html();
                load( $index );
            });
    	   $('.messages li p:nth-of-type(4) button').click(function(){
            	var $index = $(this).parent().parent().find('b').html();
            	load($index);
    	   });
    	function load( $index ){
    		$message.load('message/messageDetail.php',function(){
    			$.post('message/view.php',{index: $index },function(data,status){
    				var $one_data=eval(data);
    				var $one_message = $('#messageDetail .message');
    				var $one_detail = $('#messageDetail .m_detail');
    				$one_message.html('');
    				$one_detail.html('');

    				var $con_message,$con_detail;
    			// 改变页面的内容
    				$con_message = '<p>'+$one_data[0].theme+'</p><p><span>'+$one_data[0].mail+'</span><span>&nbsp;&nbsp;&nbsp;&nbsp;'+$one_data[0].time+'</span></p><div class="m_contain">'+$one_data[0].content+'</div><button>返回</button><button>回复</button><b class="display">'+$one_data[0].id+'</b>';
    				$one_message.html($con_message);

    				$con_detail='<p>联系人：<span>'+$one_data[0].name+'</span></p><p>电话：<span>'+$one_data[0].tel+'</span></p><p>QQ：<span>'+$one_data[0].qq+'</span></p><p>邮箱：<span>'+$one_data[0].mail+'</span></p><p>地址：<span>'+$one_data[0].address+'</span></p>';
    				$one_detail.html($con_detail);
    			// 详细页的点击按钮
    				var $btn1 = $('#messageDetail button:nth-of-type(1)');
    				var $btn2 = $('#messageDetail button:nth-of-type(2)');
                    $btn1.click(function(){
    					$contain.load('message/message.php');
    				});//返回按钮






                	$btn2.click(function(){
    					$contain.load('message/reply.php');

    				});// 详细页回复按钮
    			});





    		});
    	};






        // 列表页回复
    	   $('.messages li p:nth-of-type(5) button').click(function(){
                $contain.load('message/reply.php');
    	   })












    });
})()
</script>
