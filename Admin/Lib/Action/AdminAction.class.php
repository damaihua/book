<?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends PublicAction {
    public function index(){
        $this->islogin();
        $this->display();
    }
    //管理员列表页面
    public function admin_main(){
        
        $admin=M('Admin');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $admin->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,10);
        // 分页显示输出
        $show = $Page->show();

        $data=$admin->join('book_role_group ON book_admin.group_id = book_role_group.group_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        
        
        $this->assign('data',$data);
        // 赋值分页输出
        $this->assign('page',$show);
        $this->display();
        
    }
    //管理员添加页面
    public function admin_add(){
        $Role_group=M('Role_group');
        $data=$Role_group->select();

        $this->assign('data',$data);
        $this->display();

    }
    //管理员添加方法
    public function do_admin_add(){
        $admin=M('Admin');
        $data['admin_name']=I('admin_name');
        $data['admin_pwd']=md5(I('admin_pwd'));
        $data['group_id']=I('group_id');
        $data['admin_email']=I('admin_email');
        $result=$admin->where("admin_name=I('admin_name')")->find();
        if($result){
            $this->error('该用户名已经存在！');
        }
        $admin->create();
        if($admin->add($data)){
            $this->success('增加管理员成功！');
        }else{
            $this->error('增加管理员失败！');
        }
    }
    //管理员删除方法
    public function admin_del(){
        $admin_id=$_GET['id'];
        if($admin_id==1){
            $this->error('内置系统管理员不允许删除！');
        }
        $admin=M('Admin');
        if($admin->where("admin_id=$admin_id")->delete()){
            $this->success('管理员删除成功');
        }else{
            $this->error('管理员删除失败');
        }
    }
    //管理员收信箱
    public function admin_letter(){
        $letter=M('letter');
        $data=$letter->table('book_letter as a')->join("book_user_info as b on a.letter_from =b.user_id ")->where("a.letter_to='admin'")->select();
        $this->assign('data',$data);
        $this->display();
    }
    //权限组页面
    public function admin_group(){
        
        $Role_group=M('Role_group');
        $data=$Role_group->select();
        $this->assign('data',$data);
        $this->display();
    }
    //添加权限组页面
    public function group_add(){
        
        $this->display();
    }
    //添加权限组处理方法
    public function do_group_add(){
        $data['group_name']=I('group_name');
        $data['role_id'].=implode(',', I('role_id'));
        
        $role_group=M('Role_group');
        $role_group->create();
        $role_group->add($data);
    }
    //删除权限组方法
    public function group_del(){
        $role_group=M('Role_group');
        if($role_group->delete($_GET['id'])){
            $this->success('用户组删除成功');
        }else{
            $this->error('用户组删除失败');
        }
    }

}