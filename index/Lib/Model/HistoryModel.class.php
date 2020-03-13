<?php
	
	class HistoryModel extends RelationModel{
		
		//设置该类型的关联属性
		protected $_link=array(
			
			//和小说的关联
			'Book'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Book',
				'foreign_key'=>'book_id',
				'mapping_fields'=>'book_name,book_cover',
				'as_fields'=>'book_name,book_cover'
			),

			
			//和用户模型的关联
			'User'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'User',
				'foreign_key'=>'User_id',
				'mapping_fields'=>'user_name',
				'as_fields'=>'user_name'
			),				
		);

		
	}