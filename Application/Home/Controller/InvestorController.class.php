<?php
namespace Home\Controller;
use Think\Controller;
class InvestorController extends Controller {
  public function index(){
    $this->redirect('Systemload/systemload',array(),2,'请先登录，页面跳转中~');//跳转到Systemload中的systemload方法
    }
    
    public function investor($investor_name){
      header("Content-Type: text/html;charset=utf-8"); 

       $Tb_investor_area = D('Tb_investor_area');    
        $investor_area=$Tb_investor_area ->where ("investor_name ='$investor_name'") ->select();
        $this->assign('investor_area',$investor_area);
        $this->assign('investor_name',$investor_name);

       $this -> display('./Application/Home/View/Investor/Investor.php');

    }

}