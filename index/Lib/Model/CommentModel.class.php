<?php
	

	class CommentModel extends RelationModel{
		
		//���ø����͵Ĺ�������
		protected $_link=array(
			
			//���û���Ĺ���
			'User'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'User',
				'foreign_key'=>'user_id',
				'mapping_fields'=>'user_name',
				'as_fields'=>'user_name'
			),

			//��С˵���ģ�͵Ĺ���
			'Cats'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'Cats',
				'foreign_key'=>'book_cat',
				'mapping_fields'=>'cat_sortname',
				'as_fields'=>'cat_sortname'
			),

			//��С˵ģ�͵Ĺ���
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