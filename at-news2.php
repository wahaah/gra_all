<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- 为了设置视口 -->
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="assets/mui/css/mui.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="assets/fontAwesome/css/font-awesome.css">
	<script src="assets/mui/js/mui.min.js"></script>
	<script src="assets/zepto/zepto.min.js"></script>
	<script src="js/public.js"></script>
	<style>
		/* * {
			touch-action: pan-y;
		} */

		/* 使用全局样式样式去掉 */
		.mui-control-content {
			background-color: white;
			min-height: 215px;
		}

		.mui-control-content .mui-loading {
			margin-top: 50px;
		}

		.mui-col-xs-4 {
			width: 33%;
		}
	</style>
</head>

<body>
	<header class="mui-bar mui-bar-nav my-header">
		<a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>
		<h1 class="mui-title">最新动态</h1>
		<!-- mui-pull-right右浮动 -->
		<a class="mui-icon mui-icon-search mui-pull-right"></a>
	</header>
	<nav class="mui-bar mui-bar-tab my-footer">
		<a class="mui-tab-item" href="index.html">
			<span class="mui-icon mui-icon-home"></span>
			<span class="mui-tab-label">首页</span>
		</a>
		<a class="mui-tab-item" href="test.html">
			<span class="mui-icon fa fa-heartbeat"></span>
			<span class="mui-tab-label">体质检测</span>
		</a>
		<a class="mui-tab-item mui-active" href="news.html">
			<!-- fa fa-shopping-cart  使用fontawesome图标
            mui-icon加上后图标变为横向 -->
			<span class="mui-icon fa fa-map-o"></span>
			<span class="mui-tab-label">公告咨询</span>
		</a>
		<a class="mui-tab-item" href="user.html">
			<span class="mui-icon mui-icon-person"></span>
			<span class="mui-tab-label">个人中心</span>
		</a>
	</nav>
	<div class="mui-content">
		<!-- 当点击搜索则此框显示 -->
		<!-- <form class="mui-input-group">
			<div class="mui-input-row mui-search">
				<input type="search" class="mui-input-clear" placeholder="">
			</div>
		</form> -->

		<!-- 顶部导航栏 -->
		<div id="slider" class="mui-slider">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item" href="#item1mobile">
					饮食
				</a>
				<a class="mui-control-item" href="#item2mobile">
					运动
				</a>
				<a class="mui-control-item" href="#item3mobile">
					注意
				</a>
				<!-- <a class="mui-control-item" href="#item4mobile">
					胎教
				</a>
				<a class="mui-control-item" href="#item5mobile">
					圈子
				</a> -->
			</div>
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
			<div class="mui-slider-group">
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<ul class="mui-table-view">
								<li class="mui-table-view-cell">
									第一个选项卡子项-1
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-2
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-3
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-4
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-5
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-6
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-7
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-8
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-9
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-10
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-11
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-12
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-13
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-14
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-15
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-16
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-17
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-18
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-19
								</li>
								<li class="mui-table-view-cell">
									第一个选项卡子项-20
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="item2mobile" class="mui-slider-item mui-control-content">
					<div id="scroll2" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="mui-loading">
								<div class="mui-spinner">
								</div>
							</div>
						</div>
					</div>

				</div>
				<div id="item3mobile" class="mui-slider-item mui-control-content">
					<div id="scroll3" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="mui-loading">
								<div class="mui-spinner">
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- <div id="item4mobile" class="mui-slider-item mui-control-content">
					<div id="scroll4" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="mui-loading">
								<div class="mui-spinner">
								</div>
							</div>
						</div>
					</div>

				</div>
				<div id="item5mobile" class="mui-slider-item mui-control-content">
					<div id="scroll5" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="mui-loading">
								<div class="mui-spinner">
								</div>
							</div>
						</div>
					</div>

				</div> -->
			</div>
		</div>



		<!-- <div style="padding: 10px 10px;">
			<div id="segmentedControl" class="mui-segmented-control">
				<a class="mui-control-item" href="#item1">
					饮食
				</a>
				<a class="mui-control-item" href="#item2">
					运动
				</a>
				<a class="mui-control-item mui-active" href="#item3">
					注意
				</a>
				<a class="mui-control-item" href="#item4">
					胎教
				</a>
				<a class="mui-control-item" href="#item5">
					圈子
				</a>
			</div>
		</div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="./img/icon-07.png">
					<div class="mui-media-body">
						幸福
						<p class='mui-ellipsis'>能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>
					</div>
				</a>
			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="./img/icon-07.png">
					<div class="mui-media-body">
						木屋
						<p class='mui-ellipsis'>想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.</p>
					</div>
				</a>
			</li>
			<li class="mui-table-view-cell mui-media">
				<a href="javascript:;">
					<img class="mui-media-object mui-pull-left" src="./img/icon-07.png">
					<div class="mui-media-body">
						CBD
						<p class='mui-ellipsis'>烤炉模式的城，到黄昏，如同打翻的调色盘一般.</p>
					</div>
				</a>
			</li>
		</ul> -->
	</div>
</body>
<script>
	mui.init({
		swipeBack: false
	});
	(function ($) {
		$('.mui-scroll-wrapper').scroll({
			indicators: true //是否显示滚动条
		});
		var html2 =
			'<ul class="mui-table-view"><li class="mui-table-view-cell">第二个选项卡子项-1</li><li class="mui-table-view-cell">第二个选项卡子项-2</li><li class="mui-table-view-cell">第二个选项卡子项-3</li><li class="mui-table-view-cell">第二个选项卡子项-4</li><li class="mui-table-view-cell">第二个选项卡子项-5</li></ul>';
		var html3 =
			'<ul class="mui-table-view"><li class="mui-table-view-cell">第三个选项卡子项-1</li><li class="mui-table-view-cell">第三个选项卡子项-2</li><li class="mui-table-view-cell">第三个选项卡子项-3</li><li class="mui-table-view-cell">第三个选项卡子项-4</li><li class="mui-table-view-cell">第三个选项卡子项-5</li></ul>';
		var item2 = document.getElementById('item2mobile');
		var item3 = document.getElementById('item3mobile');
		document.getElementById('slider').addEventListener('slide', function (e) {
			if (e.detail.slideNumber === 1) {
				if (item2.querySelector('.mui-loading')) {
					setTimeout(function () {
						item2.querySelector('.mui-scroll').innerHTML = html2;
					}, 500);
				}
			} else if (e.detail.slideNumber === 2) {
				if (item3.querySelector('.mui-loading')) {
					setTimeout(function () {
						item3.querySelector('.mui-scroll').innerHTML = html3;
					}, 500);
				}
			}
		});
		var sliderSegmentedControl = document.getElementById('sliderSegmentedControl');
		$('.mui-input-group').on('change', 'input', function () {
			if (this.checked) {
				sliderSegmentedControl.className =
					'mui-slider-indicator mui-segmented-control mui-segmented-control-inverted mui-segmented-control-' + this.value;
				//force repaint
				sliderProgressBar.setAttribute('style', sliderProgressBar.getAttribute('style'));
			}
		});
	})(mui);
</script>


</html>