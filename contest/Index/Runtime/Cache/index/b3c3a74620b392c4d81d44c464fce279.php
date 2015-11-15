<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=">
	<title><?php echo ($page_title); ?></title>
	<LINK rel="stylesheet" href="/contest/Public/css/style.css" type="text/css" media="screen">
	<LINK rel="stylesheet" href="/contest/Public/css/form.css" type="text/css" media="screen">
</head>
<BODY>
<DIV id='header'>
<nav>
<P><h1><a href="http://localhost:9096/contest/" id="img_link"><img src="/contest/Public/logo.png" width="100px" height="40px"></a></h1>
<h2><?php if(session('?user.user_name')){ echo session("user.user_name").'&nbsp;&nbsp;<a href="login/loggedout">登出</a>'; }else{ echo '<a href="register">注册</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="login">登陆</a>'; }?></h2>
</nav>
<DIV id='navigation'>
<UL>
	<LI><A href='http://localhost:9096/contest/'>主页</A></LI>
	<LI><A>新闻</A></LI>
	<LI><A>比赛查看</A></LI>
	<LI><A>博客</A></LI>
</UL>
</DIV>
</DIV>

<DIV id='content'>
<!-- content -->