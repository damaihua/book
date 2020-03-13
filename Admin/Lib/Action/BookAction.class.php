<?php
		/*后台管理小说的控制器book_list
		*管理小说分类
		*管理小说的章节
		*/
class BookAction extends PublicAction {
    //小说管理页面
    public function book_main(){
        //检测是否登录
        $this->islogin();
        $book=M('Book');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $book->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,10);
        // 分页显示输出
        $show = $Page->show();
        $books=$book->limit($Page->firstRow.','.$Page->listRows)->select();
        // 赋值数据集
        $this->assign('books',$books);
        // dump($books);
        // 赋值分页输出
        $this->assign('page',$show);

        $this->display();
    }
    //小说审核页面
    public function book_edit(){
        $book_id=$_GET['book_id'];
        $this->assign('book_id',$book_id);
        $book=D('Cats');
        //调用选择分类列表
        $catlist=$book->selectCats(0);
        // 调用选择进度列表
        $proglist=$book->selectCats(1);
        //获取推荐位信息
        $flags=getData('Book',$book_id,'flags');
        $array=explode(',', $flags);
        if(in_array('a', $array)){

        }
        $this->assign('catlist',$catlist);
        $this->assign('proglist',$proglist);
        $this->display();
    }
    //小说审核方法
    public function do_book_edit(){
        $data['book_id']=I('book_id');
        $data['flags']=implode(',', I('flags'));
        $data['book_name']=I('book_name');
        $data['book_cat']=I('book_cat');
        $data['progress']=I('progress');
        $data['book_info']=I('book_info');
        // dump($data);exit;
        $book=D('Book');
        $book->create();
        $result=$book->save($data);
        if($result){
            $this->success('小说审核成功');
        }else{
            $this->error('小说审核失败');
        }
    }
    //小说删除方法
    public function book_del(){
        $book_id=$_GET['book_id'];
        // 检测该小说是否有章节，如果有提示不允许删除，没有则可以删除
        $book=M('book');
        $total=$book->where("book_id=$book_id")->getField('total');
        // echo $total;exit;
        if($total){
            $this->error('该小说有章节，不允许删除！');
        }else{
            $result=$book->where("book_id=$book_id")->delete();
            if($result){
                $this->success('小说删除成功！');
            }else{
                $this->erroe('小说删除失败！');
            }
           
        }
    }
    //章节管理页面
    public function chapter_main(){
        $chapter=M('Chapter');
        // 导入分页类
        import('ORG.Util.Page');
        // 查询满足要求的总记录数
        $count = $chapter->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new Page($count,10);
        // 分页显示输出
        $show = $Page->show();
        
        $data=$chapter->select();
        // dump($data);
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
    }
    //章节删除方法
    public function chapter_del(){
        $id=$_GET['id'];
        $chapter=M('Chapter');
        $result=$chapter->delete($id);
        if($result){
                $this->success('章节删除成功！');
            }else{
                $this->erroe('章节删除失败！');
            }
    }
    //小说分类管理页面
    public function cat_main(){
        //检测是否登录
        $this->islogin();
        $cats=M('Cats');
        $cats=$cats->where('type=0')->order('ordernum asc')->select();
        //分配数据并将数据输出到模板
        $this->assign('cats',$cats);
        $this->display();
    }
    //添加分类页面
    public function cat_add(){
        //检测是否登录
        $this->islogin();
        //调用模板文件
        $this->display();
        
    }
    //增加分类方法
    public function insert(){
        $this->islogin();
        //判断是否是通过表单提交的
        if(I('submit')){
            //实例化一个cats类
            $cats=M('Cats');
            // 判断输入分类是否存在
            $result=$cats->where(array('cat_name'=>I('cat_name')))->find();
            if($result){
                $this->error('该分类已经存在，请重新输入！');
            }
            $cats->create();
            $result =  $cats->add();
            if($result) {
                $this->success('分类添加成功！');
            }else{
                $this->error('分类添加失败！');
            }
        }
    }
    //显示修改分类页面
    public function cat_edit(){
        //检测是否登录
        $this->islogin();
        $cid=$_GET['cid'];
        $cats=M('Cats');
        $cat=$cats->find($cid);
        $this->assign('cat',$cat);
        $this->display();
    }
    //修改分类方法
    public function update(){
        //检测是否登录
        $this->islogin();
        //实例化一个cats类
        $cats=D('Cats');
        //判断修改后的分类名是否与其他分类重复
        $num=$cats->where(array('cat_name'=>I('cat_name')))->count('cat_id');
        if($num>1){
            $this->error('该分类已经存在，请重新输入！');
        }
        $cats->create();
        $result =   $cats->save();
        if($result) {
            $this->success('分类修改成功！');
        }else{
            $this->error('分类修改错误！');
        }
         
    }
    //删除分类方法
    public function cat_del(){
        //检测是否登录
        $this->islogin();
        $cid=$_GET['cid'];
        $cats=M('Cats');
        $cat=$cats->find($cid);

        if($cat['total']){
            $this->error('该分类下还有小说，不允许删除！');
        }
        
        if($cats->delete($cid)){
            $this->success('该分类删除成功');
        }
        
    }

}