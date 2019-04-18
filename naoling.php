<?php
    require_once 'all/config.php';
    require_once 'all/functions.php';
    // 验证是否已经登录
    checkLogin();
?>
<!-- <!DOCTYPE html class="stopwatch-mode"> -->
<html class="stopwatch-mode">

<head lang="en">
	<!-- <meta charset="gb2312"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta charset="UTF-8">
	<title>Document</title>
	<link type="text/css" rel="stylesheet" href="assets/assets/materialize/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="assets/assets/css/styles.css">
	<link type="text/css" rel="stylesheet" href="assets/assets/jonthornton-jquery-timepicker/jquery.timepicker.css">

	
</head>
<style>
	
</style>

<body>

	<div class="mui-content">


		<div class="wrapper">

			<div class="header switch-clocks z-depth-1">
				<a href="#" class="alarm waves-effect">报警</a>
				<a href="#" class="stopwatch waves-effect">秒表</a>
				<a href="#" class="timer waves-effect">计时器</a>
			</div>

			<div class="app">

				<div class="container alarm hidden">
					<form>

						<div class="control input-field">
							<input id="alarm-input" type="text" class="validate">
							<label for="alarm-input">设置时间</label>
						</div>

						<div class="control switch">
							<label>
								关闭
								<input type="checkbox" disabled id="alarm-btn">
								<span class="lever"></span>
								开启
							</label>
						</div>

						<div class="control checkbox">
							<input type="checkbox" id="alarm-sounds" />
							<label for="alarm-sounds">声音</label>
						</div>

					</form>

					<div class="clock z-depth-1 inactive">
						<span>取消设置</span>
						<div class="overlay waves-effect"></div>
					</div>
				</div>

				<div class="container stopwatch">
					<form>
						<a href="#" id="stopwatch-btn-start" class="waves-effect waves-teal btn-flat">开始</a>
						<a href="#" id="stopwatch-btn-pause" class="waves-effect waves-teal btn-flat">暂停</a>
						<a href="#" id="stopwatch-btn-reset" class="waves-effect waves-teal btn-flat">重置</a>
					</form>

					<div class="clock inactive z-depth-1">
						<span>0:00:00.0</span>
						<div class="overlay waves-effect"></div>
					</div>
				</div>

				<div class="container timer hidden">
					<form>
						<div class="control input-field">
							<input id="timer-input" type="number">
							<label for="timer-input">分钟</label>
						</div>

						<a href="#" class="timer-btn start waves-effect"><i class="mdi-av-play-arrow"></i></a>
						<a href="#" class="timer-btn pause waves-effect"><i class="mdi-av-pause"></i></a>
						<a href="#" class="timer-btn reset waves-effect"><i class="mdi-av-replay"></i></a>

						<div class="control checkbox">
							<input type="checkbox" id="timer-sounds" />
							<label for="timer-sounds">声音</label>
						</div>

					</form>

					<div class="clock inactive z-depth-1 waves-effect">0:00</div>
				</div>


			</div>

			<div id="times-up-modal" class="modal">
				<div class="modal-content">
					<h3>时间到了!</h3>
				</div>
				<div class="modal-footer">
					<a href="#!" class="dismiss-alarm-sounds modal-action waves-effect waves-red btn-flat">关闭闹钟</a>
				</div>
			</div>

		</div>
	</div>

	<div style="text-align:center;margin:1px 0; font:normal 14px/24px 'MicroSoft YaHei';"></div>
</body>
<script src="assets/assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/assets/materialize/js/materialize.min.js"></script>
<script src="assets/assets/jonthornton-jquery-timepicker/jquery.timepicker.min.js"></script>
<script src="assets/assets/js/hammer.js"></script>
<script src="assets/assets/js/script.js"></script>
<script src="assets/assets/js/alarm.js"></script>
<script src="assets/assets/js/stopwatch.js"></script>
<script src="assets/assets/js/timer.js"></script>


</html>