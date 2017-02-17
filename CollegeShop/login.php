<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户登录</title>
<link rel="stylesheet" type="text/css"
	href="bootstrap-3.3.5-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<!--<link rel="stylesheet" type="text/css" href="css/login.css">  -->
<script type="text/javascript" src="external/jquery-2.2.3.min.js"></script>
<script type="text/javascript"
	src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.row {
	margin: 10px
}

.myItem {
	display: inline-block;
	width: 150px;
	text-align: right;
}
</style>
<body>
	<script language="javascript">
		function chkuserinput(form) {
			if (form.username.value == "") {
				alert("请输入用户名!");
				form.username.select();
				return (false);
			}
			if (form.userpwd.value == "") {
				alert("请输入用户密码!");
				form.userpwd.select();
				return (false);
			}
			if (form.yz.value == "") {
				alert("请输入验证码!");
				form.yz.select();
				return (false);
			}
			return (true);
		}
	</script>
	<!-- header -->
	<div class="w">
		<div id="logo">
			<a herf="index.html"> <img src="image/logo2.png" alt="仲恺糕点"
				width=“170” height="60">
			</a> <b></b>
		</div>
	</div>
	<!-- header -->
	<!-- content -->
	<div id="content">
		<div class="login-wrap">
			<div class="w">
				<div class="login-form">
					<div class="login-box">
						<div class="mt">
							<h2>账号登录</h2>
						</div>
						<div class="mc">
							<!-- aaaa -->
							<form name="form2" method="post" action="chkuser.php"
								onSubmit="return chkuserinput(this)">
								<div class="row">
									<div class="form-group">
										<div>
											<label for="username" class="col-sm-2 control-label myItem1"><span
												class="myItem1">用户名：</span></label>
										</div>
										<div class="col-sm-8">
											<input type="text" class="form-control" required="required"
												name="username" id="username" placeholder="请输入用户名">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="userpwd" class="col-sm-2 control-label myItem1"><span
											class="myItem1">密码：</span></label>
										<div class="col-sm-8">
											<input type="password" class="form-control"
												required="required" name="userpwd" id="userpwd"
												placeholder="请输入密码">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label for="inputCode3" class="col-sm-2 control-label myItem1"><span
											class="myItem1">验证码：</span></label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="yz" name="yz"
												required="required">

										</div>
										<div class="col-sm-4">
											<!-- 随机产生一个数字，然后把数字转换一个内容为图片显示出来 -->
					<?php
					include ("yzrand.php");
					// echo $num;
					?>
				</div>
									</div>
								</div>
								<div class="row">

									<div class="form-group">
										<label for="inputCode3" class="col-sm-2 control-label myItem1"><span
											class="myItem1"></span></label>
										<div class="col-sm-8">
											<div class="checkbox">
												<label> <input type="checkbox"> 自动登录
												</label> &nbsp;<a href="reg.html">免费注册</a>
											</div>

										</div>
									</div>
								
								</div>
									<div class="row">
										<div class="form-group">
											<div class="col-sm-12">
												<!-- php的变量隐藏的表单元素<input type="hidden" name="num"  value=变量的值>然后用$_POST['num']获取-->
												<input type="hidden" value="<?php echo $num;?>" name="num">
												<button type="submit" class="login-btn">登录</button>

											</div>
										</div>
									</div>
							</form>
							<!-- aaaa -->
						</div>
					</div>

				</div>
			</div>
			<div class="login-banner" style="background-color: #390c20">
				<div class="w">
					<div class="i-inner"
						style="background: url('image/banner-bg.png') 0px 0px no-repeat;"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- content -->
</body>
</html>
