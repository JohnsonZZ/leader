<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
		$News = M('News');
		$count = $News ->count();
		$Page = new \Think\Page($count,8);
		$news = $News -> order('time desc') -> limit($Page->firstRow . ',' . $Page->listRows) -> select();
		$list = $News -> order('time desc') -> limit(5) -> select();
		$show = $Page-> show(); // 分页显示输出
		$this -> assign('page', $show); // 赋值分页输出
		$this -> assign('news',$news);
		$this -> assign('list',$list);
        $this -> display();
	}
	public function news(){
		$data['id'] = I('get.id');
		$News = M('News');
		$news = $News -> where($data) -> find();
		$this -> assign('news',$news);
		$this->display();
	}
}