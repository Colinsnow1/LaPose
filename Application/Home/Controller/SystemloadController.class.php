<?php
namespace Home\Controller;
use Think\Controller;
class SystemloadController extends Controller {
  public function index(){
    $this->redirect('Systemload/systemload',array(),2,'请先登录，页面跳转中~');//跳转到Systemload中的systemload方法
    }
    
    public function systemload(){
      header("Content-Type: text/html;charset=utf-8"); 

         $Tb_invest_firm_score_1 = D('Tb_invest_firm_score_1');    
        $orderby['id']='desc';
        $list=$Tb_invest_firm_score_1 ->order($orderby)->limit(10)->select();

        $this->assign('list',$list);// 赋值数据集

       $this -> display('./Application/Home/View/Systemload/systemload.php');

    }

}