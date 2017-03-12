<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
     public function index(){ 
       $homepopular = M('homepopular');
       $homepopular_list = $homepopular->limit(3)->order('star')->select();
       $gallery = $homepopular->limit(4)->select();
       
       $this->assign('homepopular_list',$homepopular_list);
       $this->assign('gallery',$gallery);

       $cache_a= S('site_name');

       if (empty($cache_a)) {
         $system_info=M('system_conf')->find();
         $cache_a=S('site_name',$system_info);
       }
       
      //  print_r($cache_a['site_name']);exit();
       
       $this->assign('title','首页—'.$cache_a['site_name']);
       
       $this->display();
//        $news = M('News');
    
//    $page_cout=3;
    
//    $page_num=I('page_num')>0?I('page_num'):1;
    
    
//    $start_index=($page_num-1)*$page_cout;
// //   $start_index=0;
    
//    $news_list=$news -> alias('n')
//             -> field('n.id as id,title,name,sort_name,content,img,date')
//             -> join('author ON author_id=author.id')
//             -> join('news_sort ON sort_ename=news_sort.e_name')
//             -> order('id desc')
//             -> limit($start_index,$page_cout)
//             -> select();
    
//    $this->assign('news_list',$news_list);
      }


     public function login()
    {
       $cache_a= S('site_name');
       $this->assign('title','登录 - '.$cache_a['site_name']);
      //do it 
       $this->display(); 	
    }
    public function register()
    {
       $cache_a= S('site_name');
       $this->assign('title','注册 - '.$cache_a['site_name']);
    	//do it
       $this->display();
   }
   public function comment()
    {
       $cache_a= S('site_name');
       $this->assign('title','评价 - '.$cache_a['site_name']);
      //do it
       $this->display();
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
   // 查看用户个人资料
  public function userProfile(){
       $cache_a= S('site_name');
       $this->assign('title','个人资料 - '.$cache_a['site_name']);
      //do it
       $this->showLogo();
       $this->display();
   }
   // 查看心愿单
   public function wishlist(){
      $cache_a= S('site_name');
       $this->assign('title','心愿单 - '.$cache_a['site_name']);
      //do it
       $this->display();
   }
   // 查看个人中心
  
}