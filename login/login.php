<?php
session_start();
$title = "로그인 창";
include("login_head.php");
include("login_config.php");
require_once("login_function.php");
if(user_is_auth()){
  redirect('user.php');
  exit();
}

//사용자가 입력한 정보의 유효성 검증
//입력값 유효성 검증 filter_input(method,name,option)
if (isset($_POST['login'])) {
  
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password = $_POST['password'];

  if($email==false){
    $status='이메일 형식에 맞게 입력해주세요';
  }
  if(authenticate_user($email,$password)){
    $_SESSION['email']=$email;
     redirect('user.php');
  }else{
    $status='비밀번호를 확인해주세요';
  }
}

?>
</head>

<body>
  <?php
  include_once("login_etc.php");
  ?>
  <div id="wrap">
    <div id="container"><a href="https://www.data.go.kr/tcs/dss/selectApiDataDetailView.do?publicDataPk=15084084">출처:기상청 </a></div>
    <?php
    include("login_header.php");
    ?>
    <?php
    include("login_footer.php");
    ?>

  