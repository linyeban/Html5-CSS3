<html>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<title>公告管理</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>

<body>
<?php
       include("../data/conn.php");
       $sql=mysqli_query($con,"select * from tb_gonggao ");
	   $info=mysqli_fetch_array($sql);
	   $total=mysqli_num_rows($sql);
	   if($total==0)
	   {
	     echo "本站暂无公告!";
	   }
	   else
	   {
           $sql1=mysqli_query( $con,"select * from tb_gonggao");
?>
<form name="form1" method="post" action="deletegonggao.php">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#390c20"><div align="center" style="color: #FFFFFF">公告管理</div></td>
  </tr>
  <tr>
    <td height="50" bgcolor="#666666"><table width="750" height="25" border="0" align="center">
	
      <tr bgcolor="#FFFFFF">
        <td width="50" height="25" ><div align="center">复选</div></td>
        <td width="621"><div align="center">公告主题</div></td>
        <td width="75" ><div align="center">操作</div></td>
      </tr>
	    <?php
	
		   while($info1=mysqli_fetch_array($sql1))
		    {
	  ?>
	  <tr bgcolor="#FFFFFF">
        <td height="25"><div align="center"><input type="checkbox" name=<?php echo $info1['ggid'];?> value=<?php echo $info1['ggid'];?>></div></td>
        <td height="25"><div align="left"><?php echo $info1['title'];?></div></td>
	    <td height="25"><div align="center"><a href="editgonggao.php?id=<?php echo $info1['ggid'];?>">查看编辑</a></div></td>
	  </tr>
	  <?php
	       }
	  ?>
    </table></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center">
  <tr>
    <td width="203"><div align="left"><input type="submit" value="删除所选项" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="取消删除" class="buttoncss"></div></td>
  </tr>
</table>
<?php
 }
?>
</form>
</body>
</html>
