<!-- 
    Example HTML file to showcase a simple login form which uses
        - a php controller script (logic-related aspects) that calls a php model script (data-related aspects)
        - a php view script (UI-related aspects)

* @author: w.delamare
* @date: Dec. 2023
 -->
<?php
include_once("includes.php");
?>

 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/main_styles.css">
    <title>Login page</title>
</head>
<body>

    <!-- 标题等内容 -->
    <?php include_header(); ?>

    <?php 
        // 如果出现错误
        if (isset($something_to_say)) {
            include_error_message($something_to_say);
        }
    ?>

    <!-- 登录表单 -->
    <form class="login-form" method="post" action="loginController.php">
        <h2>Log in</h2>
        <input type="text" placeholder="Username" id="login" name="login">
        <input type="password" placeholder="Password" id="pwd" name="pwd">
        <button type="submit">Submit</button>
    </form>

    <!-- 底部内容 -->
    <?php include_footer(); ?>

</body>
</html>
