<?php
	/**
	*小说类型的模型
	*/
	class CatsModel extends Model{
	
			//搜索小说类类型表中的说有类别
			public function selectCats($type=0){
				$cats=M('Cats');
				$cats=$this->where("type=$type")->select();	
				foreach ($cats as $v) {
					$option.='<option value="'.$v['cat_id'].'">'.$v['cat_name'].'</option>';
				}
				return $option;
				
			}
			


	}