<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-9-2
*/
//防止恶意调用
if (!defined('IN_TG')) {
	exit('Access Defined!');
}
?>
	<div id="member_sidebar">
		<h2>中心导航</h2>
		<dl>
			<dt>账号管理</dt>
			<dd><a href="member.php">个人信息</a></dd>
			<dd><a href="member_modify.php">修改资料</a></dd>
		</dl>
		<dl>
			<dt>其他管理</dt>
			<dd><a href="member_message.php">短信查阅</a></dd>
			<dd><a href="member_friend.php">好友设置</a></dd>
			<dd><a href="member_flower.php">查询花朵</a></dd>
			<dd><a href="photo.php">个人相册</a></dd>
		</dl>
	</div>