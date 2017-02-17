<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>编辑商品</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
include ("../data/conn.php");
$pagesize = 2; // 每页显示大小
$page = 1;
$sql = "select * from tb_shangpin";
$result = mysqli_query ( $con, $sql );
$total = mysqli_num_rows ( $result );
$info = mysqli_fetch_array ( $result );
if ($total == 0) {
	echo "本站暂无商品!";
} else {
	//$nStart = ($page - 1) * $pagesize;
	//$sql1 = "'select * from tb_shangpin limit %d, %d',$nStart, $pagesize";
	$sql1 = "'select * from tb_shangpin";
	$result = mysqli_query ( $con, $sql );
	?>
<form name="form1" method="post" action="deletefxhw.php">
		<table width="750" border="0" align="center">
			<tr>
				<td height="75" bgcolor="#666666"><table width="750" height="86"
						border="0">
						<tr bgcolor="#390c20">
							<td height="20" colspan="10"><div align="center" style="color: #FFFFFF">商品信息编辑</div></td>
						</tr>
						<tr bgcolor="#FFFFFF">
							<td width="102"><div align="center">复选</div></td>
							<td width="102"><div align="center">名称</div></td>
							<td width="86"><div align="center">品牌</div></td>
							<td width="71"><div align="center">型号</div></td>
							<td width="60"><div align="center">剩余</div></td>
							<td width="60"><div align="center">图片</div></td>
							<td width="60"><div align="center">市场价</div></td>
							<td width="61"><div align="center">会员价</div></td>
							<td width="60"><div align="center">卖出</div></td>
							<td width="68"><div align="center">操作</div></td>
						</tr>
	  <?php
	
	// $sql1 = mysql_query ( "select * from tb_shangpin order by addtime desc limit " . ($page - 1) * $pagesize . ",$pagesize", $conn );
	
	while ( $info1 = mysqli_fetch_array ( $result ) ) {
		?>
      <tr bgcolor="#FFFFFF">
							<td height="25"><div align="center">
									<input type="checkbox" name="<?php echo $info1['spid'];?>"
										value=<?php echo $info1['spid'];?>>
								</div></td>
							<td height="25" bgcolor="#FFFFFF">

								<div align="center"><?php echo $info1['mingcheng'];?></div>
							</td>
							<td height="25"><div align="center"><?php echo $info1['pinpai'];?></div></td>
							<td height="25"><div align="center"><?php echo $info1['xinghao'];?></div></td>
							<td height="25"><div align="center"><?php if($info1['shuliang']<0) {echo "售完";}else {echo $info1['shuliang'];}?></div></td>
							<td height="25"><div align="center"><?php echo $info1['tupian'];?></div></td>
							<td height="25"><div align="center"><?php echo $info1['shichangjia'];?></div></td>
							<td height="25"><div align="center"><?php echo $info1['huiyuanjia'];?></div></td>
							<td height="25"><div align="center"><?php echo $info1['cishu'];?></div></td>
							<td height="25"><div align="center">
									<a href="changegoods.php?id=<?php echo $info1['spid'];?>">更改</a>
								</div></td>
						</tr>
	 <?php
	}
	?> 
    </table></td>
			</tr>
		</table>
		<table width="750" height="25" border="0" align="center">
			<tr>
				<td width="165">
					<div align="left">
						<input type="submit" class="buttoncss" value="删除选择"> &nbsp;<input type="reset" value="重新选择"
							class="buttoncss">
					</div>
				</td>
			</tr>
		</table>
		<p>&nbsp;</p>
	</form>
  <?php
}
?>
</body>
</html>
