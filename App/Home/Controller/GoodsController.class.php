<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
		$Goods = M('Goods');
		$count = $Goods -> count();
		$Page = new \Think\Page($count,16);
		$goods = $Goods -> order('time desc') -> limit($Page->firstRow . ',' . $Page->listRows) -> select();
		$show = $Page-> show(); // 分页显示输出
		$this -> assign('page', $show); // 赋值分页输出
		$this -> assign('goods',$goods);
        $this -> display();
	}
}