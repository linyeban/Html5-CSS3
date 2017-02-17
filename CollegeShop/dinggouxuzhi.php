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
		<img src="image/dinggouxuzhi.jpg">
		<div>
		<p>
		<span style="color: 330000"> <strong><h3>订购须知 <h3></strong></span>
		<span style="font-size: 18px;">
		配送服务时间：
		</span>
		<br>
		&nbsp;&nbsp;我们的客服在线时间为每天9:00-21:00；
		<br>
		&nbsp;&nbsp;送货时间是10:00-21:00
		<br>
		&nbsp;&nbsp;需要提前5小时预订，当日订单截止到当日17:00，
		</p>
		</div>
	</div>
	<?php include("foot.php"); ?>
</body>
</html>