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
        .mui-content p{
            font-size: 12px;
            text-indent: 2em;
            color: #000;
        }
    </style>
</head>

<body>
    <header class="mui-bar mui-bar-nav my-header">
        <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>

        <h1 class="mui-title">什么是BMI</h1>
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
        <p>BMI ( Body mass index)是指身体质量指数，是评估体重与身高比例的常用工具。它主要是从健康的角度来衡量你是否超重，以及是否有肥胖引起的慢性疾病的危险。</p>
        <p>BMI的计算公式为:BMI=体重(kg)/(身高[m]x身高[m])</p>
        <p>世界卫生组织认为，对于18至65岁的人来说(孕妇、哺乳期妇女、老人及身型健硕的运动员除外)， 可以按以下的标准判断一个人是否肥胖:
        </p>
        <p>
            BMI值不足18.5时，瘦;
            BMI在18.5~ 24.9时，正常;
            BMI在25 ~ 30时，超重;
            BMI超过30，则为肥胖。
        </p>
        <p>另外，中国卫生部做出了更适合中国国情的判断，认为BMI在18.5~23.9时，这个人的BMI在正常范围内，此时他的身体比较健康。
        </p>
        <p>BMI低于正常范围，则会因为体内脂肪含量水平过低，使身体不能完全提供必需的脂肪生理功能、免疫力下降等。而BMI高于正常范围，就意味着患高血压、糖尿病或血脂异常等肥胖相关慢性疾病的概率会增加。
        </p>
        <p>根据BMI的不同，准妈妈在孕期所需要增加的体重也有所差异。

    </div>
</body>

</html>