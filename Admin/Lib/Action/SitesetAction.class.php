<?php
// 本类由系统自动生成，仅供测试用途
class SitesetAction extends PublicAction{
    //基本信息页面    
    public function sys_set(){
    	//检测是否登录
        $this->islogin();
        // 实例化一个类
        $siteset=M('Siteset');
        $data=$siteset->find(1);
        $this->assign('data',$data);
        $this->display();
        }
    //修改基本信息页面
    public function sys_edit(){
        //检测是否登录
        $this->islogin();
        $siteset=M('Siteset');
        //调用PublicAction里的upload方法返回生成的图片缩略图地址
        $site_logo=$this->upload('site_logo','logo','140','140');
        if($site_logo){
            $data['site_logo']=$site_logo;
        }
        $data['site_name']=I('site_name');
        $data['site_keywords']=I('site_keywords');
        $data['site_descript']=I('site_descript');
        $data['site_style']=I('site_style');
        $data['site_copyright']=I('site_copyright');
        $data['site_beian']=I('site_beian');
        $data['allow_reg']=I('allow_reg');
        $data['reg_send_email']=I('reg_send_email');
        $data['site_status']=I('site_status');
        $data['close_info']=I('close_info');
        
        $result=$siteset->where("id=1")->save($data);
        if($result === FALSE){
            $this->error('系统配置修改失败！');
        }elseif($result === 0){
            $this->error('系统配置未做修改！');
        }else{
            $this->success('系统配置修改成功！');
        }
    }
    //菜单管理页面
    public function menu_main(){
    	//检测是否登录
        $this->islogin();
        $menu=D('Menu');
        $data=$menu->order('ordernum asc')->select();
        $this->assign('data',$data);
        $this->display();
    }
    //菜单添加页面
    public function menu_add(){
        //检测是否登录
        $this->islogin();
        $this->display();
    } 
    //菜单添加方法
    public function do_menu_add(){
        //检测是否登录
        $this->islogin();
        $menu=D('Menu');
        $menu->create();
        if($menu->add()){
            $this->success('菜单添加成功！');
        }else{
            $this->error('菜单添加失败！');
        }
        
    }  
    //菜单修改页面
    public function menu_edit(){
        //检测是否登录
        $this->islogin();
        $menu=D('Menu');
        $id=$_GET['id'];
        $data=$menu->find($id);
        $this->assign('data',$data);
        $this->display();
    }
    public function do_menu_edit(){
        //检测是否登录
        $this->islogin();
        $menu=D('Menu');
        $menu->create();
        $result=$menu->save();
        if($result === FALSE){
            $this->error('菜单修改失败！');
        }elseif($result === 0){
            $this->error('菜单未做修改！');
        }else{
            $this->success('菜单修改成功！');
        }
    }
    //菜单删除方法
    public function menu_del(){
        //检测是否登录
        $this->islogin();
        $menu=M('Menu');
        $result=$menu->delete($_GET['id']);
        if($result){
            $this->success('菜单删除成功');
        }else{
            $this->error('菜单删除失败');
        }
    }       
}