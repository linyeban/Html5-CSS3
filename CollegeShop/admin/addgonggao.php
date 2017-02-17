
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<title>添加公告</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
	 {
	   alert("请输入公告主题!");
	   form.title.select();
	   return(false);
	 }
     if(form.content.value=="")
	 {
	   alert("请输入公告内容!");
	   form.content.select();
	   return(false);
	 }
	 return(true);
   }
</script>
<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#390c20"><div align="center" style="color: #FFFFFF">添加公告</div></td>
  </tr>
  <tr>
    <td height="175" bgcolor="#666666"><table width="750" height="175" border="0" align="center" cellpadding="0" cellspacing="1">
     <!--  添加公告-->
      <form name="form1" method="post" action="savenewgonggao.php" onSubmit="return chkinput(this)">
	  <tr bgcolor="#FFFFFF">
        <td width="80" height="25" ><div align="center">公告主题：</div></td>
        <td width="667" ><div align="left"><input type="text" name="title" size="50" class="inputcss"></div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="125" ><div align="center">公告内容：</div></td>
        <td height="125" ><div align="left"><textarea name="content" rows="8" cols="70"></textarea>
        </div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="25" colspan="2" ><div align="center"><input type="submit" value="添加" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
