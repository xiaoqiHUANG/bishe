<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<title><?php echo ($title); ?></title>
	<link href="/bishe/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/bishe/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/bishe/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/bishe/Public/css/styles.css" rel="stylesheet">
	
	<script src="/bishe/Public/js/jquery.min.js"></script>
	<script src="/bishe/Public/js/scripts.js"></script>
	<script src="/bishe/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script src="/bishe/Public/js/responsiveslides.min.js"></script>
	<script src="/bishe/Public/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
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
</head>

<body>
	<!--header-->
	<div class="navigation">
		<div class="container-fluid">
			<nav class="pull">
				<ul>
					<li><a href="<?php echo U('Index/index');?>">首页</a></li>
					<li><a href="about.html">关于我们</a></li>
					<li><a href="blog.html">博客</a></li>
					<li><a href="terms.html">条款</a></li>
					<li><a href="privacy.html">隐私</a></li>
					<li><a href="contact.html">联系我们</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="header">
		<div class="container">
			<!--logo-->
			<div class="logo">
				<h1><a href="index.html">iHOME</a></h1>
			</div>
			<!--//logo-->
			<div class="top-nav">
				<ul class="right-icons">
					<li><span><i class="glyphicon glyphicon-phone"> </i>+1384 757 546</span></li>
					<li><a href="<?php echo U('Index/login');?>"><i class="glyphicon glyphicon-user"> </i>登录</a></li>
					<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				</ul>
				<div class="nav-icon">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div id="small-dialog" class="mfp-hide">
					<!----- tabs-box ---->
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>全部</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>出售</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>出租</span></li>
								<div class="clearfix"></div>
							</ul>
							<div class="resp-tabs-container">
								<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2>
								<div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
										<div class="login">
											<input type="text" value="搜索地址，街区，城市或邮政编码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
											<input type="submit" value="">
										</div>
									</div>
								</div>
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
										<div class="login">
											<input type="text" value="搜索地址，街区，城市或邮政编码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
											<input type="submit" value="">
										</div>
									</div>
								</div>
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
										<div class="login">
											<input type="text" value="搜索地址，街区，城市或邮政编码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
											<input type="submit" value="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//-->



	<!--<!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/favicon.ico">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/bishe/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/bishe/Public/css/home/headAndFoot.css">
	 <script src="/bishe/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/bishe/Public/js/change.js" type="text/javascript" charset="utf-8"></script>
	 <script src="/bishe/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>-->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->
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
<div class=" banner-buying">
	<div class=" container">
		<h3><span>iHome</span>发布房源</h3>
		<!---->
		<div class="menu-right">
			<ul class="menu">
				<li class="item1">
					<a href="#">菜单<i class="glyphicon glyphicon-menu-down"> </i> </a>
					<ul class="cute">
						<li class="subitem1">
							<a href="shortRent.html">短期租房</a>
						</li>
						<li class="subitem1">
							<a href="longRent.html">长期租房</a>
						</li>
						<li class="subitem2">
							<a href="publishing.html">发布房源</a>
						</li>
						<li class="subitem3">
							<a href="buy.html">房源展示</a>
						</li>
						<li class="subitem1">
							<a href="<?php echo U('Personal/userProfile');?>">个人中心</a>
						</li>
						<li class="subitem2">
							<a href="loan.html">联系与反馈</a>
						</li>
						<li class="subitem3">
							<a href="dealers.html">帮助与服务</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//header-->



		<div class="container">

			<div class="buy-single-single">

				<div class="col-md-9 single-box">

					<div class=" buying-top">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/ss.jpg">
									<img src="/bishe/Public/images/ss.jpg" />
								</li>
								<li data-thumb="images/ss1.jpg">
									<img src="/bishe/Public/images/ss1.jpg" />
								</li>
								<li data-thumb="images/ss2.jpg">
									<img src="/bishe/Public/images/ss2.jpg" />
								</li>
								<li data-thumb="images/ss3.jpg">
									<img src="/bishe/Public/images/ss3.jpg" />
								</li>
							</ul>
						</div>
						<!-- FlexSlider -->
						<script defer src="/bishe/Public/js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="/bishe/Public/css/flexslider.css" type="text/css" media="screen" />

						<script>
							// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
									animation: "slide",
									controlNav: "thumbnails"
								});
							});
						</script>
					</div>
					<div class="buy-sin-single">
						<div class="col-sm-5 middle-side immediate">
							<h4>入住时间: 随时</h4>
							<!--<p><span class="bath">床 </span>: <span class="two">2 张双人床</span></p>
						<p> <span class="bath1">浴室 </span>: <span class="two">2间</span></p>
						<p><span class="bath2">建筑面积</span>: <span class="two">100 平方米</span></p>
						<p><span class="bath3">绘图面积</span>:<span class="two"> 150 平方米</span></p>
						<p><span class="bath4">资产年龄</span> : <span class="two">4 - 10 年</span></p>
						<p><span class="bath5">价格 </span>:<span class="two"> ￥1000-2000/月</span></p>-->
							<p><span class="container_span">床 </span>: <span class="two">2 张双人床</span></p>
							<p> <span class="container_span">浴室 </span>: <span class="two">2间</span></p>
							<p><span class="container_span">建筑面积</span>: <span class="two">100 平方米</span></p>
							<p><span class="container_span">绘图面积</span>:<span class="two"> 150 平方米</span></p>
							<p><span class="container_span">资产年龄</span> : <span class="two">4 - 10 年</span></p>
							<p><span class="container_span">价格 </span>:<span class="two"> ￥1000-2000/月</span></p>
							<div class="right-side">
								<a data-toggle="modal" data-target="#bookRoom" class="hvr-sweep-to-right more">预订房源</a>
								<a data-toggle="modal" data-target="#contactOwner" class="hvr-sweep-to-right more">联系房东</a>
							</div>
						</div>
						<div class="col-sm-7 buy-sin">
							<h4>房屋描述</h4>
							<p>与流行的信仰相反，Lorem Ipsum不是简单的随机文本。它源于一个古典拉丁文学从​​公元前45年，使其超过2000年。弗吉尼亚州汉普登 - 悉尼学院的拉丁语教授理查德·麦克林托克（Richard McClintock）从Lorem Ipsum段落中查找了一个更为晦涩的拉丁词汇consectetur中的一个，并经历了古典文学中的词汇</p>
							<p>与流行的信仰相反，Lorem Ipsum不是简单的随机文本。它源于一个古典拉丁文学从​​公元前45年，使其超过2000年。弗吉尼亚州汉普登 - 悉尼学院的拉丁语教授理查德·麦克林托克（Richard McClintock）从Lorem Ipsum段落中查找了一个更为晦涩的拉丁词汇consectetur中的一个，并经历了古典文学中的词汇</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="map-buy-single">
						<h4>街区信息</h4>
						<div class="map-buy-single1" id="detailMap">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-box-right right-immediate">
						<h4>特色街区</h4>
						<div class="col-md-12 col-sm-6">
							<div class="single-box-img ">
								<div class="box-img">
									<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/sl.jpg" alt=""></a>
								</div>
								<div class="box-text">
									<p>
										<a href="single.html">富林居</a>
									</p>
									<a href="single.html" class="in-box">更多信息</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-12  col-sm-6">
							<div class="single-box-img">
								<div class="box-img">
									<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/sl1.jpg" alt=""></a>
								</div>
								<div class="box-text">
									<p>
										<a href="single.html">天香居</a>
									</p>
									<a href="single.html" class="in-box">更多信息</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-12  col-sm-6">
							<div class="single-box-img">
								<div class="box-img">
									<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/sl2.jpg" alt=""></a>
								</div>
								<div class="box-text">
									<p>
										<a href="single.html">蘅芜院</a>
									</p>
									<a href="single.html" class="in-box">更多信息</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-12  col-sm-6">
							<div class="single-box-img">
								<div class="box-img">
									<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/sl3.jpg" alt=""></a>
								</div>
								<div class="box-text">
									<p>
										<a href="single.html">潇湘馆</a>
									</p>
									<a href="single.html" class="in-box">更多信息</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-12  col-sm-6">
							<div class="single-box-img">
								<div class="box-img">
									<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/sl4.jpg" alt=""></a>
								</div>
								<div class="box-text">
									<p>
										<a href="single.html">竹林居</a>
									</p>
									<a href="single.html" class="in-box">更多信息</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>

						<div class="col-md-12  col-sm-6">
							<div class="single-box-img">
								<div class="box-img">
									<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/sl3.jpg" alt=""></a>
								</div>
								<div class="box-text">
									<p>
										<a href="single.html">绿叶居</a>
									</p>
									<a href="single.html" class="in-box">更多信息</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<!---->
		<div class="container">
			<div class="future">
				<h3>相关推荐</h3>
				<div class="content-bottom-in">
					<ul id="flexiselDemo1">
						<li>
							<div class="project-fur">
								<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/pi.jpg" alt="" /> </a>
								<div class="fur">
									<div class="fur1">
										<span class="fur-money">120-180元/天</span>
										<h6 class="fur-name"><a href="single.html">查看详情</a></h6>
										<span>法国巴黎</span>
									</div>
									<div class="fur2">
										<span>200平方米</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="project-fur">
								<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/pi1.jpg" alt="" /> </a>
								<div class="fur">
									<div class="fur1">
										<span class="fur-money">120-180元/天</span>
										<h6 class="fur-name"><a href="single.html">查看详情</a></h6>
										<span>法国巴黎</span>
									</div>
									<div class="fur2">
										<span>200平方米</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="project-fur">
								<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/pi2.jpg" alt="" /> </a>
								<div class="fur">
									<div class="fur1">
										<span class="fur-money">120-180元/天</span>
										<h6 class="fur-name"><a href="single.html">查看详情</a></h6>
										<span>法国巴黎</span>
									</div>
									<div class="fur2">
										<span>200平方米</span>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="project-fur">
								<a href="single.html"><img class="img-responsive" src="/bishe/Public/images/pi3.jpg" alt="" /> </a>
								<div class="fur">
									<div class="fur1">
										<span class="fur-money">120-180元/天</span>
										<h6 class="fur-name"><a href="single.html">查看详情</a></h6>
										<span>法国巴黎</span>
									</div>
									<div class="fur2">
										<span>200平方米</span>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-3 amet-sed">
				<h4>我们的公司</h4>
				<ul class="nav-bottom">
					<li><a href="about.html">关于我们</a></li>
					<li><a href="blog.html">网站博客</a></li>
					<li><a href="mobile_app.html">移动端下载</a></li>
					<li><a href="terms.html">服务条款</a></li>
					<li><a href="privacy.html">隐私政策</a></li>
				</ul>
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>与我们合作</h4>
				<ul class="nav-bottom">
					<li><a href="single.html">联盟计划</a></li>
					<li><a href="contact.html">网站地图</a></li>
					<li><a href="career.html">职业生涯</a></li>
					<li><a href="feedback.html">反馈</a></li>
				</ul>
			</div>
			<div class="col-md-3 amet-sed">
				<h4>客户支持</h4>
				<p>周一~周五, 7AM-7PM </p>
				<p>周六~周日, 8AM-5PM </p>
				<p>177-869-6559</p>
				<ul class="nav-bottom">
					<li><a href="faqs.html">常见问题</a></li>
					<li><a href="suggestion.html">意见反馈</a></li>
				</ul>
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Property Services</h4>
				<ul class="nav-bottom">
					<li><a href="single.html">注册资产</a></li>
					<li><a href="single.html">商业资产</a></li>
					<li><a href="login.html">登录</a></li>
					<li><a href="register.html">注册</a></li>
					<li><a href="typo.html">模板素材</a></li>
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
				<h2><a href="index.html">iHOME</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p>Copyright &copy; 2016.Company name All rights reserved.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//footer-->
</body>

</html>
<script src="/bishe/Public/js/util.js" type="text/javascript" charset="utf-8"></script>
<script src="/bishe/Public/js/shortRent.js" type="text/javascript" charset="utf-8"></script>

<script src="__PUBLIC_/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="__PUBLIC_/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="__PUBLIC_/text/javascript" src="js/jquery.flexisel.js"></script>