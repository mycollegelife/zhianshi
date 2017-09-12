1. 入口文件 login.php 登陆界面

2. 主要管理界面 manage.php

3. 更换轮播图功能 前台界面 img.php 后台功能界面 getimgs.php(查询所有的轮播图片) updateimg.php(更新轮播图) uploadimg.php(上传轮播图片)

4. 新闻功能 前台界面 news.php(增加新闻) list.php(管理新闻 ) 后台功能界面 online.php(发布新闻) removenews.php(删除新闻) addnews.php(添加新闻)

5. 修改密码 前台界面 password.php 后台功能 change_password.php

6. 公共类 connect.php(连接数据库) input.class.php(获得表单输入)

7. 页面布局左右结构，左边是菜单，使用ajaxj加载右边界面

前端只做了增加新闻，显示新闻，修改密码的功能。

还需要增加功能
 产品管理（实现产品的增加 修改 删除 发布）
 案例展示（同产品管理）
 留言管理（留言信息的管理）
<!-- 产品管理表 -->

<!-- 案列展示表 -->

<!-- 留言管理表 -->
 	$sql="create table messages(
 		id int(6) unsigned auto_increment primary key,
 		name varchar(50),
     	tel varchar(50),
    	address varchar(100),
     	mail varchar(50) not null,
     	qq varchar(50),
     	theme varchar(50) not null,
     	content varchar(10000) not null
 	) ENGINE=InnoDB DEFAULT CHARSET=utf8";

 	$sql="insert into messages(name,tel,address,time,mail,qq,theme,content)
 	values('angelia','18683660949','sichuan','2017-09-06','1815642007@qq.com','1815642007','那种轮胎更耐滑','轮胎升级后在功能上有那些改进')";
<!-- 判断数据库是否创建成功 -->
	if (mysqli_query($conn_db,$sql)) {
		echo "数据表创建成功";
	}else{
		echo "数据表创建失败".mysqli_error($conn_db);
	}
