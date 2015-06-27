<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width" /><meta name="format-detection" content="telephone=no" /><meta name="format-detection" content="email=no" /><meta name="format-detection" content="address=no;"><meta name="apple-mobile-web-app-capable" content="yes" /><meta name="apple-mobile-web-app-status-bar-style" content="default" /><title><?php echo ($hd_row["title"]); ?>_博胜咏春</title><link href="__RESOURS__/index.css" rel="stylesheet" type="text/css" /><script src="__RESOURS__/jquery-1.10.1.min.js" ></script></head><body><div class="bg"></div><div class="ly"><form action="__APP__/Index/liuyan" method="post"  /><div class="liuyan"><!--<img src="__RESOURS__/button_emo.png" width="30" height="30" />--><input class="ly_c" type="text" name="name" placeholder="呢称:" /></div><div class="liuyan"><!--<img src="__RESOURS__/button_emo.png" width="30" height="30" />--><input class="ly_c" type="text" name="phone" placeholder="联系电话:" /></div><div class="liuyan"><!--<img src="__RESOURS__/button_emo.png" width="30" height="30" />--><input class="ly_c" type="text" name="liuyan" placeholder="留言:" /></div><div class="liuyan"><input type="button" class="ly_b ly_c" name="go" value="发送" /></div></form></div><div class="tip"><p></p><a>确定</a></div><script>
$(function(){
	$('.review_menu').click(function(){
		$('.bg').css('display','block');
		$('.ly').css('display','block');
		
	});
	$('.bg').click(function(){
	
		$('.bg').css('display','none');
		$('.ly').css('display','none');
	
	});
	
	$('.ly_b').click(function(){
	
		url='__APP__/Index/liuyan';
		hd_id=$('input[name=hd_id]').val();
		name=$('input[name=name]').val();
		phone=$('input[name=phone]').val();
		liuyan=$('input[name=liuyan]').val();
		dianpu=$('input[name=dianpu]').val();
		
		if(name==''){
			$('.tip p').html('呢称不能为空');
			$('.tip').css('display','block');
		}else if(dianpu==''){
			$('.tip p').html('信息有误');
			$('.tip').css('display','block');
		}else if(dianpu=='0'){
			$('.tip p').html('请选择店铺');
			$('.tip').css('display','block');
		}else if(hd_id==''){
			$('.tip p').html('信息有误');
			$('.tip').css('display','block');
		}else if(phone==''){
			$('.tip p').html('联系电话不能为空');
			$('.tip').css('display','block');
		}else if(!/((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8}/.test(phone)){
			$('.tip p').html('联系电话格式错误');
			$('.tip').css('display','block');
		}else if(liuyan==''){
			$('.tip p').html('留言信息不能为空');
			$('.tip').css('display','block');
		}
		
		$.post(url,{hd_id1:hd_id,name1:name,phone1:phone,liuyan1:liuyan},function(m){
		
			if(m=='err1'){
				$('.tip p').html('信息不能为空');
				$('.tip').css('display','block');
			}else if(m=='err2'){
				$('.tip p').html('联系电话格式错误');
				$('.tip').css('display','block');
			}else if(m=='err3'){
				$('.tip p').html('留言失败');
				$('.tip').css('display','block');
			}else{
				$('.tip p').html('留言成功');
				$('.tip').css('display','block');
				$('.ly').css('display','none');
			}
		
		});
		
			
	});
	
	$('.tip a').click(function(){
		$('.tip').css('display','none');
		$('.bg').css('display','none');
	});
	
	
});


</script><div class="top"><img src="__RESOURS__/bosheng.png" height="60" width="60"/><font>博胜咏春</font></div><h1 class="title"><?php echo ($hd_row["title"]); ?></h1><p class="c_d"><?php echo (date("m-d",$hd_row["start_time"])); ?>　<?php echo ($hd_row["account"]); ?>　阅读<?php echo ($hd_row["view"]); ?></p><div class="join_tip">报名将于<?php echo (date("Y-m-d",$hd_row["stop_time"])); ?>　00:00关闭</div><div class="join_form" <?php if(empty($error)): ?>style="display:none;"<?php else: ?>style="display:block;"<?php endif; ?>><p class="error"><?php echo ($error); ?></p><form action="__APP__/Index/index" method="post"><input type="hidden" name="hd_id" value="<?php echo ($hd_row["id"]); ?>" /><div class="form_input"><input type="text" name="name"  maxlength="20"  placeholder="你的大名"/></div><div class="form_input"><select name="dianpu"><option value="0" selected="selected">请选择</option><?php if(is_array($dpshow)): $i = 0; $__LIST__ = $dpshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div><div class="form_input"><input type="text" name="phone"  maxlength="11"  placeholder="手机号，别轻易向陌生人提供" /></div><div class="form_textarea"><textarea name="beizhu" placeholder="备注"></textarea></div><div class="form_button"><input type="submit" name="baoming" value="报名" /></div></form></div><div class="button_join" <?php if(empty($error)): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>><p class="but1">我要报名</p></div><div class="content"><?php echo (nl2br($hd_row["content"])); ?></div><div class="list_title">已有<?php echo ($bm_count); ?>人报名</div><div class="list_main"><?php if(empty($bm_row)): ?>暂没人报名！！
<?php else: if(is_array($bm_row)): $i = 0; $__LIST__ = $bm_row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list_item" ontouchstart=""><div class="list_item_nick"><?php echo ($vo["name"]); ?></div><div class="list_item_date"><?php echo ($vo["bm_time"]); ?></div></div><?php endforeach; endif; else: echo "" ;endif; endif; ?><div class="list_item_more" ><?php echo ($bm_show); ?></div></div><script>
	$('.but1').click(function(){
	
		$('.join_form').css('display','block');
		$('.but1').css('display','none');
	});
</script><div class="share_qr"><p class="but2" /><img src="__RESOURS__/icon_qr.png" width="20" /> 发给送微信/QQ/微博好友 </p></div><div class="bg2"></div><div class="tip1">关闭提示</div><script>
$('.but2').click(function(){
	$('.bg2').css('display','block');
	$('.tip1').css('display','block');
});
$('.bg2').click(function(){
	$('.bg2').css('display','none');
	$('.tip1').css('display','none');
});
$('.tip1').click(function(){
	$('.bg2').css('display','none');
	$('.tip1').css('display','none');
});
</script><div class="review_menu"><img src="__RESOURS__/detail_icon_review.png" height="26" /> 评论
</div><div class="review_main"><?php if(!empty($ly_list)): if(is_array($ly_list)): $i = 0; $__LIST__ = $ly_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="dt_review_item"><div class="review_item_subinfo"><div class="right"><?php echo (date("m-d",$vo["c_time"])); ?></div><div class="left"><a><?php echo ($vo["name"]); ?></a>评论:
			</div></div><div class="cont"><?php echo ($vo["liuyan"]); ?></div><?php if(!empty($vo["re_c"])): ?><div class="review_item_subinfo1"><div class="right"><?php echo (date("m-d",$vo["up_time"])); ?></div><div class="left"><a><?php echo ($vo["account"]); ?></a>回复<a><?php echo ($vo["name"]); ?></a></div></div><div class="cont1"><?php echo ($vo["re_c"]); ?></div><?php endif; ?></div><?php endforeach; endif; else: echo "" ;endif; ?><div class="list_main"><div class="list_item_more" ><?php echo ($ly_show); ?></div></div><!--
	<div class="dt_review_item"><div class="review_item_subinfo"><div class="right">6分钟前</div><div class="left"><a>某某</a>回复<a>某某</a></div></div><div class="cont">
		【源鑫车贷】广州佛山五区内全款车不压车贷款，等本等息2.5％月3-18期，先息后本4％月不限期数，高评估，可贷评估价7-15成，不看征信负债，欢迎同行合作！财富热线：15899803762罗生
		</div></div>--><?php else: ?>	暂没评论！！<?php endif; ?></div></body></html>