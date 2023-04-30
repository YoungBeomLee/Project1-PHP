<?php
session_start();
$title = "회원전용페이지";
include_once("login_head.php");
include_once("login_config.php");
require_once("login_function.php");
confirm_user_is_auth();
?>
<p>회원님안녕하세요</p>
<p><a href="logout.php">로그아웃</a></p>
<?php
include("login_footer.php");
?>