<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>编辑新闻 | 立得电子控制台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/leader/Bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/leader/Plugins/fa/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/leader/Public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/leader/Public/css/skins.min.css">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Led</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>立得电子</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/leader/Public/upload/image/<?php echo ($_SESSION['href']); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo ($_SESSION['account']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/leader/Public/upload/image/<?php echo ($_SESSION['href']); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo ($_SESSION['account']); ?> - 后台管理员
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo U('Home/Index/index');?>" class="btn btn-default btn-flat">前台</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo U('Login/quit');?>" class="btn btn-default btn-flat">退出</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
            <!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主菜单</li>
            <li class="active treeview">
              <a href="<?php echo U('Index/index');?>">
                <i class="fa fa-dashboard"></i> <span>控制台</span>
              </a>
            </li>           
            <li id="pGoods" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>产品内容</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iGoods"><a href="<?php echo U('Goods/index');?>"><i class="fa fa-circle-o"></i> 查看产品</a></li>
                <li id="aGoods"><a href="<?php echo U('Goods/add');?>"><i class="fa fa-circle-o"></i> 添加产品</a></li>
              </ul>
            </li>
			<li id="pNews" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>新闻列表</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iNews"><a href="<?php echo U('News/index');?>"><i class="fa fa-circle-o"></i> 查看新闻</a></li>
                <li id="aNews"><a href="<?php echo U('News/add');?>"><i class="fa fa-circle-o"></i> 添加新闻</a></li>
              </ul>
            </li>
			<li id="pAdmin" class="treeview">
              <a href="#">
                <i class="fa fa-key"></i>
                <span>管理员组</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iAdmin"><a href="<?php echo U('Admin/index');?>"><i class="fa fa-circle-o"></i> 管理员列表</a></li>
                <li id="aAdmin"><a href="<?php echo U('Admin/add');?>"><i class="fa fa-circle-o"></i> 添加管理员</a></li>
              </ul>
            </li>
            <li id="important"><a href="#"><i class="fa fa-circle-o text-red"></i> <span>重要信息</span></a></li>
            <li id="warning"><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告信息</span></a></li>
            <li id="info"><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>一般信息</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        编辑新闻
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo U('Index/index');?>">
                                <i class="fa fa-dashboard">
                                </i>
                                控制台
                            </a>
                        </li>
                        <li class="active">
                            修改新闻
                        </li>
                    </ol>
                </section>
                <section class="content">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                修改新闻
                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo U('update');?>" method="post">
							<input type="hidden" name="id" value="<?php echo ($list[id]); ?>" />
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">
                                        标题
                                    </label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="输入标题" value="<?php echo ($list[title]); ?>"/>
                                </div>
								<div class="form-group">
                                    <label for="brief">
                                        新闻摘要
                                    </label>
                                    <input type="text" class="form-control" name="brief" id="brief" placeholder="输入新闻摘要" value="<?php echo ($list[brief]); ?>"/>
                                </div>
								<div class="form-group">
								  <label for="content">内容</label>
								  <textarea name="content" id="content" style="height:400px;" placeholder="Enter ..."><?php echo ($list['content']); ?></textarea>
								</div>
								
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" id="addSubmit" class="btn btn-primary">
                                    提交
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                    <section>
            </div>
            <!-- /.content-wrapper -->
            	<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">立得电子</a>.</strong> All rights reserved.
      </footer>
        </div>
        <!-- ./wrapper -->
        	<!-- jQuery 1.1.12 -->
    <script src="/leader/Public/js/jquery.js"></script>
	<!-- layer 2.2 -->
	<script src="/leader/Plugins/layer/layer.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/leader/Bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/leader/Public/js/app.min.js"></script>
        <script>
            $('#pNews').addClass("active").siblings().removeClass("active");
            $('#aNews').addClass("active");
        </script>
		<script charset="utf-8" src="/leader/Plugins/ueditor/ueditor.config.js"></script>
		<script charset="utf-8" src="/leader/Plugins/ueditor/ueditor.all.min.js"></script>
		<script charset="utf-8" src="/leader/Plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
		<script>
			var ue = UE.getEditor('content',{ initialFrameWidth: null });
			$('#addSubmit').click(function(){
				var title = $('#title').val();		
				var brief = $('#brief').val()
				ue.ready(function(){ 					
						$('#content').value = ue.getContent();		
				});
				if(title.length==0){
					layer.msg("标题不能为空");
					return false;
				}
				if(brief.length==0){
					layer.msg("新闻摘要不能为空");
					return false;
				}
				if(!ue.hasContents()){
					layer.msg("内容不能为空");
					return false;
				}
			});
		</script>
    </body>

</html>