<?php
session_start();
session_unset();
session_destroy();
require_once('login_function.php');
redirect('login.php');
exit();
?>