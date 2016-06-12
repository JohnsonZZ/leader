<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){
		$Goods = M('Goods');
		$goods = $Goods -> order('ol asc') ->limit(6) -> select();
		$this->assign('goods',$goods);
        $this->display();
	}
}