<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent"><form method="post" action="__URL__/update/navTabId/__MODULE__" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)" ><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" /><div class="pageFormContent" layoutH="58"><div class="unit"><label>标题：</label><input type="text" class="required" size="30" maxlength="20" name="title" value="<?php echo ($vo['title']); ?>"  /></div><div class="unit"><label>内容：</label><textarea name="content" class="editor" upimgurl="/upload.php" upimgext="jpg,jpeg,gif,png" rows="13" cols="80"><?php echo ($vo['content']); ?></textarea></div><div class="unit"><label>时间：</label><input class="date textInput valid required" type="text" datefmt="yyyy-MM-dd" name="date1" value="<?php echo (date('Y-m-d',$vo['start_time'])); ?>"><span style="float:left;line-height:20px;">-</span><input class="date textInput valid required" type="text" datefmt="yyyy-MM-dd" name="date2" value="<?php echo (date('Y-m-d',$vo['stop_time'])); ?>"></div></div><div class="formBar"><ul><li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li><li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li></ul></div></form></div>