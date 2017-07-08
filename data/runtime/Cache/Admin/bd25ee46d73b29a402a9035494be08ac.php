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
<form action=" <?php echo U('Qindex/edit');?>" enctype="multipart/form-data"  method="post">
<table width="100%" align="center" class="table table-hover table-bordered" >
    <tr>
    <td>LOGO：</td>
    <td><input type="file" id="exampleInputFile" name="photo[]"></td>
    </tr>
    <tr>
        <td>图片：</td>
        <td><input type="file" id="exampleInputFile" name="photo[]"></td>
    </tr>
    <tr>
        <td>简介：</td>
        <td>
    <textarea rows="10" cols="100" name="content"><?php echo ($data["0"]["content"]); ?></textarea></td>
    </tr>
    <tr>
        <td>底部内容：</td>
        <td><input type="text" class="form-control" id="exampleInputName2"  value="<?php echo ($data["0"]["phone"]); ?>" name="phone"></td>
    </tr>
    <tr>
        <td colspan = "2"><button type="submit" class="btn btn-default">提交</button></td>
    </tr>
</table>

</form>
</body>
</html>