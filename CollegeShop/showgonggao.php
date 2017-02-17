<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>校园购物网站公告</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
<script src="external/jquery-2.2.3.min.js"></script>
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="css/Css.css" type="text/css" />
<style type="text/css">
#page-container {
	padding-left: 15%;
	padding-right: 15%;
	padding-top: 60px;
	text-align: left;
	margin-bottom: 100px;
	
}
.demo_line_02{
    height: 10px;
    border-top: 5px solid #390c20;
    text-align: center;
}
</style>
<script type="text/javascript">
	function test(URL) {
		var frameid = parent.document.getElementById("main");
		//alert("aaa");
		frameid.src = URL;
	}
</script>
</head>
<body>
<?php
include("data/conn.php");
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
	<div>
	<img  src="image/showgonggao.jpg" width="940">
	</div>
	 <?php
	   $sql=mysqli_query($con,"select count(*) as total from tb_gonggao");
	   $info=mysqli_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "本站暂无公告!";
	   }
	   else
	   {
	   ?>
		<p>
			<span style="color: 330000"> <strong><h3>本站公告<h3></strong></span>
		</p>
		<?php 
		$sql1=mysqli_query($con,"select * from tb_gonggao ");
		while($info1=mysqli_fetch_array($sql1))
		{
		?>
			<p><span style="color:#330000">
			<span style="font-size: 14px;text-align: left;">
			---&nbsp;&nbsp;<?php echo $info1['title'];?>&nbsp;&nbsp;<?php echo $info1['time'];?>&nbsp;&nbsp;&nbsp;<a href="#" onclick="test('showgg.php?id=<?php echo $info1['ggid'];?>')">查看详情</a>&nbsp;&nbsp;---
			<br>
			<br>
			</span>
			</span></p>
	   <?php }}?>
<!-- 		<p><span style="color:#330000">
		<span style="font-size: 14px;text-align: left;"> -->
<!-- 		 &nbsp; 创立伊始，我们凭借纯正、高品质的派，迅速获得了甜品爱好者们的认可。 -->
<!-- 		 <br> -->
<!-- 		 &nbsp; 为了满足消费者口味，我们陆续推出多款创意蛋糕，将风靡纽约的纸杯蛋糕、红丝绒蛋糕带来这里，通过网络销售， -->
<!-- 		  将甜蜜惊喜派送到每一位顾客手中 -->
		
<!-- 		 <br> -->
<!-- 		</span> -->
<!-- 		</span></p> -->
<!-- 		<span class="hr"><hr color="#red" size="50px"></span> -->
		<div class="demo_line_02"><!-- 分割线 -->
		</div>
		<p>
			<span style="color: 330000"> <strong><h3>公告内容显示区<h3></strong></span>
		</p>
	<IFRAME frameBorder=0 id=main name=main  style="width: 800px;height: 500px;margin-top:10px;" Z-INDEX: 2">
    </IFRAME>
	</div>
</body>
</html>