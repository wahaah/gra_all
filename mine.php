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

	<link href="css/yuchanqi/common.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/yuchanqi/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/yuchanqi/date.js"></script>
	<script type="text/javascript" src="js/yuchanqi/iscroll.js"></script>




	<style>
		.fa-calendar:before {
			font-size: 45px;
			color: pink;
			line-height: 82px;

		}

		.mui-card-content {
			display: flex;
			justify-content: space-around;
		}

		.mui-icon-arrowright:before {
			line-height: 82px;

		}

		.fa-calculator:before {
			color: pink;
		}
	</style>
	<!-- 最后一次 -->
	<style type="text/css">
		.demo {
			width: 300px;
			margin: 40px auto 0 auto;
		}

		.demo .lie {
			margin: 0 0 7px 0;
		}
	</style>

</head>

<body>
	<header class="mui-bar mui-bar-nav my-header">
		<a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>

		<h1 class="mui-title">个人信息</h1>
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
			<a href="yuchanqicalender.php">
				<div class="mui-card-content">
					<span class="mui-icon fa fa-calendar"></span>
					<div class="mui-card-content-inner">
						<p> 设置预产期</p>
						<div>2019年3月</div>
					</div>
					<span class="mui-icon mui-icon-arrowright"></span>
				</div>
			</a>
		</div>

		<div class="mui-content">
			<div class="mui-card">
				<ul class="mui-table-view mui-table-view-chevron">
					<li class="mui-table-view-cell mui-collapse">
						<a class="mui-navigate-right" href="#">
							<span class="mui-icon fa fa-calculator"></span>
							计算预产期
							<!-- <span class="mui-icon mui-icon-arrowright"></span> -->
						</a>
						<ul class="mui-table-view mui-table-view-chevron demo">
							<!-- <li class="mui-table-view-cell lie">
								<a class="mui-navigate-right kbtn" id="endTime" href="#">记录时间</a>
							</li> -->
							<li class="mui-table-view-cell lie">
								<a class="mui-navigate-right kbtn" id="beginTime" href="#">最近一次经期开始日</a>
							</li>
							<li class="mui-table-view-cell lie">
								<a class="mui-navigate-right kbtn" id="endTime" href="#">周期长度</a>
							</li>
							<li class="mui-table-view-cell lie">
									<a class="mui-navigate-right kbtn" id="endTime" href="cal-date.php">计算方法</a>
								</li>
						</ul>
					</li>

					<!-- <div class="demo">
							<div class="lie">日期设置-1:<input id="beginTime" class="kbtn" /></div>
							<div class="lie">日期设置-2:<input id="endTime" class="kbtn" /></div>
						</div>
						<div id="datePlugin"></div>
						<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';"> -->

				</ul>

			</div>
			<!-- 日历弹出框 -->
			<div id="datePlugin"></div>
			<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">

			</div>
		</div>
</body>
<!-- 最后一次 -->
<script>
	$(function () {
		$('#beginTime').date();
		$('#endTime').date({
			theme: "datetime"
		});
	});
</script>

<!-- 周期 -->

</html>