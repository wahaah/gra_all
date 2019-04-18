<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <link href="assets/mui/css/mui.min.css" rel="stylesheet" />
    <style>
        html,  
                    body {  
                        background-color: #efeff4;  
                    }  
                    .mui-views,  
                    .mui-view,  
                    .mui-pages,  
                    .mui-page,  
                    .mui-page-content {  
                        position: absolute;  
                        left: 0;  
                        right: 0;  
                        top: 0;  
                        bottom: 0;  
                        width: 100%;  
                        height: 100%;  
                        background-color: #efeff4;  
                    }  
                    .mui-pages {  
                        top: 44px;  
                        height: auto;  
                    }  
                    .mui-scroll-wrapper,  
                    .mui-scroll {  
                        background-color: #efeff4;  
                    }  
                    .mui-page.mui-transitioning {  
                        -webkit-transition: -webkit-transform 300ms ease;  
                        transition: transform 300ms ease;  
                    }  
                    .mui-page-left {  
                        -webkit-transform: translate3d(0, 0, 0);  
                        transform: translate3d(0, 0, 0);  
                    }  
                    .mui-ios .mui-page-left {  
                        -webkit-transform: translate3d(-20%, 0, 0);  
                        transform: translate3d(-20%, 0, 0);  
                    }  
            
                    .mui-navbar .mui-bar {  
                        position: absolute;  
                        /*background: transparent;*/  
                        text-align: center;  
                    }  
                    .mui-android .mui-navbar-inner.mui-navbar-left {  
                        opacity: 0;  
                    }  
                    .mui-ios .mui-navbar-left .mui-left,  
                    .mui-ios .mui-navbar-left .mui-center,  
                    .mui-ios .mui-navbar-left .mui-right {  
                        opacity: 0;  
                    }  
                    .mui-navbar .mui-btn-nav {  
                        -webkit-transition: none;  
                        transition: none;  
                        -webkit-transition-duration: .0s;  
                        transition-duration: .0s;  
                    }  
                    .mui-navbar .mui-bar .mui-title {  
                        display: inline-block;  
                        position: static;  
                        width: auto;  
                    }  
                    .mui-page-shadow {  
                        position: absolute;  
                        right: 100%;  
                        top: 0;  
                        width: 16px;  
                        height: 100%;  
                        z-index: -1;  
                        content: '';  
                    }  
                    .mui-page-shadow {  
                        background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, .01) 50%, rgba(0, 0, 0, .2) 100%);  
                        background: linear-gradient(to right, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, .01) 50%, rgba(0, 0, 0, .2) 100%);  
                    }             
                    .mui-navbar-inner.mui-transitioning,  
                    .mui-navbar-inner .mui-transitioning {  
                        -webkit-transition: opacity 300ms ease, -webkit-transform 300ms ease;  
                        transition: opacity 300ms ease, transform 300ms ease;  
                    }  
                    .mui-page {  
                        display: none;  
                    }  
                    .mui-pages .mui-page {  
                        display: block;  
                    }  
                    .mui-page .mui-table-view:first-child {  
                        /*margin-top: 15px;*/  
                    }  
                    .mui-page .mui-table-view:last-child {  
                        /*margin-bottom: 30px;*/  
                    }  
                    .mui-table-view {  
                        /*margin-top: 20px;*/  
                    }  
                    .mui-table-view:after {  
                        height: 0;  
                    }  
                    .mui-table-view span.mui-pull-right {  
                        color: #999;  
                    }  
                    .mui-table-view-divider {  
                        background-color: #efeff4;  
                        font-size: 14px;  
                    }  
                    .mui-table-view-divider:before,  
                    .mui-table-view-divider:after {  
                        height: 0;  
                    }  
                    .mui-grid-view.mui-grid-9 .mui-table-view-cell.mui-selected{  
                        background-color: #66FF99;  
                    }  
                    .mui-fullscreen{  
                        position: fixed;  
                        z-index: 20;  
                        background-color: #000;  
                    }  
                    .mui-input-row label{  
                        padding-right: 5px;  
                        width:20%;  
                    }  
                    .mui-input-row a{  
                        color: #000000;  
                    }  
                    .mui-table-view:before{  
                        display: none;  
                    }  
            
                    .mui-checkbox label {  
                        display: inline-block;  
                        width: auto;  
                        vertical-align: text-bottom;  
                        padding: 2px 0px;  
                        color: #777;  
                    }  
                    .mui-checkbox input {  
                        position: relative !important;  
                        top: auto!important;  
                        left: auto!important;  
                        right: auto!important;  
                        bottom: auto!important;  
                        margin: 0px;  
                        padding: 0px;  
                        vertical-align: text-bottom;  
                    }  
                    .mui-checkbox {  
                        margin: 3px 10px;  
                    }  
                    .mui-radio.mui-left label {  
                        padding-right: 10px;  
                        padding-left: 30px;  
                    }  
                    .mui-radio.mui-left input[type=radio] {  
                        left: 0px;  
                    }  
                    .required{  
                        color: red;  
                        padding-right: 3px;  
                    }  
                </style>

</head>

<body>
    <div id="app" class="mui-views">
        <div class="mui-view">
            <div class="mui-navbar">
            </div>
            <div class="mui-pages" style="bottom: 44px;">
            </div>

        </div>
    </div>

    <div id="firstStep" class="mui-page">
        <div class="mui-navbar-inner mui-bar mui-bar-nav">
            <!-- <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left "></a>
            <h1 class="mui-center mui-title">demo</h1> -->
        </div>
        <div class="mui-page-content">
            <div class="mui-content-padded mui-text-center">
                <button id='driver-button' class="mui-btn mui-btn-block mui-btn-primary ">下一步</button>

            </div>
        </div>
    </div>

    <div id="secondStep" class="mui-page">
        <div class="mui-navbar-inner mui-bar mui-bar-nav">
            <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left "></a>
            <h1 class="mui-center mui-title">切换</h1>
        </div>
        <div class="mui-page-content">
            <div id="slider" class="mui-slider">
                <div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
                    <a class="mui-control-item" href="#item1mobile">
                        待办公文
                    </a>
                    <a class="mui-control-item" href="#item2mobile">
                        已办公文
                    </a>
                </div>
                <div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-6"></div>
                <div class="mui-slider-group">
                    <div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
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

                        </ul>
                    </div>
                    <div id="item2mobile" class="mui-slider-item mui-control-content">
                        <ul class="mui-table-view mui-table-view-chevron">
                            <li class="mui-table-view-cell">
                                <a href="#account" class="mui-navigate-right">账号与安全</a>
                            </li>
                        </ul>
                        <ul class="mui-table-view mui-table-view-chevron">
                            <li class="mui-table-view-cell">
                                <a href="#notifications" class="mui-navigate-right">新消息通知</a>
                            </li>
                            <li class="mui-table-view-cell">
                                <a href="#privacy" class="mui-navigate-right">隐私</a>
                            </li>
                            <li class="mui-table-view-cell">
                                <a href="#general" class="mui-navigate-right">通用</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/mui/js/mui.js"></script>
    <script src="assets/mui/js/mui.view.js "></script>
    <script src="assets/mui/js/app.js"></script>
    <script type="text/javascript" charset="utf-8">
        mui.init();

        var viewApi = mui('#app').view({
            defaultPage: '#firstStep'
        });

        document.getElementById("driver-button").addEventListener("tap", function () {
            viewApi.go("#secondStep");
        });
    </script>
</body>