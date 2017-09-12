<h3>增加新闻</h3>
<div id="new">
    <form>
    	<input id="news_title" name="news_title" type="text" placeholder="请输入标题">

        <div name = 'news_content' id="editor">

        </div>
        <input id="sub" type="button" value="保存">
    </form>
</div>
<div id="alertdiv">
    <nav>温馨提示：</nav>
    <p></p>
</div>
    <!-- 注意， 只需要引用 JS，无需引用任何 CSS ！！！-->
    <script type="text/javascript" src="wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor
        var editor = new E('#editor')
        // 或者 var editor = new E( document.getElementById('#editor') )
        editor.create()

        // 提交数据
       $("#sub").click(function(){
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
                // $("#sub").attr('type','submit');
                $.post("news/addnews.php",{
                    news_title:nle,
                    news_content : til,
                    news_time:Da,
                    news_id:id,
                   },function(data,status){
                        alertdiv(data);
                        $("#sub").attr("disabled","disabled");
                        setTimeout(function(){
                            $('#manage-container').load('news/list.php');
                            $('#nav li:nth-of-type(3)').addClass('hover').siblings().removeClass('hover');//左边栏切换效果
                        },2000)
                });
            }
       });
    </script>
