<?php
namespace app\index\controller;


class Article extends Base
{
	
	public function index()
	{
		$id=input('artid');
		db('article')->where('id',$id)->setInc("click");
		$arts=\think\Db::name('article')->alias('a')->join('cate c','c.id=a.cateid','LEFT')->field('a.keywords,a.pic,a.title,a.title,a.content,a.time,a.click,a.id,a.cateid,c.catename')->find($id);

		$this->assign('arts',$arts);
		return $this->fetch('article');
								}
}