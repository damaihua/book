<?php
	
	class CollectModel extends RelationModel{
		
		//设置该类型的关联属性
		protected $_link=array(
			
			//和小说的关联
			'Book'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Book',
				'foreign_key'=>'book_id',
				'mapping_fields'=>'book_name',
				'as_fields'=>'book_name'
			),

			//和章节模型的关联
			'Chapter'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Chapter',
				'foreign_key'=>'chapter_id',
				'mapping_fields'=>'chapter_title',
				'as_fields'=>'chapter_title'
			),			
		);

		
	}