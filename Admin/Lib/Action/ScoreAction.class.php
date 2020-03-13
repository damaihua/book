<?php
// 本类由系统自动生成，仅供测试用途
class ScoreAction extends PublicAction {
    //点卡管理页面
    public function score_main(){
        
        $paycard=M('Paycard');
        $data=$paycard->order('paycard_score')->select();
        $this->assign('data',$data);
        $this->display();
    }
    //点卡增加页面 
    public function score_add(){
        $this->display();
    }
    //处理增加点卡方法
    public function do_score_add(){
        $data['paycard_score']=I('paycard_score');
        $data['paycard_money']=I('paycard_money');
        $paycard=M('Paycard');
        $paycard->create();
        if($paycard->add($data)){
             $this->success('点卡添加成功！','__APP__/score/score_main');
        }else{
            $this->error('点卡添加失败！');
        }
    }
    //点卡删除方法
    public function paycard_del(){
        $paycard=M('Paycard');
        if($paycard->delete($_GET['id'])){
            $this->success('点卡删除成功！');
        }else{
            $this->error('点卡删除失败！');
        }
    }
    //积分奖罚管理页面
    public function score_role(){
        $score_role=M('Score_role');
        $data=$score_role->select();
        $this->assign('data',$data);
        $this->display();
    }
    //积分奖罚修改页面
    public function score_role_edit(){
        $score_role=M('Score_role');
        $id=$_GET['id'];
        $data=$score_role->find($id);
        $this->assign('data',$data);
        $this->display();
    }
    //积分奖罚修改方法
    public function do_score_role_edit(){
        $score_role=M('Score_role');
        $id=I('id');
        // echo $id;exit;
        $data['name']=I('name');
        $data['type']=I('type');
        $data['score']=I('score');
        // dump($data);exit;
        $result=$score_role->where("id=$id")->save($data);
        if($result){
            $this->success('修改成功',U('score/score_role'));
        }elseif($result===0){
            $this->error('未做修改');
        }else{
            $this->error('修改失败');
        }
    }
}