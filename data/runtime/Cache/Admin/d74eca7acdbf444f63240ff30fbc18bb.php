<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <table width="100%" class="table-bordered table-hover table">
    <tr>
        <td><a class="btn btn-default" href="<?php echo U('New/add');?>" role="button">添加</a></td>
    </tr>
    <tr>
        <td><strong>品名</strong></td>
        <td><strong>材质</strong></td>
        <td><strong>规格</strong></td>
        <td><strong>数量</strong></td>
        <td><strong>操作</strong></td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td><?php echo ($vo["name"]); ?></td>
    <td><?php echo ($vo["material"]); ?></td>
    <td><?php echo ($vo["specifications"]); ?></td>
    <td><?php echo ($vo["number"]); ?></td>
    <td><a href="<?php echo U('New/edit',array('id'=>$vo['id']));?>">修改</a>|<a href="<?php echo U('New/delete',array('id'=>$vo['id']));?>">删除</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</body>
</html>