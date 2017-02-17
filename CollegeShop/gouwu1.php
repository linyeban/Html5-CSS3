 <?php
 include ("data/conn.php");
 session_start ();
if (! isset ( $_SESSION ['username'] )) {
	echo "<script>alert('请先登录，后购物!');history.back();</script>";
	header ( "location:login.php" );
	exit ();
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>购物车</title>
<link data-turbolinks-track="true" href="css/gouwuche.css" media="all"
	rel="stylesheet">
<link href="external/font-awesome-4.5.0/css/font-awesome.css"
	rel="stylesheet">
</head>
<body>
	<form name="form1" method="post" action="gouwu1.php">
  <?php
		// $_SESSION['total']=0;
		// session_register("total");
		$arraygwc = explode ( "@", $_SESSION ["producelist"] );
		$s = 0;
		for($i = 0; $i < count ( $arraygwc ); $i ++) {
			$s += intval ( $arraygwc [$i] );
		}
		if ($s == 0) {
			echo "<tr>";
			echo "<h1>您的购物车为空,请返回购物！</h1>";
			echo "</tr>";
		} else {
		?>
	<div id="v2-shopping-cart-container" style="margin-top: 15pt">
			<div class="container">
				<div class="row">
					<div class="hidden-xs col-md-12 col-sm-12">
						<div class="col-md-12 col-sm-12 product-list-title"
							data-reactid=".0.0.0">
							<div class="col-md-2 col-sm-2">商品名称</div>
							<div class="col-md-2 col-sm-2">市场价</div>
							<div class="col-md-2 col-sm-2">会员价</div>
							<div class="col-md-2 col-sm-2">个数</div>
							<div class="col-md-2 col-sm-2">总价</div>
							<div class="col-md-2 col-sm-2">删除商品</div>
						</div>
					</div>
			<?php
			$total = 0;
			$array = explode ( "@", $_SESSION ['producelist'] );
			$arrayquatity = explode ( "@", $_SESSION ['quatity'] );
			
			while ( list ( $name, $value ) = each ( $_POST ) ) {
				for($i = 0; $i < count ( $array ) - 1; $i ++) {
					if (($array [$i]) == $name) {
						$arrayquatity [$i] = $value;
					}
				}
			}
			
			$_SESSION ['quatity'] = implode ( "@", $arrayquatity );
			
			for($i = 0; $i < count ( $array ) - 1; $i ++) {
				
				$id = $array [$i];
				$num = $arrayquatity [$i];
				
				if ($id != "") {
					$sql = mysqli_query ( $con, "select * from tb_shangpin where spid='" . $id . "'" );
					$info = mysqli_fetch_array ( $sql );
					$total1 = $num * $info ['huiyuanjia'];
					$total += $total1;
					$_SESSION ["total"] = $total;
					?>
						<div class="hidden-md hidden-sm hidden-lg col-xs-12">
						<div class="col-xs-12 product-list-title">
							<div class="col-xs-3"><?php echo $info['mingcheng'];?></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-12 col-sm-12 product-list">
						<div class="col-xs-6 col-md-2 col-sm-2">
							<img src="<?php echo $info['tupian'];?>"> <span><?php echo $info['mingcheng'];?></span>
						</div>
						<div class="hidden-xs col-md-2 col-sm-2 info"><?php echo $info['shichangjia'];?>元</div>
						<div class="hidden-xs col-md-2 col-sm-2 info"><?php echo $info['huiyuanjia'];?>元</div>
						<div class="hidden-xs col-md-2 col-sm-2 info">
							<span class="fa fa-minus-square-o"></span><span
								style="padding: 7%;">  <input type="text" name="<?php echo $info['spid'];?>" size="2" class="inputcss" value=<?php echo $num;?>>
								</span><span class="fa fa-plus-square-o"></span>
						</div>
						<div class="hidden-md hidden-sm hidden-lg col-xs-4 info"
							style="text-align: left; font-size: 16px;">
							<span style="padding: 7%;"></span><span><?php echo $info['shichangjia'];?>元</span>
							<div style="display: table-row;">
								<span class="fa fa-minus-square-o"></span> <span
									style="display: table-cell; vertical-align: middle; padding: 5px;">1</span>
								<span class="fa fa-plus-square-o"></span>
							</div>
						</div>
						<div class="hidden-xs col-md-2 col-sm-2 info"><?php echo $info['huiyuanjia']*$num."元";?></div>
						<div class="col-xs-2 col-md-2 col-sm-2 info delete-cart-item">
							<span class="fa fa-times"><a href="removegwc.php?id=<?php echo $info['spid']?>">移除</a></span>
						</div>
					</div>
						 <?php
					$sql1 = mysqli_query ( $con, "select * from tb_user where name='" . $_SESSION ['username'] . "'" );
					$info1 = mysqli_fetch_array ( $sql );
				}
			}
			?>
						<div>
						<div class="col-xs-12 col-md-12 col-sm-12">
							<div class="col-xs-12 col-md-12 col-sm-12 shopping-cart-use-row">
								<div
									class="col-xs-6 col-md-offset-7 col-md-3 col-sm-offset-7 col-sm-3"
									data-reactid=".0.5.2.0.0">
									<span>应付金额： ¥</span><span><?php echo $total;?></span>
								</div>
								<div class="col-xs-6 col-md-2 col-sm-2">
									<a href="gouwu2.php?id=<?php echo $info1->uid;?>">结算</a>
								</div>
								   <input name="submit2" type="submit" class="buttoncss" value="更改商品数量">
							</div>
						</div>
					</div>
				</div>
			</div>
			</>
		</div>
		<?php
		}
	?>
	</form>	
</body>
</html>