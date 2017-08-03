<?php
namespace app\admin\controller;



class Article extends Base
{
	public function lst(){
		$artres= \think\Db::name('cate')->alias('a')->join('article c','c.cateid = a.id','RIGHT')->paginate(25);
		$this->assign('artres',$artres);
		return $this->fetch('');
	}

	public function add(){

		if (request()->isPost()) {
		$data=[
			'title' => input('title'),
			'keywords' => input('keywords'),
			'desc' => input('desc'),
			'cateid' => input('cateid'),
			'content' => input('content'),
			'time' => time(),
		];

		if ($_FILES['pic']['tmp_name']) {
                $file = request()->file('pic');
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . DS . '/static/uploads');
                if($info){
                    $data['pic']='/static/uploads/'.date('Ymd').'/'.$info->getFilename();
                    // echo $info->getFilename(); die;
                }else{
                    // 上传失败获取错误信息
                    return $this->error($file->getError());
                }
            }

		$validate = \think\Loader::validate('Article');
			if ($validate->check($data)) {
				$db= \think\Db::name('article')->insert($data);
				if ($db) {
					return $this->success('添加文章成功','lst');
				}else{
					return $this->error('添加文章失败！');
				}
			}else{
				return $this->error($validate->getError());
			}

			return;
		}

		$cateres=db('cate')->select();
		$this ->assign('cateres',$cateres);

		return $this->fetch();	
	}

	public function edit(){

		if (request()->isPost()) {
			
			$data=[
				'id'=>input('id'),
				'title'=>input('title'),
				'keywords'=>input('keywords'),
				'desc'=>input('desc'),
				'cateid'=>input('cateid'),
				'content'=>input('content'),
			];

			 if ($_FILES['pic']['tmp_name']) {
                $file = request()->file('pic');
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . DS . '/static/uploads');
                if($info){
                    $data['pic']='/static/uploads/'.date('Ymd').'/'.$info->getFilename();
                    // echo $info->getFilename(); die;
                }else{
                    // 上传失败获取错误信息
                    return $this->error($file->getError());
                }
            }


			$validate = \think\Loader::validate('Article');
				if ($validate->check($data)) {
					$db= \think\Db::name('article')->update($data);	
					if ($db) {
						return $this->success('修改文章成功！','lst');			
					}else{
						return $this->error('修改文章失败');
					}			
				}else{
					return $this->error($validate->getError());
				}

				return;
		}

		$arts= \think\Db::name('article')->where('id',input('id'))->find();

		$cateres=db('cate')->select();
		$this ->assign('cateres',$cateres);
		$this ->assign('arts',$arts);

		return $this->fetch();
			}

	

    public function del(){
        if (db('article')->delete(input('id'))) {
            return $this->success('删除文章成功！','lst');
        }else{
            return $this->error("删除文章失败");
        }
    }



}