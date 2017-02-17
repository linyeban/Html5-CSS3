<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>校园购物网站head</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
<script src="external/jquery-2.2.3.min.js"></script>
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/Css.css" type="text/css" />
<style type="text/css">
#page-container {
	padding-left: 15%;
	padding-right: 15%;
	padding-top: 60px;
	text-align: left;
	margin-bottom: 100px;
	
}
p{
    text-align: left;
}
</style>
</head>
<body>
<?php
if(!isset($_SESSION)){
	session_start();
}
//session_start ();
if(!isset($_SESSION['username']))
{
	//echo "aa";
include("head2.php");
}else
{
	//echo "bb";
	include("head.php");
	
}
?>
	<div id="page-container">
		<p>
			<span style="color: 330000"> <strong><h3>您好！欢迎来到仲恺糕点<h3></strong></span>
		</p>
		<p><span style="color:#330000">
		<span style="font-size: 14px;text-align: left;">
		  &nbsp; 创立伊始，我们凭借纯正、高品质的派，迅速获得了甜品爱好者们的认可。
		 <br>
		 &nbsp; 为了满足消费者口味，我们陆续推出多款创意蛋糕，将风靡纽约的纸杯蛋糕、红丝绒蛋糕带来这里，通过网络销售，
		  将甜蜜惊喜派送到每一位顾客手中
		
		 <br>
		</span>
		</span></p>
	  <img alt="" src="image/ninhao.jpg" width="940">
		
	</div>
	<?php include("foot.php"); ?>
</body>
</html>