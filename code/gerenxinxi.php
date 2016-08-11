<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>户籍管理系统-个人中心</title>
		<meta name="keywords" content="个人中心" />
		<meta name="description" content="个人中心" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/jquery.gritter.css" />

		<!-- fonts -->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<style>
			.spinner-preview {
				width:100px;
				height:100px;
				text-align: center;
				margin-top:60px;
			}
			
			.dropdown-preview {
				margin:0 5px;
				display:inline-block;
			}
			.dropdown-preview  > .dropdown-menu {
				display: block;
				position: static;
				margin-bottom: 5px;
			}
		</style>

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body style="font-family: '微软雅黑';">
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
			
			$sql = "select Hname,Hnum,Hcategory,Adress,Regdata,orout,account.InAdress,Indata from account,person where person.IDcard='".$idcard."' and Hnum=person.Hnumber;";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			$Hname = $row['Hname'];
			$Hnum = $row['Hnum'];
			$Hcategory = $row['Hcategory'];
			$Adress = $row['Adress'];
			$Redata= $row['Regdata'];
			if ($row['orout'] == "ye")
			{
				$orout = "迁出";
			}
			else {
				$orout = "未迁出";
			}
			$InAdress = $row['InAdress'];
			$Indata = $row['Indata'];
	
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
						<li class="active">
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
						
						<li>
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

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="index.html">主页</a>
							</li>

							<li>
								<a href="gerenxinxi.html">个人信息</a>
							</li>
							<li class="active">登录用户个人信息查看</li>
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

					<div class="page-content">
						<div class="page-header">
							<h1>
								个人中心
								<small>
									<i class="icon-double-angle-right"></i>
									个人信息查看
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li class="active">
													<a data-toggle="tab" href="#geren">
														<i class="green icon-home bigger-110"></i>
														管理员信息
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#hukou">
														户口信息
													</a>
												</li>

												<li class="dropdown">
													<a data-toggle="dropdown" class="dropdown-toggle" href="#">
														家庭成员
														<span class="badge badge-danger"><?php $i=count(mysql_fetch_array(mysql_query("select name from person where Hnumber='".$Hnum."';"))); echo $i+1; ?></span>
														<i class="icon-caret-down bigger-110 width-auto"></i>
													</a>

													<ul class="dropdown-menu dropdown-info">
														<?php 
														$sql="select name from person where Hnumber='".$Hnum."';";
														$result=mysql_query($sql);
														while ($row = mysql_fetch_array($result))
														{
															echo "<li><a data-toggle=\"tab\" href=\"#".$row['name']."\">".$row['name']."</a></li>";
														}
														?>
													</ul>
												</li>
											</ul>

											<div class="tab-content">
												<div id="geren" class="tab-pane in active">
													<form class="form-horizontal" role="form">
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 姓名 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo"$name" ?>" />
															</div>
														</div>
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 身份证号 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo"$idcard" ?>" />
															</div>
														</div>
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 管理员编码  </label>
															<div class="col-sm-9">
																<input readonly="" name="code" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo"$code" ?>" />
															</div>
														</div>	
					
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 联系方式 </label>
															<div class="col-sm-9">
																<input type="text"  readonly="" name="phone" class="col-xs-10 col-sm-5" id="form-input" value="<?php echo"$phone" ?>"" />
															</div>
														</div>	
					
														<div class="space-4"></div>
					
														<div class="clearfix form-actions">
															<div class="col-md-offset-3 col-md-9">
																&nbsp; &nbsp; &nbsp;
																<a class="btn" type="button" href="http://localhost/Jemadmin/gerenxinxi.php?code=14451113">
																	<i class="icon-undo bigger-110"></i>
																	刷新
																</a>
															</div>
														</div>
														<div class="hr hr-24"></div>
													</form>
												</div>

												<div id="hukou" class="tab-pane">
													<form class="form-horizontal" role="form">
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 户主姓名 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$Hname"; ?>" />
															</div>
														</div>
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 户号 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$Hnum"; ?>" />
															</div>
														</div>
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 户别  </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$Hcategory"; ?>" />
															</div>
														</div>	
					
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 户址 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$Adress"; ?>" />
															</div>
														</div>	
					
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 登记日期 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$Redata"; ?>" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 是否迁出 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$orout"; ?>" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 迁往何地 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$InAdress"; ?>" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 迁入日期 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo "$Indata"; ?>" />
															</div>
														</div>
														
														<div class="space-4"></div>
					
														<div class="clearfix form-actions">
															<div class="col-md-offset-3 col-md-9">
																<button class="btn btn-info" type="button">
																	<i class="icon-ok bigger-110"></i>
																	确认
																</button>
					
																&nbsp; &nbsp; &nbsp;
																<button class="btn" type="reset">
																	<i class="icon-undo bigger-110"></i>
																	刷新
																</button>
															</div>
														</div>
														<div class="hr hr-24"></div>
													</form>
												</div>
									<?php 
														$sql="select * from person where Hnumber='".$Hnum."';";
														$result=mysql_query($sql);
														while ($row = mysql_fetch_array($result))
														{
															echo ' 
												<div id="'.$row['name'].'" class="tab-pane">
													<form class="form-horizontal" role="form">
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 姓名 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['name'].'" />
															</div>
														</div>
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 性别 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['Sex'].'" />
															</div>
														</div>
					
														<div class="space-4"></div>
					
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 与户主关系  </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['relation'].'" />
															</div>
														</div>	
					
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 身份证号 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['IDcard'].'" />
															</div>
														</div>	
					
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 民族 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['nation'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 籍贯 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['province'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 出生日期 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['birthdate'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 出生地址 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['place'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 文化程度 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['degree'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 婚姻状况 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['marry'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 职业 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['Job'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 工作地址 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['WorkAdress'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 迁入日期 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['indate'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
														
														<div class="form-group">
															<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 迁入地址 </label>
															<div class="col-sm-9">
																<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="'.$row['inAdress'].'" />
															</div>
														</div>
														
														<div class="space-4"></div>
					
														<div class="clearfix form-actions">
															<div class="col-md-offset-3 col-md-9">
																<button class="btn btn-info" type="button">
																	<i class="icon-ok bigger-110"></i>
																	确认
																</button>
					
																&nbsp; &nbsp; &nbsp;
																<button class="btn" type="reset">
																	<i class="icon-undo bigger-110"></i>
																	刷新
																</button>
															</div>
														</div>
														<div class="hr hr-24"></div>
													</form>
												</div> ';
														}
									?>
											</div>
										</div>
									</div><!-- /span -->
								</div><!-- /row -->

								<script type="text/javascript">
									var $path_assets = "assets";//this will be used in gritter alerts containing images
								</script>

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

		<!--   -->

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

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>
		<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				/**
				$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				  console.log(e.target.getAttribute("href"));
				})
				*/
			
			
				$('#accordion-style').on('click', function(ev){
					var target = $('input', ev.target);
					var which = parseInt(target.val());
					if(which == 2) $('#accordion').addClass('accordion-style2');
					 else $('#accordion').removeClass('accordion-style2');
				});
			
			
				var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
				$('.easy-pie-chart.percentage').each(function(){
					$(this).easyPieChart({
						barColor: $(this).data('color'),
						trackColor: '#EEEEEE',
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: 8,
						animate: oldie ? false : 1000,
						size:75
					}).css('color', $(this).data('color'));
				});
			
				$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
			
			
				$('#gritter-regular').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a regular notice!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $path_assets+'/avatars/avatar1.png',
						sticky: false,
						time: '',
						class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
					});
			
					return false;
				});
			
				$('#gritter-sticky').on(ace.click_event, function(){
					var unique_id = $.gritter.add({
						title: 'This is a sticky notice!',
						text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $path_assets+'/avatars/avatar.png',
						sticky: true,
						time: '',
						class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-without-image').on(ace.click_event, function(){
					$.gritter.add({
						// (string | mandatory) the heading of the notification
						title: 'This is a notice without an image!',
						// (string | mandatory) the text inside the notification
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-max3').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a notice with a max of 3 on screen at one time!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $path_assets+'/avatars/avatar3.png',
						sticky: false,
						before_open: function(){
							if($('.gritter-item-wrapper').length >= 3)
							{
								return false;
							}
						},
						class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-center').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a centered notification',
						text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
				
				$('#gritter-error').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a warning notification',
						text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
					
			
				$("#gritter-remove").on(ace.click_event, function(){
					$.gritter.removeAll();
					return false;
				});
					
			
				///////
			
			
				$("#bootbox-regular").on(ace.click_event, function() {
					bootbox.prompt("What is your name?", function(result) {
						if (result === null) {
							//Example.show("Prompt dismissed");
						} else {
							//Example.show("Hi <b>"+result+"</b>");
						}
					});
				});
					
				$("#bootbox-confirm").on(ace.click_event, function() {
					bootbox.confirm("Are you sure?", function(result) {
						if(result) {
							//
						}
					});
				});
					
				$("#bootbox-options").on(ace.click_event, function() {
					bootbox.dialog({
						message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
						buttons: 			
						{
							"success" :
							 {
								"label" : "<i class='icon-ok'></i> Success!",
								"className" : "btn-sm btn-success",
								"callback": function() {
									//Example.show("great success");
								}
							},
							"danger" :
							{
								"label" : "Danger!",
								"className" : "btn-sm btn-danger",
								"callback": function() {
									//Example.show("uh oh, look out!");
								}
							}, 
							"click" :
							{
								"label" : "Click ME!",
								"className" : "btn-sm btn-primary",
								"callback": function() {
									//Example.show("Primary button");
								}
							}, 
							"button" :
							{
								"label" : "Just a button...",
								"className" : "btn-sm"
							}
						}
					});
				});
			
			
			
				$('#spinner-opts small').css({display:'inline-block', width:'60px'})
			
				var slide_styles = ['', 'green','red','purple','orange', 'dark'];
				var ii = 0;
				$("#spinner-opts input[type=text]").each(function() {
					var $this = $(this);
					$this.hide().after('<span />');
					$this.next().addClass('ui-slider-small').
					addClass("inline ui-slider-"+slide_styles[ii++ % slide_styles.length]).
					css({'width':'125px'}).slider({
						value:parseInt($this.val()),
						range: "min",
						animate:true,
						min: parseInt($this.data('min')),
						max: parseInt($this.data('max')),
						step: parseFloat($this.data('step')),
						slide: function( event, ui ) {
							$this.attr('value', ui.value);
							spinner_update();
						}
					});
				});
			
			
			
			
			
				$.fn.spin = function(opts) {
					this.each(function() {
					  var $this = $(this),
						  data = $this.data();
			
					  if (data.spinner) {
						data.spinner.stop();
						delete data.spinner;
					  }
					  if (opts !== false) {
						data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
					  }
					});
					return this;
				};
			
				function spinner_update() {
					var opts = {};
					$('#spinner-opts input[type=text]').each(function() {
						opts[this.name] = parseFloat(this.value);
					});
					$('#spinner-preview').spin(opts);
				}
			
			
			
				$('#id-pills-stacked').removeAttr('checked').on('click', function(){
					$('.nav-pills').toggleClass('nav-stacked');
				});
			
			
			});
		</script>
		
		<?php
		//1 更新了phone
		//2密码输入错误
			@$status = $_REQUEST['status'];	
			//echo "<script type=\"text/javascript\">alert($status);</script>";
			//var_dump($status);
			if($status==1){
				echo "<script type=\"text/javascript\">alert(\"管理员资料已更新\");</script>";
			}
			if($status==2){
				echo "<script type=\"text/javascript\">alert(\"密码输入错误\");</script>";
			}
		?>
		
	
</body>
</html>
