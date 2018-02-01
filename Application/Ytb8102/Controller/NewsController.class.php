<?php
namespace Ytb8102\Controller;
use Think\Controller;
class NewsController extends CommonController {
	/*************************集团要闻*********************************/
	//集团要闻显示
    public function jtyw()
    {     
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
    		'type' => 'news',
    		'er_type' => 'jtyw'
    	];
    	$total = M('jtyw')->count();
    	$page = new \Think\Page($total,10);
    	$page->setConfig('prev','上一页');
	    $page->setConfig('next','下一页');
	    $page->setConfig('first','首页');
	    $page->setConfig('last','尾页');
	    $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        if($_GET["ss"]){
            $list = M('jtyw')->limit($page->firstRow,$page->listRows)->order('id_id desc')->select();
        }else{
    	   $list = M('jtyw')->limit($page->firstRow,$page->listRows)->order('id_id asc')->select();
        }
    	foreach ($list as $key => $value) {
    		$list[$key]['content'] = mb_substr($value['content'],0,80,'utf-8');
    	}
    	$this->assign('index',$index);
    	$this->assign('list',$list);
    	$this->assign('page',$page->show());
    	$this->display('News/jtyw');
    }
    public function shh(){
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
                'type' => 'news',
                'er_type' => 'jtyw'
            ];
            $total = M('hydt')->count();
            $page = new \Think\Page($total,15);
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            if($_GET['id']==1){
                $list = M('hydt')->limit($page->firstRow,$page->listRows)->order('id_id asc')->select();
            }else{
                $list = M('hydt')->limit($page->firstRow,$page->listRows)->order('id_id desc')->select();
            }
            foreach ($list as $key => $value) {
                $list[$key]['content'] = mb_substr($value['content'],0,80,'utf-8');
            }
            $this->assign('index',$index);
            $this->assign('list',$list);
            $this->assign('page',$page->show());
        $this->display('News/hangyetongtai');
    }
    public function  sh(){        
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
            'type' => 'news',
            'er_type' => 'jtyw'
        ];
        $total = M('jtyw')->count();
        $page = new \Think\Page($total,15);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        if($_GET['id']==1){
            $list = M('jtyw')->limit($page->firstRow,$page->listRows)->order('id_id asc')->select();
        }else{
            $list = M('jtyw')->limit($page->firstRow,$page->listRows)->order('id_id desc')->select();
        }
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr($value['content'],0,80,'utf-8');
        }
        $this->assign('index',$index);
        $this->assign('list',$list);
        $this->assign('page',$page->show());
        $this->display('News/jtywsh');
    }
    //集团要闻删除
    public function del_jtyw()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	if(M('jtyw')->where('id = '.I('post.id'))->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }

    //添加集团要闻
    public function add_jtyw()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$this->display('News/add_jtyw');
    }

    //执行添加
    public function insert_jtyw()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

    	$data = [
            'title' =>I('post.title'),
    		'title_t' =>I('post.title_t'),
            'gjc'   =>I("post.gjc"),
            'description'   =>I("post.miao"),
    		'content' => $_POST['content'],
    		'addtime' => time(),
    		'edittime' => time(),
            'stat'   =>0,
    		'code' => 1,
            'id_id'=>$_POST["id_id"]
    	];
    	if(M('jtyw')->add($data)){
            $datas['addwz']=time();
            M("wzrz")->add($datas);
    		$this->ajaxReturn(1);
          
    	}else{
    		$this->ajaxReturn(2);
    	}
    }

    //编辑集团要闻
    public function edit_jtyw()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	if(!I('get.id')){
    		echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=jtyw'</script>";
    	}else{
	    	$data = M('jtyw')->where('id = '.I('get.id'))->find();
	    	if(!$data){
				echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=jtyw'</script>";
	    	}else{
	    		$this->assign('data',$data);
	    		$this->display('News/edit_jtyw');
	    	}
    	}

    }

    //执行修改
    public function save_jtyw()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$data = [
            'title' => I('post.title'),
            'title_t' => I('post.title_t'),
    		'description' => I('post.miao'),
            'gjc' => I('post.gjc'),
    		'content' => $_POST['content'],
    		'edittime' => time()
    	];
    	if(!I('post.id')){
    		echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=jtyw'</script>";
    	}else{
    		if(M('jtyw')->where('id = '.I('post.id'))->save($data)){
    			$this->ajaxReturn(1);
    		}else{
    			$this->ajaxReturn(2);
    		}
    	}
    }

    //更新文章状态
    public function jtyw_state()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$data = [
    		'code' => I('post.code'),
    		'edittime' => time()
    	];
    	if(M('jtyw')->where('id = '.I('post.id'))->save($data)){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }
    public function shh_start(){
        $fgh=$_SESSION['id'];
        $role_id=M("admin")->getFieldById($fgh,'role');
        $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
        $rightids = implode('\',\'', $right_id);
        $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
        $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
        // dump($righta);exit;
        $this->assign("righta",$righta);
        $this->assign("rightb",$rightb);
            $data = [
                'stat' => I('post.code'),
                'edittime' => time()
            ];
            if(M('hydt')->where('id = '.I('post.id'))->save($data)){
                $data['shtg']=time();
                M("wzrz")->add($data);
            
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(2);
            }
    }
    // public function zx_start(){
    //     $id=$_POST['id'];
    //     $code=$_POST['code'];
    //     $fgh=$_SESSION['id'];
    //     $role_id=M("admin")->getFieldById($fgh,'role');
    //     $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    //     $rightids = implode('\',\'', $right_id);
    //     $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    //     $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    //     // $this->assign("righta",$righta);
    //     // $this->assign("rightb",$rightb);
    //     $index = [ 
    //             'type' => 'news',
    //             'er_type' => 'jtyw'
    //         ];
    //         $total = M('hydt')->count();
    //         $page = new \Think\Page($total,15);
    //         $page->setConfig('prev','上一页');
    //         $page->setConfig('next','下一页');
    //         $page->setConfig('first','首页');
    //         $page->setConfig('last','尾页');
    //         $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

    //         $list = M('hydt')->limit($page->firstRow,$page->listRows)->order('addtime asc')->select();
    //         foreach ($list as $key => $value) {
    //             $list[$key]['content'] = mb_substr($value['content'],0,80,'utf-8');
    //         }
    //         // $this->assign('index',$index);
    //         // $this->assign('list',$list);
    //         // $this->assign('page',$page->show());
    //         //$this->ajaxReturn($list);
    //         echo json_encode(array('righta'=>$righta,'rightb'=>$rightb,'index'=>$index,'page'=>$page->show()));
    // }
     //文帐审核
    public function jtyw_stat()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = [
            'stat' => I('post.code'),
            'edittime' => time()
        ];
        if(M('jtyw')->where('id = '.I('post.id'))->save($data)){
            $data['shtg']=time();
            M("wzrz")->add($data);
        
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }


    /*********************************新闻资讯***********************************/

    //显示
    public function xwzx()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'news',
            'er_type' => 'xwzx'
        ];
        $total = M('xwzx')->count();
        $page = new \Think\Page($total,20);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $list = M('xwzx')->limit($page->firstRow,$page->listRows)->order('addtime desc')->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr($value['content'],0,80,'utf-8');
        }
        $this->assign('index',$index);
        $this->assign('list',$list);
        $this->assign('page',$page->show());
        $this->display('News/xwzx');
    }

    //新闻资讯删除
    public function del_xwzx()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        if(M('xwzx')->where('id = '.I('post.id'))->delete()){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    //添加新闻资讯
    public function add_xwzx()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'news',
            'er_type' => 'xwzx'
        ];
        $this->assign('index',$index);
        $this->display('News/add_xwzx');
    }

    //执行添加
    public function insert_xwzx()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = [
            'title' => I('post.title'),
            'content' => $_POST['content'],
            'addtime' => time(),
            'edittime' => time(),
            'code' => 1
        ];
        if(M('xwzx')->add($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    //编辑新闻资讯
    public function edit_xwzx()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'news',
            'er_type' => 'xwzx'
        ];
        $this->assign('index',$index);
        if(!I('get.id')){
            echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=xwzx'</script>";
        }else{
            $data = M('xwzx')->where('id = '.I('get.id'))->find();
            if(!$data){
                echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=xwzx'</script>";
            }else{
                $this->assign('data',$data);
                $this->display('News/edit_xwzx');
            }
        }

    }

    //执行修改
    public function save_xwzx()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = [
            'title' => I('post.title'),
            'content' => $_POST['content'],
            'edittime' => time()
        ];
        if(!I('post.id')){
            echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=xwzx'</script>";
        }else{
            if(M('xwzx')->where('id = '.I('post.id'))->save($data)){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(2);
            }
        }
    }

    //更新文章状态
    public function xwzx_state()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = [
            'code' => I('post.code'),
            'edittime' => time()
        ];
        if(M('xwzx')->where('id = '.I('post.id'))->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    /*********************************行业动态**********************************/

    //显示
    public function hydt()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$index = [
    		'type' => 'news',
    		'er_type' => 'hydt'
    	];
    	$total = M('hydt')->count();
    	$page = new \Think\Page($total,20);
    	$page->setConfig('prev','上一页');
	    $page->setConfig('next','下一页');
	    $page->setConfig('first','首页');
	    $page->setConfig('last','尾页');
	    $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        if($_GET['ss']){
             $list = M('hydt')->limit($page->firstRow,$page->listRows)->order('id_id desc')->select();
        }else{
    	   $list = M('hydt')->limit($page->firstRow,$page->listRows)->order('id_id asc')->select();
        }
    	foreach ($list as $key => $value) {
    		$list[$key]['content'] = mb_substr($value['content'],0,80,'utf-8');
    	}
    	$this->assign('index',$index);
    	$this->assign('list',$list);
    	$this->assign('page',$page->show());
    	$this->display('News/hydt');
    }

    //行业动态删除
    public function del_hydt()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	if(M('hydt')->where('id = '.I('post.id'))->delete()){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }

    //添加行业动态
    public function add_hydt()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$this->display('News/add_hydt');
    }

    //执行添加
    public function insert_hydt()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$data = [
    		'title' => I('post.title'),
    		'content' => $_POST['content'],
    		'addtime' => time(),
    		'edittime' => time(),
    		'code' => 1,
            'id_id'=>$_POST['id_id']
    	];
    	if(M('hydt')->add($data)){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }

    //编辑行业动态
    public function edit_hydt()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	if(!I('get.id')){
    		echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=hydt'</script>";
    	}else{
	    	$data = M('hydt')->where('id = '.I('get.id'))->find();
	    	if(!$data){
				echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=hydt'</script>";
	    	}else{
	    		$this->assign('data',$data);
	    		$this->display('News/edit_hydt');
	    	}
    	}

    }

    //执行修改
    public function save_hydt()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$data = [
    		'title' => I('post.title'),
    		'content' => $_POST['content'],
    		'edittime' => time()
    	];
    	if(!I('post.id')){
    		echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=hydt'</script>";
    	}else{
    		if(M('hydt')->where('id = '.I('post.id'))->save($data)){
    			$this->ajaxReturn(1);
    		}else{
    			$this->ajaxReturn(2);
    		}
    	}
    }

    //更新文章状态
    public function hydt_state()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
    	$data = [
    		'code' => I('post.code'),
    		'edittime' => time()
    	];
    	if(M('hydt')->where('id = '.I('post.id'))->save($data)){
    		$this->ajaxReturn(1);
    	}else{
    		$this->ajaxReturn(2);
    	}
    }

    //企业宣传片
    public function xcp()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'news',
            'er_type' => 'xcp'
        ];
        $data = M('xcp')->select();
        $this->assign('list',$data);
        $this->assign('index',$index);
        $this->display('News/xcp');
    }

    //编辑宣传片
    public function edit_xcp()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = M('xcp')->where('id = '.I('get.id'))->find();
        $this->assign('data',$data);
        $this->display('News/edit_xcp');
    }

    //执行修改宣传片
    public function save_xcp()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $houzhui = substr($_FILES['file']['name'],-3);
        $arr = ['mp4','avi','rmvb','asf','divx','mpg','mpeg','mpe','wmv','mp4','mkv','vob'];
        if(!in_array($houzhui, $arr)){
            echo "<script>alert('请上传视频文件！');history.back();</script>";
        }else{
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     99999999 ;// 设置附件上传大小
            $upload->exts      =     array('mp4', 'avi', 'rmvb', 'asf','divx','mpg','mpeg','mpe','wmv','mp4','mkv','vob');// 设置附件上传类型
            $upload->rootPath  =      './Public/uploads/xcp/'; // 设置附件上传根目录
            $upload->saveName  = time().'_'.mt_rand();
            $upload->autoSub   = false;
            // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                foreach($info as $file){
                    $data = [
                        'path' => 'uploads/xcp/'.$file['savepath'].$file['savename'],
                        'edittime' => time()
                    ];
                    if(M('xcp')->where('id = '.I('post.id'))->save($data)){
                        echo "<script>alert('修改成功！');location='/index.php?m=Admin&c=News&a=xcp'</script>";
                    }else{
                        echo "<script>alert('修改失败！');location='/index.php?m=Admin&c=News&a=xcp'</script>";
                    }
                }
            }
        }
    }

    //致辞
    public function zhici()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'news',
            'er_type' => 'zhici'
        ];
        $data = M('zc_tl')->where('code = 1')->find();
        if(!$data){
            echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=zhici'</script>";
        }else{
            $this->assign('data',$data);
            $this->assign('index',$index);
            $this->display('News/zc');
        }
    }

    //致辞修改
    public function save_zc()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = [
            'content' => $_POST['content']
        ];
        if(M('zc_tl')->where('code = 1 ')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    //万店通联
    public function wdtl()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $index = [
            'type' => 'news',
            'er_type' => 'wdtl'
        ];
        $data = M('zc_tl')->where('code = 2')->find();
        if(!$data){
            echo "<script>alert('参数错误！');location='/index.php?m=Admin&c=News&a=wdtl'</script>";
        }else{
            $this->assign('data',$data);
            $this->assign('index',$index);
            $this->display('News/wdtl');
        }
    }

    //万店通联修改
    public function save_wdtl()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = [
             'content' => $_POST['content']
        ];
        if(M('zc_tl')->where('code = 2')->save($data)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }
    //基本设置
    public function jbsz(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $res=M("jbsz")->select();
        foreach ($res as $key => $value) {
            # code...
        }
        // dump($value);die;
        $this->assign("res",$value);
        $this->display();

    }
    public function jbszxg(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        // dump(I());die;
      $data['title']=I("post.title");
      $data['gjz']=I("post.gjz");
      $data['miaoshu']=$_POST['ms'];
      $data['icp']=I("post.icp");
      $data['code']=I("post.code");
      $data['jgwab']=I("post.jgwab");
      $data['gbwz']=$_POST['gbms'];
      $res=M("jbsz")->where("id=1")->save($data);
      if($res){
        $this->success('成功',U('News/jbsz'),1);
    }else{
         $this->success('失败',U('News/jbsz'),1);
    }




    }
 

    public function wzrz(){        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);

              $total = M('wzrz')->count();
        $page = new \Think\Page($total,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $res = M('wzrz')->limit($page->firstRow,$page->listRows)->select();


        $this->assign('page',$page->show());

       
        $this->assign("res",$res);
        $this->display();

    }
    public function zhongxin(){
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
            'type' => 'news',
            'er_type' => 'jtyw'
        ];
        $total = M('zhongxin')->count();
        $page = new \Think\Page($total,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $list = M('zhongxin')->limit($page->firstRow,$page->listRows)->order('id desc')->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr($value['content'],0,80,'utf-8');
        }
        //$this->assign('index',$index);
       //var_dump($index);die;
        $this->assign('list',$list);
        $this->assign('page',$page->show());
        $this->display();
    }
    //新闻中心修改
    public function update(){
        $fgh=$_SESSION['id'];
        $role_id=M("admin")->getFieldById($fgh,'role');
        $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
        $rightids = implode('\',\'', $right_id);
        $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
        $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
        $id=$_GET["id"];
        $list=M("zhongxin")->where("id=$id")->find();
        $this->assign("data",$list);
        $this->assign("righta",$righta);
        $this->assign("rightb",$rightb);
        $this->display();
    }
    //新闻修改ajax
    public function update_list(){
        $id=$_POST["id"];
        $data=array(
            "name"=>$_POST["title"],
            "content"=>$_POST["content"],
            );
        $data=M("zhongxin")->where("id=$id")->save($data);
        if($data){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
        
    }
    public function bianhao(){
        $id=$_POST['id'];
        $data=array(
            "id_id"=>$_POST["idd"]
            );
        $data=M("jtyw")->where("id=$id")->save($data);
        if($data){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }
    public function hydt_bianhao(){
        $id=$_POST['id'];
        $data=array(
            "id_id"=>$_POST["idd"]
            );
        $data=M("hydt")->where("id=$id")->save($data);
        if($data){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }
}