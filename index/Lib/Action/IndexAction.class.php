<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends PublicAction {
    public function index(){
        //公告板
        $notice=M('Notice');
        $notice=$notice->limit(8)->select();
        $this->assign('notice',$notice);

    	$book=M('Book');
    	//强力推荐
    	$abook=$book->table('book_book as a,book_cats as b')->where("a.book_cat=b.cat_id and a.flags like '%a%'")->limit(7)->select();
    	$this->assign('abook',$abook);
    	//最新完本
    	$endbook=$book->table('book_book as a,book_cats as b')->order('a.public_time')->where('a.book_cat=b.cat_id and a.progress=59')->limit(7)->select();
    	$this->assign('endbook',$endbook);
    	//封面推荐
    	$bbook=$book->table('book_book as a,book_cats as b')->where("a.book_cat=b.cat_id and a.flags like '%b%'")->limit(3)->select();
    	$this->assign('bbook',$bbook);
        //最新上架
        $newbook=$book->table('book_book as a,book_cats as b')->order('a.public_time')->where('a.book_cat=b.cat_id')->limit(12)->select();
        $this->assign('newbook',$newbook);
        //编辑推荐
        $bianji=$book->table('book_book as a,book_cats as b')->where("a.book_cat=b.cat_id and a.flags like '%c%'")->select();
        $this->assign('bianji',$bianji);
        //精品推荐
        $jingpin=$book->table('book_book as a,book_cats as b')->where("a.book_cat=b.cat_id and a.flags like '%d%'")->select();
        $this->assign('jingpin',$jingpin);
        //
     
        // $wenxue=$book->table('book_book as a,book_cats as b')->order('a.book_cat')->where('a.book_cat=b.cat_id and a.book_cat=4')->limit(7)->select();
        // $this->assign('wenxue',$wenxue);
        //  dump('bianji');
        //  dump($bianji);
        //最近更新
        $book=D('Book');
        $newUpdate=$book->relation(true)->select();
        // dump($newUpdate);
        $this->assign('newUpdate',$newUpdate);
        //热评榜
        $book=M('Book');
        $hots=$book->order('hits asc')->select();
        $this->assign('hots',$hots);
       
        //最新评论
        $comment=D('Comment');
        $comment=$comment->relation(true)->order('time desc')->select();
        $this->assign('comment',$comment);
        //会员积分排行榜
        $user_info=M('User_info');
        $user_info=$user_info->order('user_score desc')->select();
        $this->assign('user_info',$user_info);
        //友情链接
        $link=M('Link');
        $links=$link->where('status=1')->limit(32)->select();
        $this->assign('links',$links);
    	//显示模板
    	$this->display();
    }
    
}