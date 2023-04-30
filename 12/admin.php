<?php
session_start();

$title = '관리자페이지';
include('header.php');
include('config.php');
require_once('functions.php');

echo $_SESSION['email'];
confirm_admin_is_auth();
?>
<p><a href="logout.php">logout</a></p>

<?php include('footer.php'); ?>