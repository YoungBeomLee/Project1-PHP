<?php
    function output($value){
        //입력한 형태 그대로 확인하기 위해 pre 태그를 작성
        echo '<pre>';
        //배열의 값을 실제 출력 형태
        print_r($value);
        echo '</pre>';
    }

    function authenticate_admin($email, $password){
        if($email = admin_name && $password == password){
            return true;
        }
    }
    /* redirect 함수에 매개변수가 전달되면 */
    function redirect($url){
        //url 변수의 값으로 페이지 이동
        //"" 주의
        header("Location:$url");
        exit();
    }
    function admin_is_auth(){
        return isset($_SESSION['email']);
    }

    function confirm_admin_is_auth(){
        if(!admin_is_auth()){
            redirect('login.php');
            exit();
        }
    }