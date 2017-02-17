<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="css/easyui.css">
	<link rel="stylesheet" type="text/css" href="css/icon.css">
	<script type="text/javascript" src="../external/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../external/jquery.easyui.min.js"></script>
	<style>
		.panel-body{
			background:#f0f0f0;
		}
		.panel-header{
			background:#fff url('image/panel_header_bg.gif') no-repeat top right;
		}
		.panel-tool-collapse{
			background:url('image/arrow_up.gif') no-repeat 0px -3px;
		}
		.panel-tool-expand{
			background:url('image/arrow_down.gif') no-repeat 0px -3px;
		}
	</style>
	<script type="text/javascript">
	function test(URL){
		var frameid = parent.document.getElementById("main");
		//alert("aaa");
		frameid.src = URL;
		}
	</script>
</head>
<body>
	<div style="width:200px;height:auto;background:#7190E0;padding:5px;">
		
		<div class="easyui-panel" title="商品管理" collapsible="true" style="width:200px;height:auto;padding:10px;">
			<a href="#" onclick="test('addgoods.php')">添加商品</a><br/>
			<a href="#" onclick="test('editgoods.php')">修改商品</a><br/>
		</div>
		<br/>
		<div class="easyui-panel" title="用户管理" collapsible="true" collapsed="true" style="width:200px;height:auto;padding:10px;">
			<a href="#" onclick="test('edituser.php')">用户信息管理</a><br/>
			<a href="#" onclick="test('lookleaveword.php')">用户留言管理</a>
		</div>
		<br/>
		<div class="easyui-panel" title="订单管理" collapsible="true" style="width:200px;height:auto;padding:10px;">
			<a href="#" onclick="test('lookdd.php')">编辑订单</a><br/>
			<a href="#" onclick="test('finddd.php')">查询订单</a><br/>
		</div>
		<div class="easyui-panel" title="信息管理" collapsible="true" style="width:200px;height:auto;padding:10px;">
			<a href="#" onclick="test('admingonggao.php')">公告管理</a><br/>
			<a href="#" onclick="test('addgonggao.php')">添加公告</a><br/>
			<a href="#" onclick="test('editpinglun.php')">评论管理</a>
		</div>
		<br/>
	</div>

</body>
</html>