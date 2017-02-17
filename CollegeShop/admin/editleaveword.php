
<html>
<head>
<title>编辑留言</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
include("../data/conn.php");
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from tb_leaveword where lwid='".$id."'");
$info=mysqli_fetch_array($sql);

?>
<body>


<table width="750" border="0" align="center">

  <tr> 
    <td height="20" bgcolor="#390c20"><div align="center"><font color="#FFFFFF">留言编辑</font></div></td>
  </tr>
  <tr>
    <td height="100" bgcolor="#000000"><table width="750" height="100" border="0" align="center">
        <tr bgcolor="#FFFFFF"> 
          <td width="87" height="25" ><div align="center">留言主题:</div></td>
          <td width="392" height="25"><div align="left"><?php echo $info['title'];?></div></td>
          <td width="83"  ><div align="center">留言时间:</div></td>
          <td width="183" ><div align="center"><?php echo $info['time'];?></div></td>
        </tr>
        <tr bgcolor="#FFFFFF"> 
          <td height="100" ><div align="center">留言内容:</div></td>
          <td colspan="3"  ><div align="left">
		<?php echo $info['content'];?>
		  </div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="20"><div align="center">&nbsp;<input type="button" value="返回" class="buttoncss" onClick="javascript:history.back();"></div></td>
  </tr>
 
</table>
</body>
</html>
