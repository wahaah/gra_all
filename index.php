<?php 
	// 以下代码可公共使用

	// 若要使用session，一定要先开启session
	// session_start();
	// // 先完成登陆的验证，除了登陆页面，都需要做登陆的验证
	// // 没有islogin   有islogin,但是值更我们在登录是存储的不一样
	// if(!isset($_SESSION['islogin'])||$_SESSION['islogin']!=1){
	// 	// 如果没有登录过，就应该强制登陆
	// 	header("Location:login.php");
	// }
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
	<style>
		.mui-slider img {
			height: 220px;
		}
	</style>
	<!-- 为了设置视口 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/mui/css/mui.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="assets/fontAwesome/css/font-awesome.css">
	<script src="assets/mui/js/mui.min.js"></script>
	<script src="assets/zepto/zepto.min.js"></script>
	<script src="js/public.js"></script>
	<style>
		* {
			touch-action: pan-y;
		}
		.mui-media-body .tit {
			font-size: 14px;
			color: black;
		}
		.mui-ellipsis{
			font-size: 12px;
		}
		.mui-slider-indicator .mui-indicator{
			margin: 1px 2px;
		}
	</style>
</head>

<body>
	<header class="mui-bar mui-bar-nav my-header">
		<h1 class="mui-title">贴心管家</h1>
		<!-- mui-pull-right右浮动 -->
		<!-- <a class="mui-icon mui-icon-search mui-pull-right"></a> -->
	</header>
	<nav class="mui-bar mui-bar-tab my-footer">
		<a class="mui-tab-item mui-active" href="index.php">
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
		<a class="mui-tab-item" href="user.php">
			<span class="mui-icon mui-icon-person"></span>
			<span class="mui-tab-label">个人中心</span>
		</a>
	</nav>
	<div class="mui-content">
		<!-- 轮播图部分 -->
		<div class="mui-slider">
			<div class="mui-slider-group mui-slider-loop">
				<!--支持循环，需要重复图片节点-->
				<div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="img/8.jpg" /></a></div>
				<div class="mui-slider-item"><a href="#"><img src="img/1.jpg" /></a></div>
				<div class="mui-slider-item"><a href="#"><img src="img/2.jpg" /></a></div>
				<div class="mui-slider-item"><a href="#"><img src="img/3.jpg" /></a></div>
				<div class="mui-slider-item"><a href="#"><img src="img/5.jpg" /></a></div>
				<div class="mui-slider-item"><a href="#"><img src="img/6.jpg" /></a></div>
				<div class="mui-slider-item"><a href="#"><img src="img/7.jpg" /></a></div>
				<div class="mui-slider-item"><a href="#"><img src="img/8.jpg" /></a></div>
				<!--支持循环，需要重复图片节点-->
				<div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="img/1.jpg" /></a></div>
			</div>
		
			<div class="mui-slider-indicator">
				<div class="mui-indicator mui-active"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
				<div class="mui-indicator"></div>
			</div>
		</div>
		<!--  -->

		<h4><span class="mui-icon mui-icon-spinner-cycle mui-spin"></span>孕期小工具</h4>
		<!-- 九宫格部分 -->
		<ul class="fenglei  mui-table-view mui-grid-view mui-grid-9">
			<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
				<a href="eat.php">
					<img src="./img/icon-01.png" alt="">
					<div class="mui-media-body">能不能吃</div>
				</a></li>
			<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
				<a href="did.php">
					<img src="./img/icon-02.png" alt="">
					<div class="mui-media-body">能不能做</div>
				</a></li>
			<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
				<a href="teach.php">
					<img src="./img/icon-03.png" alt="">
					<div class="mui-media-body">亲子视频</div>
				</a></li>
			<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
				<a href="baike.php">
					<img src="./img/icon-04.png" alt="">
					<div class="mui-media-body">知识百科</div>
				</a></li>
			<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
				<a href="prepare.php">
					<img src="./img/icon-05.png" alt="">
					<div class="mui-media-body">预待产包</div>
				</a></li>
			<li class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
				<a href="map.php">
					<img src="./img/icon-06.png" alt="">
					<div class="mui-media-body">离我最近</div>
				</a></li>

		</ul>
		<h4><span class="mui-icon mui-icon-spinner-cycle mui-spin"></span>今日之事</h4>
		<ul class="mui-table-view">
				<li class="mui-table-view-cell mui-media">
					<a href="javascript:;">
						<img class="mui-media-object mui-pull-right" src="img/shanghuo.jpg">
						<div class="mui-media-body">
						 <p class="tit">孕妇上火怎么办</p>	
							<p class='mui-ellipsis'>对于上火食疗是很简单...</p>
						</div>
					</a>
				</li>
				<li class="mui-table-view-cell mui-media">
					<a href="javascript:;">
						<img class="mui-media-object mui-pull-right" src="img/doufu.jpg">
						<div class="mui-media-body">
							<p class="tit">多吃豆腐有助于补充蛋白质</p>
							<p class='mui-ellipsis'>豆腐富含多种营养元素...</p>
						</div>
					</a>
				</li>
				<li class="mui-table-view-cell mui-media">
					<a href="javascript:;">
						<img class="mui-media-object mui-pull-right" src="img/baogao.jpg">
						<div class="mui-media-body">
							<p class="tit">教你看懂报告单</p>
							<p class='mui-ellipsis'>学会自己看报告...</p>
						</div>
					</a>
				</li>
			</ul>
	</div>
	<script>
		//获得slider插件对象
		var gallery = mui('.mui-slider');
		gallery.slider({
			interval: 1000 //自动轮播周期，若为0则不自动播放，默认为0；
		});
	</script>
</body>

</html>