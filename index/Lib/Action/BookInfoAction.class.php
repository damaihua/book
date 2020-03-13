<?php
/*小说的公共信息类 ->> written by LAMP76-36
*该类主要是小说的公共信息
*不需要用户登录就能够看到的
*index方法:小说的信息
*/

class BookInfoAction extends Action{
	
	//小说的信息显示方法
	public function index(){
		//获取小说的id
		$book_id=$_GET['book_id'];
		
		//根据id获取小说的信息
		$book=D('Book');
		$book_info=$book->relation(true)->select($book_id);
		//获取小说的tags
		$tags=explode(' ',$book_info[0]['tags']);
		//获取小说的进度类别的id
		$pro_id=$book_info[0][progress];
		//根据id查处进度名称，并给模版赋值
		$pro=M('Cats');
		$pro_name=$pro->getFieldByCatId($pro_id,'cat_name');
		
		//根据小说的id获得小说的最近更新免费章节
		$chapters=M('Chapter');
		$where['book_id']=$book_id;
		$where['charge']=0;
		$chapter=$chapters->where($where)->order('update_time desc')->find();
		//小说的最近更新收费章节
		$where['book_id']=$book_id;
		$where['charge']=1;
		$charge=$chapters->where($where)->order('update_time desc')->find();

		//根据小说的id获取作者的小说的数组
		$book=D('Book');
		$where='user_id='.$book_info[0]['user_id'];
		$books=$book->where($where)->relation(true)->select();
		
		//获取小说的评论
		$com=D('Comment');
		$where='book_id='.$book_id;
		import('ORG.Util.Page');// 导入分页类
		$count= $com->where($where)->count();// 查询满足要求的总记录数
		$Page= new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
		$show= $Page->show();// 分页显示输出

		$coms=$com->where($where)->relation(true)->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		
		//删除小说评论的链接
		$del='';
		if ($_SESSION['user_name']==$book_info[0]['user_name']){
				$del='<a href="">[删除]</a>';
		}

		//为模版变量赋值
		$i=1;
		$session_id=$_SESSION['user_id'];
		$delete='[删除]';
		$this->assign('i',$i);
		$this->assign('del',$del);
		$this->assign('delete',$delete);
		$this->assign('session_id',$session_id);
		$this->assign('charge',$charge);//小说的最近更新的收费章节
		$this->assign('chap',$chapter);//小说的最近更新的免费章节
		$this->assign('progress',$pro_name);//小说的进度
		$this->assign('book_info',$book_info);//小说的信息
		$this->assign('tags',$tags);//小说的标签
		$this->assign('comment',$coms);//小说的评论
		$this->assign('page',$show);//小说的分页
		$this->assign('books',$books);
		$this->display();
	}

	//小说的所有标签
	public function tags(){
		$tags=D('Book');
		dump($tags->tags());
	}
}