
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>开始使用layui</title>
    <link rel="stylesheet" href="css/layui.css">

</head>
<body>

<!-- 你的HTML代码 -->
<button class="layui-btn layui-btn-warm">一个标准的按钮</button>
<a href="http://www.layui.com" class="layui-btn layui-btn-normal">一个可跳转的按钮</a>


<script src="/layui.js"></script>
<script>
    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;

        layer.msg('Hello World');
    });
</script>

</body>


</html>


<?php
//echo "<hr/>";
//echo "hello world my first project";
//echo "<br/>";
////phpinfo();
//
//echo "你好吗？";
//header("content-type:text/html;charset=utf-8");
//$link = mysqli_connect('127.0.0.1','root','root');
//var_dump($link);
?>