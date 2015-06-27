<?php
// 后台用户模块
class HuodongAction extends CommonAction {
	
	function insert() {
		//B('FilterString');
		$name=$this->getActionName();
		$model = D ($name);
		if (false === $model->create ()) {
			$this->error ( $model->getError () );
		}
		
		$data=$model->create();
		
		$date1=strtotime($this->_post('date1'));
		$date2=strtotime($this->_post('date2'));
		
		if($date1>$date2){
			$this->error('结束日期不能小于开始日期');exit;
		}
		
		$data['u_id']=session('authId');
		$data['status']=$this->_post('status');
		$data['start_time']=$date1;
		$data['stop_time']=$date2;
		
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
		$name=$this->getActionName();
		$model = D ( $name );
		if (false === $model->create ()) {
			$this->error ( $model->getError () );
		}
		
		
		$data=$model->create();
		
		$date1=strtotime($this->_post('date1'));
		$date2=strtotime($this->_post('date2'));
		
		if($date1>$date2){
			$this->error('结束日期不能小于开始日期');exit;
		}
		
		$data['start_time']=$date1;
		$data['stop_time']=$date2;
		
		
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