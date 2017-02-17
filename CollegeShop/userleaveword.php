<?php
session_start (); ?>
<table width="790" height="300" border="0" align="center">
  <tr>
    <td height="300" valign="top" bgcolor="#FFFFFF"><div align="center">
      <table width="500" border="0" align="center">
        <tr>
          <td height="20" bgcolor="#69BC2C"><div align="center" style="color: #FFFFFF">用户留言</div></td>
        </tr>
        <tr>
          <td height="150" bgcolor="#555555"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
              <script language="javascript">
			  function chkinput1(form)
			  {
			    if(form.title.value=="")
				{
				   alert("请输入留言主题!");
				   form.title.select();
				   return(false);
				}
			   if(form.content.value=="")
				{
				   alert("请输入留言内容!");
				   form.content.select();
				   return(false);
				}
				return(true);
			  }
			
			</script>
              <form name="form2" method="post" action="saveuserleaveword.php" onSubmit="return chkinput1(this)">
                <tr>
                  <td width="102" height="25" bgcolor="#FFFFFF"><div align="center">留言主题：</div></td>
                  <td width="395" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="title" size="30" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                  </div></td>
                </tr>
                <tr>
                  <td height="100" bgcolor="#FFFFFF"><div align="center">留言内容：</div></td>
                  <td height="100" bgcolor="#FFFFFF"><div align="left">
                      <textarea name="content" rows="8" cols="60" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="提交">
      &nbsp;&nbsp;
                      <input name="reset" type="reset" class="buttoncss" value="重写">
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
