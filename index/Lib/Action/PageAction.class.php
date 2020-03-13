<?php
// 本类由系统自动生成，仅供测试用途
class PageAction extends Action {
		
    	public function index(){
    	$Pages = M('Pages');
    	//获取左侧导航列表
   		$title = $Pages->field('title,id')->select();
   		$this->assign('title',$title);
   		

   		$id=$_GET['id'];
   		
   		$data=$Pages->find($id);
   		$this->assign('data',$data);

   		$this->display();

    	}






}