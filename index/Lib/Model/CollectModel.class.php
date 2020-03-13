<?php
	
	class CollectModel extends RelationModel{
		
		//���ø����͵Ĺ�������
		protected $_link=array(
			
			//��С˵�Ĺ���
			'Book'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Book',
				'foreign_key'=>'book_id',
				'mapping_fields'=>'book_name',
				'as_fields'=>'book_name'
			),

			//���½�ģ�͵Ĺ���
			'Chapter'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Chapter',
				'foreign_key'=>'chapter_id',
				'mapping_fields'=>'chapter_title',
				'as_fields'=>'chapter_title'
			),			
		);

		
	}