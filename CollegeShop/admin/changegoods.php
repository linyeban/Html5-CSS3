
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>更改商品信息</title>
<link rel="stylesheet" type="text/css" href="css/font.css">

<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php 
//   include("conn.php");
//   $sql1=mysql_query("select * from tb_shangpin where id=".$_GET[id]."",$conn);
//   $info1=mysql_fetch_array($sql1);
include ("../data/conn.php");
$sql1 = "select * from tb_shangpin where spid=".$_GET['id']."";
$result = mysqli_query ($con, $sql1);
$info1 = mysqli_fetch_array($result);
?>
<body>
<table width="750" border="0" align="center" >
  <tr>
    <td height="20" bgcolor="#390c20"><div align="center" style="color: #FFFFFF">更改商品信息</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="750" border="0" >
     <script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert("请输入商品名称!");
		 form.mingcheng.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert("请输入商品会员价!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert("请输入商品市场价!");
		 form.shichangjia.select();
		 return(false);
	   }
	
	   
	   if(form.pinpai.value=="")
	   {
	     alert("请输入商品品牌!");
		 form.pinpai.select();
		 return(false);
	   }
	   
	   if(form.xinghao.value=="")
	   {
	     alert("请输入商品型号!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("请输入商品数量!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("请输入商品简介!");
		 form.jianjie.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="savechangegoods.php?id=<?php echo $_GET['id'];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">商品名称：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="mingcheng" size="25" class="inputcss" value="<?php echo $info1['mingcheng'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">市场价：
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php echo $info1['shichangjia'];?>">
                元&nbsp;&nbsp;会员价：
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php echo $info1['huiyuanjia'];?>">
                元</div></td>
          </tr>
          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">商品品牌：</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="pinpai" class="inputcss" size="20" value="<?php echo $info1['pinpai'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">商品型号：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="xinghao" class="inputcss" size="20" value="<?php echo $info1['xinghao'];?>">
            </div></td>
          </tr>
          
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">商品数量：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $info1['shuliang'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">商品图片：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input name="tupian" type="text" class="inputcss" id="tupian" size="30" value="<?php echo $info1['tupian'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">商品简介：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php echo $info1['jianjie'];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="更改">
              &nbsp;&nbsp;
                <input type="reset" value="取消更改" class="buttoncss">
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
