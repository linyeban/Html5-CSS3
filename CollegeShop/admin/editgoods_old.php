<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>编辑商品</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<link rel="stylesheet" type="text/css" href="css/editgoods.css">
</head>
<body>
	<div class="row">
		<table width="750" height="86" border="1" cellpadding="0"
			cellspacing="1" align="center">
			<tr bgcolor="#390c20">
				<td height="20" colspan="10"><div align="center">商品信息编辑</div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td width="102"><div align="center">名称</div></td>
				<td width="86"><div align="center">品牌</div></td>
				<td width="71"><div align="center">型号</div></td>
				<td width="60"><div align="center">剩余</div></td>
				<td width="60"><div align="center">市场价</div></td>
				<td width="61"><div align="center">会员价</div></td>
				<td width="60"><div align="center">卖出</div></td>
				<td width="68"><div align="center">操作</div></td>
			</tr>
			<?php
			include ("../data/conn.php");
			$pagesize = 2; // 每页显示大小
			$page = 1;
			$sql = "select * from tb_shangpin";
			$result = mysqli_query ( $con, $sql );
			$total = mysqli_num_rows( $result );
			$info = mysqli_fetch_array( $result );
			if ($total == 0) {
				echo "本站暂无商品!";
			} else {
				
				if (isset ( $_GET ['page'] ) === true)
					$page = $_GET ['page']; // 获得显示页码,如第一次访问则为1
				$nStart = ($page - 1) * $pagesize; // 计算起始记录, 0 开始
				  // $sql1 = "select * from tb_shangpin limit " . ($page - 1) * $pagesize . ",$pagesize";
				$sql1 = "'select * from tb_shangpin limit %d, %d',$nStart, $pagesize";
				$result = mysqli_query ( $con, $sql );
				// $num = mysqli_num_rows( $result );
				// echo $num;
				while ( $info1 = mysqli_fetch_assoc ( $result ) ) {
					echo "\t<tr>\n";
					echo "\t\t<td>{$info1['mingcheng']}</td>\n";
					echo "\t\t<td>{$info1['pingpai']}</td>\n";
					echo "\t\t<td>{$info1['xinghao']}</td>\n";
					if ($info1 ['shuliang'] < 0) {
						echo "售完";
					} else {
						echo "\t\t<td>{$info1['shuliang']}</td>\n";
					}
					echo "\t\t<td>{$info1['shichangjia']}</td>\n";
					echo "\t\t<td>{$info1['huiyuanjia']}</td>\n";
					echo "\t\t<td>{$info1['cishu']}</td>\n";
					//echo "\t\t<td>更改</td>\n";
					echo "\t\t<td><script></script{$info1['spid']}</td>\n";		
					
				}
			}
			?>
			
<!-- 			while ( $info1 = mysqli_fetch_assoc( $result )) { -->
			<td><a href="changegoods.php?spid=<?php echo $info1['spid'];?>">更改</a></td>
<!-- 			} -->
			
		</table>
		<div align="right">
		<form action="editgoods.php" method="GET">
			<input type="submit" value="翻到" />
    			<?php
				echo "<input type=\"text\" name=\"page\" size=\"2\"
                   value=\"{$page}\"/>\n";
				//echo '<a href="editgoods.php?page=", $page-1>前一页</a>';
				printf ( "<a href=\"editgoods.php?page=%d\">前一页</a>\n", $page - 1 );
				printf ( "<a href=\"editgoods.php?page=%d\">后一页</a>\n", $page + 1 );
				?>
   		</form>
		</div>

	</div>
</body>
</html>