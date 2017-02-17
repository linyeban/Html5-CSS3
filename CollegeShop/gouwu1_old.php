<?php
include("data/conn.php");
 session_start();
 if(!isset($_SESSION['username']))
  {
    echo "<script>alert('请先登录，后购物!');history.back();</script>";
  	header ( "location:login.php");
	exit;
  }
  
?>
<table width="790" height="438" border="0" align="center">
  <tr>
    <td width="561" height="438" valign="top" bgcolor="#FFFFFF"><table width="550" height="10" border="0" align="center">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="gouwu1.php">
          <tr>
            <td height="25" bgcolor="#69BC2C"><div align="center" style="color: #FFFFFF"><?php echo $_SESSION['username'];?>的购物车</div></td>
          </tr>
          <tr>
            <td  bgcolor="#555555"><table width="500" border="0" align="center">
                <?php
              //  $_SESSION['total']=0;
			  //session_register("total");
			   $arraygwc=explode("@",$_SESSION["producelist"]);
			   $s=0;
			   for($i=0;$i<count($arraygwc);$i++)
			   {
			       $s+=intval($arraygwc[$i]);
			   }
			  if($s==0 )
			    {
				   echo "<tr>";
                   echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>您的购物车为空!</td>";
                   echo"</tr>";
				}
			  else
			   { 
			?>
                <tr>
                  <td width="125" height="25" bgcolor="#FFFFFF"><div align="center">商品名称</div></td>
                  <td width="52" bgcolor="#FFFFFF"><div align="center">数量</div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">市场价</div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">会员价</div></td>
                  <td width="66" bgcolor="#FFFFFF"><div align="center">小计</div></td>
                  <td width="71" bgcolor="#FFFFFF"><div align="center">操作</div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION['producelist']);
				$arrayquatity=explode("@",$_SESSION['quatity']);
				
				 while(list($name,$value)=each($_POST))
				    {
					  for($i=0;$i<count($array)-1;$i++)
					  {
					    if(($array[$i])==$name)
						{
						  $arrayquatity[$i]=$value;  
						}
					  }
					  
					}
				  
			    $_SESSION['quatity']=implode("@",$arrayquatity);
				
				
				for($i=0;$i<count($array)-1;$i++)
				 { 
				 
				   $id=$array[$i];
				   $num=$arrayquatity[$i];
				  
				  if($id!="")
				   {
				   $sql=mysqli_query($con,"select * from tb_shangpin where spid='".$id."'");
				   $info=mysqli_fetch_array($sql);
				   $total1=$num*$info['huiyuanjia'];
				   $total+=$total1;
				   $_SESSION["total"]=$total;
			?>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['mingcheng'];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">
                      <input type="text" name="<?php echo $info['spid'];?>" size="2" class="inputcss" value=<?php echo $num;?>>
                  </div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['shichangjia'];?>元</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['huiyuanjia'];?>元</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['huiyuanjia']*$num."元";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="removegwc.php?id=<?php echo $info['spid']?>">移除</a></div></td>
                </tr>
                <?php
						$sql1=mysqli_query($con,"select * from tb_user where name='".$_SESSION['username']."'");
                        $info1=mysqli_fetch_array($sql);
			      }
				 }
			 ?>
                <tr>
                  <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="right">
                      <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="125"><div align="center">
                              <input name="submit2" type="submit" class="buttoncss" value="更改商品数量">
                          </div></td>
                          <td width="125"><div align="center"><a href="gouwu2.php?id=<?php echo $info1->uid;?>">去收银台</a></div></td>
                          <td width="125"><div align="left">总计：<?php echo $total;?></div></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <?php
			 }
			?>
            </table></td>
          </tr>
        </form>
    </table></td>
    <td width="229" align="center" valign="top" background="images/index_bg.gif"></td>
  </tr>
</table>