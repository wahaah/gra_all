<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />

    <meta http-equiv="Access-Control-Allow-Origin" content="*">

    <title></title>

    <link rel="stylesheet" href="assets/mui/css/mui.min.css">
    <!-- <link rel="stylesheet" href="css/mui.min.css" /> -->

    
    <!-- <script src="assets/mui/js/mui.min.js"></script> -->
   
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/mui/js/mui.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery-1.8.1.js"></script>

    <script type="text/javascript" src="js/mui.min.js"></script> -->

    <style>
        .imageup {
            width: 100px;
            height: 36px;
            line-height: 36px;
        }

        /* //这是上传图片按钮的css样式 */

        .button {
            width: 100px;
            height: 50px;
            line-height: 50px;
        }

        /* //这是button的样式主要是图片的上传 */

        ul li p {

            display: inline-block; 
            /* //无序链表下的p元素呈现线性块状 */

        }
    </style>

</head>

<body>

    <ul class="list">
        <!-- 将不同的上传部件放于一个列表中 -->

        <li class='mui-table-view-cell mui-media'>

            <img id="headimg" class="headimg" src='' height="150" width="150">
            <!-- //图片预览的img -->

            <p><a class="imageup 1">上传图片1</a> </p>

            <p><button onclick="upload();" class='button'> 提交</button></p>

        </li>

       
    </ul>

</body>
<script >
      //扩展API完成后执行的操作

                function plusReady(){               

//给选中的li增加判别class

   $(".list li").on("tap",".imageup",function(){//on 方法是事件绑定

//tap是mui的按下事件，目标是所有使用imageup的html组件

   alert('11');

   var $li = $(this).parents("li");//获取祖先节点中的li

    console.log($($li).text())                

   $li.addClass("selectLi");//addclass是添加css的方法

   $li.siblings().removeClass("selectLi");   
    // siblings找到所有兄弟节点 removeclass  移除某一个css样式       

    page.imgUp();//打开imgup方法

   })

} 



//弹出系统按钮选择框

var page=null; 

page={ 

   imgUp:function(){ 

       var m=this; 

      /* console.log(m);*/

       plus.nativeUI.actionSheet({cancel:"取消",buttons:[ //  nativeUI管理系统原生界面，可用于弹出系统原生提示对话框窗口、时间日期选择对话框、等待对话框等

           {title:"拍照"}, 

           {title:"从相册中选择"} 

       ]}, function(e){//1 是拍照  2 从相册中选择 

           switch(e.index){ 

               case 1:appendByCamera();break; //appendByCamara调用相机的方法

               case 2:appendByGallery();break; //调用相册的方法

           } 

       }); 

   } 

} 



// 拍照添加文件

function appendByCamera(){//拍照方法

plus.camera.getCamera().captureImage(function(e){//调用原生的相机

   console.log("e is" +  e);

   plus.io.resolveLocalFileSystemURL(e, function(entry) {//获取相片的存储路径

       var path = entry.toLocalURL();//获取本地路径

       var indexa = liIndex()//获取上传的是第张照片

       console.log(indexa);

       $(".headimg")[indexa].src = path; //图片显示在所有使用heading img样式的第indexa个元素上              

   }, function(e) {

       mui.toast("读取拍照文件错误：" + e.message);

   });



});   

}

// 从相册添加文件

function appendByGallery(){

plus.gallery.pick(function(path){//打开手机相册的方法

   var indexa = liIndex();//获取这是第几个元素

   console.log(indexa);

   $(".headimg")[indexa].src = path;显示选择的图片

});

}





//服务端接口路径

var server = "http://www.test.cn/aaa.php";//set服务器地址

//获取图片元素

var files = document.getElementById('headimg');//找到图片

// 上传文件

function upload(){

var wt=plus.nativeUI.showWaiting();//显示等待框

var task=plus.uploader.createUpload(server,//文件上传方法

   {method:"POST"},//上传方式post

   function(t,status){ //上传完成 服务器返回了信息

       if(status==200){

           alert("上传成功："+t.responseText);

           wt.close(); //关闭等待提示按钮

       }else{

           alert("上传失败："+status);

           wt.close();//关闭等待提示按钮

       }

   }

);  

//添加其他参数

task.addData("name","test");//相当于formData方法

task.addFile(files.src,{key:"dddd"});

task.start();

} 







//判断点击的是上传的第几个li             

function liIndex(){

var lis = $(".list").children();

console.log(lis.length)

for(var i = 0; i < lis.length;i++){ 

   console.log($(lis[i]).attr("class"))

   var lisClass = $(lis[i]).attr("class").split(" ");

   if(lisClass[2] == "selectLi"){

       console.log(i);

       return i;

   }

}

}





//扩展API是否准备好，如果没有准备好则监听plusReady 

if(window.plus){

plusReady();

}else{

document.addEventListener("plusready",plusReady,false);

//添加事件监听 监听plusready事件

}


</script>

</html>