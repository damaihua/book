<?php
	/**
	*С˵���͵�ģ��
	*/
	class CatsModel extends Model{
	
			//����С˵�����ͱ��е�˵�����
			public function selectCats($type=0){
				$cats=M('Cats');
				$cats=$this->where("type=$type")->select();	
				foreach ($cats as $v) {
					$option.='<option value="'.$v['cat_id'].'">'.$v['cat_name'].'</option>';
				}
				return $option;
				
			}
			


	}