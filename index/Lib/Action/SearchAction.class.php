<?php

	/*所有书籍的页面 ->>written by LAMP76-36
	*index方法：显示所有书籍的最近更新页面
	*并且可以根据条件进行排序
	*/
	class SearchAction extends Action{
		// public function search(){
		// 	if(I('submit')){

		// 	}
		// }
		public function index(){
			//查询所有的书籍类别
			$cats=M('Cats');
			$array['cat']=$cats->where('type=0')->select();

			//查询所有的书籍标签的名字
			$data=D('Book');
			$array['tags']=$data->tags();
			
			//查询所有的写作进度的类别
			$array['pro']=$cats->where('type=1')->select();
			
			$this->assign($array);

			//先接收URL传过来的type值
			//确定搜索的type后，再根据传过来的值进行搜索
			$type='';
			$type=$_GET['type'];//搜索的类型
			$val=$_GET['val'];		//搜索的条件	
			$book=D('Book');

			import('ORG.Util.Page');// 导入分页类

			switch($type){
				case '':
						//如果没有传值的话，默认根据更新时间显示书籍
						$count=$book->count();
						$page= new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
						$page->setConfig('theme','%totalRow% %header%  %upPage% %linkPage% %downPage%');
						$show= $page->show();// 分页显示输出
						// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
						$data=$book->relation(true)->limit($page->firstRow.','.$page->listRows)->order('update_time desc')->select();
						break;
				case 'cats':
						//根据书籍的类别显示
						$where='book_cat='.$val;
						$count=$book->where($where)->count();
						$page= new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
						$page->setConfig('theme','%totalRow% %header%  %upPage% %linkPage% %downPage%');
						$show= $page->show();// 分页显示输出
						// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
						$data=$book->relation(true)->where($where)->limit($page->firstRow.','.$page->listRows)->select();
						break;
				case 'tag':
						//根据书籍的标签搜索
						$where['tags']=array("like","%${val}%");
						$count=$book->where($where)->count();
						$page= new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
						$page->setConfig('theme','%totalRow% %header%  %upPage% %linkPage% %downPage%');
						$show= $page->show();// 分页显示输出
						// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
						$data=$book->where($where)->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
						break;
				case 'pro':
						//根据书籍的进度类别搜索
						$where='progress='.$val;
						$count=$book->where($where)->count();
						$page= new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
						$page->setConfig('theme','%totalRow% %header%  %upPage% %linkPage% %downPage%');
						$show= $page->show();// 分页显示输出
						// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
						$data=$book->relation(true)->where($where)->limit($page->firstRow.','.$page->listRows)->select();
						break;
				case 'other':
						//根据书籍status搜索
						$where="status=".$val;
						$count=$book->where($where)->count();
						$page= new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
						$page->setConfig('theme','%totalRow% %header%  %upPage% %linkPage% 
						%downPage%');
						$show= $page->show();// 分页显示输出
						// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
						$data=$book->relation(true)->where($where)->limit($page->firstRow.','.$page->listRows)->select();
						break;
				//add
				case 'name':
					//根据书籍的类别显示
					$where='book_name='.$val;
					$count=$book->where($where)->count();
					$page= new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
					$page->setConfig('theme','%totalRow% %header%  %upPage% %linkPage% %downPage%');
					$show= $page->show();// 分页显示输出
					// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
					$data=$book->relation(true)->where($where)->limit($page->firstRow.','.$page->listRows)->select();
					break;
			}
			$this->assign('book',$data);
			$this->assign('page',$show);
			$this->display();
			

			//$this->display();
		}

	}