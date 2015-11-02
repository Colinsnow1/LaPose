<?php
namespace Home\Controller;
use Think\Controller;
class SystemloadController extends Controller {
  public function index(){
    $this->redirect('Systemload/systemload',array(),2,'请先登录，页面跳转中~');//跳转到Systemload中的systemload方法
    }
    
    public function systemload(){
      header("Content-Type: text/html;charset=utf-8"); 
       $this -> display('./Application/Home/View/Systemload/systemload.html');

    }


    public function submit1(){
	  header("Content-Type: text/html;charset=utf-8"); 
		$User = D('User');

		$username = $_POST['username']; //学号
		$password = $_POST['pwd']; //密码
		$data['name'] = $username;
		$data['pw'] = $password;

        if($username==""){echo "<script>alert('账户不能为空哦');location='javascript:history.back()';</script>";exit();}
        if($password==""){echo "<script>alert('密码不能为空哦');location='javascript:history.back()';</script>";exit();}

		$result=$User ->where ("name ='$username'") ->select();//登录验证
      
        if(!$result){
          echo "<script>alert('用户不存在');location='javascript:history.back()';</script>"; //找不到用户
          exit();
        }
        else{
            $result1=$User ->where ($data) ->select();      
        	if(!$result1){
             echo "<script>alert('密码错误');location='javascript:history.back()';</script>";//密码错误
             exit();
            }
            else{
             //设置session
             $_SESSION['name']=$username;
             $this->redirect('Homepage/homepage');//跳转到Systemload中的systemload方法
            }
        }
	}	

  public function submit(){
    header("Content-Type: text/html;charset=utf-8"); 
    $request = new \Org\Util\GdufsSdk();
    $User = D('User');

    $username = $_POST['username']; //学号
    $password = $_POST['pwd']; //密码
    $data['name'] = $username;
    $data['pw'] = $password;

        if($username==""){echo "<script>alert('账户不能为空哦');location='javascript:history.back()';</script>";exit();}
        if($password==""){echo "<script>alert('密码不能为空哦');location='javascript:history.back()';</script>";exit();}

    /*$result=$User ->where ("name ='$username'") ->select();//登录验证
      
        if(!$result){
          echo "<script>alert('用户不存在');location='javascript:history.back()';</script>"; //找不到用户
          exit();
        }
        else{*/
            $result1 = $request->login($username, $password);      
          if($result1['isLogin']!=true){
             echo "<script>alert('密码错误');location='javascript:history.back()';</script>";//密码错误
             exit();
            }
            else{
             //设置session
             $_SESSION['name']=$username;
             $this->redirect('Homepage/homepage');//跳转到Systemload中的systemload方法
            }
        //}
  }

//游客
  public function youke(){
    header("Content-Type: text/html;charset=utf-8"); 
    $_SESSION['name']='0';
    $this->redirect('Homepage/homepage');//跳转到Systemload中的systemload方法

  }
    //登录接口
    public function jsontest(){
        
        $json = $_POST;
        $r = json_encode($json);
        $data1 = json_decode($r);
  
        $User1 = D('User');
        $username=$data1->username; 
        $password=$data1->password;
        $condition['name'] = $username;
        $condition['pw'] = $password; 
        
       // $result3=$User1 ->add($condition);//接口测试
        $result1=$User1 ->where ($condition) ->find();//登录验证 

        if(!$result1){
          $data='';
          $info='登录失败';
          $status=0;
 
          $arr['data']=$data;
          $arr['info']=$info;
          $arr['status']=$status;

         echo str_replace("\\/", "/",  json_encode($arr));
        }
        else {
                
           $Userinfo = D('Userinfo');
           $condition1['name'] = $username;//用户资料
           $result2=$Userinfo ->where ($condition1) ->find();//用户资料

          //接口测试
          //$Jsontest = M('Jsontest');
         //  $tt['json']=$result2['nickname'];
          // $result3=$Jsontest ->add($tt);

           
         if($result1['isheadphoto']==0)
            $head='0';
         else         
           $head="http://192.168.206.166/igdufs/i_gw/Public/headsculpture/$username.jpg";

           $nickname=$result2['nickname'];
           $academy=$result2['academy'];
           $profession=$result2['profession'];

            $User->head = $head;
            $User->name = $nickname;
            $User->academy = $academy;
            $User->major = $profession;
            
            $data ->User = $User;

            $info='登录成功';
            $status=1;
 
            $arr['data']=$data;
            $arr['info']=$info;
            $arr['status']=$status;

           echo str_replace("\\/", "/",  json_encode($arr));
         
        }
    }

}