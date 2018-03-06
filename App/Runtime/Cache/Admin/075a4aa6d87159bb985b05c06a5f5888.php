<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>联想 后台管理系统</title>
	<link rel="shortcut icon" href="/Public/admin/img/1.png">
	<link rel="stylesheet" href="/Public/admin/bs/css/bootstrap.min.css">
	<script src="/Public/admin/bs/js/jquery.min.js"></script>
	<script src="/Public/admin/bs/js/bootstrap.min.js"></script>
	<style>
		.navbar-blue{
			background-color: #ccc;
		}

		.navbar .navbar-brand{
			color:black;
		}

		.navbar .navbar-brand:hover{
			color:black;
		}

		.navbar-default .navbar-nav>li>a{
			color:black;
		}
		.navbar-default .navbar-nav>li>a:hover{
			color:black;

		}
		
		.body{
			margin-top:90px;
		}
		.list-group{
			display:none;
		}
		.panel-primary>.panel-heading{
			background-color: #ccc;
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- 导航条 -->
		<nav class="navbar navbar-default navbar-fixed-top navbar-blue" role="navigation">
			<div class="container-fluid">
			<!-- 导航logo -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img style="display:inline" width="30px" src="/Public/admin/img/1.png" alt="">   联想后台管理系统</a>
				</div>

			<!-- 出logo以外 -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo U('Index/clears');?>"><span class="glyphicon glyphicon-refresh"></span>清除缓存</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">后台管理<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="#"><?php echo ($_SESSION['lenovo_admin_name']); ?></a></li>
						    <li><a href="#" data-toggle="modal" data-target="#editPass">修改密码</a></li>
						    <li><a href="">前台首页</a></li>
						    <li><a href="<?php echo U('Login/logout');?>">退出</a></li>
						  </ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>


		<!-- 内容区域 -->
		<div class="row body">

			<!-- 菜单 -->
			<div class="col-md-2">

				<!-- 管理员管理-->
				<div class="panel panel-primary">
					<div class="panel-heading"  >
						<h2 class="panel-title" id="Admin"><span class="glyphicon glyphicon-user"></span> 管理员管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Admin/index');?>">管理员列表</a></li>
					 	
					</ul>
				</div>
				<!-- 会员管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="User"><span class="glyphicon glyphicon-user"></span> 会员管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('User/index');?>">会员列表</a></li>
					 	
					</ul>
				</div>


				<!-- 分类管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="Types"><span class="glyphicon glyphicon-tasks"></span> 分类管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Types/index');?>">分类列表</a></li> 	
					</ul>
				</div>

				<!-- 分类管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="Brand"><span class="glyphicon glyphicon-tasks"></span> 品牌管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Brand/index');?>">品牌列表</a></li> 	
					</ul>
				</div>
				<!-- 商品管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="Goods"><span class="glyphicon glyphicon-gift"></span> 商品管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Goods/index');?>">商品列表</a></li> 	
					</ul>
				</div>
				<!-- 订单管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="Orders"><span class="glyphicon glyphicon-list-alt"></span> 订单管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Orders/index');?>">订单列表</a></li> 	
					    <li class="list-group-item"><a href="<?php echo U('Orders/statu_list');?>">订单状态列表</a></li> 	
					</ul>
				</div>
				<!-- 评论管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="Comment"><span class="glyphicon glyphicon-envelope"></span> 评论管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Comment/index');?>">评论列表</a></li>	
					</ul>
				</div>
				<!-- 系统管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="Ads"><span class="glyphicon glyphicon-certificate"></span> 广告管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Ads/class_list');?>">分类广告</a></li>
					    <li class="list-group-item"><a href="<?php echo U('Ads/index');?>">广告管理</a></li>
					 	
					</ul>
				</div>

				<!-- 系统管理 -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title" id="Sys"><span class="glyphicon glyphicon-certificate"></span> 系统管理</h2>
					</div>
					<ul class="list-group">
					    <li class="list-group-item"><a href="<?php echo U('Sys/index');?>">系统配置</a></li>
					    <li class="list-group-item"><a href="<?php echo U('Sys/lunbo_list');?>">轮播图管理</a></li>
					 	
					</ul>
				</div>

				
			</div>

			<!-- 内容 -->
			<div class="col-md-10">
				
<ol class="breadcrumb">
	<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
	<li><a href="#">分类管理</a></li>
	<li class="active">分类添加</li>

	<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
</ol>

<!-- 面版 -->
<div class="panel panel-default">
	<div class="panel-heading">
		<a href="index.html" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 分类页面</a>
		<a href="" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加分类</a>
		
		


	</div>
	<div class="panel-body">


		<form action="<?php echo U('insert');?>" method="post">
			<div class="form-group">
				<label for="">CNAME</label>
				<input type="text" name="cname" class="form-control" id="">
				<input type="hidden" name="pid" value="<?php echo isset($_GET['pid'])?$_GET['pid']:0;?>">
				<input type="hidden" name="path" value="<?php echo isset($_GET['path'])?$_GET['path']:'0,';?>">
			
			</div>
			<div class="form-group">
				<label for="">Info</label>
				<input type="text" name="info" class="form-control" id="">
			</div>


			<div class="form-group">
				<input type="submit" value="提交" class="btn btn-success">
				<input type="reset" value="重置" class="btn btn-danger">
			</div>

		</form>
	</div>
	
</div>
				
				
			</div>
		</div>
	</div>


	<!-- 修改密码的摸态框 -->
	<div class="modal fade" id="editPass">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">修改密码</h4>
				</div>
				<div class="modal-body">
					<form action="">
						<div class="form-group">
							<label for="">原密码</label>
							<input type="password" name="" class="form-control" placeholder="请输入原密码" id="">
						</div>
						<div class="form-group">
							<label for="">新密码</label>
							<input type="password" name="" class="form-control" placeholder="请输入新密码" id="">
						</div>
						<div class="form-group">
							<label for="">确认密码</label>
							<input type="password" name="" class="form-control" placeholder="请再次输入密码" id="">
						</div>
						<div class="form-group pull-right">
							<input type="submit" value="提交" class="btn btn-success">
							<input type="reset" value="重置" class="btn btn-danger">
						</div>

						<div style="clear:both"></div>
					</form>
				</div>
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</body>
<script>


	// 菜单切换
	$(".panel-title").click(function(){
		$(".list-group").hide();
		$(this).parent().next().toggle(500);
	});

	str="<?php echo (CONTROLLER_NAME); ?>";

	$("#"+str).click();
	
</script>
</html>