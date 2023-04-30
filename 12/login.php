<?php
/* add */
session_start();

$title = 'Login';
include('header.php');
include('config.php');
require_once('functions.php');

if (admin_is_auth()) {
  redirect('admin.php');
  exit();
}

if (isset($_POST['login'])) {
  output($_POST);

  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password = $_POST['password'];

  if ($email == false) {
    $status = '이메일 형식에 맞게 입력해주세요.';
  }
  if (authenticate_admin($email, $password)) {
    $_SESSION['email'] = $email;
    redirect('admin.php');
  } else {
    $status = '비밀번호를 확인해주세요.';
  }
}

?>
<form action="" method="POST">
  <p>
    <label for="email">이메일:</label>
    <input type="text" name="email" id="email" autocomplete="off">
  </p>
  <p>
    <label for="password">비밀번호:</label>
    <input type="password" name="password" id="password" >
  </p>
  <p>
    <input type="submit" name="login" value="로그인">
  </p>
</form>

<div class="error">
  <p>
    <?php
    if (isset($status)) {
      echo $status;
    }
    ?>
  </p>
</div>

<?php include('footer.php') ?>