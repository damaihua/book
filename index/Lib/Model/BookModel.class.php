<?php
	/*С˵��Ϣ��ģ���� ->>written by LAMP76-36
	*��ģ����������ģ����
	*������Catsģ����
	*tags��������ȡС˵�е����б�ǩ
	*/

	class BookModel extends RelationModel{
		
		//���ø����͵Ĺ�������
		protected $_link=array(
			
			//���û����Ĺ���
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

			//���½�ģ�͵Ĺ���
			'Chapter'=>array(
				'mapping_type'=>HAS_MANY,
				'class_name'=>'Chapter',
				'foreign_key'=>'book_id',
				'mapping_name'=>'chapter',
				'mapping_limit'=>'1',
				'mapping_order'=>'update_time desc',
				'mapping_fields'=>'chapter_title',
				'as_fields'=>'chapter_title'
			),			
		);

		//��ȡ����С˵��ǩ�ķ���
		public function tags(){
			
			//��ѯbook���е����м�¼���ֶ�
			$data=$this->field('tags')->select();
			$tags='';
			foreach($data as $v){
				$tags.=$v['tags'].' ';
			}
			$tags=explode(' ',$tags);
			array_pop($tags);
			$tags=array_unique($tags);
			return $tags;
		}
	}