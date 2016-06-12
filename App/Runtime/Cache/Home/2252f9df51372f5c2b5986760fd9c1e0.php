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
                    <h1>产品展示 </h1>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!--container-->
<section id="container">
    <div class="container">
        <!--filter-->
        <ul id="filtrable">
            <li class="current all"><a href="#all">全部</a></li>
            <li class="li1"><a href="#li1">高鹏灯</a></li>
            <li class="li2"><a href="#li2">低功率鹏灯</a></li>
            <li class="li3"><a href="#li3">射灯</a></li>
            <li class="li4"><a href="#li4">泛光灯</a></li>
			<li class="li5"><a href="#li5">路灯</a></li>
            <li class="li6"><a href="#li6">面板灯</a></li>
            <li class="li7"><a href="#li7">交流T8灯管</a></li>
            <li class="li8"><a href="#li8">全塑T8交流灯管</a></li>
            <li class="li9"><a href="#li9">陈列照明</a></li>
        </ul>

        <div class="clear"></div>

        <section class="row portfolio filtrable clearfix">
			<?php if(is_array($goods)): foreach($goods as $key=>$val): ?><article data-id="id-1" data-type="li<?php echo ($val['sort']); ?>" class="col-md-3">
					<div class="inner-image">
						<a href="javascript:void(0); " data-rel="prettyPhoto">
							<img src="/leader/Public/upload/image/<?php echo ($val['href']); ?>"  class="img-responsive" alt="photo" />
							<span class="frame-overlay"></span>
						</a>
					</div>
					<div class="sliding">
						<div class="inner-text">
							<h4 class="title"><a href="javascript:void(0);"><?php echo ($val['brief']); ?></a></h4>

						</div>
					</div>
				</article><?php endforeach; endif; ?>
        </section>
        <!--pagination-->
		<div class="row" style="text-align:center">
             <ul class="pagination pagination-sm no-margin center">
				<?php echo ($page); ?>
			</ul>
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
		$("#menu li:eq(2)").addClass("current").siblings().removeClass("current");
	</script>
</body>
</html>