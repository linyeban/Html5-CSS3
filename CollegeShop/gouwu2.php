<?php
include("data/conn.php");
if(!isset($_SESSION)){
	session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>购物车</title>
<link data-turbolinks-track="true" href="css/gouwuche.css" media="all" rel="stylesheet">
<link href="external/font-awesome-4.5.0/css/font-awesome.css"rel="stylesheet">
<script language="javascript">
		     function chkinput(form)
			 {
			   if(form.name2.value=="")
			    {
				  alert("请输入收货人姓名!");
				  form.name.select();
				  return(false);
				
				}
				if(form.dz.value=="")
			    {
				  alert("请输入收货人地址!");
				  form.dz.select();
				  return(false);
				
				}
				if(form.yb.value=="")
			    {
				  alert("请输入收货人邮编!");
				  form.yb.select();
				  return(false);
				
				}
				if(form.tel.value=="")
			    {
				  alert("请输入收货人联系电话!");
				  form.tel.select();
				  return(false);
				
				}
				if(form.email.value=="")
			    {
				  alert("请输入收货人E-mail地址!");
				  form.email.select();
				  return(false);
				
				}
				if(form.email.value.indexOf("@")<0)
				 {
				    alert("收货人E-mail地址格式输入错误!");
				    form.email.select();
				    return(false);
				 
				 }
				return(true);
			 
			 }
		   
		   </script>
 </head>
<div id="v2-shopping-cart-container" style="margin-top: 15pt">
	<div class="container">
		<div class="col-md-10 col-sm-10">
			<div class="hidden-xs col-md-12 col-sm-12">
				<div class="col-md-12 col-sm-12 product-list-title">
					<div class="col-md-2 col-sm-2">填写订单信息</div>
				</div>
			</div>
		<form name="form1" method="post" action="savedd.php" onSubmit="return chkinput(this)">
			<div class="col-xs-12 col-md-12 col-sm-12 delivery-details-container"
				id="anchor-delivery-specifics-container">
				<div id="delivery-specifics-container">
					<div class="recipient-info-container">
					<div class="row delivery-tr" data-reactid=".0.5.7.0.1.b">
							<div class="col-sm-3 form-input-header">收 货 人</div>
							<div class="col-sm-9">
								<input id="recipient_name" class="form-input"
									name="name2">
							</div>
						</div>
						<div class="row delivery-tr">
							<div class="col-sm-3 delivery-info-title form-input-header">性别</div>
							<div class="col-sm-9">
								<select id="sex" class="form-input" name="sex">
									<option selected value="男">男</option>
									<option value="女">女</option>
								</select>
							</div>
						</div>
						<div class="row delivery-tr">
							<div class="col-sm-3 form-input-header">收 货 地 址</div>
							<div class="col-sm-9">
								<input id="dz" class="form-input-v2 hidden-xs"name="dz">
							</div>
						</div>
						<div class="row delivery-tr">
							<div class="col-sm-3 form-input-header">邮政编码</div>
							<div class="col-sm-9">
								<input class="form-input"name="yb">
							</div>
						</div>
						
					
						<div class="row delivery-tr">
							<div class="col-sm-3 form-input-header">收 货 电 话</div>
							<div class="col-sm-9">
								<input id="tel" class="form-input" name="tel">
							</div>
						</div>
							<div class="row delivery-tr">
							<div class="col-sm-3 form-input-header">电子邮箱</div>
							<div class="col-sm-9">
								<input id="email" class="form-input"name="email">
							</div>
						</div>
						<div class="row delivery-tr">
							<div class="col-sm-3 delivery-info-title form-input-header">送 货方 式</div>
							<div class="col-sm-9">
								<select id="shff" name="shff" class="form-input">
								<option selected=""
										value="普通平邮">普通平邮</option>
									<option value="送货上门">送货上门</option>
									<option value="特快专递">特快专递</option>
								</select>
							</div>
						</div>
						<div class="row delivery-tr">
							<div class="col-sm-3 delivery-info-title form-input-header">付
								款 方 式</div>
							<div class="col-sm-9">
								<select id="zfff" name="zfff"
									class="form-input"><option selected=""
										value="支付宝">支付宝</option>
									<option value="货到付款">货到付款</option></select>
							</div>
						</div>
						
						<div class="row delivery-tr">
							<div class="col-sm-3 delivery-info-title form-input-header">备
								注</div>
							<div class="col-sm-9">
								<textarea id="ly" class="form-input" name="ly"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 hidden-xs"></div>
							<div class="col-sm-9 col-xs-12">
								<div class="error"></div>
							</div>
						</div>
						<div class="row delivery-tr">
							<div class="col-sm-3"></div>
							<div class="col-sm-9 submit-order-container">
								<div id="submitting-order-loader" style="display: none;">
									<span class="fa fa-refresh fa-spin"></span>
								</div>
								<input id="submit2" name="submit2"
									class="submit-button submit-order" type="submit" value="提交订单">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
<?php
// if($_GET['dingdanhao']!="")
//  {  $dd=$_GET['dingdanhao'];
//     session_start();

     $array=explode("@",$_SESSION['producelist']);
	 $sum=count($array)*20+260;
    echo "<script>";
    echo" window.open('showdd.php?dd='+'".$dd."','newframe','top=150,left=200,width=600,height=".$sum.",menubar=no,toolbar=no,location=no,scrollbars=no,status=no ')";
    //echo" window.open('showdd.php?dd='+'".$dd."')";
	echo "</script>";

//  }
?>
	</body>
</html>