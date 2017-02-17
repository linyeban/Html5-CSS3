<?php
 include("data/conn.php");
 $id=$_GET['id'];
 $sql=mysqli_query($con,"select * from tb_gonggao where ggid='".$id."'");
 $info=mysqli_fetch_array($sql);
 include("function.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>校园购物网站公告</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
<script src="external/jquery-2.2.3.min.js"></script>
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/Css.css" type="text/css" />
</head>
<body>
 <div>
 <p><span style="color:#330000">
		<span style="font-size: 14px;text-align: left;">
		 <?php echo $info['content'];?>
		</span>
	</span></p>
</div>
</body>
</html>