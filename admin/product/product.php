<h3>增加产品</h3>
<style type="text/css">
	#product{
        margin: 100px auto;

	}
	#product textarea{
		width: 90%;
		height: 300px;
		display: block;
        padding: 10px;
		font-size: 16px;
		color: #68696A;
        margin:20px auto;
	}
</style>
<div id="product" class="news_product">
	<input name="news_title" type="text" placeholder="请输入标题">
    <textarea> </textarea>
    <input id="sub" type="button" value="保存">
</div>

<script type="text/javascript">
// 提交数据
   $("#sub").click(function(){
    //获取title和content内容
       var til = $("#product textarea").val();
       var nle = $("#product input[type='text']").val();
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
        if ( nle == '' && til == '') {
            alert('请求输入标题和内容！')
        }else if(nle == ''){
            alert('请求输入标题！')
        }else if(til.length<=1){
            alert('请求输入内容！')
        }
        else{
            $.post("product/addProduct.php",{
                product_title:nle,
                product_content : til,
                product_time:Da,
                product_id:id,
               },function(data,status){
               		alert(data)
                    $("#sub").attr("disabled","disabled");
                    $('#manage-container').load('product/list.php');
                    $('#nav li:nth-of-type(5)').addClass('hover').siblings().removeClass('hover');
            });
        }
   });
</script>
