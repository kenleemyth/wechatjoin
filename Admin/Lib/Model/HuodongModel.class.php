<?php
// 用户模型
class HuodongModel extends CommonModel {
	public $_validate	=	array(
		array('title','require','标题必须'),
		array('content','require','内容必须'),
		array('date1','require','开始时间必须'),
		array('date2','require','结束时间必须'),
		);


}
?>