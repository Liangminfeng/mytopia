<?php
namespace Ytb8102\Controller;
use Think\Controller;
class CommonController extends Controller {
    //初始化方法
  function _initialize(){
		if($_SESSION['admin'] == ""){
			// $this->error('请登陆后台！',U('Login/login'));
			echo "<script>location='/index.php?m=Ytb8102&c=Login&a=login'</script>";
		}
 	}
}