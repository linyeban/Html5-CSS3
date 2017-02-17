<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>订单查询</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
<table width="550" border="0" align="center">
        <tr>
          <td height="20" bgcolor="#390c20"><div align="center" style="color: #FFFFFF">订单查询</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="550" height="50" border="0" align="center">
            <tr>
              <td bgcolor="#FFFFFF">
			  <table width="550" height="50" border="0" align="center">
			   <script language="javascript">
			     function chkinput3(form)
				 {
			    	 
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert("请输入下订单人或订单号");
					  form.username.select();
					  return(false);
				    }
				   return(true);
				    
				 }
			   </script>

<!--   表单提交 -->
			   
                <form name="form3" method="post" action="showdd.php" onSubmit="return chkinput3( this)">
				<tr>
                  <td height="25"><div align="center">下订单人姓名:<input type="text" name="username" class="inputcss" size="25" >
                    	订单号:<input type="text" name="ddh" size="25" class="inputcss" ></div></td>
                </tr>
                <tr>
                  <td height="25">
                    <div align="center">
					    <input type="hidden" value="show_find" name="show_find" id="show_find">
                        <input name="button" type="submit" class="buttoncss" id="button" value="查 找">
                    </div></td>
                </tr>
			    </form>
              </table></td>
            </tr>
          </table></td>
        </tr>
	</table>
</body>
</html>
