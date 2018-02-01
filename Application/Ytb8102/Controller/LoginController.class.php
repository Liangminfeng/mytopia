<?php
namespace Ytb8102\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
    	$this->display('Index/login');
    }
    public function dologin(){
        $yzm = I('post.yzm');
        $verify = new \Think\Verify();
    	if(!$verify->check($yzm)){
   			$this->ajaxReturn(3);
   		}else if(!$user = M('admin')->where('number = "'.I('post.name').'"')->find()){
   			$this->ajaxReturn(2);
   		}else if($user['pwd'] != md5(I('post.pwd'))){
       $this->ajaxReturn(1);
      }else{
   			$_SESSION['admin'] = $user['number'];
        $_SESSION['id'] = $user['id'];
       
   			$this->ajaxReturn(0);
   		}
    }

    public function logout(){
         $_SESSION['admin'] = '';
         echo "<script>alert('退出成功');</script>";
         $this->login();
   }
   function verify() {
        $config = array(
            'imageH' => 50, // 验证码图片高度
            'imageW' => 150, // 验证码图片宽度   
            'length' => 4, // 验证码位数  
            'fontSize' => 18, // 验证码字体大小(px)
            'fontttf' => '4.ttf', // 验证码字体，不设置随机获取    
                'useCurve'  =>  true,            // 是否画混淆曲线
                //  'useNoise'  =>  false,            // 是否添加杂点
                // 'useImgBg'  =>  false,           // 使用背景图片  
                // 'bg'        =>  array(255, 0, 255),  // 背景颜色
        );
        $verify = new\Think\Verify($config);
        $verify->entry();
    }

}