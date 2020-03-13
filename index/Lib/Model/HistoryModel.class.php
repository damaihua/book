<?php
	
	class HistoryModel extends RelationModel{
		
		//���ø����͵Ĺ�������
		protected $_link=array(
			
			//��С˵�Ĺ���
			'Book'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Book',
				'foreign_key'=>'book_id',
				'mapping_fields'=>'book_name,book_cover',
				'as_fields'=>'book_name,book_cover'
			),

			
			//���û�ģ�͵Ĺ���
			'User'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'User',
				'foreign_key'=>'User_id',
				'mapping_fields'=>'user_name',
				'as_fields'=>'user_name'
			),				
		);

		
	}