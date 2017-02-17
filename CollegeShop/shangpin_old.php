<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>校园购物网站</title>
<script src="external/jquery-2.2.3.min.js"></script>
<script src="external/jquery-ui.js"></script>
<link href="external/jquery-ui.css" rel="stylesheet">
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="js/shangpin.js"></script> <!-- 商品动态增加 -->
<link rel="stylesheet" href="css/Css.css" type="text/css" />
<link rel="stylesheet" href="css/shangpin_old.css" type="text/css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
	<!--  <div class="mycontainer navbar-fixed-top">
<div id="headerMenu">
<ul class="menu">
<li><a href="#">首 页 </a></li>
<li class="dropdown"><a href="#" class="dropdown-toggle"
		data-toggle="dropdown"> 商品分类 <b class="caret"></b>
		</a>
		<ul class="dropdown-menu" role="menu">
		<li><a href="#">jmeter</a></li>
		<li><a href="#">EJB</a></li>
		<li><a href="#">Jasper Report</a></li>
		<li class="divider"></li>
		<li><a href="#">分离的链接</a></li>
		<li class="divider"></li>
		<li><a href="#">另一个分离的链接</a></li>
		</ul></li>
		<li><a href="#">订购须知 </a></li>
		<li class="disabled pull-right"><a href="#"> <span
		class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
		购物车
		</a></li>
		<li class="pull-right"><a href="#">登录</a></li>
		<li class="pull-right"><a href="#">注册</a></li>
		</ul>
		</div>

		</div>-->
	<div class="mycontainer navbar-fixed-top" style="height: 50px;">
		<nav class="navbar navbar-default" role="navigation"
			style="height: 45px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="image/logo.png"></a>
			</div>
			<div>
				<!--向左对齐-->
				<ul class="nav navbar-nav navbar-left">
					<li><a href="index.html">首 页 </a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"> 商品分类 <b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="#">礼盒</a></li>
							<li class="divider"></li>
							<li><a href="#">蛋糕</a></li>
							<li class="divider"></li>
							<li><a href="#">纸杯蛋糕</a></li>
							<li class="divider"></li>
							<li><a href="#">派</a></li>
							<li class="divider"></li>
							<li><a href="#">礼品卡</a></li>
						</ul></li>
					<li><a href="#">活动 </a></li>
					<li><a href="#">订购须知 </a></li>

					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"> 关于 <b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="#">会员</a></li>
							<li class="divider"></li>
							<li><a href="#">我们</a></li>
						</ul></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">

					<li class=" pull-right"><a href="#"> <span
							class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
							购物车
					</a></li>
					<li class="pull-right"><a href="login.php">登录</a></li>
					<li class="pull-right"><a href="reg.html">注册</a></li>
				</ul>
			</div>
		</nav>
	</div>


	<!-- content -->
	<div id="product-categories-container">
		<div class="container" id="categories-container">
			<div class="row">
			<!-- 左边悬浮框 -->
				<div class="col-md-2 col-sm-3 hidden-xs" id="f-left">
					<div id="accordion">
						<div class="group">
							<h3 id="showh">礼盒</h3>
							<div>
								<ul id="showu1">
									<p>a</p>
								</ul>
							</div>
						</div>
						<div class="group">
							<h3>季节精选</h3>
							<div>
								<ul id="showu2">
									<p>b</p>
								</ul>
							</div>
						</div>
						<div class="group">
							<h3>纸杯蛋糕</h3>
							<div>
								<ul id="showu3">
									<p>C</p>
								</ul>
							</div>
						</div>
						<div class="group">
							<h3>派</h3>
							<div>
								<ul id="showu4">
									<p>d</p>
								</ul>
							</div>
						</div>
						<div class="group">
							<h3>礼品卡</h3>
							<div>
								<ul id="showu5">
									<p>e</p>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-12">
					<div class="row product-category-product-set-item">
						<div class="col-md-3 col-sm-3 col-xs-4 product-set-image-container>
							<a class="product-set-header"><img class="product-set-image" src="image/seasonal-specials/products/durian-cheese-mousse-cake.jpg"></a>
						</div>
						<div
							class="col-md-9 col-sm-9 col-xs-8 product-set-item-info-container">
							<a class="product-set-header">aa</a>
							<div class="product-price-info">Yaa</div>
							<div class="product-medium-description">aaa</div>
							<div class="product-set-details-link">
								<span><a>查看详情</a></span>
							</div>
							<div class="shopping-cart-icon-container">
								<div class="hidden-xs row add-product-list">
									<div class="col-md-4 col-sm-4 left_icon">
										<div class="add-cart-button">
											<span class="glyphicon glyphicon-shopping-cart"
												aria-hidden="true"></span>
										</div>
									</div>
									<div class="class=" col-md-8 col-sm-8right_font"">加入购物车</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- content -->

	<!--foot  -->
	<div class="footer text-muted">
		<div class="mycontainer">
			<div class="col-md-12 col-sm-12 hidden-xs">
				<table>
					<tbody>
						<tr>
							<td class="footer-block not-last"><img alt="Ui0813 66"
								class="telephone-image-size" src="image/UI0813.png" />
								<div class="info">订购邮箱</div>
								<div class="info">order@pantrysbest.com</div>
								<div class="info">广东省广州市白云区</div></td>
							<td class="footer-block not-last">
								<div class="info">官方微信|官方QQ</div>
								<div class="info">
									<img alt="Weixin" src="image/weixin.jpg" width="55px" /> <img
										alt="Weixin" src="image/weixin.jpg" width="55px" />
								</div>
							</td>
							<td class="footer-block"><img alt="Brand icons"
								　		id="brand-icons" src="image/brand-icons.png" width="250px" /></td>
						</tr>
						<tr>
							<td id="icp">Copyright 2016仲恺农业工程学院计算科学学院，201321314337
							
							<td>
						
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>