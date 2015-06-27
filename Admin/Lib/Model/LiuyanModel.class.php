<?php
// 用户模型
class LiuyanModel extends CommonModel {
	public $_validate	=	array(
		array('name','require','呢称必须'),
		array('phone','require','联系电话必须'),
		array('liuyan','require','留言内容必须'),
		array('re_c','require','回复内容必须'),
		);


}
?>