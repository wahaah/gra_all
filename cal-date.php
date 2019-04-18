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
    <style>
        .mui-content p {
            font-size: 12px;
            text-indent: 2em;
            color: #000;
        }
    </style>
</head>

<body>
    <header class="mui-bar mui-bar-nav my-header">
        <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>

        <h1 class="mui-title">预产期计算说明</h1>
        <!-- mui-pull-right右浮动 -->
        <!-- <a class="mui-icon mui-icon-search mui-pull-right"></a> -->
    </header>
    <nav class="mui-bar mui-bar-tab my-footer">
        <a class="mui-tab-item " href="index.php">
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
        <span>预产期</span>
        <p>
            首先我们先了解几个常用名词。所谓预产期即孕妈们预计生产小宝贝的日子。排卵日，下次月经来潮的前14天左右，从下次月经的第一天算起减去14天就是排卵日，默认受精日是排卵日。孕40周，实际整个孕期从受精开始到预产期基本只有38周时间，但经常说孕40周，指的是包括了从末次月经开始到排卵日的两周喔~
        </p>
        <span>预产期计算</span>
        <p>估算法：
            根据孕妈的最后一次经期开始日，月份加9或减3，天数加7即为预产期。例如:<br />

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2015年8月1日是最后一次经期开始日<br />

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1:月份加9或减3为2016年5月1日<br />

         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2:再加7天，即201 6年5月8日为预产期<br />

            大多数医院会采用这种算法，因为预产期本来就是一个估算的日子，所以不需要特别精确。但严格意义上说，下一次月经期的前两个周才是排卵期，因此为了推算出更加接近的预产期，我们才建议孕妈们再填写月经周期。

        </p>
        <p>
            更加准确的估算法:

            例如: 2015年8月1日是最后一次经期开始日，月经周期为25天。<br />

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1:推算下一次经期时间,8月1日+25天=2015年8月26日

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2:推算排卵日,2015年8月26日-14天=201 5年8月12日

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3:推算预产期,38*7=266天，2015年8月12日+266天=2016年5月4日。

            因此预产期就是2016年5月4日了。实际就是最后一次经期开始 日+月经周期+252天=预产期，若计算得出预产期结果超出最后-次经期开始日+280天，则按预产期=最后-
            -次经期开始日+280计算但请注意无论使用什么方法，实际上总会因为这样那样的原因有了或多或少的偏差。

            还不理解也没关系，帮你搞定一切 !


        </p>


    </div>
</body>

</html>