<?php

	/*С˵���½ڵ�ģ���� written by LAMP76-36
	*��ģ���������book��
	*/

	class ChapterModel extends RelationModel{
		protected $_link=array(
			'Book'=>array(
					'mapping_type'=>BELONGS_TO,
					'class_name'=>'Book',
					'foreign_key'=>'book_id',
					'mapping_fields'=>'book_name',
					'as_fields'=>'book_name'
			),	
		);
	}