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
        .mui-content img{
            width: 100%;
        }
    </style>
</head>

<body>
	<header class="mui-bar mui-bar-nav my-header">
            <a href="#" class="mui-icon mui-icon-arrowleft mui-pull-left"></a>

		<h1 class="mui-title">知识百科</h1>
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
            
            <div class="mui-card">
                <div class="mui-card-header">叶酸</div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <img src="img/yesuan.jpg" alt="">
                        <p>叶酸的作用:<br />
                                叶酸是人体在利用糖分和氨基酸时的必要物质，是机体细胞生长和繁殖所必需的物质。在体内叶酸以四氢叶酸的形式起作用，四氢叶酸在体内参与嘌呤核酸和嘧啶核苷酸的合成和转化。叶酸在制造核酸(核糖核酸、脱氧核糖核酸)上扮演重要的角色。叶酸帮助蛋白质的代谢，并与维生素B12共同促进红细胞的生成和成熟，是制造红血球不可缺少的物质。叶酸也作为干酪乳杆菌(Lactobacillus casei)及其它微生物的促进增殖因子而起作用。叶酸对细胞的分裂生长及核酸、氨基酸、蛋白质的合成起着重要的作用</p>
                        <p>叶酸缺乏的危害:<br />
                                人体缺少叶酸可导致红血球的异常，未成熟细胞的增加，贫血以及白血球减少。叶酸是胎儿生长发育不可缺少的营养素。孕妇缺乏叶酸有可能导致胎儿出生时出现低体重、唇腭裂、心脏缺陷等。如果在怀孕头3个月内缺乏叶酸，可引起胎儿神经管发育缺陷，而导致畸形。因此，准备怀孕的女性，可在怀孕前就开始每天服用100微克到300微克叶酸。
                        
                        </p>
                    </div>
                </div>
                <!-- <div class="mui-card-footer">页脚</div> -->
            </div>
            
            <div class="mui-card">
                <div class="mui-card-header mui-card-media" style="height:40vw;background-image:url(img/ye.jpg)"></div>
                <div class="mui-card-content">
                    <div class="mui-card-content-inner">
                        <p>Posted on January 18, 2016</p>
                        <p style="color: #333;">这里显示文章摘要，让读者对文章内容有个粗略的概念...</p>
                    </div>
                </div>
                <div class="mui-card-footer">
                    <a class="mui-card-link">Like</a>
                    <a class="mui-card-link">Read more</a>
                </div>
            </div>
            
            
            <!--<div class="mui-card">
                <div class="mui-card-header mui-card-media">
                    <div class="mui-card-media-object mui-pull-left">
                        <img src="../images/logo.png" width="34px" height="34px" />
                    </div>
                    <div class="mui-card-media-body">
                        小M
                        <p class="mui-ellipsis">发表于 6小时前</p>
                    </div>
                </div>
                <div class="mui-card-content mui-card-media" style="height:40vw;background-image:url(../images/yuantiao.jpg)"></div>
                <div class="mui-card-footer">
                    <a class="mui-card-link">Like</a>
                    <a class="mui-card-link">Comment</a>
                    <a class="mui-card-link">Read more</a>
                </div>
            </div>-->
            
            <div class="mui-card">
                <div class="mui-card-header mui-card-media">
                    <img src="img/icon-40.png" />
                    <div class="mui-media-body">
                        apple
                        <p>发表于 2016-06-30 15:30</p>
                    </div>
                    <!--<img class="mui-pull-left" src="../images/logo.png" width="34px" height="34px" />
                    <h2>小M</h2>
                    <p>发表于 2016-06-30 15:30</p>-->
                </div>
                <div class="mui-card-content" >
                    <img src="img/yingtao.jpg" alt="" width="100%"/>
                </div>
                <div class="mui-card-footer">
                    <a class="mui-card-link">Like</a>
                    <a class="mui-card-link">Comment</a>
                    <a class="mui-card-link">Read more</a>
                </div>
            </div>
        </div>
	</body>
	</html>

