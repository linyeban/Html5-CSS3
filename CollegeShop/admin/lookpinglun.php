<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>查看评论</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
include("../data/conn.php");
$sql=mysqli_query($con,"select * from tb_pingjia where pjid='".$_GET['id']."'");
$info=mysqli_fetch_array($sql);
?>
<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr bgcolor="#FFCF60">
    <td height="20" colspan="2"><div align="center" class="style1">查看用户评论</div></td>
  </tr>
  <tr>
    <td height="40" colspan="2" bgcolor="#666666"><table width="750" height="45" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="294" height="22" bgcolor="#FFFFFF"><div align="center">评论主题：</div></td>
        <td width="93" bgcolor="#FFFFFF"><div align="center">商品内容</div></td>
   </tr>
  <tr>
    <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info['title'];?></div></td>
    <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info['content'];?></div></td>
  </tr>
</table>
</body>
</html>
