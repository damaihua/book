<?php
// 本类由系统自动生成，仅供测试用途
class MemberAction extends PublicAction {
    public function index(){
        $this->islogin();
    	$this->display();
    }
    //会员列表页面
    public function member_main(){
        $this->islogin();
        $user=M('User');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $user->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,10);
        // 分页显示输出
        $show = $Page->show();

        $data=$user->table('book_user as a')->join('book_user_info as b on a.user_id =b.user_id')->field('a.user_id as user_id,a.user_name as user_name,a.user_email as user_email,a.user_type as user_type,a.user_status as user_status,a.reg_time as reg_time,b.user_nicename as user_nicename,b.user_score as user_score')->limit($Page->firstRow.','.$Page->listRows)->select();
        
        $this->assign('regtime',$regtime);
        $this->assign('data',$data);
        
        // 赋值分页输出
        $this->assign('page',$show);
        $this->display();
        
    }
    //会员删除方法
    public function member_del(){
        $user_id=$_GET['user_id'];

        $user=M('User');
        if($user->where("user_id=$user_id")->delete()){
            $this->success('会员删除成功');
        }else{
            $this->error('会员删除失败');
        }
    }
    //会员级别设置页面
    public function  member_lv(){
        $user_lv=M('user_lv');
        $user_lv=$user_lv->select();
        $this->assign('user_lv',$user_lv);
        $this->display();
    }
    //会员留言管理
    public function comment_main(){
        $comment=M('Comment');
        $data=$comment->table('book_comment')->select();
        $this->assign('data',$data);
        $this->display();
    }
    //会员留言删除方法
    public function comment_del(){
        $id=$_GET['id'];
        $comment=M('Comment');
        $result=$comment->delete($id);
        if($result){
            $this->success('删除成功');
        }else{
            $this->error('删除成功');
        }
    }
    //会员信箱页面
    public function letter_main(){
        
        $letter=M('letter');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $letter->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,10);
        // 分页显示输出
        $show = $Page->show();


        $data=$letter->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$data);
        // 赋值分页输出
        $this->assign('page',$show);
    	$this->display();
    }

    //删除会员短信方法
    public function letter_del(){
        $id=$_GET['id'];
        $letter=D('Letter');
        if($letter->delete($id)){
            $this->success('短信删除成功');
        }else{
            $this->error('短信删除失败');
        }
    }

}