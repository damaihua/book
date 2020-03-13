<?php

	/*用户站内信控制器 -->>written by LAMP76-36
	*该类主要是用户站内信的操作
	*包括用户对站内信的增删改查
	*inbox方法:显示用户的收件箱
	*outbox方法:用户的发件箱
	*write方法:用户向其他用户发送消息
	*toadmin方法:向管理员发送消息
	*show方法:读取消息的页面
	*/

	class LetterAction extends Action{
		
		//站内信的收件箱
		public function inbox(){
			//获取数据库中的数据
			$letter=D('Letter');
			//获取当前的用户id
			$where['letter_to']=$_SESSION['user_name'];
			$where['to_sta']=1;
			$data=$letter->relation(true)->where($where)->order('time desc')->select();
			$this->assign('colorA','grey');
			$this->assign('colorB','red');
			$this->assign('staA','(未读)');
			$this->assign('staB','(已读)');
			$this->assign('data',$data);
			$this->display();
		}
		
		//发件箱
		public function outbox(){

			//获取数据库中的数据
			$letter=D('Letter');
			//获取当前的用户id
			$where['letter_from']=$_SESSION['user_id'];
			$where['from_sta']=1;
			$data=$letter->where($where)->order('time desc')->select();
			$this->assign('data',$data);
			$this->display();
		}

		//写新消息
		public function write(){
			$this->display();
		}
		//接收write传过来的数据
		public function dowrite(){
	
			//获取用户的id
			$data['letter_from']=$_SESSION['user_id'];
			$data['letter_to']=$_POST['receiver'];
			$data['letter_title']=$_POST['title'];
			$data['letter_content']=$_POST['content'];
			$data['time']=time();
			//将数据存到letter表中
			$letter=M('Letter');
			$res=$letter->add($data);
			if($res){
				$this->success('发送成功');
			}else{
				$this->error('发送失败');
			}	

		}

		//写给管理员
		public function toadmin(){
			$this->display();
		}

		//接收写给管理员的消息的数据
		public function doadmin(){
			//获取发信用户的id
			$data['letter_from']=$_SESSION['user_id'];
			$data['letter_to']=$_GET['letter_to'];
			$data['letter_title']=$_POST['title'];
			$data['letter_content']=$_POST['content'];
			$data['time']=time();
			
			$letter=M('Letter');
			$res=$letter->add($data);
			if($res){
				$this->success('发送成功');
			}else{
				$this->error('发送失败');
			}
		}

		//查看消息的方法
		public function detail(){
			
			//获取letter_id
			$letter_id=$_GET['letter_id'];
			$letter=D('Letter');
			//判断用户是从收件箱查看的，还是从发件箱查看的
			//查找发件人的id
			$from_id=$letter->getFieldByLetterId($letter_id,'letter_from');
			//如果发件人id和当前用户id相等的话，不改变消息的状态
			//否则改变消息的状态
			if($from_id!=$_SESSION['user_id']){
				//查看消息的时候同时改变消息的状态
				$sta['letter_id']=$letter_id;
				$sta['status']='1';
				$res=$letter->where($where)->save($sta);	
			}

			//再根据id查询数据
			$data=$letter->relation(true)->find($letter_id);
			$this->assign('data',$data);
			$this->display();
		}

		//删除消息的模块
		public function del(){
			//获取消息的id
			$letter_id=$_GET['lette_id'];
			$letter=M('Letter');
			//判断是发件人删除还是收件人删除
			$from_user_id=$letter->getFieldByLetterId($letter_id,'letter_from');//获取发件人id
			//如果发件人id和当前用户id相等，则是发件人删除
			if($from_user_id==$_SESSION['user_id']){
				//改变当前发件人的消息状态
				$data['from_sta']=0;
				$data['letter_id']=$letter_id;
				$res=$letter->save($data);
				//如果改变成功，再判断to_sta的值，如果等于零再删除消息
				if($res){
					$to_sta=$letter->getFieldByLetterId($letter_id,'to_sta');
					if(!$to_sta){
						$res=$letter->delete($letter_id);
						if($res){
							$this->redirect('letter/outbox');
						}	
					}else{
						$this->redirect('letter/outbox');
					}
				}
			}else{
				//改变收件人的消息状态
				$data['to_sta']=0;
				$data['letter_id']=$letter_id;
				$res=$letter->save($data);
				//如果改变成功，再判断from_sta的值，如果等于零再删除消息
				if($res){
					$from_sta=$letter->getFieldByLetterId($letter_id,'to_sta');
					if(!$from_sta){
						$res=$letter->delete($letter_id);
						if($res){
							$this->redirect('letter/inbox');
						}	
					}
				}
			}
			
		}
	} 