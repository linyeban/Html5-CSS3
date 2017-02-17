<table width="790" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  height="438" valign="top" bgcolor="#FFFFFF"><br>
      <table width="500" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#5DD686"><div align="left">&nbsp;&nbsp;◎&nbsp;本站公告</div></td>
      </tr>
    </table>
      <?php
      include("data/conn.php");
	   $sql=mysqli_query($con,"select count(*) as total from tb_gonggao");
	   $info=mysqli_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	     echo "本站暂无公告!";
	   }
	   else
	   {
	   ?>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="296" height="20"><div align="center">公告主题</div></td>
          <td width="136"><div align="center">发布时间</div></td>
          <td width="68"><div align="center">查看内容</div></td>
        </tr>
       <?php
             $sql1=mysqli_query($con,"select * from tb_gonggao ");
             while($info1=mysqli_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td height="20"><div align="left"><?php echo $info1['title'];?></div></td>
          <td height="20"><div align="center"><?php echo $info1['time'];?></div></td>
          <td height="20"><div align="center"><a href="showgg.php?id=<?php echo $info1['ggid'];?>">查看</a></div></td>
        </tr>
          <?php
	    }
		
		?>
      </table>
       <?php
	    }		
		?>
		</td>
  </tr>
</table>