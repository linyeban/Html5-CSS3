 <link rel="stylesheet" type="text/css" href="css/font.css">
 <?php
	  include("../data/conn.php");
	    if($_POST['show_find']!="")
		 {
	      $username=trim($_POST['username']);//trim（）函数去掉字符两边的空格
		  $ddh=trim($_POST['ddh']);
		  if($username=="")
		   {
		       $sql=mysqli_query($con,"select * from tb_dingdan where dingdanhao='".$ddh."'");
		   }
		  elseif($ddh=="")
		  {
		      $sql=mysqli_query($con,"select * from tb_dingdan where xiadanren='".$username."'");
		   }
		  else
		  {
		      $sql=mysql_query($con,"select * from tb_dingdan where xiadanren='".$username."'and dingdanhao='".$ddh."'");
		  }
		  $info=mysqli_fetch_array($sql);
		  if($info==false)
		   {
		      echo "<div algin='center'>对不起,没有查找到该订单!</div>";    
		   }
		   else
		   {
	  ?>
	  <table width="550" border="0" align="center" >
        <tr>
          <td height="20" bgcolor="#390c20"><div align="center" style="color: #FFFFFF">查询结果</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr bgcolor="#FFFFFF" align="center">
              <td width="77" height="25">订单号</td>
              <td width="77" ><div class="style1">下单用户</div></td>
              <td width="77" ><div class="style1">订货人</div></td>
              <td width="77" ><div class="style1">金额总计</div></td>
              <td width="77" ><div class="style1">付款方式</div></td>
              <td width="77" ><div class="style1">收款方式</div></td>
              <td width="77" ><div class="style1">订单状态</div></td>
            </tr>
			<?php
			
			  do
			  {
			?>
            <tr class="style1" align="center" bgcolor="#FFFFFF">
              <td height="25" ><?php echo $info['dingdanhao'];?></td>
              <td height="25" ><?php echo $info['xiadanren'];?></td>
              <td height="25" ><?php echo $info['shouhuoren'];?></td>
              <td height="25" ><?php echo $info['total'];?></td>
              <td height="25" ><?php echo $info['zfff'];?></td>
              <td height="25" ><?php echo $info['shff'];?></td>
              <td height="25" ><?php echo $info['zt'];?></td>
            </tr>
			<?php
			   }while($info=mysqli_fetch_array($sql));
			?>
          </table></td>
        </tr>
      </table>
	    <?php
		   }
		 }
		?>