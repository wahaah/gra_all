<?php
    require_once 'all/config.php';
    require_once 'all/functions.php';
    // 验证是否已经登录
    checkLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- 为了设置视口 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/mui/css/mui.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="assets/fontAwesome/css/font-awesome.css">
	<script src="assets/mui/js/mui.min.js"></script>
	<script src="assets/zepto/zepto.min.js"></script>
	<script src="js/public.js"></script>
</head>

<body>
	<header class="mui-bar mui-bar-nav my-header">
            <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>
		<h1 class="mui-title">修改密码</h1>
		<!-- mui-pull-right右浮动 -->
		<!-- <a class="mui-icon mui-icon-search mui-pull-right"></a> -->
	</header>
	<nav class="mui-bar mui-bar-tab my-footer">
		<a class="mui-tab-item" href="index.php">
				<span class="mui-icon mui-icon-home"></span>
				<span class="mui-tab-label">首页</span>
			</a>
		<a class="mui-tab-item" href="test.php">
			<span class="mui-icon fa fa-heartbeat"></span>
			<span class="mui-tab-label">体质检测</span>
		</a>
		<a class="mui-tab-item" href="news.php?cateId=1">
			<!-- fa fa-shopping-cart  使用fontawesome图标
            mui-icon加上后图标变为横向 -->
			<span class="mui-icon fa fa-map-o"></span>
			<span class="mui-tab-label">公告咨询</span>
		</a>
		<a class="mui-tab-item mui-active" href="user.php">
			<span class="mui-icon mui-icon-person"></span>
			<span class="mui-tab-label">个人中心</span>
		</a>
	</nav>
	<div class="mui-content">
		<!-- 输入表单模块 -->
        <form class="mui-input-group">
                <div class="mui-input-row">
                    <label>原密码</label>
                    <input type="password" class="mui-input-clear" name="originPass" placeholder="请输入原密码">
                </div>
                <div class="mui-input-row">
                    <label>新密码</label>
                    <input type="password" class="mui-input-clear" name="newPass" placeholder="请输入新密码">
                </div>
                <div class="mui-input-row">
                    <label>确认新密码</label>
                    <input type="password" class="mui-input-password" name="confirmNewPass" placeholder="请确认密码">
                </div>
                <div class="mui-input-row">
                    <label>认证码</label>
                    <input type="text" class="mui-input-clear" name="vCode" placeholder="认证码">
                    <a href="javascript:;" class="getCode" id="getCode">获取认证码</a>
                </div>
                <div class="mui-button-row">
                    <button id="modify-btn" type="button" class="mui-btn mui-btn-primary">确认修改密码</button>
                    <!-- <button typec="button" class="mui-btn mui-btn-danger">取消</button> -->
                </div>
            </form>
	</div>
	</body>
	</html>