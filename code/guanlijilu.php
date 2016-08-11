<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="utf-8" />
		<title>户籍管理系统-管理记录</title>
		<meta name="keywords" content="管理记录" />
		<meta name="description" content="管理记录" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts 磨磨唧唧只好注释掉了，什么鬼(╯‵□′)╯︵┻━┻-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			h1,h2,h3,h4,h5
			{
				font-family: "微软雅黑";
			}
		</style>
	</head>

	<body style="font-family: '微软雅黑';">
		<!--导航条写起来超级开心(╯‵□′)╯︵┻━┻-->
		<?php
			require "conn.inc.php";
			//$code=$_REQUEST['code'];
			$code = 0;
			
			session_start();
			
			
			$code = $_SESSION['code'];
			if ($code==0){
				header("Location:http://localhost/jemadmin/login.php");
			}
			//$_SESSION['code']=14451113;
			
			
			$sql = "select * from operator where code = \"".$code."\";";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			$name = $row['name'];
			$idcard = $row['IDcard'];
			$phone = $row['phone'];
			//echo"$name";
		?>		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							Jem Admin
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/avatar1.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎,</small>
									<?php echo $name; ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="userxiugai.php" >
										<i class="icon-cog"></i>
										修改设置
									</a>
								</li>

								<li>
									<a href="gerenxinxi.php" >
										<i class="icon-user"></i>
										管理员信息
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="login.php?status=0" >
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
				
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>
					
					<!--四方君萌萌哒（づ￣3￣）づ╭❤～-->
					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->
					
					<!--侧菜单栏君怒bibibi(╯‵□′)╯︵┻━┻-->
					<ul class="nav nav-list">
						<li>
							<a href="gerenxinxi.php">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 个人中心 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 查询管理  </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="renkouchaxun.php">
										<i class="icon-double-angle-right"></i>
										人口查询
									</a>
								</li>

								<li>
									<a href="hukouchaxun.php">
										<i class="icon-double-angle-right"></i>
										户口查询
									</a>
								</li>
							</ul>
								
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 人口管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="xiugaiziliao.php">
										<i class="icon-double-angle-right"></i>
										修改资料
									</a>
								</li>

								<li>
									<a href="xiugaihukou.php">
										<i class="icon-double-angle-right"></i>
										修改户口
									</a>
								</li>

								<li>
									<a href="qianruguanli.php">
										<i class="icon-double-angle-right"></i>
										迁入管理
									</a>
								</li>

								<li>
									<a href="xinjianrenyuan.php">
										<i class="icon-double-angle-right"></i>
										新建人员
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 户口管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="xiugaiziliaoh.php">
										<i class="icon-double-angle-right"></i>
										修改资料
									</a>
								</li>

								<li>
									<a href="xiugairenkou.php">
										<i class="icon-double-angle-right"></i>
										修改人口
									</a>
								</li>

								<li>
									<a href="qianruguanlih.php">
										<i class="icon-double-angle-right"></i>
										迁入管理
									</a>
								</li>

								<li>
									<a href="xinjianhukou.php">
										<i class="icon-double-angle-right"></i>
										新建户口
									</a>
								</li>
							</ul>
						</li>
						
						<li class="active">
							<a href="guanlijilu.php">
								<i class="icon-calendar"></i>

								<span class="menu-text">
									管理记录
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
							</a>
						</li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
						
						<!--面包好不好吃~(づ￣ 3￣)づ-->
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="index.html">主页</a>
							</li>
							<li class="active">管理记录</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<!--来来来这里代码码起来（づ￣3￣）づ╭❤～-->
					<div class="page-content">
						<div class="page-header">
							<h1 style="font-family:'微软雅黑';">
								管理信息浏览
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div id="timeline-1">
									<div class="row">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<div class="timeline-container">
												<div class="timeline-label">
													<span class="label label-primary arrowed-in-right label-lg">
														<b>Today</b>
													</span>
												</div>

												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<img alt="Susan't Avatar" src="assets/avatars/avatar1.png" />
															<span class="label label-info label-sm">16:22</span>
														</div>

														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h5 class="smaller">
																	<a href="#" class="blue">Jem</a>
																	<span class="grey">修改了人口资料</span>
																</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	16:22
																</span>

																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>
															</div>

															<div class="widget-body" style="font-family: '微软雅黑';">
																<div class="widget-main" style="font-family: '微软雅黑';">
																	Jem 修改了 杨静如 
																	<span class="blue">(身份证号：620121199511131445)</span>

																	的 <span class="red">文化程度 职业</span> 资料
																	<div class="space-6"></div>

																	
																		<div class="pull-left">
																			<i class="icon-hand-right grey bigger-125"></i>
																			<a href="#" class="bigger-110" style="font-family: '微软雅黑';">点击查看详情</a>
																		</div>
																	<div class="widget-toolbox clearfix">
																		<!--<div class="pull-right action-buttons">
																			<a href="#">
																				<i class="icon-ok green bigger-130"></i>
																			</a>

																			<a href="#">
																				<i class="icon-pencil blue bigger-125"></i>
																			</a>

																			<a href="#">
																				<i class="icon-remove red bigger-125"></i>
																			</a>
																		</div>-->
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<i class="timeline-indicator icon-star btn btn-warning no-hover green"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h5 class="smaller">修改了户口资料</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	9:15
																</span>
																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>
															</div>

															<div class="widget-body">
																<div class="widget-main">
																	Jem 修改了 杨静如  
																	<span class="blue">(身份证号：620121199511131445)</span>

																	的 <span class="red">迁入日期 迁入地址</span> 资料
																	<div class="space-6"></div>
																	
																	<div class="pull-left">
																		<i class="icon-hand-right grey bigger-125"></i>
																		<a href="#" class="bigger-110" style="font-family: '微软雅黑';">点击查看详情</a>
																	</div>

																	<div class="widget-toolbox clearfix">

																		<div>
																			

																		</div>
																	
																	</div>
																</div>
															</div>
														</div>
													</div>

												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->

											<div class="timeline-container">
												<div class="timeline-label">
													<span class="label label-success arrowed-in-right label-lg">
														<b>Yesterday</b>
													</span>
												</div>

												<div class="timeline-items">
													<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<i class="timeline-indicator icon-leaf btn btn-primary no-hover green"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h5 class="smaller">修改了迁入户口</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	10:22
																</span>

																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>
															</div>

															<div class="widget-body">
																<div class="widget-main">
																	Jem 修改了 户主 杨国尧  
																	<span class="blue">(户号：13412068119845)</span>

																	的 <span class="red">户号</span> 资料
																	<div class="space-6"></div>
																	
																	<div class="pull-left">
																		<i class="icon-hand-right grey bigger-125"></i>
																		<a href="#" class="bigger-110" style="font-family: '微软雅黑';">点击查看详情</a>
																	</div>

																	<div class="widget-toolbox clearfix">

																		<div>
																			

																		</div>
																	
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
												
												<div class="timeline-item clearfix">
														<div class="timeline-info">
															<i class="timeline-indicator icon-star btn btn-warning no-hover green"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h5 class="smaller">修改了户口资料</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	9:15
																</span>
																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>
															</div>

															<div class="widget-body">
																<div class="widget-main">
																	Jem 修改了 杨静如  
																	<span class="blue">(身份证号：620121199511131445)</span>

																	的 <span class="red">迁入日期 迁入地址</span> 资料
																	<div class="space-6"></div>
																	
																	<div class="pull-left">
																		<i class="icon-hand-right grey bigger-125"></i>
																		<a href="#" class="bigger-110" style="font-family: '微软雅黑';">点击查看详情</a>
																	</div>

																	<div class="widget-toolbox clearfix">

																		<div>
																			

																		</div>
																	
																	</div>
																</div>
															</div>
														</div>
													</div>

<div class="timeline-item clearfix">
														<div class="timeline-info">
															<i class="timeline-indicator icon-star btn btn-warning no-hover green"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h5 class="smaller">修改了户口资料</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	9:15
																</span>
																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>
															</div>

															<div class="widget-body">
																<div class="widget-main">
																	Jem 修改了 杨静如  
																	<span class="blue">(身份证号：620121199511131445)</span>

																	的 <span class="red">迁入日期 迁入地址</span> 资料
																	<div class="space-6"></div>
																	
																	<div class="pull-left">
																		<i class="icon-hand-right grey bigger-125"></i>
																		<a href="#" class="bigger-110" style="font-family: '微软雅黑';">点击查看详情</a>
																	</div>

																	<div class="widget-toolbox clearfix">

																		<div>
																			

																		</div>
																	
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<i class="timeline-indicator icon-bug btn btn-danger no-hover"></i>
														</div>

														<div class="widget-box">
															<div class="widget-header header-color-red2 widget-header-small">
																<h5 class="smaller">注销了人口</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	9:15
																</span>

																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>
															</div>

															<div class="widget-body">
																<div class="widget-main">
																	Jem 注销了 吉尔默  
																	<span class="blue">(身份证号：620121199511131445)</span>

																	的 <span class="red">人口</span> 资料
																	<div class="space-6"></div>
																	
																	<div class="pull-left">
																		<i class="icon-hand-right grey bigger-125"></i>
																		<a href="#" class="bigger-110" style="font-family: '微软雅黑';">点击查看详情</a>
																	</div>

																	<div class="widget-toolbox clearfix">

																		<div>
																			

																		</div>
																	
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->

											<div class="timeline-container">
												<div class="timeline-label">
													<span class="label label-grey arrowed-in-right label-lg">
														<b>2015-04-17</b>
													</span>
												</div>

												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<i class="timeline-indicator icon-leaf btn btn-primary no-hover green"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h5 class="smaller">修改了迁入户口</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	10:22
																</span>

																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>
															</div>

															<div class="widget-main">
																	Jem 修改了 杨静如  
																	<span class="blue">(身份证号：620121199511131445)</span>

																	的 <span class="red">迁入日期 迁入地址</span> 资料
																	<div class="space-6"></div>
																	
																	<div class="pull-left">
																		<i class="icon-hand-right grey bigger-125"></i>
																		<a href="#" class="bigger-110" style="font-family: '微软雅黑';">点击查看详情</a>
																	</div>

																	<div class="widget-toolbox clearfix">

																		<div>
																			

																		</div>
																	
																	</div>
																</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->
										</div>
									</div>
								</div>

								<div id="timeline-2" class="hide">
									<div class="row">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>Today</b>
												</span>

												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">11:15 pm</span>
															<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>

															<i class="timeline-indicator btn btn-info no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<span class="bigger-110">
																		<a href="#" class="purple bolder">Susan</a>
																		reviewed a product
																	</span>

																	<br />
																	<i class="icon-hand-right grey bigger-125"></i>
																	<a href="#">Click to read &hellip;</a>
																</div>
															</div>
														</div>
													</div>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">12:30 pm</span>
															<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>

															<i class="timeline-indicator btn btn-info no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	Going to
																	<span class="green bolder">veg cafe</span>
																	for lunch
																</div>
															</div>
														</div>
													</div>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">11:15 pm</span>
															<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>

															<i class="timeline-indicator btn btn-info no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	Designed a new logo for our website. Would appreciate feedback.
																	<a href="#">
																		Click to see
																		<i class="icon-zoom-in blue bigger-110"></i>
																	</a>

																	<div class="space-2"></div>

																	<div class="action-buttons">
																		<a href="#">
																			<i class="icon-heart red bigger-125"></i>
																		</a>

																		<a href="#">
																			<i class="icon-facebook blue bigger-125"></i>
																		</a>

																		<a href="#">
																			<i class="icon-reply light-green bigger-130"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">9:00 am</span>
															<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>

															<i class="timeline-indicator btn btn-info no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding"> Took the final exam. Phew! </div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->

											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>Yesterday</b>
												</span>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">9:00 am</span
																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>>

															<i class="timeline-indicator btn btn-success no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	Anim pariatur cliche reprehenderit, enim eiusmod
																	<span class="pink2 bolder">high life</span>
																	accusamus terry richardson ad squid &hellip;
																</div>
															</div>
														</div>
													</div>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">9:00 am</span>
															<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>

															<i class="timeline-indicator btn btn-success no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding"> Going to cafe for lunch </div>
															</div>
														</div>
													</div>

													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">9:00 am</span>
															<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-up"></i>
																	</a>
																</span>

															<i class="timeline-indicator btn btn-success no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<span class="red bolder">Critical security patch released</span>

																	<br />
																	Please download the new patch for maximum security.
																</div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->

											<div class="timeline-container timeline-style2">
												<span class="timeline-label">
													<b>May 17</b>
												</span>

												<div class="timeline-items">
													<div class="timeline-item clearfix">
														<div class="timeline-info">
															<span class="timeline-date">9:00 am</span>

															<i class="timeline-indicator btn btn-grey no-hover"></i>
														</div>

														<div class="widget-box transparent">
															<div class="widget-body">
																<div class="widget-main no-padding">
																	<span class="bolder blue">Lorum Ipsum</span>
																	Anim pariatur cliche reprehenderit, enim eiusmod
																	<span class="purple bolder">high life</span>
																	accusamus terry richardson ad squid &hellip;
																</div>
															</div>
														</div>
													</div>
												</div><!-- /.timeline-items -->
											</div><!-- /.timeline-container -->
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		 

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	 
</body>
</html>
