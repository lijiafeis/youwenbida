<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script>
        var xhr = new XMLHttpRequest();
//        alert('<?php echo U("/fun",[],false,true);?>');
        xhr.open('post','<?php echo U("/fun",[],false,true);?>',true);
        xhr.send();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                var str = xhr.responseText;
                console.log(str);
            }
        }
    </script>
</head>
<body>
    <!--<form action = '<?php echo U("/fun");?>' method = 'post'>-->
        <!--账号<input type = "text" name = 'user'>-->
        <!--密码<input type = 'password' name = 'password'>-->
        <!--<input type = 'submit' value = '提交'>-->
    <!--</form>-->
</body>
</html>