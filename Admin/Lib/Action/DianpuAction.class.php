<?php
// 后台用户模块
class DianpuAction extends CommonAction {
		
	function insert() {
		//B('FilterString');
		$name='dianpu';
		$model = D ($name);
		if (false === $model->create ()) {
			$this->error ( $model->getError () );
		}
		
		$data=$model->create();
		
		
		//$data['u_id']=session('authId');
		$data['name']=$this->_post('name');
		$data['status']=$this->_post('status');
		
		//保存当前数据对象
		$list=$model->add ($data);
		if ($list!==false) { //保存成功
			$this->assign ( 'jumpUrl', Cookie::get ( '_currentUrl_' ) );
			$this->success ('新增成功!');
		} else {
			//失败提示
			$this->error ('新增失败!');
		}
	}
	
	
	
	
	function update() {
		//B('FilterString');
		$name='dianpu';
		$model = D ( $name );
		if (false === $model->create ()) {
			$this->error ( $model->getError () );
		}
		
		$data=$model->create();
		
		$data['name']=$this->_post('name');	
		
		// 更新数据
		$list=$model->save ($data);
		if (false !== $list) {
			//成功提示
			$this->assign ( 'jumpUrl', Cookie::get ( '_currentUrl_' ) );
			$this->success ('编辑成功!');
		} else {
			//错误提示
			$this->error ('编辑失败!');
		}
	}
}