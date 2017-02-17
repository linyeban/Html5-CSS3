<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>商品信息</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<script src="external/jquery-2.2.3.min.js"></script>
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/Css.css" type="text/css" />
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
<table width="950" height="620" border="0" align="center" style="margin-top:0px;" >
  <tr>
    <td width="500" height="220" valign="top" bgcolor="#ffffff" id="lt">
	<IFRAME frameBorder=0 id=left name=left src="left.php" style="
    width: 225px;height: 650px;" Z-INDEX: 1">
    </IFRAME>
	</td>
    <td width="800" id="mn"><div align="left">
	<IFRAME frameBorder=0 id=main name=main  src="shangpin-gitf-box.php" style="width: 800px;height: 850px;margin-top:70px;" Z-INDEX: 2">
    </IFRAME>
	</div></td>
  </tr>
</table>
<?php
include("foot.php");
?>
</body>
</html>
