<?php
namespace Ytb8102\Controller;
use Think\Controller;
class XinxiController extends CommonController {
	//地址信息管理首页
    public function xinxi(){
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
      $total = M('lianxiw')->Count();
      $page = new \Think\Page($total,20);
      $page->setConfig('prev','上一页');
      $page->setConfig('next','下一页');
      $page->setConfig('first','首页');
      $page->setConfig('last','尾页');
      $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
      $res=M("lianxiw")->limit($page->firstRow,$page->listRows)->find();

      $this->assign("res",$res);
      $this->assign("index",$index);
      $this->assign('pageinfo',$page->show());
	  $this->display();
	  // $this->display('Lunbo/index');
    }

         public function xinxis()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
  
        $data['cont']=$_POST['content'];
        if(M('lianxiw')->where('id = 1')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }
    //地址信息修改详情
    public function updetails(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

    	  $id=I("get.id");  
        $res=M("lianxiw")->where("id='$id'")->find();
        // dump($res);exit;
        $this->assign("res",$res);
	      $this->display();
    }
     //地址信息修改
    public function update(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
      // dump(I());exit;
      $id=I("post.id"); 
      $data['dizhi']    =I("post.dizhi"); 
      $data['phone']    =I("post.phone"); 
      $data['youxiang'] =I("post.youxiang"); 

      $ss=M("lianxiw")->where("id='$id'")->save($data); 
	    if($ss){
	      $this->success('修改成功！',U('Xinxi/xinxi'));
	    }else{
	      $this->success('修改失败！',U('Xinxi/Xinxi'));
	    } 
    }	

    public function  friends(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
      $res=M("blogroll")->select();
      $this->assign("res",$res);
      $this->display();
    }
      //友情链接详情
    public function updetailsyq(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

      $id=I("get.id");
        $res=M("blogroll")->where("id='$id'")->find();
        $this->assign("res",$res);
      $this->display();
    // $this->display('Lunbo/index');
    }
    //添加友情链接
    public function addyq(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
      $this->display();
    }
    public function add(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
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
      $data["title"]=$_POST["title"];
      if(M("blogroll")->add($data)){
          $this->success('添加成功！',U('Xinxi/friends'));
    }else{
      $this->success('添加失败！',U('Xinxi/friends')); 
      }
    }
    //友情链接详情修改
    public function updateyq(){
              $fgh=$_SESSION['id'];
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
 
      $ss=M("blogroll")->where("id='$id'")->save($data); 
      // dump($data);exit;
      if($ss){
        $this->success('修改成功！',U('Xinxi/friends'));
      }else{
        $this->success('修改失败！',U('Xinxi/friends'));
      } 
    }   
    public function delete(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

      $id=I("get.id");
     $res= M("blogroll")->where("id='$id'")->delete();
      if($res){
        $this->success('删除成功！',U('Xinxi/friends'));
      }else{
        $this->success('删除失败！',U('Xinxi/friends'));
      } 

    }
    //公司声明
    public function gssm(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

     $res= M("content")->find();

     $this->assign("res",$res);
     $this->display();
    }
    public function xiu(){
              $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
      $content=$_REQUEST['content']  ;
      $data['content']=$content;
        
        if(M('content')->where("id=1")->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
     
    }
}