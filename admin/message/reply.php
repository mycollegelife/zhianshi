<h3>留言管理</h3>
<style type="text/css">
	.reply{
		padding-top: 50px;
		text-align: center;
	}
	.reply p{
		width: 80%;
		margin: 0 auto 50px;
		font-size: 14px;
		display: block;
	}
	.reply input{
		width: 80%;
		margin-left: 20px;
		height: 30px;
		padding: 0px 10px;
		font: 18px  Arial;
	}
	.reply textarea{
		width: 80%;
		margin-left: 20px;
		height: 280px;
		padding: 10px;
		font-size: 18px;
		letter-spacing: 1px;
		color: #222;
	}
	.reply p:nth-of-type(2) span{
		position: relative;
		top: -285px;
	}
	.reply .btn{
		width: 100px;
		background: #38adff;
		border: 2px solid transparent;
		border-radius: 2px;
		font-size: 16px;
		letter-spacing: 5px;
		padding: 3px 10px;
		text-align: center;
		color: #fff;
		margin: 0 auto;
		display: block;
	}
	.reply .btn:hover{
		border: 2px solid #3ea3ec;;
		color: #d6d1d1;
	}
</style>
<div class="page reply" >
<form action="message/mail.php" method="post">
	<p>主题<input name="title"></input></p>
	<p><span>正文</span><textarea name="content"></textarea></p>
	<input type="submit" class="btn" name="sub">
</form>
</div>
