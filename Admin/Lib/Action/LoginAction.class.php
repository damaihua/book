<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
	//默认index方法
    public function index(){
    	if(!session('admin_name')){
    		$this->display();
    	}else{
    		$this->redirect('__APP__/index/index');
    	}
    	
    }
    //管理员登录验证方法
    public function check(){
        //实例化一个admin类
        $admin=M('Admin');
        //获取提交表单值
        $admin_name=I('admin_name');
        $admin_pwd=md5(I('admin_pwd'));
        //检验该用户是否存在
        $result=$admin->where("admin_name='$admin_name'")->find();
        if(!$result){
            $this->error('该管理员不存在！请重新输入管理员用户名','__ROOT__/admin.php/login');
        }
        
        // 检验密码是否正确
        if($result['admin_pwd']!=$admin_pwd){
            $this->error('密码错误！请重新输入');
        }
        // 判断验证码是否正确
        if($_SESSION['verify']!=md5($_POST['verify'])){
           $this->error('验证码错误！！');        
        }
        //保存session值 
        session('admin_name',$result['admin_name']);
        session('role_id',$result['role_id']);
        $this->redirect('index/index');
    }
    //管理员退出登录方法
    public function out(){
        session(null); // 清空当前的session
        $this->redirect('__APP__/login/index');
    }

}