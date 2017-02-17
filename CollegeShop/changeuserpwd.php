<?php
session_start ();
include ("data/conn.php");
$sql = "select * from tb_user where name='" . $_SESSION["username"] . "'";
$result = mysqli_query ( $con, $sql );

$info = mysqli_fetch_array ( $result );
//cho $info['name'];
 ?>
<meta http-equiv="Content-Type" content="text/html;">
<table width="600" height="438" border="0" align="left">
  <tr>
    <td height="438" align="center" valign="top" bgcolor="#FFFFFF"><div align="center">
      <table width="250" height="100" border="0" align="center">
        <tr>
          <td height="20" bgcolor="#69BC2C"><div align="center" style="color: #FFFFFF">修改用户密码</div></td>
        </tr>
        <tr>
          <td height="80" bgcolor="#555555"><table width="250" height="80" border="0" align="center" cellpadding="0" cellspacing="1">
              <script language="javascript">
		  function chkinput1(form)
			  {
			  	//alert('$("p1").val()');
			  	
			   if(form.p1.value=="")
				{
				  alert("请输入原密码!");
				  form.p1.select();
				  return(false);
				}
				if(form.p2.value=="")
				{
				  alert("请输新密码!");
				  form.p2.select();
				  return(false);
				}      
			   if(form.p3.value=="")
				{
				  alert("请输确认密码!");
				  form.p3.select();
				  return(false);
				} 
				if(form.p2.value!=form.p3.value)
				{
				  alert("密码与确认密码不同!");
				  form.p2.select();
				  return(false);
				}
				if(form.p2.value.length<6)
				{
				  alert("新密码长度应大于6!");
				  form.p2.select();
				  return(false);
				}
				return(true);
			  }
		  </script>
              <form name="form1" method="post" action="savechangeuserpwd.php" onSubmit="return chkinput1(this)">
                <tr>
                  <td width="77" height="20" bgcolor="#FFFFFF"><div align="center">原密码：</div></td>
                  <td width="170" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p1" id="p1" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">新密码：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p2" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">确认新密码：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p3" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="更改">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table>
</div></td>
    <td width="229" align="center" valign="top"></td>
  </tr>
</table>
