<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/teacher_page.css" rel="stylesheet">
    <title>教师端</title>
</head>
<body>
    <form enctype="multipart/form-data" role="form" action="" method="post">
    <?php
        if(isset($_POST['home']))
        {
            $home_url='http://'. $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/../login.php';
            header('Location:'.$home_url);      
        }
        if(isset($_POST['teacher_course_info']))
        {//教授的课程
            $search_url = 'http://'. $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/teacher_course_info.php';
            header('Location:'.$search_url);
        }
        if(isset($_POST['teacher_sgrades']))
        {//跟随学生
            $search_url = 'http://'. $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/teacher_sgrades.php';
            header('Location:'.$search_url);
        }
	?>
        <h1 id="big_msg" class="text-primary">欢迎您,<?php echo $_COOKIE['teaName']; ?>老师<span class="glyphicon glyphicon-eye-open"></span>
        <button type="submit" name="teacher_course_info" class="btn btn-warning big_button"><span class="glyphicon glyphicon-magnet"></span><br>我的课程</button>
        <button type="submit" name="teacher_sgrades" class="btn btn-success big_button"><span class="glyphicon glyphicon-heart"></span><br>查询学生成绩</button>
        <button type="submit" class="btn btn-primary home_button" name="home"><span class="glyphicon glyphicon-home"></span>&nbsp回到首页</button>
    </form>
</body>
</html>