<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;">
<title>添加商品</title>
<script src="js/addgoods.js"></script>
<link href="css/addgoods.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
	<table width="720" align="center">
	<tr>
			<td height="20" bgcolor="#390c20" align="center"><span class="head-font" style="color: #FFFFFF">添加商品</span></td>
	</tr>
	<tr>
	<td height="253">
	<table width="720" border="1">
	<form name="form1" enctype="multipart/form-data" method="post"
				action="savenewgoods.php" onSubmit="return chkinput(this)">
						<tr>
							<td width="129" height="25" align="center">商品名称：</td>
							<td width="618"><div align="left">
									<input type="text" name="mingcheng" size="25" >
								</td>
						</tr>

						<tr>
							<td height="25" align="center">价格：</td>
							<td height="25" align="left">市场价格：
								<input type="text" name="shichangjia" size="10" >
								元 &nbsp;&nbsp;会员价：
								<input type="text" name="huiyuanjia" size="10" >
								元
							</td>
						</tr>
					<tr>
						<td height="25" align="center">商品类型：</td>
						<td height="25" align="left">
						<select id="typeid" name="typeid">
						<option value="1">礼盒</option>
					    <option value="2">季节精选</option>
						<option value="3">纸杯蛋糕</option>
						<option value="4">派</option>
						<option value="5">礼品卡</option>						
						</select>
						</td>
					</tr>


					<tr>
						<td height="22" align="center">商品品牌：</td>
						<td height="22"><div align="left">
								<input type="text" name="pinpai"  size="20">
							</div></td>
					</tr>
					<tr>
						<td height="25" align="center">商品型号：</td>
						<td height="25"><div align="left">
								<input type="text" name="xinghao"  size="20">
							</div></td>
					</tr>

					<tr>
						<td height="25" align="center">商品数量：</td>
						<td height="25"><div align="left">
								<input type="text" name="shuliang"  size="20">
							</div></td>
					</tr>
					<tr>
						<td height="25" align="center">商品图片：</td>
						<td height="25" align="left">
						<input type="text" name="tupian"  size="20">
							</td>
					</tr>
					<tr>
						<td height="80" align="center">商品简介：</td>
						<td height="25"><div align="left">
					<textarea name="jianjie" cols="80" rows="8" ></textarea></td>
					</tr>
					<tr>
						<td height="25" colspan="2"><input name="submit" type="submit"
							class="buttoncss" id="submit" value="添加"> &nbsp;&nbsp;<input
							type="reset" value="重写" class="buttoncss"></td>
					</tr>
					</form>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>