<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/index.css" rel="stylesheet">
<link href="css/font.css" rel="stylesheet">
</head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("请输入用户名!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("请输入用户密码!");
		  form.pwd.select();
		  return(false);
		}
		return(true);
	  }
	</script>
<form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
  <table width="549" height="297" border="0" align="center" id="__01">
	<tr>
		<td height="228" colspan="2" background="image/default_01.jpg">&nbsp;			</td>
	</tr>
	<tr>
		<td width="142" height="39" background="image/default_02.jpg">&nbsp;			</td>
		<td width="407" background="image/default_06.jpg"><table width="407" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="57" align="center">用户：</td>
            <td width="94" align="center"><input type="text" name="name" size="14" maxlength="20" class="inputcss"></td>
            <td width="53" align="center">&nbsp;密&nbsp;码：</td>
            <td width="104" align="center"><input type="password" name="pwd" size="14" maxlength="20" class="inputcss"></td>
            <td width="99">&nbsp;
            <input name="imageField" type="image" src="image/default_07.jpg" width="74" height="24" border="0"></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td height="30" background="image/default_04.jpg">&nbsp;</td>
		<td width="407" background="image/default_05.jpg">&nbsp;</td>
	</tr>
</table>
</form>
</body>
</html>