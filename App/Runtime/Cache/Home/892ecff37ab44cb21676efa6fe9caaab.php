<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>肇庆市立德电子有限公司</title>
    <link href="/leader/Bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="/leader/Public/css/style.css" type="text/css" rel="stylesheet" />
    <link href="/leader/Public/css/prettyPhoto.css" type="text/css" rel="stylesheet" />
    <link href="/leader/Public/css/font-icomoon.css" type="text/css" rel="stylesheet" />
    <link href="/leader/Plugins/fa/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Abcty2d6CGtscG1TZK3K32ZFIR5bMURZ"></script>
<body>
	<!--top menu-->
<section id="top-menu">
    <div class="container">
        <div class="row">
         </div>
    </div>
</section>
<!--header-->
<header id="header">
    <div class="container">
        <div class="row header-top">
            <div class="col-md-5 logo">
                <a class="logo-img" href="./index.html" title="responsive template"><img src="/leader/Public/images/logo1.jpg" width="130" alt="立德电子" /></a>
            </div>
            <div class="col-md-7 social-container">
                <p class="phone hidden-phone"><i class="fa fa-envelope-o"></i>sales@ledtech.com.cn</p><p class="phone hidden-phone"><i class="fa fa-bell"></i> 联系我们 (0758)2877017</p>
                
            </div>
        </div>
        <div class="row header-nav">
           <div class="col-md-12 no-padding">
                <nav id="menu" class="clearfix">
                    <ul>
                        <li class="current"><a href="<?php echo U('Index/index');?>"><span class="name">首页</span></a></li>
                        <li><a href="<?php echo U('About/index');?>"><span class="name">关于立德</span></a></li>
                        <li><a href="<?php echo U('Goods/index');?>"><span class="name">产品展示</span></a></li>
                        <li><a href="<?php echo U('News/index');?>"><span class="name">新闻资讯</span></a></li>
                        <li><a href="<?php echo U('Contact/index');?>"><span class="name">联系我们</span></a></li>
                    </ul>
                </nav>
               <!--<form class="top-search pull-right">-->
                       <!--<input type="text" placeholder="text here..." class="col-md-3">-->
                       <!--<button type="button" class="btn"><i class="icon-search-form"></i></button>-->
               <!--</form>-->
            </div>
        </div>
    </div>
</header>
	<!--page header / breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <div class="page-header">
            <div class="row">
                <div class="col-md-8">
                    <h3>联系我们</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--container-->
<section id="container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<div style="width:100p%;height:350px;border:#ccc solid 1px;font-size:12px" id="map"></div>
            </div>
        </div>
        <div class="row">
            <section id="page-sidebar" class="col-md-8">
                <h4>留言</h4>
                <form name="contact" method="post" action="<?php echo U('index');?>" class="form-horizontal" />
                    <div class="form-group">
						<label for="nick" class="col-sm-2 control-label">昵称</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nick" name="nick" placeholder="昵称">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">邮箱</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="email" name="email" placeholder="邮箱">
						</div>
					</div>
					<div class="form-group">
						<label for="cnt" class="col-sm-2 control-label">内容</label>
						<div class="col-sm-9">
							<textarea name="cnt" id="cnt" class="form-control" rows="5"></textarea>
						</div>
					</div>
                    <div class="af-outer af-required" style="text-align:center">
                        <div class="af-inner">
                            <input type="submit" name="submit" class="form-button btn btn-welcome btn-large" id="submit_btn" value="发送" />
                        </div>
                    </div>
                </form>
            </section>
            <!--sidebar-->
            <aside id="sidebar" class="col-md-4">
                <!--address-->
                <section>
                    <h4>联系方式</h4>
                    <address>
                        <p>
                            <i class="fa fa-map-marker"></i> 肇庆市睦岗镇南亚路<br />
                            <i class="fa fa-user"></i>  (0758)2877017<br />							
                            <i class="fa fa-user"></i> FAX:(0758)2878014<br />
                            <i class="fa fa-envelope"></i> <a href="mailto:#">sales@ledtech.com.cn</a>
                        </p>
                    </address>
                </section>
                <section>
                    <h4>工作时间</h4>
                    <ul class="unstyled">
                        <li class="clearfix" style="height:30px">星期一 ~ 星期五:<p class="fr">上午9：00 to 下午6：00</p></li>
                        <li class="clearfix" style="height:30px">星期六:<p class="fr">上午10：00 to 下午4：00</p></li>
                        <li class="clearfix" style="height:30px">星期日:<p class="fr">休息</p></li>
                    </ul>
                </section>
            </aside>
        </div>
    </div>    
</section>
	<!--footer-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p><img src="/leader/Public/images/logo1.jpg" width="100" alt="" /></p>
                <address>
                    <p><i class="fa fa-map-marker"></i> 肇庆市睦岗镇南亚路南亚工业区</p>
                    <p><i class="fa fa-phone"></i> (0758)2877017</p>
                    <p><i class="fa fa-print"></i> (0758)2878014</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:#">sales@ledtech.com.cn</a></p>
                </address>
            </div>
            
            <div class="col-md-5">
                <p class="heading">关于立德</p>
                <p style="line-height:2">肇庆市立德电子有限公司将立足肇庆、放眼世界的宏观理念，贯彻全球化的运筹布局，致力于专业分工以及资源整合，强化我们的核心技术与优势能力，最重要的是发挥团队合作精神，以追求立德公司永久经营与回馈社会的使命。 </p>
            </div>
            <div class="col-md-4">
                <p class="heading">立德电子</p>
                <ul class="footer-navigate">
                    <li><a href="<?php echo U('About/index');?>">关于立德</a></li>
                    <li><a href="<?php echo U('Goods/index');?>">产品展示</a></li>
                    <li><a href="<?php echo U('News/index');?>">新闻资讯</a></li>
                    <li><a href="<?php echo U('Contact/index');?>">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--footer menu-->
<section id="footer-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="copyright">Copyright &copy; 2016.肇庆市立德电子有限公司 All rights reserved.</p>
            </div>
        </div>
    </div>
</section>
	<script type="text/javascript" src="/leader/Public/js/jquery.js"></script>
<script type="text/javascript" src="/leader/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/leader/Public/js/hoverIntent.js"></script>
<script type="text/javascript" src="/leader/Public/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="/leader/Public/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/leader/Public/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/leader/Public/js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="/leader/Public/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/leader/Public/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="/leader/Public/js/jquery.tweet.js"></script>
<script type="text/javascript" src="/leader/Public/js/smoothscroll.js"></script>
<script type="text/javascript" src="/leader/Public/js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="/leader/Public/js/main.js"></script>
	<script>
		$("#menu li:eq(4)").addClass("current").siblings().removeClass("current");
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(112.449651,23.065412),16);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"电话：(0758)2877017<br />传真：(0758)2878014",title:"肇庆市立德电子有限公司",imageOffset: {width:-46,height:-21},position:{lat:23.065312,lng:112.447638}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
	</script>
</body>
</html>