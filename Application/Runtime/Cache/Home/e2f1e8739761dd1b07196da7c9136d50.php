<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>注册</title>
<link href="/bishe/Public/css/bootstrap.css" rel="stylesheet" type="text/css"  />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/bishe/Public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="/bishe/Public/js/scripts.js"></script>
<link href="/bishe/Public/css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="/bishe/Public/css/style.css" rel="stylesheet" type="text/css" />	
<!--//theme-style-->
<link rel="stylesheet" href="/bishe/Public/css/register.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="index.html">首页</a></li>
						<li><a  href="about.html">成为房东</a></li>
						<li><a  href="blog.html">登录</a></li>
						<li><a  href="terms.html">注册</a></li>
						<li><a  href="privacy.html">关于我们</a></li>
						<li><a  href="contact.html">联系我们</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.html">i HOME</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+1384 757 546</span></li>
				<li><a  href="login.html"><i class="glyphicon glyphicon-user"> </i>登录</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="/bishe/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="/bishe/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									  	<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div>        
							        </div>
						  		</div>
							     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div> 
							        </div>	
								 </div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
										<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div> 
							         </div>	
							    </div>
					      </div>
					 </div>
					 <script src="/bishe/Public/js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>注</span>册</h3> 
	<!---->
	<div class="menu-right">
		 <ul class="menu">
			<li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute">
				<li class="subitem1"><a href="buy.html">Buy </a></li>
				<li class="subitem2"><a href="buy.html">预定房源 </a></li>
				<li class="subitem3"><a href="buy.html">我是房东 </a></li>
				<li class="subitem1"><a href="buy.html">我是房客</a></li>
			</ul>
		</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
      		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>注册</h3>
		<div class="login-top">
				<ul class="newlogin-icons">
					<li><a href="#" class="weibo"><i class="weibo"> </i><span>微博</span></a></li>
					<li><a href="#" class="wechat"><i class="wechat"></i><span>微信</span></a></li>
					<li><a href="#" class="qq"><i class="qq"></i><span>QQ</span></a></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="message">
			        	<div id="warn" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>请输入2-6个字符的用户名！
			        	</div>
			        	<div id="warn1" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>密码内容不能低于6位！
			        	</div>
			        	<div id="checkBlank" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>用户名和密码内容不能含有空格字符！
			        	</div>
			        	<div id="checkLogin" class="alert alert-warning alert-dismissable" style="display: none;"> 
			        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			        		<strong>警告！&nbsp;&nbsp;</strong>用户已存在，请使用新的用户名进行注册！或者<a href="./login">直接登陆</a>
			        	</div>
			    </div>
				<div class="form-info">
					<form role="form" action="/bishe/Home/Register/regNewMember" method="post" enctype="application/x-www-form-urlencoded">
						<input type="text"   placeholder="用户名或邮箱" name="username" id="username" >
						<input type="password"  placeholder="请输入6-18位的密码 " name="password" id="password">
						<!-- <input type="password"  placeholder="确认密码 " name="ensure_pwd" id="ensure_pwd" > -->
						
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" id="register" value="注册">
				           </label>
					</form>
					<span class="text-muted" aria-hidden="true"></span>
					<p>已经有i Home 账号了? <a href="login.html">登录</a></p>
				</div>
			
		</div>
	</div>
</div>
<script src="/bishe/Public/js/register.js" type="text/javascript" charset="utf-8"></script>
<!--//contact-->
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-3 amet-sed">
				<h4>Our Company</h4>
				<ul class="nav-bottom">
					<li><a href="about.html">About Us</a></li>
					<li><a href="blog.html">For Sale By Owner Blog</a></li>
					<li><a href="mobile_app.html">Mobile</a></li>
					<li><a href="terms.html">Terms & Conditions</a></li>
					<li><a href="privacy.html">Privacy Policy</a></li>	
					<li><a href="blog.html">Blog</a></li>
					
				</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Work With Us</h4>
					<ul class="nav-bottom">
						<li><a href="single.html">Real Estate Brokers</a></li>
						<li><a href="single.html">Business Development</a></li>
						<li><a href="single.html">Affiliate Programs</a></li>
						<li><a href="contact.html">Sitemap</a></li>
						<li><a href="career.html">Careers</a></li>
						<li><a href="feedback.html">Feedback</a></li>	
					</ul>	
			</div>
			<div class="col-md-3 amet-sed">
				<h4>Customer Support</h4>
				<p>Mon-Fri, 7AM-7PM </p>
				<p>Sat-Sun, 8AM-5PM </p>
				<p>177-869-6559</p>
					<ul class="nav-bottom">
						<li><a href="#">Live Chat</a></li>
						<li><a href="faqs.html">Frequently Asked Questions</a></li>
						<li><a href="suggestion.html">Make a Suggestion</a></li>
					</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Property Services</h4>
				   <ul class="nav-bottom">
						<li><a href="single.html">Residential Property</a></li>
						<li><a href="single.html">Commercial Property</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="typo.html">Short Codes</a></li>	
					</ul>	
					<ul class="social">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="camera"> </i></a></li>
						<li><a href="#"><i class="dribble"> </i></a></li>
					</ul>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.html">i HOME</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p >Copyright &copy; 2017.i Home All rights reserved.</p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
	<script>
		$(function(){
			var $register = $("#register");
			var $username = $("#username");
			var $wran = $("#warn");
			var $mail = $("#mail");
			var $close = $(".close");
			var $checkLogin=$('#checkLogin');
			var $checkBlank=$('#checkBlank');
			var $warn1 = $("#warn1");
			
			$register.click(function(){
				if ($username.val().length < 2|| $username.val().length > 6) {
					$wran.css("display","block");
					return false;
				}
				if ($('#password').val().length<6) {
					$warn1.css("display","block");
					return false;
				}
			});
		    
			
			$close.click(function(){
				$wran.css("display","none");
				$checkBlank.css("display","none");
				$checkLogin.css("display","none");
				$warn1.css("display","none");
				return false;
			});


			$username.change(function(){
			/*非空见擦*/
			if ($username.val().length > 0) {
					$wran.css("display","none");
				}	
			/* 字符串空格检查*/
			var str=$username.val();
			var Bnum=0;
			for(var i=0;i<str.length;i++){
				if(str.charCodeAt(i)==32){
					Bnum++;
				}
			}
			if(Bnum>0){
				$('#checkBlank').css('display','block');
			}else{
				$('#checkBlank').css('display','none');
			}

			/*ajax 查询用户知否已经注册*/
			var data='username='+$username.val();
			console.log(data);
			var path=window.location.pathname;
			var urlSlice=path.split('Home');
			url=urlSlice[0]+'Home/Register/userExistCheck';
			$.ajax({
				type:"GET",
				url:url,
				data:data,
				dataType:"json",
				success:function(data){
					console.log(data);
					data=data.toString();
					if(data!="error"){
					   $checkLogin.css('display','block');
					}else{
						 $checkLogin.css('display','none');
					}
				}
			});
			});

			$('#password').change(function(){
				/*非空见擦*/
				if ($('#password').val().length > 0) {
					$wran.css("display","none");
				}	
				/*检查空格*/
				var str=$('#password').val();
				var Bnum=0;
				for(var i=0;i<str.length;i++){
					if(str.charCodeAt(i)==32){
					Bnum++;
					}
				}
				if(Bnum>0){
				$('#checkBlank').css('display','block');
				}else{
				$('#checkBlank').css('display','none');
				}	
			});

		})
		</script>	
</body>
</html>