<?php
class BaomingAction extends CommonAction {
	public function index(){
		if(empty($_GET['is_main'])&&empty($_POST['is_main'])){
			$db=M('dianpu');
			$res=$db->where('status=1')->select();
			$this->assign('res',$res);
			$this->display();
		}else{
			if(empty($_GET['name'])&&empty($_POST['name'])){
				$this->error('错误操作');exit;	
			}
			$name=empty($_GET['name'])?$this->_post('name'):$this->_get('name');
			$model=M('baoming');

			$map['dianpu']=$name;
			
			//列表过滤器，生成查询Map对象
			if(!empty($_POST['account'])){
				$map['name']=array('like','%'.$this->_post('account').'%');
			}
			//print_r($map);exit;
			//排序字段 默认为主键名
			if (!empty ( $_REQUEST ['_order'] )) {
				$order = $_REQUEST ['_order'];
			} else {
				$order = ! empty ( $sortBy ) ? $sortBy : $model->getPk ();
			}
			//排序方式默认按照倒序排列
			//接受 sost参数 0 表示倒序 非0都 表示正序
			if (isset ( $_REQUEST ['_sort'] )) {
	//			$sort = $_REQUEST ['_sort'] ? 'asc' : 'desc';
				$sort = $_REQUEST ['_sort'] == 'asc' ? 'asc' : 'desc'; //zhanghuihua@msn.com
			} else {
				$sort = $asc ? 'asc' : 'desc';
			}
			$pagenum=empty($_POST['pageNum'])?1:$this->_post('pageNum');
			//取得满足条件的记录数
			//print_r($map);exit;
			$count = $model->where ( $map )->count ( 'id' );
			//echo $model->getlastsql();exit;
			if ($count > 0) {
				import ( "@.ORG.Util.Page" );
				//创建分页对象
				if (! empty ( $_REQUEST ['listRows'] )) {
					$listRows = $_REQUEST ['listRows'];
				} else {
					$listRows = 10;
				}
				$p = new Page ( $count, $listRows );
				//echo  $p->firstRow . ',' . $p->listRows.$listRows;
				//分页查询数据
				$voList = $model->field('baoming.*,huodong.title')->where($map)->join('huodong ON huodong.id = baoming.hd_id')->order( "`" . $order . "` " . $sort)->page($pagenum,$listRows)->select ( );

				//echo $model->getlastsql();
				//分页跳转的时候保证查询条件
				foreach ( $map as $key => $val ) {
					if (! is_array ( $val )) {
						$p->parameter .= "$key=" . urlencode ( $val ) . "&";
					}
				}
				//分页显示
				$page = $p->show ();
				//列表排序显示
				$sortImg = $sort; //排序图标
				$sortAlt = $sort == 'desc' ? '升序排列' : '倒序排列'; //排序提示
				$sort = $sort == 'desc' ? 1 : 0; //排序方式
				//模板赋值显示
				$this->list=$voList;
				$this->assign ( 'list', $voList );
				$this->assign ( 'sort', $sort );
				$this->assign ( 'order', $order );
				$this->assign ( 'sortImg', $sortImg );
				$this->assign ( 'sortType', $sortAlt );
				$this->assign ( "page", $page );
			}
			
			//zhanghuihua@msn.com
			$this->assign ( 'totalCount', $count );
			$this->assign ( 'numPerPage', $p->listRows );
			$this->assign ( 'currentPage', !empty($_REQUEST[C('VAR_PAGE')])?$_REQUEST[C('VAR_PAGE')]:1);
				
			Cookie::set ( '_currentUrl_', __SELF__ );
				
			
			
			$this->assign('name',$name);
		
			$this->display('list1');
		}
	}
	
	
	function edit() {
		if(empty($_GET['id'])){
			$this->error('非法操作');exit;
		}
		$model = M ( 'baoming' );
		$id = $this->_get('id');
		$vo = $model->getById ( $id );
		$this->assign ( 'vo', $vo );
		$this->display ();
	}
	
	
	

	
	
	public function foreverdelete() {
		//删除指定记录
		$model = D ('baoming');
		if (! empty ( $model )) {
			$pk = $model->getPk ();
			$id = $_REQUEST [$pk];
			if (isset ( $id )) {
				$condition = array ($pk => array ('in', explode ( ',', $id ) ) );
				if (false !== $model->where ( $condition)->delete ()) {
					$db=M('role_user');
					$condition2=
					$res=$db->where ( array('user_id'=>array('in', explode ( ',', $id )))  )->delete ();
					//echo $model->getlastsql();
					$this->success ('删除成功！');
				} else {
					$this->error ('删除失败！');
				}
			} else {
				$this->error ( '非法操作' );
			}
		}
		$this->forward ();
	}
	

	

	
}
?>