<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>用户信息管理</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
include("../data/conn.php");
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from tb_user where uid=".$id."");
$info=mysqli_fetch_array($sql);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="650" border="0" align="center" >
 <form name="form1" method="post" action="djyh.php">  
  <tr>
    <td height="20" bgcolor="#390c20"><div align="center" class="style1">用户信息查看</div></td>
  </tr>
  <tr>
    <td height="98" bgcolor="#666666"><table width="650" border="0" align="center" >
      <!--DWLayoutTable-->
      <tr bgcolor="#FFFFFF">
        <td width="99" height="20" ><div align="center">用户：</div></td>
        <td width="180" ><div align="left"><?php echo $info['name'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['email'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['tel'];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">QQ号码：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info['qq'];?></div></td>
      </tr>
    </table></td>
  </tr>
  </form>
</table>
</body>
</html>
