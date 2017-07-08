<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>千行创想网络</title>
    <link rel="stylesheet" type="text/css" href="/five/themes/simplebootx/Public/assets/css/main.css">

</head>
 <script>
        function show(){
        var date = new Date(); //日期对象
        var now = "";
        now = date.getFullYear()+"年"; //读英文就行了
        now = now + (date.getMonth()+1)+"月"; //取月的时候取的是当前月-1如果想取当前月+1就可以了
        now = now + date.getDate()+"日";
        document.getElementById("nowDiv").innerHTML = now; //div的html是now这个字符串
        setTimeout("show()",1000); //设置过1000毫秒就是1秒，调用show方法
        }
        alert(now);

</script>
<body onload="show()">

<div id="nowDiv"></div>
<div id="content">

<div>
    <img src='/five/themes/simplebootx/Public/assets/images/zerozero1.jpg'>
</div>
<div id="gsjj">
    <span>公司简介</span>
</div>
<div>
    <img src="/five/themes/simplebootx/Public/assets/images/zerozero2.jpg" id="gsjjimg">
    <p>

<?php echo ($data["0"]["content"]); ?>
    </p>
</div>
<div id="xhzy">
    <span>现货资源</span>
</div>

                    <table width="540" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <table width="750" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td valign="top">

                                        </td>
                                        <td>
                                        </td>
                                        <td valign="top">
                                        </td>
                                    </tr>
                                </table>
                                <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0"
                                class="top_jg">

                                    <tr>
                                        <td height="56" align="center" valign="top" class="sy_xh_nr">
                                            <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
                                                <tr bgcolor="#99ccff" align="center">
                                                    <td width="21%" height="25">
                                                        现货名称
                                                    </td>
                                                    <td width="11%">
                                                        规格
                                                    </td>
                                                    <td width="11%">
                                                        材质
                                                    </td>
                                                    <td width="11%">
                                                        标准
                                                    </td>
                                                    <td width="11%">
                                                        价格
                                                    </td>
                                                    <td width="11%">
                                                        产地
                                                    </td>
                                                    <td width="11%">
                                                        仓库地址
                                                    </td>
                                                    <td width="11%">
                                                        更新时间
                                                    </td>
                                                </tr>
                                            </table>
                                            <div id=rolllink style="OVERFLOW: hidden; HEIGHT: 610px; width:1000px;">
                                                <div id=rolllink1>
                                                    <table cellspacing=0 width="100%">
                                                        <tr>
                                                            <td width="100%" valign=top id=demo11>
                                                                <table width="100%" border="0" cellspacing="1" cellpadding="1" align="center">
                                                                <?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" bgcolor="#f5f5f5">
                                                                        <td width="21%" height="35">

                                                                                <?php echo ($vo["name"]); ?>

                                                                        </td>
                                                                        <td width="11%">
                                                                            <?php echo ($vo["specifications"]); ?>
                                                                        </td>
                                                                        <td width="11%">
                                                                            <?php echo ($vo["material"]); ?>
                                                                        </td>
                                                                        <td width="11%">
                                                                            <?php echo ($vo["number"]); ?>
                                                                        </td>


                                                                        <td width="11%">
                                                                            <?php echo ($vo["price"]); ?>
                                                                        </td>
                                                                      <td width="11%">
                                                                            <?php echo ($vo["origin"]); ?>
                                                                        </td>
                                                                  <td width="11%">
                                                                            <?php echo ($vo["address"]); ?>
                                                                        </td>
                                                                        <td width="11%">
                                                                            <div id="nowDiv"></div>
                                                                        </td>
                                                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                                                </table>
                                                            </td>
                                                            <td width="1%" valign=top id=demo12>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div id=rolllink2>
                                                </div>
                                            </div>
                                         <script src="/five/themes/simplebootx/Public/assets/js/xinhuo.js">
                                            </script>

                                            <!--向上滚动代码结束-->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    </div>
<div id="duo"></div>

 <div class="bottombox" id="bb"><strong><?php echo ($data["0"]["phone"]); ?></strong></div>
</div>
   <script src="/five/themes/simplebootx/Public/assets/js/main.js">

   </script>

</body>
</html>