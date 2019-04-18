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

    <!-- 移动端日历 -->
    <link type="text/css" rel="stylesheet" href="css/yuchanqi/mobile_date.css">

    <script type="text/javascript" src="js/yuchanqi/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/yuchanqi/mobile_date.js"></script>

</head>

<body>
    <header class="mui-bar mui-bar-nav my-header">
        <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>

        <h1 class="mui-title">calender</h1>
        <!-- mui-pull-right右浮动 -->
        <!-- <a class="mui-icon mui-icon-search mui-pull-right"></a> -->
    </header>
    <nav class="mui-bar mui-bar-tab my-footer">
        <a class="mui-tab-item mui-active" href="index.html">
            <span class="mui-icon mui-icon-home"></span>
            <span class="mui-tab-label">首页</span>
        </a>
        <a class="mui-tab-item" href="test.html">
            <span class="mui-icon fa fa-heartbeat"></span>
            <span class="mui-tab-label">体质检测</span>
        </a>
        <a class="mui-tab-item" href="news.html">
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
        <div class="box">
            <section class="date">
                <div class="head">
                    <div class="prev">上一月</div>
                    <div class="tomon"><span class="year"></span>年 <span class="month"></span>月</div>
                    <div class="next">下一月</div>
                </div>
                <ol>
                    <li>周日</li>
                    <li>周一</li>
                    <li>周二</li>
                    <li>周三</li>
                    <li>周四</li>
                    <li>周五</li>
                    <li>周六</li>
                </ol>
                <ul>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                    <li>日期</li>
                </ul>
            </section>
        </div>
        <div>
            <span>你选择的预产期是：</span>2019-3-24
            <!-- console中有，动态获取 -->
        </div>

    </div>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/mui/css/mui.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="assets/fontAwesome/css/font-awesome.css">
    <script src="assets/mui/js/mui.min.js"></script>
    <script src="assets/zepto/zepto.min.js"></script>
    <script src="js/public.js"></script>

    <link type="text/css" rel="stylesheet" href="css/yuchanqi/mobile_date.css">

    <script type="text/javascript" src="js/yuchanqi/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/yuchanqi/mobile_date.js"></script>

</head>

<body> 
    <header class="mui-bar mui-bar-nav my-header">
        <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>
        <h1 class="mui-title">calender</h1>
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
            <span class="mui-icon fa fa-map-o"></span>
            <span class="mui-tab-label">公告咨询</span>
        </a>
        <a class="mui-tab-item" href="user.php">
            <span class="mui-icon mui-icon-person"></span>
            <span class="mui-tab-label">个人中心</span>
        </a>
    </nav>
    <div class="mui-content">
        <div class="box">
	    <section class="date">
	    	<div class="head">
	    		<div class="prev">上一月</div>
	    		<div class="tomon"><span class="year"></span>年 <span class="month"></span>月</div>
	    		<div class="next">下一月</div>
	    	</div>
	    	<ol><li>周日</li><li>周一</li><li>周二</li><li>周三</li><li>周四</li><li>周五</li><li>周六</li></ol>
	    	<ul>
	    		<li>日期</li><li>日期</li><li>日期</li><li>日期</li><li>日期</li><li>日期</li><li>日期</li>
	    		<li>日期</li><li>日期</li><li>日期</li><li>日期</li>
	    	</ul>
	    </section>
        </div>
       <div>
                <span>你选择的预产期是：<p class="yuchan"></p></span>
        </div> 

    </div>
</body>
<script>
    
</script>
</html> -->