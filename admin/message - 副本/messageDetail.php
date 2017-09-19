<style type="text/css">
	.messages{
		max-width:100%;
		margin:50px 0px 0px 0px;
	}
	.page{
		width: 100%;
		padding: 0px;
	}
	#messageDetail{
		position: relative;
	}
	#messageDetail .message{
		width: 66%;
		padding: 2%;
	}
	#messageDetail .message p{
		font-size: 1.5em;
		text-align: center;
		letter-spacing: 1px;
	}
	#messageDetail .message p span{
		font-size: 0.6em;
		color: #2A2A2A;
	}
	#messageDetail .message	.m_contain{
		margin-top: 20px;
		text-indent: 30px;
		line-height: 32px;
	}
	#messageDetail .message	button{
		padding: 2px 7px;
		letter-spacing: 1px;
		font-size: 0.9em;
		margin: 10px;
		float: right;
	}
	#messageDetail .m_detail{
		width: 220px;
		min-height:270px;
		color: #fff;
		background: rgba(66,79,99,0.8);
		padding: 10px;
		font-size: 0.9em;
		position: fixed;
		right:-250px;
		top: 160px;
		box-shadow: 0px 0px 10px rgba(0,0,0,.5);
		transition: all 0.5s;
	}
	#messageDetail .m_detail p{
		line-height: 25px;
	}
    #messageDetail .m_pagination{
    	display: block;
    }

</style>
<div id="messageDetail">
	<div class="message">
		<!-- <p>轮胎质量怎么样</p>
		<p>
			<span>1815642007@qq.com</span>
			<span>2017-09-06</span>
		</p>
		<div class="m_contain">
			1975年，福建有位曾经在写作上给予她很大帮助的归侨老诗人蔡其矫，到鼓浪屿作客，那天晚上，舒婷陪他散步时，蔡其矫向她说起这辈子碰到的女孩。在二十世纪七十年代公开谈喜欢女孩子是大胆的事。蔡其矫说，有漂亮的女孩子，又没有才气；有才气的女孩子又不漂亮；又漂亮又有才气的女孩子，又很凶悍，他觉得找一个十全十美的女孩子很难。舒婷说，当时她听了后很生气，觉得那是大男子主义思想，男性与女性应当是平等的，于是，当天晚上，她就写了首诗《橡树》交给蔡其矫，后来发表时，才改作《致橡树》。
		</div>
		<button>返回</button>
		<button>回复</button> -->
	</div>
	<div class="m_detail">
		<!-- <p>联系人：<span>angelia</span></p>
		<p>电话：<span>18683660949</span></p>
		<p>QQ：<span>1815642007</span></p>
		<p>邮箱：<span>1815642007@qq.com</span></p>
		<p>地址：<span>四川省绵阳市涪城区青义镇西南科技大学老区</span></p> -->
	</div>
	<div class="m_pagination">
		<span>首页</span>
		<span>上一页</span>
		<span>下一页</span>
		<span>尾页</span>
	</div>
</div>
<script type="text/javascript">
(function(){
    // var $contain = $('#manage-container');

	var $detail = $('#messageDetail .m_detail');
	var $pagination = $('#messageDetail .m_pagination');
	setTimeout(function(){
		$detail.css('right','0px');
	},500);


	$pagination.children().click(function(){
		alert($(this).html())
	})
})();
</script>



