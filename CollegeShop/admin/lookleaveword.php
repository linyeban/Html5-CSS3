<html>
<head>
<title>用户留言管理</title>
<link  rel="stylesheet" type="text/css" href="css/font.css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
 <?php
      	include("../data/conn.php");
	   $sql=mysqli_query($con,"select * from tb_leaveword where lwid");
	   $info=mysqli_fetch_array($sql);
	   $total=mysqli_num_rows($sql);
	   if($total==0)
	   {
	     echo "本站暂无用户留言!";
	   }
	   else
	   {
	  
	  ?>
<table width="750" border="0" align="center" >
<form name="form1" method="post" action="deleteleaveword.php">
  <tr bgcolor="#390c20"> 
    <td height="20" colspan="2"><div align="center"><font color="#FFFFFF">用户留言管理</font></div></td>
  </tr>
  <tr> 
    <td height="40" colspan="2" bgcolor="#333333"><table width="750"  border="0" align="center">
        <tr> 
          <td width="357" height="20" bgcolor="#FFFFFF"><div align="center">留言主题</div></td>
          <td width="80" bgcolor="#FFFFFF"><div align="center">留言者</div></td>
          <td width="156" bgcolor="#FFFFFF"><div align="center">留言时间</div></td>
          <td width="93" bgcolor="#FFFFFF"><div align="center">操作</div></td>
          <td width="58" bgcolor="#FFFFFF"><div align="center">删除</div></td>
        </tr>
		 <?php
            
			 $sql1=mysqli_query($con,"select * from tb_leaveword");
             while($info1=mysqli_fetch_array($sql1))
		     {
		  ?>
        <tr> 
          <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo $info1['title'];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
		  <?php
		   $sql2=mysqli_query($con,"select name from tb_user where uid='".$info1['userid']."'");
		   $info2=mysqli_fetch_array($sql2);
		   echo $info2['name'];
		  ?>
		  </div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['time'];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="editleaveword.php?id=<?php echo $info1['lwid'];?>">查看编辑</a></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
              <input type="checkbox" name=<?php echo $info1['lwid'];?> value=<?php echo $info1['lwid'];?>>
            </div></td>
        </tr>
		<?php
		 }
		?>
      </table></td>
  </tr>
  <tr> 
    <td width="98" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="删除选项" class="buttoncss"></div></td>
  </tr>
  </form>
</table>
	<?php
		 }
	?>
</body>
</html>
