<?php
namespace Ytb8102\Controller;
use Think\Controller;
class RoleController extends CommonController {
	public function admin()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $list = M('admin')->field('pk_admin.number,pk_role.name,pk_admin.addtime,pk_admin.id')->join('pk_role on pk_role.id = pk_admin.role')->select();
        $this->assign('list',$list);
        $this->display('Role/admin');
    }

    public function add_admin()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $list = M('role')->select();
        $this->assign('list',$list);
        $this->display('Role/add_admin');
    }

    public function insert_admin()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        if(!$_POST['number'] || !$_POST['password'] || !$_POST['role']){
            echo "<meta charset='utf-8'><script>alert('请将信息填写完整！');history.go(-1);</script>";
        }else{
            $data = [
                'number' => $_POST['number'],
                'pwd' => md5($_POST['password']),
                'role' => $_POST['role'],
                'addtime' => time()
            ];
            if(M('admin')->add($data)){
                echo "<meta charset='utf-8'><script>alert('添加管理员成功！');location='/index.php/Ytb8102/Role/admin'</script>";
            }
        }
    }

    public function edit_admin()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $data = M('admin')->where('id = '.I('get.id'))->find();
        $list = M('role')->select();
        $this->assign('data',$data);
        $this->assign('list',$list);
        $this->display('Role/edit_admin');
    }

    public function save_admin()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $id = I('post.id');
        if(!$_POST['password']){
            $data = [
                'number' => I('post.number'),
                'pwd' => md5(I('post.password')),
                'role' => I('post.role')
            ];
            if(M('admin')->where('id = '.$id)->save($data)){
                echo "<meta charset='utf-8'><script>alert('修改管理员成功！');location='/index.php/Ytb8102/Role/admin'</script>";
            }
        }else{
            $data = [
                'number' => I('post.number'),
                'role' => I('post.role')
            ];
            if(M('admin')->where('id = '.$id)->save($data)){
                echo "<meta charset='utf-8'><script>alert('修改管理员成功！');location='/index.php/Ytb8102/Role/admin'</script>";
            }
        }
    }

    public function role()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $list = M('role')->select();
        $this->assign('list',$list);
        $this->display('Role/role');
    }

    public function add_role()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        $list = M('qx')->select();
        $this->assign('list',$list);
        $this->display('Role/add_role');
    }

    public function insert_role()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        if(!$_POST['name'] ){
            echo "<meta charset='utf-8'><script>alert('请将信息填写完整！');history.go(-1);</script>";
        }else{
            $role = array('name'=>I('post.name'));
            $r_id = M('role')->add($role);
            $data['addrole']=time();
            M("wzrz")->add($data);
        
            echo "<meta charset='utf-8'><script>alert('添加角色成功！');location='/index.php/Ytb8102/Role/role'</script>";
        }
        
    }

    public function del_role()
    {        $fgh=$_SESSION['id'];
    $asd=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$asd'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        if(M('role')->where('id = '.I('post.id'))->delete()){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(2);
        }
    }

    public function fp_qx()
    {        $fgh=$_SESSION['id'];
    $role_id=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$role_id'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
        // echo 5;die;
        $id = I('get.id');
        // dump($id);exit;
        //   $id= I("id");
      $res=M("role")->where("id='$id'")->find();

      $n= M("qx")->where("parent_id=0")->select();
     
      foreach ($n as $key => $value) {
        $n[$key]["parent"]= M("qx")->where("parent_id='{$value['id']}'")->select();
      }
      $permissions= M("role_qx")->where("r_id='$id'")->select();
      $p=array();
      foreach ($permissions as $k => $v) {
        $p[]=$v['q_id'];
      }

      $this->assign("qxid",$p);
      $this->assign("res",$res);
      $this->assign("parent",$n);
     $this->display('Role/fp_qx');
    }

    public function fp()
    {        $fgh=$_SESSION['id'];
    $asd=M("admin")->getFieldById($fgh,'role');
    $right_id= M("role_qx")->where("r_id='$asd'")->getField('q_id', true);
    $rightids = implode('\',\'', $right_id);
    $righta=M("qx")->where("id in ('$rightids') and parent_id=0")->select();
    $rightb=M("qx")->where("id in ('$rightids') and parent_id>0")->select();
    // dump($righta);exit;
    $this->assign("righta",$righta);
    $this->assign("rightb",$rightb);
           $role_id=I("post.role_id");
        M("role_qx")->where("r_id='$role_id'")->delete();
        $right_id=I("post.right_id");
         foreach ($right_id as $right) {
            $data['r_id']=$role_id;
            $data['q_id'] = $right;
            $res=M("role_qx")->add($data);
        }    
        if($res){
          $this->success('分配成功',U('Role/role'));
        }else{
          $this->success('分配失败',U('Role/role'));
      }
       // }
       //  dump(I());die;
       //  $id = I('post.id');
       //  $qx = I('post.qx');
       //  M("role_qx")->where("r_id='$id'")->delete();
       
       //      foreach ($qx as $value) {
       //          $data = [
       //              'r_id' => $id,
       //              'q_id' => $value
       //          ];
       //          M('role_qx')->add($data);
       //      }
      
       //  echo "<meta charset='utf-8'><script>alert('权限分配成功！');location='/index.php/Ytb8102/Role/role'</script>";
    }
}