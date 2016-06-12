<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>产品列表 | 立德电子控制台</title>
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
		<!-- jQuery 1.1.12 -->
    <script src="/leader/Public/js/jquery.js"></script>
	<!-- layer 2.2 -->
	<script src="/leader/Plugins/layer/layer.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/leader/Bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/leader/Public/js/app.min.js"></script>
	<div class="wrapper">
		<header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T</b>YM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Tony</b>MB</span>
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
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
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
            产品列表
            <small>序号越低，排名越前</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i> 控制台</a></li>
            <li class="active">查看产品</li>
          </ol>
        </section>
		<section class="content">
		<div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <div class="search-box">
					  <form class="form-inline" action="" method="get">
					    <select name="order" id="order" class="form-control input-sm">
							<option value="adc">发布时间降序</option>
							<option value="desc">发布时间升序</option>
						</select>
						<select name="sort" id="sort"  class="form-control input-sm">
							<option value="0">分类</option>
							<option value="1">LED高鹏灯</option>
							<option value="2">LED低功率鹏灯</option>
							<option value="3">LED射灯</option>
							<option value="4">LED泛光灯</option>
							<option value="5">LED路灯</option>
							<option value="6">LED面板灯</option>
							<option value="7">LED交流T8灯管</option>
							<option value="8">LED全塑T8交流灯管</option>
							<option value="9">LED陈列照明</option>
						</select>
						<div class="input-group" style="width: 150px;">
						  <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
						  <div class="input-group-btn">
							<button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
						  </div>
						</div>
					  </form>
                  </div>
                </div><!-- /.box-header -->
				<form id="form" action="<?php echo U('del');?>" method="post">
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th class="center"><input class="check-all" type="checkbox" value=""></th>
						<th>产品图</th>
						<th>排序</th>
						<th>分类</th>
						<th>简介</th>
						<th>详情</th>
						<th>时间</th>
						<th class="center">操作</th>
				    </tr>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
						<td class="center">
							<input class="lids" type="checkbox" name="id[]" value="<?php echo ($val['id']); ?>">
						</td>
						<td><img src="/leader/Public/upload/image/<?php echo ($val['href']); ?>" width="150px" height="130px" /></td>
						<td><?php echo ($val['ol']); ?></td>
						<script>
						$(function(){
							var sort = <?php echo ($val['sort']); ?>;
							switch(sort){
							case 1: $('.sort<?php echo ($val['id']); ?>').text('LED高鹏灯');break;
							case 2: $('.sort<?php echo ($val['id']); ?>').text('LED低功率鹏灯');break;
							case 3: $('.sort<?php echo ($val['id']); ?>').text('LED射灯');break;
							case 4: $('.sort<?php echo ($val['id']); ?>').text('LED泛光灯');break;
							case 5: $('.sort<?php echo ($val['id']); ?>').text('LED路灯');break;
							case 6: $('.sort<?php echo ($val['id']); ?>').text('LED面板灯');break;
							case 7: $('.sort<?php echo ($val['id']); ?>').text('LED交流T8灯管');break;
							case 8: $('.sort<?php echo ($val['id']); ?>').text('LED全塑T8交流灯管');break;
							case 9: $('.sort<?php echo ($val['id']); ?>').text('LED陈列照明');break;						
							}
						});
						</script>
						<td class="sort<?php echo ($val['id']); ?>"></td>
						<td><?php echo (msubstr($val['brief'],0,30)); ?></td>
						<td><a href="<?php echo U('edit');?>?id=<?php echo ($val['id']); ?>">点击查看</a></td>
						<td><?php echo ($val['time']); ?></td>
						<td class="center"><a href="<?php echo U('edit');?>?id=<?php echo ($val['id']); ?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="del" href="javascript:;" val="<?php echo U('del');?>?id=<?php echo ($val['id']); ?>" title="删除"><i class="fa fa-trash-o"></i></a></td>
									
				   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </table>
                </div><!-- /.box-body -->
				<div class="box-footer clearfix">
			      <a href="<?php echo U('add');?>" id="add" class="btn btn-default">增加</a>
				  <button type="button" id="del" class="btn btn-default">删除</button>
                  <ul class="pagination pagination-sm no-margin pull-right">
                   <?php echo ($page); ?>
                  </ul>
                </div>
				</form>
              </div><!-- /.box -->
            </div>
          </div>
		  </section><!-- /.content -->
	    </div>
		<!-- /.content-wrapper -->
			<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">ZZ Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

	<script>
		$('#pGoods').addClass("active").siblings().removeClass("active");
		$('#iGoods').addClass("active");
		$('#order').change(function(){
			$('form:eq(1)').submit();
		})
		$('#sort').change(function(){
			$('form:eq(1)').submit();
		})
		$(function(){
			$(".check-all").click(function(){
				$(".lids").prop("checked", this.checked);
			});
			$(".lids").click(function(){
				$(".lids").each(function(i){
					if(!this.checked){
						$(".check-all").prop("checked", false);
						return false;
					}else{
						$(".check-all").prop("checked", true);
					}
				});
			});
			$("#del").click(function(){
				layer.open({
					icon:0,
					title: '删除列表',
					type: 0, 
					content: '是否删除选中列表',
					btn: ['确认', '取消'],
					yes: function(){
						$('#form').submit();
						}
				});	
			});
			$(".del").click(function(){
				var val=$(this).attr('val');
				layer.open({
					icon:0,
					title: '删除列表',
					type: 0, 
					content: '是否删除选中列表',
					btn: ['确认', '取消'],
					yes: function(){
							location.href = val;
						}
				});	
			});
			
		});
	</script>
</body>
</html>