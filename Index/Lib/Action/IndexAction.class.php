<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		
		if(IS_POST){
			header("Content-type:text/html;charset=utf-8");
			if(!empty($_POST['baoming'])){
				if(empty($_POST['hd_id'])){
					$this->assign('error','错误操作');
				}
				
				$hd_id=$this->_post('hd_id');
				
				$bm_db=M('baoming');
			
				if(empty($_POST['name'])||empty($_POST['phone'])||empty($_POST['dianpu'])){           /* ||empty($_POST['beizhu']) */
					$this->assign('error','名字或店铺或手机号或备注不能为空！！');
				}else if($_POST['dianpu']=='0'){
					$this->assign('error','请选择店铺');
				}else if(!preg_match('/((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8}/',$_POST['phone'])){
					$this->assign('error','手机号码格式不正确');
				}else if($bm_db->where("hd_id=".$hd_id." and name='".$this->_post('name')."'")->find()){
					$this->assign('error','此名字已被使用！');
				}else if($bm_db->where("hd_id=".$hd_id." and phone='".$this->_post('phone')."'")->find()){
					$this->assign('error','此手机号已被使用！');
				}else{
					$data['hd_id']=$hd_id;
					$data['name']=$this->_post('name');
					$data['dianpu']=$this->_post('dianpu');
					$data['phone']=$this->_post('phone');
					$data['remarks']=$this->_post('beizhu');
					$data['c_time']=time();
					if($res=$bm_db->add($data)){
						$this->redirect('', array('id' => $data['hd_id']), 3, '报名成功！页面跳转中...');exit;
					}else{
						$this->assign('error','报名失败！');
					}
				}
			}
		}
		
		if(empty($_GET['id'])&&empty($_POST['hd_id'])){
			$this->error('错误操作');
		}else{
			$hd_id=empty($_GET['id'])?$this->_post('hd_id'):$this->_get('id');
		}
		
		if(session('hd_id')!=$hd_id||!session('?hd_id')){
			session('hd_id',$hd_id);
			session('who',null);
		}
		
		$hddb=M('huodong');
		$hd_row=$hddb->field('huodong.*,user.account')->join('user ON huodong.u_id=user.id')->where('huodong.id='.$hd_id.' and huodong.status=1')->find();
		if(!session('?who')){
			$hddb->where('id='.$hd_row['id'].' and status=1')->save(array('view'=>$hd_row['view']+1));
			session('who','yes');
		}
		$baoming_db=M('baoming');
		
		
		
		import('ORG.Util.Page');// 导入分页类
		$bm_count      = $baoming_db->where('hd_id='.$hd_row['id'])->count();// 查询满足要求的总记录数
		$bm_Page       = new Page($bm_count,15);// 实例化分页类 传入总记录数和每页显示的记录数
		$bm_show       = $bm_Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$bm_list = $baoming_db->where('hd_id='.$hd_row['id'])->order('c_time desc')->limit($bm_Page->firstRow.','.$bm_Page->listRows)->select();
		$this->assign('bm_show',$bm_show);// 赋值分页输出
		$this->assign('bm_count',$bm_count);// 赋值分页输出
		
		
		
		
		foreach($bm_list as $k=>$v){
			if(($v['c_time']+180)>=time()){
				$bm_list[$k]['bm_time']='刚刚';
			}else if($v['c_time']<=strtotime('+1 '.date('Y-m-d',$v['c_time']))){
				$time1=time()-$v['c_time'];
				if($time1<3600){
					$time2=round($time1/60);
				$bm_list[$k]['bm_time']=$time2.'分钟';
				}else{
					$time2=round($time1/3600);
				$bm_list[$k]['bm_time']=$time2.'小时前';
				}
			}else{
				$bm_list[$k]['bm_time']=date('m-d',$v['c_time']);
			}
		}
		
		
		$ly_db=M('liuyan');
		
		import('ORG.Util.TPage');// 导入分页类
		$ly_count      = $ly_db->where('hd_id='.$hd_row['id'].' and status=1')->count();// 查询满足要求的总记录数
		$ly_Page       = new Page1($ly_count,15);// 实例化分页类 传入总记录数和每页显示的记录数
		$ly_show       = $ly_Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$ly_list = $ly_db->field('liuyan.*,user.account')->where('hd_id='.$hd_row['id'].' and liuyan.status=1')->join("user ON liuyan.re_id=user.id")->order('c_time desc')->limit($ly_Page->firstRow.','.$ly_Page->listRows)->select();
		$this->assign('ly_show',$ly_show);// 赋值分页输出
		
		$dp_db=M('dianpu');
		$dp_list=$dp_db->select();
		$this->assign('dpshow',$dp_list);
		
		
		$this->assign('ly_list',$ly_list);
		$this->assign('bm_row',$bm_list);
		$this->assign('hd_row',$hd_row);
		$this->display('./index');
		
    }
	
	
	public function liuyan(){
		
		if(IS_AJAX){
			if(empty($_POST['hd_id1'])||empty($_POST['name1'])||empty($_POST['phone1'])||empty($_POST['liuyan1'])){
				echo "err1";exit;
			}else if(!preg_match('/((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8}/',$_POST['phone1'])){
				echo 'err2';exit;
			}
			
			$ly_db=M('liuyan');
			
			$data['hd_id']=$this->_post('hd_id1');
			$data['name']=$this->_post('name1');
			$data['phone']=$this->_post('phone1');
			$data['liuyan']=$this->_post('liuyan1');
			$data['c_time']=time();
			
			if($ly_db->add($data)){
				echo 'success';exit;
			}else{
				echo 'err3';exit;
			}
		}
	
	}

	
}









