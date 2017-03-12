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
<link rel="stylesheet" type="text/css" href="/bishe/Public/css/publishing/index.css" />
<link rel="stylesheet" type="text/css" href="/bishe/Public/css/shortRent.css" />
<script src="/bishe/Public/js/provincesdata.js" type="text/javascript"></script>
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

<div class="single publishing">
	<div class="container">
		<div class="single-buy">
			<div class="check-top-single">
				<div class="single-bottom">
					<!--<h4>开始发布您的房源吧！</h4>-->
					<form role="form" action="<?php echo U('Index/publishing');?>" method="POST" enctype="multipart/form-data">
						<div class="panel panel-default">
							<div class="panel-body">
								<h4 class="titleHead">房源地址</h4>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">房源位于：</div>
									</div>
									<div class="col-md-2">
										<select class="form-control" name="province" id="province">
										</select>
									</div>
									<div class="col-md-2">
										<select id="city" name="city" class="form-control">
											<option value="0">请选择城市</option>
										</select>
									</div>
									<div class="col-md-5">
										<input type="text" name="detailAddress" class="form-control detailAddress" placeholder="请输入详细地址"/>
									</div>
									<div class="col-md-10 col-md-offset-2">
										<p class="h_check_tip ml10 simsun tip_roomAddress" style="display: none;"></p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<h4 class="titleHead">房源基本情况</h4>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">出租类型：</div>
									</div>
									<div class="col-md-2">
										<select class="form-control rentType" name="rentType">
											<option value="短租">短租</option>
											<option value="长租">长租</option>
										</select>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">最多宜居人数：</div>
									</div>
									<div class="col-md-2">
										<select class="form-control rentPeople" name="rentPeople">
											<option value="1人">1人</option>
											<option value="2人">2人</option>
											<option value="3人">3人</option>
											<option value="4人">4人</option>
											<option value="5人">5人</option>
											<option value="6人">6人</option>
											<option value="7人">7人</option>
											<option value="8人">8人</option>
											<option value="9人">9人</option>
											<option value="10人">10人</option>
											<option value="大于10人">大于10人</option>
										</select>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">房屋面积：</div>
									</div>
									<div class="col-md-2">
										<div class="h_input_box " id="area_red_err">
											<span class="h_input_text">平米</span>
											<input type="text" name="roomArea" class="roomArea" id="roomArea" placeholder="0" maxlength="4">
										</div>
									</div>
									<div class="col-md-4">
										<p class="h_check_tip ml10 simsun tip_roomArea" style="display: none;">请填写房屋面积</p>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">房屋户型：</div>
									</div>
									<div class="col-md-2">
										<div class="h_input_box " id="room_shi_err">
											<span class="h_input_text">室</span>
											<input type="text" class="roomtype roomtype_shi" name="roomtype_shi" value="1" maxlength="2">	
										</div>
									</div>
									<div class="col-md-2">
										<div class="h_input_box  " id="room_ting_err">
											<span class="h_input_text">厅</span>
											<input type="text" class="roomtype roomtype_ting" name="roomtype_ting" value="1" maxlength="2">
										</div>
									</div>
									<div class="col-md-2">
										<div class="h_input_box  " id="room_wei_err">
											<span class="h_input_text">卫</span>
											<input type="text" class="roomtype roomtype_wei" name="roomtype_wei" value="1" maxlength="2">
										</div>
									</div>
									<div class="col-md-2">
										<div class="h_input_box" id="room_chu_err">
											<span class="h_input_text">浴</span>
											<input type="text" class="roomtype roomtype_yu" name="roomtype_yu" value="1" maxlength="2">
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-2 col-md-offset-2 col-sm-offset-2">
										<div class="h_input_box  " id="room_chu_err">
											<span class="h_input_text">厨</span>
											<input type="text" class="roomtype roomtype_chu" name="roomtype_chu" value="1" maxlength="2">
										</div>
									</div>
									<div class="col-md-2">
										<div class="h_input_box  " id="room_yt_err">
											<span class="h_input_text">阳台</span>
											<input type="text" class="roomtype roomtype_yt" name="roomtype_yt" value="1" maxlength="2">
										</div>
									</div>
									<div class="col-md-2">
										<div class="h_input_box  " id="room_yt_err">
											<span class="h_input_text">单人床</span>
											<input type="text" class="roomtype roomtype_sb" name="roomtype_sb" value="1" maxlength="2">
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="h_input_box  " id="room_yt_err">
											<span class="h_input_text">双人床</span>
											<input type="text" class="roomtype roomtype_db" name="roomtype_db" value="1" maxlength="2">
										</div>
									</div>
									<div class="col-md-10 col-md-offset-2">
										<p class="h_check_tip ml10 simsun tip_roomtype" style="display: none;">请填写完整整套房屋的户型</p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<h4 class="titleHead">房源出租信息</h4>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">房源价格：</div>
									</div>
									<div class="col-md-2">
										<input type="text" name="roomPrice" class="form-control roomPrice" placeholder="理想价格"/>
									</div>
									<div class="col-md-2">
										<select name="perRents" class="perRents form-control">
											<option value="day">元/日</option>
											<option value="month">元/月</option>
											<option value="year">元/年</option>
										</select>
									</div>
									<div class="col-md-4">
										<p class="h_check_tip ml10 simsun tip_roomPrice" style="display: none;">请填写房屋的价格</p>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">出租时间：</div>
									</div>
									<div class="col-md-3">
										<input type="datetime-local" name="beginRentTime" class="beginRentTime form-control" />
									</div>
									<div class="col-md-3">
										<input type="datetime-local" name="endRentTime" class="endRentTime form-control" />
									</div>
									<div class="col-md-4">
										<p class="h_check_tip ml10 simsun tip_roomMsg" style="display: none;">>请填写房屋的出租时间</p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<h4 class="titleHead">房源描述</h4>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">房源标题：</div>
									</div>
									<div class="col-md-8">
										<input type="text" name="roomTitle" class="roomTitle form-control" placeholder="请输入房源标题！"/>
									</div>
									<div class="col-md-10 col-md-offset-2">
										<p class="h_check_tip ml10 simsun tip_roomTitle" style="display: none;">>请填写房源标题</p>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-2">
										<div class="address_text">个性描述：</div>
									</div>
									<div class="col-md-8">
										<textarea name="roomDesc" rows="6" cols="" class="roomDesc form-control" placeholder="描述一下您的房源吧！"></textarea>
									</div>
									<div class="col-md-10 col-md-offset-2">
										<p class="h_check_tip ml10 simsun tip_roomDesc" style="display: none;">请填写有关的描述</p>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group btnCenter">
							<button type="submit" class="btn btn-success subPublishingBtn col-md-4">提交房源信息并上传图片</button>
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
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

<script>
	
	//省份城市选择器
    $.each(GP,function(i){
		$("#province").append("<option value='" + i + "'>" + GP[i] + "</option>");
	});
    $("#province").on('change',function () {
            var s = $("#province").val();
            $("#city").get(0).selectedIndex = 0 ;
            if (s != 0){
                $("#city").empty();
                $.each(GT[s],function(i){
                    $("#city").append("<option value='" + i + "'>" + GT[s][i] + "</option>");
				});
            }
        }
    );
</script>
<script src="/bishe/Public/js/util.js" type="text/javascript" charset="utf-8"></script>
<script src="/bishe/Public/js/shortRent.js" type="text/javascript" charset="utf-8"></script>