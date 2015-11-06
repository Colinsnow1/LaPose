<?php
namespace Home\Controller;
use Think\Controller;
class MoreinfoController extends Controller {
  public function index(){
    $this->redirect('Systemload/systemload',array(),2,'请先登录，页面跳转中~');//跳转到Systemload中的systemload方法
    }
    
    public function moreinfo(){
      header("Content-Type: text/html;charset=utf-8"); 

     $this -> display('./Application/Home/View/Moreinfo/moreinfo.php');

    }

}