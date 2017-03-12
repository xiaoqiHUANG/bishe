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
			// $("#slider").responsiveSlides({
			// 	auto: true,
			// 	speed: 500,
			// 	namespace: "callbacks",
			// 	pager: true,
			// });
			// $('#horizontalTab').easyResponsiveTabs({
			// 	type: 'default', //Types: default, vertical, accordion
			// 	width: 'auto', //auto or any width like 600px
			// 	fit: true   // 100% fit in a container
			// });
			// $('.popup-with-zoom-anim').magnificPopup({
			// 	type: 'inline',
			// 	fixedContentPos: false,
			// 	fixedBgPos: true,
			// 	overflowY: 'auto',
			// 	closeBtnInside: true,
			// 	preloader: false,
			// 	midClick: true,
			// 	removalDelay: 300,
			// 	mainClass: 'my-mfp-zoom-in'
			// });
		});
  </script>
</head>

<body>
	<!--header-->
	<div class="navigation">
		<div class="container-fluid">
			<nav class="pull">
				<ul>
					<li><a  href="<?php echo U('Personal/index');?>">个人主页</a></li>
					<li><a  href="#">收件箱</a></li>
					<li><a  href="<?php echo U('Index/comment');?>">评价</a></li>
					<li><a  href="#">您的旅程</a></li>
					<li><a  href="<?php echo U('Index/userProfile');?>">个人资料</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="header">
		<div class="container">
			<!--logo-->
			<div class="logo">
				<h1><a href="Index/index">iHOME</a></h1>
			</div>
			<!--//logo-->
			<div class="top-nav">
				<ul class="right-icons">
					<li><span><i class="glyphicon glyphicon-phone"> </i>+1384 757 546</span></li>
					<li><a href="login.html"><i class="glyphicon glyphicon-user"> </i>登录</a></li>
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
<link href="/bishe/Public/css/edit_user_infor.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/bishe/Public/css/uploadPro.css" rel="stylesheet" type="text/css" media="all"/>
<!-- upload -->
<script src="/bishe/Public/js/site.min.js" type="text/javascript" charset="utf-8"></script>
<div class=" banner-buying">
	<div class=" container">
	<h3><span>上传</span>个人头像</h3> 
	<!---->
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
							<a href="<?php echo U('Index/userProfile');?>">个人中心</a>
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
		<div class="clearfix"> </div>
</div>
<!--//header-->	      		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="asked">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<ul class="infor-nav">
					<li><a href="/bishe/Home/Personal/edit_message">编辑个人资料</a></li>
					<li><a href="#">头像</a></li>
					<li><a href="#">信任与验证</a></li>
					<li><a href="<?php echo U('Index/comment');?>">评价</a></li>					
				</ul>
				<form class="pro-button">
					<button type="submit" formaction="<?php echo U('Index/userProfile');?>">查看个人资料</button>
				</form>
			</div>
			<div class="col-lg-9">
				<form class="form_wd_23" id="infor-form" action="<?php echo U('Personal/update');?>" method="POST" enctype="multipart/form-data" class="form_wd_23">
				    <fieldset>
				      <div id="legend" class="">
				        <legend class="form-title">个人头像</legend>
				      </div>
				      <div class="right-window">
				      <p> <input class="form-control" style="display:none" name="user_name"  value="<?php echo (session('username')); ?>">!清楚的正面照片对帮助房东和房客了解彼此起着重大作用，
				      	<br />把房子租给一张风景照可不靠谱！<br />
				      	因此，请上传一张能清楚看到您脸部的照片。 </p>
				      	<span class="confirm"><button class="btn btn-success waves-effect">提交</button> </span>
				      </div>
				      <!-- 头像显示窗口 -->
				      <div class="head2">
				      	<a class="avatar" href="<?php echo U('Personal/index');?>">
							<img src="/bishe<?php echo ($head_photo); ?>"/ alt="5" >     
						</a>	
				      </div>
				      <!-- 上传头像 -->
				      <input class="dropify"  name="head_photo" data-default-file="/bishe<?php echo ($client_info["head_photo"]); ?>" type="file">
				    </fieldset>
  				</form>
  				<link rel="stylesheet" href="/bishe/Public/css/dropify.min.css">

			</div>
		</div>
		<br />
		<div class="row">
				<div class="col-lg-3">
					<ul class="infor-nav">					
					</ul>
				</div>
			<div class="col-lg-9">			
  <form class="form-horizontal" >
    <fieldset id="infor-form2">
      <div id="legend" class="">
        <legend class="form-title">个人视频资料</legend>
      </div>

    </fieldset>
  </form>
  <form id="infor-submit">
  	<button type="submit" class="btn btn-lg btn-danger">提交</button>
  </form>
			</div>
	</div>
</div>
<script src="/bishe/Public/js/dropify.min.js"></script>

 <script>$('.dropify').dropify();</script>
<!--//contact-->
<!--footer-->
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
<!--//footer-->