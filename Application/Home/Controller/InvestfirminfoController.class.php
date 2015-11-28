<?php
namespace Home\Controller;
use Think\Controller;
class InvestfirminfoController extends Controller {
  public function index(){
    $this->redirect('Systemload/systemload',array(),2,'请先登录，页面跳转中~');//跳转到Systemload中的systemload方法
    }
    
    public function investfirminfo($firm_name){
      header("Content-Type: text/html;charset=utf-8"); 

        $tb_invest_firm_base_info = D('tb_invest_firm_base_info');    
        $firm_baseinfo=$tb_invest_firm_base_info ->where ("invest_firm_name ='$firm_name'") ->find();
        $this->assign('intro',$firm_baseinfo["intro"]);
        $this->assign('official_link',$firm_baseinfo["official_link"]);
        $this->assign('invest_firm_name',$firm_baseinfo["invest_firm_name"]);

        $Tb_amount_tran = D('Tb_amount_tran');    
        $orderby['id']='desc';
        $firm_detailinfo=$Tb_amount_tran ->where ("invest_firm_name ='$firm_name'") ->order($orderby)->limit(10)->select();
        $this->assign('firm_detailinfo',$firm_detailinfo);

        $Tb_invest_firm_features_1=D('Tb_invest_firm_features_1');
        $invest_firm_features=$Tb_invest_firm_features_1 ->where ("机构名称 ='$firm_name'") ->find();
        $this->assign('invest_firm_features',$invest_firm_features);
     //   $invest_firm_features_json = json_encode($invest_firm_features);
       // $this->assign('invest_firm_features_json',$invest_firm_features_json);


     $this -> display('./Application/Home/View/Investfirminfo/investfirminfo.php');

    }

}