<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    //    $User  = D('User');
      //  var_dump($User->getName());
     // $data = R('Systemload/systemload');//调用System中的system方法

    $this->redirect('Systemload/systemload');
    //$this->redirect('Individual/individual');//跳转到Systemload中的systemload方法
    }


}