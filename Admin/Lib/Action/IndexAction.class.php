<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends PublicAction {
    public function index(){
        $this->islogin();
    	$this->display();
    }
    //左侧菜单页面
    public function index_menu(){
        $this->islogin();
        $admin_name=session('admin_name');
        $this->assign('admin_name',$admin_name);
    	$this->display();
        
    }
    //右侧默认页面
    public function index_body(){
        $this->islogin();
    	$this->display();
    }

}