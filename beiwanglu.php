<!DOCTYPE html>
<html lang="en">

<head>
	<!-- <meta charset="gb2312"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- 为了设置视口 -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
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

		<h1 class="mui-title">日程提醒</h1>
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
			<div class="mui-card">
					<ul class="mui-table-view mui-table-view-chevron">
							<ul class="mui-table-view mui-table-view-chevron">
								<li class="mui-table-view-cell">
									<a class="mui-navigate-right" href="naoling.php">
										<span class=" mui-icon fa fa-clock-o"></span>
										闹铃
									</a>
								</li>
								<li class="mui-table-view-cell ">
									<a class="mui-navigate-right"  href="jishiben1.php">
										<span class="mui-icon fa fa-bookmark-o"></span>
										记事本</a>
								</li>
							</ul>
					</ul>
	
				</div>
		
	</div>

</body>


</html>