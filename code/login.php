<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>户口管理系统登录</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		
		<!--mystyle-->
		<style type="text/css">
			body.login-layout
			{
				background-color: #e4e6e9;
			}
			.red
			{
				font-family: "微软雅黑";
			}
			h4,h1,h2,h3,h5,span,button,div
			{
				font-family: "微软雅黑";
			}
			.login-layout .widget-box 
			{
				background-color: rgba(245, 245, 245, 0.51);
			}
		</style>
		
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">户籍</span>
									<span class="white">管理系统</span>
								</h1>
								<h4 class="blue">&copy; Jem Admin</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								
								
								<!--不登录就不带你一起玩了╭(╯^╰)╮-->
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												请输入信息登录管理系统
											</h4>

											<div class="space-6"></div>

											<form name="loginform" action="denglu.php" method="post" onsubmit="return loginCheak(this)">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Username" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> 记住密码</span>
														</label>

														<input type="submit" class="width-35 pull-right btn btn-sm btn-primary" value="登陆">
														</input>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
													<i class="icon-arrow-left"></i>
													忘记密码
												</a>
											</div>

											<div>
												<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
													注册为管理员
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->
										
								
								<!--忘记密码啦怎么办(ーー゛)-->
								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												找回密码
											</h4>

											<div class="space-6"></div>
											<p>
												请输入你的管理员编码
											</p>

											<form name="findform" action="findpassword.php" method="post" onsubmit="return findCheak(this)">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="code" class="form-control" placeholder="Input your code" />
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Input your username" />
														</span>
													</label>
														<div class="clearfix">
														<input type="submit" value="找回密码!" class="width-35 pull-right btn btn-sm btn-danger">
														</input>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->
										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												返回登陆
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->

								
								<!--注册一个新的吧好不好（づ￣3￣）づ╭❤～-->
								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												管理员注册
											</h4>

											<div class="space-6"></div>
											<p> 请输入信息激活管理员 </p>
											<form name="zhucef" action="zhuce.php" method="post" onSubmit="return zhuceCheak(this)">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="code" class="form-control" placeholder="Code" />
															<i class="icon-leaf"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="username" name="username" class="form-control" placeholder="Username" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password1" class="form-control" placeholder="Password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password2" class="form-control" placeholder="Repeat password" />
															<i class="icon-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" name="checkbox" class="ace" />
														<span class="lbl">
															我已阅读并接受
															<a href="#">用户协议</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															重置
														</button>

														<input type="submit" class="width-65 pull-right btn btn-sm btn-success" value="注册并激活">
														</input>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												返回登陆
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
							
							
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->
		
		<script type="text/javascript">
			function zhuceCheak(zhucef){
				if (zhucef.code.value == ""){
					alert('请输入管理员编号[]~(￣▽￣)~');
					zhucef.code.focus();
					return false;
				}
				else if (zhucef.username.value == ""){
						alert('请输入用户名[]~(￣▽￣)~');
						zhucef.username.focus();
						return false;
					}
					else if (zhucef.password1.value == ""){
							alert('请输入密码[]~(￣▽￣)~');
							zhucef.password1.focus();
							return false;
						}
						else if (zhucef.password2.value == ""){
								alert('请输入重复密码[]~(￣▽￣)~');
								zhucef.password2.focus();
								return false;
							}
							else if (zhucef.password1.value != zhucef.password2.value){
									alert('两次输入密码不一致(╯‵□′)╯︵┻━┻');
									zhucef.password1.focus();
									return false;
								}else if (zhucef.checkbox.checked == false){
									alert('是否同意用户协议[]~(￣▽￣)~');
									zhucef.checkbox.focus();
									return false;
								}
				
				return true;
			}
			function loginCheak(loginform){
				if (loginform.username.value == ""){
					alert('请输入用户名_(:3」∠)_');
					return false;
				}
				else if (loginform.password.value == ""){
						alert('请输入用户密码_(:3」∠)_');
						return false;
					}
				return true;
			}
			function findCheak(findform){
				if (findform.code.value == ""){
					alert('请输入用户编码_(:3」∠)_');
					return false;
				}
				else if (findform.username.value == ""){
						alert('请输入用户名(╯‵□′)╯︵┻━┻');
						return false;
					}
				return true;
			}
		</script>

		<!-- basic scripts -->

		<!--[if !IE]> -->


		<!-- <![endif]-->

		<!--[if IE]>
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

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
		
		<?php 
		@$something = $_REQUEST['code'];
		@$password = $_REQUEST['password'];
		@$status = $_REQUEST['status'];
		if($status==0){
			//echo"<script type=\"text/javascript\">alert(\"该用户已注销\")</script>";
		}     
		if($something==1){
			echo"<script type=\"text/javascript\">alert(\"该用户已存在，请直接登陆(╯‵□′)╯︵┻━┻\")</script>";
		}
		if($something==4){
			echo"<script type=\"text/javascript\">alert(\"注册成功！_(:3」∠)_\")</script>";
		}
		if($something==2){
			echo"<script type=\"text/javascript\">alert(\"密码错误(╯‵□′)╯︵┻━┻\")</script>";
		}
		if($something==3){
			echo"<script type=\"text/javascript\">alert(\"该用户不存在，请注册！[]~(￣▽￣)~\")</script>";
		}
		if($something==5){
			echo"<script type=\"text/javascript\">alert(\"该用户密码为$password []~(￣▽￣)~\")</script>";
		}
		if($something==6){
			echo"<script type=\"text/javascript\">alert(\"该用户编码不存在，请重新输入！(╯‵□′)╯︵┻━┻\")</script>";
		}
		if($something==7){
			echo"<script type=\"text/javascript\">alert(\"该用户名与用户编号不符合，请重新输入！(╯‵□′)╯︵┻━┻\")</script>";
		}
		if($something==8){
			echo"<script type=\"text/javascript\">alert(\"该编号不存在，请重新注册！_(:3」∠)_ \")</script>";
		}
		?>
</body>
</html>
