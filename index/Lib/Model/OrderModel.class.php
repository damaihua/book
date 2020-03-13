<?php
		/*小说章节的订阅类written by ->>LAMP76-36
		*orders方法：返回用户所有订阅的章节的数组
		*/

		class OrderModel extends RelationModel{
		
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
				'mapping_fields'=>'chapter_title,much',
				'as_fields'=>'chapter_title,much'
			)	
		);
			

			public function orders($where){
				//根据user_id搜索他的所有订阅章节
				$order=$this->where($where)->select();
				//把所有的章节数组链接成字符串，放到一个数组里
				foreach($order as $v){
					$order_str.=$v['chapter_id'].',';
				}
				$order_str=rtrim($order_str,',');
				$order_arr=explode(',',$order_str);
				return $order_arr;
			}

		}