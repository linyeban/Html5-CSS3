<html>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<title>评论编辑</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
<?php
       include("../data/conn.php");
       $sql=mysqli_query($con,"select count(*) as total from tb_pingjia ");
	   $info=mysqli_fetch_array($sql);
	   $total=mysqli_num_rows($sql);
	   if($total==0)
	   {
	     echo "本站暂无用户发表评论!";
	   }
	   else
	   {
	      
?>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  
 <form name="form2" method="post" action="deletepingjia.php"> 
  <tr bgcolor="#390c20">
    <td height="20" colspan="2"><div align="center" style="color: #FFFFFF">用户评论编辑</div></td>
  </tr>
  <tr>
    <td height="40" colspan="2" bgcolor="#666666"><table width="750" height="45" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr bgcolor="#FFFFFF">
        <td width="294" height="22" ><div align="center">评论主题</div></td>
        <td width="93" ><div align="center">商品名称</div></td>
        <td width="100"><div align="center">评论者</div></td>
        <td width="110"><div align="center">评论时间</div></td>
        <td width="87" ><div align="center">操作</div></td>
        <td width="59" ><div align="center">删除</div></td>
      </tr>
	   <?php
			 
             $sql1=mysqli_query($con,"select * from tb_pingjia");
             while($info1=mysqli_fetch_array($sql1))
		     {
	   
	   ?>
      <tr bgcolor="#FFFFFF">
        <td height="20" ><div align="left"><?php echo $info1['title'];?></div></td>
        <td height="20" ><div align="center">
		<?php
		  $sql2=mysqli_query($con,"select * from tb_shangpin where spid='".$info1['pjid']."'");
		  $info2=mysqli_fetch_array($sql2);
		  echo $info2['mingcheng'];
		?></div></td>
        <td height="20" >
		<div align="center">
		<?php
		  $sql3=mysqli_query($con,"select * from tb_user where uid='".$info1['uid']."'");
		  $info3=mysqli_fetch_array($sql3);
		  echo $info3['name'];
		?>
		</div></td>
        <td height="20" ><div align="center"><?php echo $info1['time'];?></div></td>
        <td height="20" ><div align="center"><a href="lookpinglun.php?id=<?php echo $info1['pjid']?>;">查看编辑</a></div></td>
        <td height="20" ><div align="center"><input type="checkbox" value=<?php echo $info1['pjid']?> name="<?php echo $info1['pjid'];?>"></div></td>
      </tr>
	   <?php
	        }
		    
		?>
    </table></td>
  </tr>
  <tr>
    <td width="93"><div align="center"><input type="submit" value="删除选项" class="buttoncss"></div></td>
  </tr>
  </form>
</table>

<?php
  }
?>
</body>
</html>
