<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1">
    <tr>
        <td>标题</td>
        <td>添加时间</td>
        <td>作者</td>
        <td>内容</td>

    </tr>

    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["title"]); ?></td>
            <td><?php echo ($vo["fatime"]); ?></td>
            <td><?php echo ($vo["person"]); ?></td>
            <td><?php echo ($vo["content"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

</body>
</html>