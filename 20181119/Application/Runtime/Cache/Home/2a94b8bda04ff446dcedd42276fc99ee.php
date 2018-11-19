<?php if (!defined('THINK_PATH')) exit();?> <html>
 <head></head>
 <title></title>
 <body>
 <form action="/xiao5.5/20181119/index.php/Home/Index/index" method="post">
     <input type="text" name="zi">
     <input type="submit" value="搜索">
 </form>


 <table border="1">
     <tr>
         <td>标题</td>
         <td>添加时间</td>
         <td>作者</td>
         <td>操作</td>

     </tr>

 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
         <td><a href="/xiao5.5/20181119/index.php/Home/Index/content?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></td>
         <td><?php echo ($vo["fatime"]); ?></td>
         <td><?php echo ($vo["person"]); ?></td>
         <td><a href="/xiao5.5/20181119/index.php/Home/Index/del?id=<?php echo ($vo["id"]); ?>">删除</a></td>
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 </table>
 <?php echo ($page); ?>
 </body>
 </html>