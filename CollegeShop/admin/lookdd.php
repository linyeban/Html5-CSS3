<html>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<title>查看订单</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
<?php
 	include ("../data/conn.php");
// 	$sql = mysql_query ( "select count(*) as total from tb_dingdan ", $conn );
// 	$info = mysql_fetch_array ( $sql );
// 	$total = $info [total];
 	$sql="select * from tb_dingdan";
 	$result=mysqli_query($con,$sql);
 	$info=mysqli_fetch_array($result);
 	$total = mysqli_num_rows($result);
	if ($total == 0) {
		echo "本站暂无订单!";
	}
?>
<form name="form1" method="post" action="deletedd.php">
		<table width="750" border="0" align="center">
			<tr>
				<td height="20" bgcolor="#390c20"><div align="center" style="color: #FFFFFF">查看订单</div></td>
			</tr>
			<tr>
				<td height="40" bgcolor="#666666">
				<table width="750" height="44" border="0" align="center" >
						<tr>
							<td width="121" height="20" bgcolor="#FFFFFF"><div align="center">订单号</div></td>
							<td width="59" bgcolor="#FFFFFF"><div align="center">下单人</div></td>
							<td width="60" bgcolor="#FFFFFF"><div align="center">收货人</div></td>
							<td width="70" bgcolor="#FFFFFF"><div align="center">收货地址</div></td>
							<td width="70" bgcolor="#FFFFFF"><div align="center">金额总计</div></td>
							<td width="88" bgcolor="#FFFFFF"><div align="center">付款方式</div></td>
							<td width="87" bgcolor="#FFFFFF"><div align="center">收货方式</div></td>
							<td width="141" bgcolor="#FFFFFF"><div align="center">订单状态</div></td>
							<td width="115" bgcolor="#FFFFFF"><div align="center">操作</div></td>
						</tr>
	  <?php
			do {
				$array = explode ( "@", $info ['spc'] );
				$sum = count ( $array ) * 20 + 260;
		?>
      <tr>
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['dingdanhao'];?></div></td>
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['xiadanren'];?></div></td>
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['shouhuoren'];?></div></td>							
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['dizhi'];?></div></td>
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['total'];?></div></td>
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['zfff'];?></div></td>
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['shff'];?></div></td>
							<td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info['zt'];?></div></td>
							<td height="21" bgcolor="#FFFFFF"><div align="center">
									 <input name="button2" type="button"
										class="buttoncss" id="button2"
										onClick="javascript:window.location='orderdd.php?id=<?php echo $info['ddid'];?>';"
										value="处理"> 
										<input type="checkbox" name=<?php echo $info['ddid'];?> value=<?php echo $info['ddid'];?>>
								</div></td>
						</tr>
	  <?php
			} while ( $info = mysqli_fetch_array ( $result ) )?>
    </table></td>
			</tr>
		</table>
		<table width="750" height="20" border="0" align="center">
			<tr>
				<td width="98"><div align="right">
					<input type="submit" value="删除选择项" class="buttoncss"></div></td>
			</tr>
		</table>
	</form>
</body>
</html>
