<?php
/**
*项目的书籍模块类-->>written by LAMP76-36
*主要是作者在会员中心对书籍的操作,书籍的公开操作在bookinfoclass.class.php
*_initialize方法：类的初始化方法，检测用户的权限
*bookList方法：书籍列表
*add方法：添加书籍
*doadd方法：接收添加书籍的额数据
*del方法：删除书籍的方法
*/

class BookAction extends PublicAction {


	//书籍列表
	public function booklist(){

		//获取当前作者的user_id
		$user_id=$_SESSION['user_id'];
		//显示作者的书籍列表
		$book=D('Book');
		$where="user_id=$user_id";
		$books=$book->where($where)->select();
		$i=1;
		$this->assign('booklist',$books);
		$this->assign('i',$i);
		$this->display();
	}

	//添加书籍的方法
	public function add(){
		//书籍类别
		//实例化一个Cats类的实例
		//搜索的所有的书籍类别
		//检测是否登录
        $this->islogin();
		$cat=D('Cats');
		$cats=$cat->showCats();
		dump($cats);
	
		//把类别的数组赋给模版变量
		$this->assign('cat',$cats);

		$this->display();
	}
	public function doAdd(){
		//检测是否登录
        $this->islogin();
		//收集添加书籍表单传过来的数据
		$data['user_id']=$_SESSION['user_id'];//作者的id
		$data['book_name']=$_POST['book_name'];//书籍的名字
		$data['book_cat']=$_POST['book_cat'];//书籍的类别
		$data['tags']=$_POST['tags'];//书籍的标签
		$data['status']=$_POST['status'];//书籍的状态，是否连载完
		$data['book_info']=$_POST['book_info'];//书籍的简介信息
		$data['public_time']=time();//书籍的创建时间

		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Uploads/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		}
		
		//设置书籍封面的url
		$cover_url=$info[0]['savepath'].$info[0]['savename'];
		$data['book_cover']=$cover_url;
		$book=M('Book');
		$res=$book->add($data);
		if($res){
			$this->success('添加成功');
		}else{
			$this->error('添加失败');
		}
	}


	
	//删除书籍的方法
    public function del(){
    	//检测是否登录
        $this->islogin();
		//获取书籍的id
		$book_id=$_GET['book_id'];
	
		//判断该书籍下是否有章节
		//先删除该书籍下的所有章节
		$book_chaps=M('Chapter');
		$where='book_id='.$book_id;
		$res=$book_chaps->where($where)->select();
		if($res){
			//存在章节，删除所有章节
			$res1=$book_chaps->where($where)->delete();
			//如果删除成功，再删除书籍信息
			if($res1){
				//建立Book表的模型
				$book=M('Book');
				$where="book_id=$book_id";
				$res2=$book->where($where)->delete();
					if($res2){
						$this->success('删除成功');
					}else{
						$this->error('删除失败');
					}
			}
		}else{
			//如果不存在章节，则直接删除书籍信息
			$book=M('Book');
				$where="book_id=$book_id";
				$res2=$book->where($where)->delete();
					if($res2){
						$this->success('删除成功');
					}else{
						$this->error('删除失败');
					}
		}
    }



    
    //显示某分类下书籍方法
    public function category(){

        $this->display();
    }
    //显示书籍简介信息方法
    public function info(){

    	$this->display();
    }
    //显示免费书籍方法
    public function free(){
    	$book=M('Book');
    	//最新免费书籍
		//$newfree=$book->where('needscore=0')->order('public_time desc')->select();
		$newfree=$book->where('needscore=0')->order('public_time desc')->select();
    	$this->assign('newfree',$newfree);
    	//最近更新免费书籍
    	$newupdate=$book->where('needscore=0')->order('update_time desc')->limit(10)->select();
    	$this->assign('newupdate',$newupdate);
    	//免费书籍点击排行榜
    	$hits=$book->where('needscore=0')->order('hits desc')->limit(10)->select();
    	$this->assign('hits',$hits);
    	//免费书籍随机推荐
    	$rand=$book->where('needscore=0')->limit(10)->select();
    	// $rand=shuffle($rand);
    	$this->assign('rand',$rand);
    	//免费书籍字数榜
    	$size=$book->where('needscore=0')->order('book_size desc')->limit(10)->select();
    	$this->assign('size',$size);
    	$this->display();
    }
    //显示VIP书籍方法
    public function vip(){
    	$book=M('Book');
    	//最新免费书籍
    	$newfree=$book->where('needscore>0')->order('public_time desc')->select();
    	$this->assign('newfree',$newfree);
    	//最近更新免费书籍
    	$newupdate=$book->where('needscore>0')->order('update_time desc')->limit(10)->select();
    	$this->assign('newupdate',$newupdate);
    	//免费书籍点击排行榜
    	$hits=$book->where('needscore>0')->order('hits desc')->limit(10)->select();
    	$this->assign('hits',$hits);
    	//免费书籍随机推荐
    	$rand=$book->where('needscore>0')->limit(10)->select();
    	// $rand=shuffle($rand);
    	$this->assign('rand',$rand);
    	//免费书籍字数榜
    	$size=$book->where('needscore>0')->order('book_size desc')->limit(10)->select();
    	$this->assign('size',$size);
    	$this->display();
    }
    //显示排行榜方法
    public function rank(){
    	$book=M('Book');

    	//点击榜
    	$hits=$book->order('hits desc')->select();
    	$this->assign('hits',$hits);
    	//章节榜
    	$chapters=$book->order('total desc')->select();
    	$this->assign('chapters',$chapters);
    	//推荐榜
    	$recommend=$book->order('recommend desc')->select();
    	$this->assign('recommend',$recommend);
    	//字数榜
    	$size=$book->order('book_size desc')->select();
    	$this->assign('size',$size);
    	$this->display();
    }
}