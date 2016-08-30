<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Page</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />

	</head>

	<body class="login-layout">
		<div class="container-fluid" id="main-container">
			<div id="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
									<h1><img src="assets/images/2.png" height="97"></h1>
									<h5 class="blue">&copy;Yubo&amp;Zhangyan</h5>
					          </div>
							</div>
							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													<i class="icon-coffee green"></i>
													请输入个人信息
												</h4>

												<div class="space-6"></div>

												<form method="post" action="main.php" id="logForm">
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" placeholder="用户名" id="loginName"/>
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="密码" id="password"/>
																<i class="icon-lock"></i>
															</span>
														</label>
														<label id="statusLabel"></label><br>


														<div class="space"></div>

														<div class="row-fluid">
															<label class="span8">
																<input type="checkbox" />
																<span class="lbl"> 记住用户</span>
															</label>

																<input type="button" class="span4 btn btn-small btn-primary" name="button" class="submit" value="登陆" onclick="onSubmit()"/>
															<!-- <button class="span4 btn btn-small btn-primary">
																
                                                                <a href="主页.html">
                                                
																登录
                                                               
                                                                </a>
                                                                
															</button> -->
														</div>
													</fieldset>
												</form>
											</div><!--/widget-main-->

											<div class="toolbar clearfix">
												<div>
													<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
														<i class="icon-arrow-left"></i>
														忘记密码？
													</a>
												</div>

												<div>
													<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
														注册
														<i class="icon-arrow-right"></i>
													</a>
												</div>
											</div>
										</div><!--/widget-body-->
									</div><!--/login-box-->

									<div id="forgot-box" class="widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header red lighter bigger">
													<i class="icon-key"></i>
													重新获得密码
												</h4>

												<div class="space-6"></div>
												<p>
													输入您的邮箱接收修改密码信息
												</p>

												<form>
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="邮箱" />
																<i class="icon-envelope"></i>
															</span>
														</label>

														<div class="row-fluid">
															<button onclick="return false;" class="span5 offset7 btn btn-small btn-danger">
																<i class="icon-lightbulb"></i>
																发送给我!
															</button>
														</div>
													</fieldset>
												</form>
											</div><!--/widget-main-->

											<div class="toolbar center">
												<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
													返回登录
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div><!--/widget-body-->
									</div><!--/forgot-box-->

									<div id="signup-box" class="widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header green lighter bigger">
													<i class="icon-group blue"></i>
													新用户登录
												</h4>

												<div class="space-6"></div>
												<p>
													输入您的详细信息:
												</p>

												<form>
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="邮箱" />
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" placeholder="用户名" />
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="密码" />
																<i class="icon-lock"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="重复输入您的密码" />
																<i class="icon-retweet"></i>
															</span>
														</label>

														<label>
															<input type="checkbox" />
															<span class="lbl">
																我接受
																<a href="#">用户告知书</a>
															</span>
														</label>

														<div class="space-24"></div>

														<div class="row-fluid">
															<button type="reset" class="span6 btn btn-small">
																<i class="icon-refresh"></i>
																重置
															</button>

															<button onclick="return false;" class="span6 btn btn-small btn-success">
																注册
																<i class="icon-arrow-right icon-on-right"></i>
															</button>
														</div>
													</fieldset>
												</form>
											</div>

											<div class="toolbar center">
												<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
													<i class="icon-arrow-left"></i>
													返回登录
												</a>
											</div>
										</div><!--/widget-body-->
									</div><!--/signup-box-->
								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/span-->
				</div><!--/row-->
			</div>
		</div><!--/.fluid-container-->

		<!--basic scripts-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/md5.js" type="text/javascript" charset="utf-8" async defer></script>

		<!--page specific plugin scripts-->

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			function show_box(id) {
			 $('.widget-box.visible').removeClass('visible');
			 $('#'+id).addClass('visible');
			}


			//ajax获得用户名密码验证
	function onSubmit(e) {
		// alert(this.name);
		if(document.getElementById("loginName").value == ''||document.getElementById("password").value == '')
		{
			alert('用户名或密码不能为空！');
			return ;
		}

		var stausLabel = document.getElementById("statusLabel");
		stausLabel.innerText = "... ";
		var data = 'username='+document.getElementById("loginName").value+"&password="+hex_md5(document.getElementById("password").value);
		//document.getElementById("loginName").value = hex_md5(document.getElementById("password").value);
		// alert(data);
		var xhr = createXHR();
		//初始化xhr
		xhr.onreadystatechange = function(event) {
			//alert("11");
			var getValue = "";
			if(xhr.readyState == 4) {
				// alert(xhr.status);
				if((xhr.status >= 200 && xhr.status < 300) || xhr.status == 304) {
					getValue = xhr.responseText;
					  // alert(getValue);
					 //stausLabel.innerText = getValue;
					if(getValue == 0) {
						stausLabel.innerText = "错误的用户名或密码";
						// alert("name or psw wrong");
					}
					else if(getValue == 1) {
						stausLabel.innerText = "成功";
						document.getElementById("password").value = hex_md5(document.getElementById("password").value);
						document.getElementById("logForm").submit();
						// window.location = "login.php";
						// alert("success");
					}
					else if(getValue == 3) {
						stausLabel.innerText = "服务器错误";
						// alert("server error");
					}
				} else {
					stausLabel.innerText = "未知错误导致登录失败";
					// alert(getValue +"未知错误导致登录失败");
				}
			}
			
		}
		xhr.open("post", "getuser.php", true);
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xhr.send(data);
	}


function createXHR()
	{
		var request = false;
		try
		{
			request = new ActiveXObject('Msxml2.XMLHTTP');
		}
		catch (err2)
		{
			try {
				request = new ActiveXObject('Microsoft.XMLHTTP');
			}
			catch (err3) {
				try {  request = new XMLHttpRequest();}
				catch (err1) { request = false;}
			}
		}
		return request;
	}

		</script>







	</body>
</html>
