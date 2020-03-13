<?php

	/*LetterModel:
	*用户站内信的模型类 ->>writtten by LAMP76-36
	*此类属关联模型类，关联到user模型
	*
	*/

	class LetterModel extends RelationModel{
		protected $_link=array(
			'User'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'User',
				'foreign_key'=>'letter_from',
				'mapping_fields'=>'user_name',
				'as_fields'=>'user_name'
			),	
		);

		//搜索用户的未读消息方法
		public function noReadNum(){
			//搜索用户收件箱中的未读邮件个数
			$user_name=$_SESSION['user_name'];
			$where['letter_to']=$user_name;
			$where['status']='0';
			$num=$this->where($where)->count('letter_id');
			return $num;
		}
	}