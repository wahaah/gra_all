
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Hello MUI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!--标准mui.css-->
		<link rel="stylesheet" href="assets/mui/css/mui.min.css">
		<!--App自定义的css-->
		<!--<link rel="stylesheet" type="text/css" href="../css/app.css"/>-->
		
	</head>
	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">折叠面板</h1>
		</header>
		<div class="mui-content">
			<div class="mui-card">
				<ul class="mui-table-view">
					<li class="mui-table-view-cell mui-collapse">
						<a class="mui-navigate-right" href="#">表单</a>
						<div class="mui-collapse-content">
							<form class="mui-input-group">
								<div class="mui-input-row">
									<label>Input</label>
									<input type="text" placeholder="普通输入框">
								</div>
								<div class="mui-input-row">
									<label>Input</label>
									<input type="text" class="mui-input-clear" placeholder="带清除按钮的输入框">
								</div>
		
							
								<div class="mui-button-row">
									<button class="mui-btn mui-btn-primary" type="button" onclick="return false;">确认</button>&nbsp;&nbsp;
									<button class="mui-btn mui-btn-primary" type="button" onclick="return false;">取消</button>
								</div>
							</form>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
		<script src="assets/mui/js/mui.min.js"></script>
		<script>
			mui.init({
				swipeBack:true //启用右滑关闭功能
			});
		</script>
	</body>

</html>