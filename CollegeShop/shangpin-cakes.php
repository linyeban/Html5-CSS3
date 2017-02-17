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
<script src="js/shangpin.js"></script>
<!-- 商品动态增加 -->
<link rel="stylesheet" href="css/Css.css" type="text/css" />
<link rel="stylesheet" href="css/shangpin.css" type="text/css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<?php
include ("data/conn.php");
//$sql = mysqli_query ( $con, "select count(*) as total from tb_shangpin where typeid='".id."' " );
$sql = mysqli_query ( $con, "select count(*) as total from tb_shangpin where typeid=3" );
$info = mysqli_fetch_array ( $sql );
$total = mysqli_num_rows ( $sql );
if ($total == 0) {
	echo "本站暂无推荐产品!";
} else {
	$sql1 = mysqli_query ( $con, "select * from tb_shangpin where typeid=3" );
	while ( $info1 = mysqli_fetch_array ( $sql1 ) ) {
		
		?>
	<!-- content -->
	<div class="col-md-10 col-sm-10 col-xs-12">
		<div class="row product-category-product-set-item" style=" width: 700px;">
			<div
				class="col-md-3 col-sm-3 col-xs-4 product-set-image-container>
			<a class="product-set-header" href="lookinfo.php?id=<?php echo $info1['spid'];?>">
				<img class="product-set-image" src="<?php echo $info1['tupian'];?>"></a>
			</div>
			<div
				class="col-md-9 col-sm-9 col-xs-8 product-set-item-info-container" style="width: 730px;">
				<a class="product-set-header"><a href="lookinfo.php?id=<?php echo $info1['id'];?>"><?php echo $info1['mingcheng'];?></a></a>
				<div class="product-price-info"><?php echo $info1['huiyuanjia'];?>元</div>
				<div class="product-medium-description"><?php echo $info1['jianjie'];?></div>
				<div class="product-set-details-link">
					<span><a>查看详情</a></span>
				</div>
				<div class="shopping-cart-icon-container">
					<div class="hidden-xs row add-product-list">
						<div class="col-md-4 col-sm-4 left_icon">
							<div class="add-cart-button">
								<span class="glyphicon glyphicon-shopping-cart"
									aria-hidden="true" style="height: 50px;"></span>
							</div>
						</div>
						<div class="class=" col-md-8col-sm-8right_font""><a href="addgouwuche.php?id=<?php echo $info1['spid'];?>" target="_black">加入购物车</a></div>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
		 <?php
	}
}

?>
	<!-- content -->
</body>
</html>