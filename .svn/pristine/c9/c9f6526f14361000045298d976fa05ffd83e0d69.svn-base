<?php
// 本类由系统自动生成，仅供测试用途
class LinksAction extends PublicAction {
    public function index(){
        $this->redirect('__APP__/index/index');
    	
    }
    //显示添加友情接连模板方法
    public function add(){
    	$this->display();
    }
    public function insert(){
    	//判断是否是通过表单提交的
    	$link = D('Link');
    	if($link->create()) {
            $result =  $link->add();
            if($result) {
                $this->success('友情链接申请成功，请等待管理员审核！');
            }else{
                $this->error('友情链接申请失败，请重新申请！');
            }
        }else{
            $this->error($link->getError());
        }
    	
    }

}