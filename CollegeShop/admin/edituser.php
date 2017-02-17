<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>用户管理</title>
<link rel="stylesheet" type="text/css" href="css/font.css">

</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
       include("../data/conn.php");
       $sql=mysqli_query($con,"select count(*) as total from tb_user ");
	   $info=mysqli_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "本站暂无用户注册!";
	   }
	   else
	   {
	      
?>


<form name="form1" method="post" action="deleteuser.php">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="20" bgcolor="#390c20"><div align="center" style="color: #FFFFFF">用户管理</div></td>
  </tr>
  <tr>
    <td  bgcolor="#666666"><table width="600" border="0" align="center">
       <?php

             $sql1=mysqli_query($con,"select * from tb_user");
 
	   ?>
	   <tr bgcolor="#FFFFFF">
          <td width="224" height="20" ><div align="center">用户昵称</div></td>
          <td width="79" ><div align="center">删除</div></td>
          <td width="75" ><div align="center">查看信息</div></td>
 
        </tr>
       <?php
	      while($info1=mysqli_fetch_array($sql1))
		     {
	   ?>
	   <tr bgcolor="#FFFFFF">
          <td height="20" ><div align="center"><?php echo $info1['name'];?></div></td>
          <td height="20" ><div align="center">
          <input type="checkbox" name="<?php echo $info1[id];?>" value=<?php echo $info1['uid'];?>></div></td>
          <td height="20" ><div align="center"><a href="lookuserinfo.php?id=<?php echo $info1['uid'];?>"><img src="image/button_select.png" width="14" height="13" border="0"></a></div></td> 
        </tr>
		<?php
	        }
		    
		?>
    </table></td>
  </tr>
</table>
<table width="600" height="25" border="0" align="center" >
  <tr>
    <td width="92"><div align="center"><input type="submit" value="删除选项" class="buttoncss">
    </div></td>
  </tr>
</table>
<?php
   }
?>
</form>
</body>
</html>
