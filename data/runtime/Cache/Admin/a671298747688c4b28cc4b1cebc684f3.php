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

    <table class="table-bordered table table-hover">
    <form action="<?php echo U('New/addmess');?>" method="post">
        <tr>
            <td>品名</td>
            <td><input type="text" class="form-control" name="name"></td>
        </tr>
        <tr>
            <td>材质</td>
            <td><input type="text" class="form-control" name="material"></td>
        </tr>
        <tr>
            <td>数量</td>
            <td><input type="text" class="form-control" name="specifications"></td>
        </tr>
        <tr>
            <td>规格</td>
            <td><input type="text" class="form-control" name="number"></td>
        </tr>
        <tr>
            <td colspan = "2"><button type="submit" class="btn btn-default">提交</button></td>
        </tr>
        </form>
    </table>
</body>
</html>