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
			<span style="color: 330000"> <strong><h3>会员与积分条例<h3></strong></span>
		</p>
		<p><span style="color:#330000">
		<span style="font-size: 14px;text-align: left;">
		 1. 会员分类与积分方法：&nbsp;
		<br>
		 1.1  仲恺会员分为银卡会员、金卡会员 &nbsp;
		 <br>
		 1.2 购买产品每消费一元积1分（不含运费及配件部分），未登陆状态消费累计积分，不享受会员礼遇
		</span>
		</span></p>
	</div>
	<?php include("foot.php"); ?>
</body>
</html>