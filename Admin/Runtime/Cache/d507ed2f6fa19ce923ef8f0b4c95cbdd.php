<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	ul.rightTools {float:right; display:block;}
	ul.rightTools li{float:left; display:block; margin-left:5px}
</style><div class="pageContent" style="padding:5px"><div class="divider"></div><div class="tabs"><div class="tabsHeader"><div class="tabsHeaderContent"><ul><li><a href="javascript:;"><span>店铺</span></a></li></ul></div></div><div class="tabsContent"><div><div layoutH="146" style="float:left; display:block; overflow:auto; width:240px; border:solid 1px #CCC; line-height:21px; background:#fff"><?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul  class="tree"><li><a href="__APP__/Baoming/index/name/<?php echo ($v['name']); ?>/is_main/yes" target="ajax" rel="jbsxBox"><?php echo ($v['name']); ?></a></li></ul><?php endforeach; endif; else: echo "" ;endif; ?></div><div id="jbsxBox" class="unitBox" style="margin-left:246px;"><!--#include virtual="list1.html" --></div></div></div><div class="tabsFooter"><div class="tabsFooterContent"></div></div></div></div>