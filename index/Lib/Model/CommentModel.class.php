<?php
	

	class CommentModel extends RelationModel{
		
		//设置该类型的关联属性
		protected $_link=array(
			
			//和用户表的关联
			'User'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'User',
				'foreign_key'=>'user_id',
				'mapping_fields'=>'user_name',
				'as_fields'=>'user_name'
			),

			//和小说类别模型的关联
			'Cats'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Cats',
				'foreign_key'=>'book_cat',
				'mapping_fields'=>'cat_sortname',
				'as_fields'=>'cat_sortname'
			),

			//和小说模型的关联
			'Book'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Book',
				'foreign_key'=>'book_id',
				'mapping_name'=>'book',
				'mapping_fields'=>'book_name',
				'as_fields'=>'book_name'
			),			
		);

		
	}