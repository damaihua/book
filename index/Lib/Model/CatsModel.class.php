<?php
	/**
	*小说类型的模型
	*/
	class CatsModel extends Model{
	
			//搜索小说类类型表中的说有类别
			public function showCats(){
				
				$cats=$this->where('type=0')->select();
				return $cats;
			}

			//搜索小说进度的类别的方法
			public function showProg(){
				return $prog=$this->where('type=1')->select();
			}
	}