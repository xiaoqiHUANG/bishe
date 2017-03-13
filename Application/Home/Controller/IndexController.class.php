<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;

class IndexController extends Controller {
     public function index(){ 
      //  $homepopular = M('homepopular');
      //  $homepopular_list = $homepopular->limit(3)->order('star')->select();
      //  $gallery = $homepopular->limit(4)->select();
       
      //  $this->assign('homepopular_list',$homepopular_list);
      //  $this->assign('gallery',$gallery);

      //  $cache_a= S('site_name');
      //  if (empty($cache_a)) {
      //    $system_info=M('system_conf')->find();
      //    $cache_a=S('site_name',$system_info);
      //  }
      //  $this->assign('title','首页—'.$cache_a['site_name']);
       $this->display();
    }
    public function publishing(){
        // 保存反馈信息到数据库
        // if (IS_POST) {
        //   $publishing_m=M('publishing');
        //   //自动填充创建时间
        //   $_POST['publishingTime']=date('Y-m-d H:i:s');

        //   // 做验证、自动完成数据填充
        //   if ($publishing_m->create()) {
        //     //添加房源
        //     if ($publisingId=$publishing_m->add()) {
        //       $this->success('房源信息已提交',U('Index/upload',array(id=>$publishing_m[publisingId])));
        //     } else {
        //       $this->error('房源信息提交失败',U('Index/publishing'));
        //     }
        //   }else {
        //     // 验证失败
        //     $this->error($publishing_m->getError());
        //   }
        // } else{
        //   $cache_a= S('site_name');
        //   $this->assign('title','发布房源 - '.$cache_a['site_name']);
        //   $this->assign('head','发布房源');
          $this->display();
        // }
    }
    public function upload(){
      // if (IS_POST) {
      //     $roomsrc_m=M('roomSrc');
          // //自动填充创建时间
          // $_POST['publishingTime']=date('Y-m-d H:i:s');

          // 做验证、自动完成数据填充
        //   if ($roomsrc_m->create()) {
        //     //添加房源
        //     if ($roomId=$roomsrc_m->add()) {
        //       $this->success('图片上传成功',U('Index/roomDetail'));
        //     } else {
        //       $this->error('房源信息提交失败',U('Index/upload'));
        //     }
        //   }else {
        //     // 验证失败
        //     $this->error($roomsrc_m->getError());
        //   }
        // } else{
        //   $cache_a= S('site_name');
        //   $this->assign('title','上传照片 - '.$cache_a['site_name']);
        //   $this->assign('head','上传照片');
          $this->display();
        // }
    }

    public function longRent(){
        // $cache_a= S('site_name');
        // $this->assign('title','长期租房 - '.$cache_a['site_name']);
        // $this->assign('head','长期租房');
        $this->display();
    }
    public function shortRent(){
        // $cache_a= S('site_name');
        // $this->assign('title','短期租房 - '.$cache_a['site_name']);
        // $this->assign('head','短期租房');
        $this->display();
    }
    public function showRooms(){
        // $cache_a= S('site_name');
        // $this->assign('title','房源展示 - '.$cache_a['site_name']);
        // $this->assign('head','房源展示');
        $this->display();
    }
    public function roomDetail(){
        // $cache_a= S('site_name');
        // $this->assign('title','房源详情 - '.$cache_a['site_name']);
        // $this->assign('head','房源详情');
        $this->display();
    }

     public function login()
    {
      //  $cache_a= S('site_name');
      //  $this->assign('title','登录 - '.$cache_a['site_name']);
      //do it 
       $this->display(); 	
    }
    public function register()
    {
      //  $cache_a= S('site_name');
      //  $this->assign('title','注册 - '.$cache_a['site_name']);
    	//do it
       $this->display();
   }
   public function comment()
    {
      //  $cache_a= S('site_name');
      //  $this->assign('title','评价 - '.$cache_a['site_name']);
      //do it
       $this->display();
   }
   //显示头像
  public function showLogo(){
    // $Model = new \Think\Model() ;
    // $result=$Model->query("SELECT * FROM client_user WHERE user_name ='".$_SESSION['username']."'");
    // if($result[0]['head_photo']){
    //   $this->assign('head_photo',$result[0]['head_photo']);
    // }else{
    //   $this->assign('head_photo',"/Public/head_logo/default_head_logo.jpg");
      
    // }
  }
   // 查看用户个人资料
  public function userProfile(){
      //  $cache_a= S('site_name');
      //  $this->assign('title','个人资料 - '.$cache_a['site_name']);
      // //do it
      //  $this->showLogo();
       $this->display();
   }
   // 查看心愿单
   public function wishlist(){
      // $cache_a= S('site_name');
      //  $this->assign('title','心愿单 - '.$cache_a['site_name']);
      //do it
       $this->display();
   }
   // 查看个人中心
  
}