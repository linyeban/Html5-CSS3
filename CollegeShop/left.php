<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>jQuery EasyUI Demo</title>
<link rel="stylesheet" type="text/css" href="css/easyui.css">
<script type="text/javascript" src="external/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="external/jquery.easyui.min.js"></script>
<script src="external/jquery-ui.js"></script>

<link href="external/jquery-ui.css" rel="stylesheet">
<!-- <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="js/shangpin.js"></script> <!-- 商品动态增加 -->
<link rel="stylesheet" href="css/Css.css" type="text/css" />
<link rel="stylesheet" href="css/shangpin_old.css" type="text/css" />
<script type="text/javascript">
$(function() {
	 $( "#accordion" ).accordion({
		 
		 });
		  
	});
</script>
</head>
<body>
	<div id="product-categories-container">
		<div class="container" id="categories-container">
			<div class="row">
			<!-- 左边悬浮框 -->
				<div class="col-md-2 col-sm-3 hidden-xs" id="f-left">
					<div id="accordion">
						<div class="group">
							<h3 id="showh" >礼盒</h3>
							<div>
								<ul id="showu1">
								
							<!--动态添加li数据 -->
								
								</ul>
							</div>
						</div>
						<div class="group">
							<h3 id="showh2" name="showh2"><a herf="shangpin-seasonal-specials.php" target="main">季节精选</a></h3>
							<div>
								<ul id="showu2">
							<!--动态添加li数据 -->
								</ul>
							</div>
						</div>
						<div class="group">
							<h3>纸杯蛋糕</h3>
							<div>
								<ul id="showu3">
								<!--动态添加li数据 -->
									
								</ul>
							</div>
						</div>
						<div class="group">
							<h3>派</h3>
							<div>
								<ul id="showu4">
								<!--动态添加li数据 -->
								</ul>
							</div>
						</div>
						<div class="group">
							<h3>礼品卡</h3>
							<div>
								<ul id="showu5">
								
								<!--动态添加li数据 -->
			
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

</body>
</html>