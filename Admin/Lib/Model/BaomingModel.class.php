<?php
// 用户模型
class BaomingModel extends CommonModel {
	public $_validate	=	array(
		array('name','require','呢称必须'),
		array('phone','require','联系电话必须'),
		//array('remarks','require','备注必须'),
		);


}
?>