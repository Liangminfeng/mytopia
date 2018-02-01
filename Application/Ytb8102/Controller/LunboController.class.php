<?php
namespace Ytb8102\Controller;
use Think\Controller;
class LunboController extends CommonController {
	//轮播管理首页
    public function index(){
    $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$index = [
    		'type' => 'hdp',
    		'er_type' => 'hdpll'
    	];
      $total = M('slider')->Count();
      $page = new \Think\Page($total,20);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("slider")->limit($page->firstRow,$page->listRows)->select();
      $this->assign("res",$res);
      $this->assign("index",$index);
      $this->assign('pageinfo',$page->show());
	  $this->display();
	  // $this->display('Lunbo/index');
    }
    //轮播修改详情
    public function updetails(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$id=I("get.id");
        $res=M("slider")->where("id='$id'")->find();
        $this->assign("res",$res);
	    $this->display();
	  // $this->display('Lunbo/index');
    }
     //轮播修改
    public function update(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
      $data=$_POST;
      $upload = new \Think\Upload();// 实例化上传类
      $upload->maxSize   =     96666728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =      './Public/uploads/'; // 设置附件上传根目录
      $upload->saveName = time().'_'.mt_rand();
        $info=$upload->upload();
       if(!$info) {// 上传错误提示错误信息
          $this->error($upload->getError());
        }else{// 上传成功
          foreach ($info as $key=>$file) {
               $data['pic'] = $file['savepath'] . $file['savename'];
          }           
      }
      $id=I("post.id");
      $data['title']=I("post.title");
       $data['url']=I("post.url");
      $ss=M("slider")->where("id='$id'")->save($data); 
      // dump($data);exit;
	    if($ss){
	      $this->success('修改成功！',U('Lunbo/index'));
	    }else{
	      $this->success('修改失败！',U('Lunbo/index'));
	    } 
    }		
}