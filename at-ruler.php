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

    <link rel="stylesheet" href="./css/ruler.css">
    <script src="./js/ruler.js"></script>
</head>

<body>
    <header class="mui-bar mui-bar-nav my-header">
        <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>

        <h1 class="mui-title">乐</h1>
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
        <span >体重刻度（单位/kg）：
            <span id="num">0.00</span>kg
        </span>
        <div id="ruler-container">
            <div id="triangle"></div>
            <div id="ruler" data-offset="0">
                <ul id="ruler-ul">
                    <li>
                        <span>10</span>
                    </li>
                    <li>
                        <span>20</span>
                    </li>
                    <li>
                        <span>30</span>
                    </li>
                    <li>
                        <span>40</span>
                    </li>
                    <li>
                        <span>50</span>
                    </li>
                    <li>
                        <span>60</span>
                    </li>
                    <li>
                        <span>70</span>
                    </li>
                    <li>
                        <span>80</span>
                    </li>
                    <li>
                        <span>90</span>
                    </li>
                    <li>
                        <span>100</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</body>

</html>