<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;

class PersonalController extends Controller {
	public function index(){
		$this->showLogo();
		$this->showt_email();

		$cache_a= S('site_name');
       $this->assign('title','个人中心 - '.$cache_a['site_name']);
		$news_m = M('News');
		$take_m = M('NewsTake');
		if(isset($_SESSION['username'])){
			// 查询新闻列表
			$news_list = $news_m -> alias('n')
								 -> field('n.id as nid,title,name,sort_name,img,date')
								 -> join('author ON author_id=author.id')
								 -> join('news_sort ON sort_ename=news_sort.e_name')
								 -> order('date desc')
								 -> limit($start_index,$page_count)
							 // -> order('n.id desc')
							 -> where('uid='.$_SESSION['user']['id']) -> select();

							$num = count($news_list);
							
		    	$this->assign('num',$num);

		    	$take_list = $take_m ->  where('uid='.$_SESSION['user']['id']) -> select();
				$take_num = count($take_list);
				
				
				// echo $take_num;
				$this -> assign('take_num',$take_num);
			$this->display('Index/personal');	




		}else{
			$this->error('用户未登陆，请重新登陆',U('Index/login'),3);
		}

	}
	// //显示邮箱地址
	public function showt_email(){
		$Model = new \Think\Model() ;
		$email_address=I("email_address");
		$result=$Model->query("SELECT email_address FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		$email_address=$result[0]['email_address'];
		$this->assign('email_address',$email_address);
		
	}
	// 显示密码
	public function showt_userpwd(){
		$Model = new \Think\Model() ;
		$user_pwd=I("user_pwd");
		$result=$Model->query("SELECT user_pwd FROM client_user WHERE user_name ='".$_SESSION['user_pwd']."'");
		$user_pwd=$result[0]['user_pwd'];
		$this->assign('user_pwd',$user_pwd);
	}
	// 显示姓名
	public function show_realname(){
		$Model = new \Think\Model() ;
		$real_name=I("real_name");
		$result=$Model->query("SELECT real_name FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		$real_name=$result[0]['real_name'];
		$this->assign('real_name',$real_name);
	}
	// 显示电话
	public function show_tel(){
		$Model = new \Think\Model() ;
		$tel=I("tel");
		$result=$Model->query("SELECT tel FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		$tel=$result[0]['tel'];
		$this->assign('tel',$tel);
	}
	// 显示地址
	public function show_address(){
		$Model = new \Think\Model() ;
		$address=I("address");
		$result=$Model->query("SELECT address FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		$address=$result[0]['address'];
		$this->assign('address',$address);
	}
	// 显示简介
	// public function show_cv(){
	// 	$Model = new \Think\Model() ;
	// 	$cv= $_POST("cv");
	// 	$result=$Model->query("SELECT cv FROM client_user WHERE user_name ='".$_SESSION['username']."'");
	// 	$cv=$result[0]['cv'];
	// 	$this->assign('cv',$cv);
	// }
	// 显示出生日期
	public function show_dates(){
		$Model = new \Think\Model() ;
		$dates=I("dates");
		$result=$Model->query("SELECT dates FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		$dates=$result[0]['dates'];
		$this->assign('dates',$dates);
	}
	// 显示性别
	public function show_sex(){
		$Model = new \Think\Model() ;
		$sex=I("sex");
		$result=$Model->query("SELECT sex FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		$sex=$result[0]['sex'];
		$this->assign('sex',$sex);
	}
	// 退出
	public function logout(){
		unset($_SESSION['username']);
		$this->success('退出成功，请重新登陆',U('Index/login'),3);
	}

	//显示头像
	public function showLogo(){
		$Model = new \Think\Model() ;
		$result=$Model->query("SELECT * FROM client_user WHERE user_name ='".$_SESSION['username']."'");
		if($result[0]['head_photo']){
			$this->assign('head_photo',$result[0]['head_photo']);
		}else{
			$this->assign('head_photo',"/Public/head_logo/default_head_logo.jpg");
			
		}
	}
	//用户信息修改
	public function edit_message(){
		$cache_a= S('site_name');
        $this->assign('title','修改资料 - '.$cache_a['site_name']);

		$this->showLogo();
		$this->showt_email();
		$this->show_realname();
		$this->show_tel();
		$this->show_address();

		$client_m = D('clientUser');
		$client_info = $client_m -> where("`user_name`='".$_SESSION['username']."'")->find();
		// $client_info = $client_m -> where('id='.I('id')) ->find();
		// print_r($client_info);
		$this -> assign('client_info',$client_info);

		$this->display('Index/edit_user_info');	
	}

	//用户写文章
	public function write_article(){
       $cache_a= S('site_name');

       $this->assign('title','编写文章 - '.$cache_a['site_name']);

		$this->showLogo();
		$this->showt_email();
		if(IS_POST) {
    		$news = D('news');
			$_POST['date'] = time();
			
			$upload = new Upload();
			$upload -> maxSize = 10240000;
			$upload -> exts = array('jpg','gif','jpeg','png');
			$upload -> autoSub = FALSE;
			$upload -> rootPath = './Public/img/news_img/';
			$info = $upload -> upload();
			if(!$info) {
				$this -> error($upload->getError());
			} else {
				$_POST['img'] = 'img/news_img/'.$info['img']['savename'];
			}
			
			if($news -> create()) {
				if($news -> add()) {
					$this -> success('添加成功',U('Index/news'));
				} else {
					$this -> error('添加失败',U('Personal/write_article'));
				}
			} else {
				$this -> error($news -> getError());
			}
			exit();
    	} else {


    		$author = D('author');
			$news_sort = D('news_sort');
			
			$_POST['name']=$_SESSION['user']['user_name'];
			$_POST['uid']=$_SESSION['user']['id'];


			$author_list = $author -> field('id,name')->where('uid='.$_SESSION['user']['id']) -> find();
			if (!$author_list) {
				$author -> create();
			 	$author -> add();
			}
			
			// 	 print_r($author_list);
			// echo $author->getLastSql();
			// $author_list = $author -> field('id,name') -> select();
			$news_sort = $news_sort -> select();
			
			$this -> assign('author_list',$author_list);
			$this -> assign('news_sort',$news_sort);
			
    		// $this->display();
    	}
		$this->display('Index/write_article');
	}

	//查看已发布的文章
	public function published_article(){
		$cache_a= S('site_name');
        $this->assign('title','文章列表 - '.$cache_a['site_name']);

		$this->showLogo();
		$this->showt_email();

		$news_m = M('News');
		
		$page_count = 15;	//每页数据的条数
		$page_num = I('page_num') > 0 ? I('page_num') : 1;	//获取ID值，没有则默认为1
		$news_total_num = $news_m -> count();	//获取数据的总数
		$start_index = ($page_num - 1) * $page_count;	//从第几条数据查起
		$total_num = ceil($news_total_num/$page_count);	//总共有多少页
		for($i = 1; $i <= $total_num; $i++) {
			if($page_num == $i) {
				$active = 'active';
			}else {
				$active = '';
			}
			$page_html.="<a href=".U('News/index','page_num='.$i)." class='btn btn-default ".$active."'>".$i."</a>";
		}
		
		//获取表的数据
		$news_list = $news_m -> alias('n')
							 -> field('n.id as nid,title,name,sort_name,img,date')
							 -> join('author ON author_id=author.id')
							 -> join('news_sort ON sort_ename=news_sort.e_name')
							 -> order('date desc')
							 -> limit($start_index,$page_count)
							 // -> order('n.id desc')
							 -> where('uid='.$_SESSION['user']['id']) -> select();

						$news_num = count($news_list);
						$this -> assign('news_list', $news_list);
						$this -> assign('page_html', $page_html);
		if ($news_num != 0) {
			$this->display('Index/published_article');
		}else{
			$this -> success("您还没有发布文章，请前往编写页面！",__MODULE__.'/Personal/write_article');
		}
    	
	}

	//编辑修改已发布的文章
	public function article_edit(){
		$cache_a= S('site_name');
      	$this->assign('title','修改文章 - '.$cache_a['site_name']);

		$this->showLogo();
		$this->showt_email();

		$news = D('news');
		
		if(IS_POST) {
			if($_FILES['img']['error']!=4){
				$upload = new Upload();
				$upload -> maxSize = 10240000;
				$upload -> exts = array('jpg','gif','jpeg','png');
				$upload -> autoSub = FALSE;
				$upload -> rootPath = './Public/img/news_img/';
				$info = $upload -> upload();
				
				if(!$info) {
					$this -> error($upload->getError());
				} else {
					$_POST['img'] = 'img/news_img/'.$info['img']['savename'];
				}
			}
			
			if($news->create()) {
				if($news->save()) {
					$this -> success('修改成功',U('Index/news'));
				} else {
					$this -> error('修改失败或无更新',U('Personal/article_edit',array('id'=>$_POST['id'])));
				}
			} else {
				$this -> error($news->getError());
			}
		} else {
			$author = D('author');
			$news_sort = D('news_sort');
			
			$news_info = $news -> where('id='.I('id')) -> select();
			$author_list = $author -> field('id,name')->where('uid='.$_SESSION['user']['id']) -> find();
			$sort_list = $news_sort -> select();
			
			$this -> assign('news_info',$news_info);
			$this -> assign('author_list',$author_list);
			$this -> assign('sort_list',$sort_list);
			
		$this->display('Index/article_edit');
			// $this -> display();
		}

	}


	//用户删除已发布的文章
	public function article_del(){
		$news_m = M('News');
		
		if ($news_m->delete(I('id'))) {
			$this->success('删除成功！',U('Personal/published_article'));
		}else{
    		$this->success('删除失败！',U('Personal/published_article'));
    	}
	}

	
	//更新上传
	public function update(){

		$data['user_name']=I('user_name');
		if(I('email_address')!=''){
			$data['email_address']=I('email_address');
		}
		if(I('user_pwd')!=''){
		$data['user_pwd']=md5(I('user_pwd'));
		}
		if(I('real_name')!=''){
		$data['real_name']=I('real_name');
		}
		if(I('tel')!=''){
		$data['tel']=I('tel');
		}
		if(I('address')!=''){
		$data['address']=I('address');
		}
		$obj=M('clientUser')->where("`user_name`='".I('user_name')."'");
		$info=$this->upload();
		//更新logo字段
		$data['head_photo']='/Uploads/'.$info['head_photo']['savepath'].$info['head_photo']['savename'];
		
		$result=$obj->save($data);
		if($result){
			$this->success('数据更新成功');
		}else{
			$this->error('更新失败');
		}
		
	}

	public function upload(){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
	    $upload->savePath  =     'head_logo/'; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	       return $info;
	    }
	}

	public function news(){
		header("location:".U('Index/news'));
	}
	public function contact_us(){
		header("location:".U('Index/contact_us'));
	}
	public function about_us(){
		header("location:".U('Index/about_us'));
	}
	// 用户上传头像跳转
	public  function upload_headpho(){
		$this->showLogo();
		$client_m = D('clientUser');
		$client_info = $client_m -> where("`user_name`='".$_SESSION['username']."'")->find();
		// $client_info = $client_m -> where('id='.I('id')) ->find();
		// print_r($client_info);
		$this -> assign('client_info',$client_info);
		$this->display('Index/upload_headpho');
	}
	// 保存个人信息
	public function updateInfo(){
		$data['user_name']=I('user_name');
		if(I('email_address')!=''){
			$data['email_address']=I('email_address');
		}
		if(I('user_pwd')!=''){
		$data['user_pwd']=I('user_pwd');
		}
		if(I('real_name')!=''){
		$data['real_name']=I('real_name');
		}
		if(I('tel')!=''){
		$data['tel']=I('tel');
		}
		if(I('address')!=''){
		$data['address']=I('address');
		}
		if(I('dates')!=''){
		$data['dates']=I('dates');
		}
		if(I('sex')!=''){
		$data['sex']=I('sex');
		}
		$client_info=M('clientUser')->where("`user_name`='".I('user_name')."'");
		$result=$client_info->save($data);
        $this->show_message();
		if($result){
			$this->success('数据更新成功');
		}else{
			$this->error('更新失败');
		}
		
	}
	// 显示提交的个人信息
	public function show_message(){
		$this->showt_email();
		$this->show_realname();
		$this->show_tel();
		$this->show_address();
		$this->show_dates();
		$this->show_sex();
		$this->showt_userpwd();
		$client_m = D('clientUser');
		$client_info = $client_m -> where("`user_name`='".$_SESSION['username']."'")->find();
		// $client_info = $client_m -> where('id='.I('id')) ->find();
		// print_r($client_info);
		$this -> assign('client_info',$client_info);
	}
	
}