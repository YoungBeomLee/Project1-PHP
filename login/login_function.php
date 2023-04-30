<?php
function authenticate_user($email,$password){
  if($email==user_name && $password==password){
    return true;
  }
}

function redirect($url){
  header("Location:$url"); 
  exit();
}
//회원인지 확인
function user_is_auth(){
  return isset($_SESSION['email']);
}
//비회원일경우 login페이지로 이동
function confirm_user_is_auth(){
  if(!user_is_auth()){
    redirect('login.php');
    exit();   
  }
}

?>
<!-- js -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="../js/script_rolling.js"></script>
  <script src="../js/script_section2slide.js"></script>
  <script src="../js/script_section3slide.js"></script>
  <script src="../js/script_siterellink.js"></script>
  <script src="../js/cursor.js"></script>
  <script src="../js/scroll.js"></script>
  <script src="../js/cookie.js"></script>
  <!-- js -->
