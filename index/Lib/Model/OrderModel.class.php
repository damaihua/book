<?php
		/*С˵�½ڵĶ�����written by ->>LAMP76-36
		*orders�����������û����ж��ĵ��½ڵ�����
		*/

		class OrderModel extends RelationModel{
		
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
				'mapping_fields'=>'chapter_title,much',
				'as_fields'=>'chapter_title,much'
			)	
		);
			

			public function orders($where){
				//����user_id�����������ж����½�
				$order=$this->where($where)->select();
				//�����е��½��������ӳ��ַ������ŵ�һ��������
				foreach($order as $v){
					$order_str.=$v['chapter_id'].',';
				}
				$order_str=rtrim($order_str,',');
				$order_arr=explode(',',$order_str);
				return $order_arr;
			}

		}