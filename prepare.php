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
    <link rel="stylesheet" href="css/prepare.css">
    <script src="assets/mui/js/mui.min.js"></script>
    <script src="assets/zepto/zepto.min.js"></script>
    <script src="js/public.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>

</head>

<body>
    <header class="mui-bar mui-bar-nav my-header">
        <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>

        <h1 class="mui-title">预产包</h1>
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
        <div class="wrapper">
            <ul class="tab">
                <li class="tab-item active">准妈妈<span>|</span></li>
                <li class="tab-item">新生儿</li>
            </ul>
            <div class="products">
                <div class="main selected">
                    <!-- <a href="###"><img src="img/icon-40.png" alt=""/></a> -->
                    <ul class="mui-table-view">
                        <li class="mui-table-view-cell">袜子
                            <span class="mui-badge mui-badge-primary">5</span>
                        </li>
                        <li class="mui-table-view-cell">月子帽
                            <span class="mui-badge mui-badge-success">2</span>
                        </li>
                        <li class="mui-table-view-cell">面巾纸
                            <span class="mui-badge">3</span>
                        </li>
                        <li class="mui-table-view-cell">牙刷牙膏
                            <span class="mui-badge mui-badge-primary">1</span>
                        </li>
                        <li class="mui-table-view-cell">产褥垫
                            <span class="mui-badge mui-badge-success">2</span>
                        </li>
                        <li class="mui-table-view-cell">毛巾
                            <span class="mui-badge">3</span>
                        </li>
                        <li class="mui-table-view-cell">拖鞋
                            <span class="mui-badge mui-badge-primary">2</span>
                        </li>
                        <li class="mui-table-view-cell">睡衣
                            <span class="mui-badge">2</span>
                        </li>
                        <li class="mui-table-view-cell ">毛哺乳文胸
                            <span class="mui-badge mui-badge-primary">3</span>
                        </li>
                        <li class="mui-table-view-cell">内裤
                            <span class="mui-badge">3</span>
                        </li>
                    </ul>
                </div>
                <div class="main">
                    <!-- <a href="###"><img src="img/icon-01.png" alt=""/></a> -->
                    <li class="mui-table-view-cell">纸尿裤
                        <span class="mui-badge mui-badge-primary">1包</span>
                        <!-- <span>个edscs </span> -->
                    </li>
                    <li class="mui-table-view-cell">奶瓶
                        <span class="mui-badge mui-badge-success">2</span>
                    </li>
                    <li class="mui-table-view-cell">帽子
                        <span class="mui-badge mui-badge-primary">1</span>
                    </li>
                    <li class="mui-table-view-cell">湿纸巾
                        <span class="mui-badge mui-badge-success">2</span>
                    </li>
                    <li class="mui-table-view-cell">包被
                        <span class="mui-badge mui-badge-primary">2</span>
                    </li>
                    <li class="mui-table-view-cell">小方巾
                        <span class="mui-badge mui-badge-success">3</span>
                    </li>
                    <li class="mui-table-view-cell">宝宝衣物
                        <span class="mui-badge mui-badge-primary">4</span>
                    </li>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(function () {

        $(".tab>li").mouseenter(function () {

            //获取当前鼠标进入的li标签的索引
            var index = $(this).index();

            $(this).addClass("active").siblings("li").removeClass("active");

            //让对应索引的盒子显示 类名控制是否显示
            $(".products>div:eq(" + index + ")").addClass("selected").siblings("div").
            removeClass("selected");
        });
    });
</script>

</html>