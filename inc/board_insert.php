<?php
//data를 db서버에 저장하려면 db 컴퓨터에 접속을해야됨 
//mysqli_connect("localhost","아이디","비번","db명"); db ||서버접속정보
$conn=mysqli_connect("localhost","root","","krkr127127");

//$conn=mysqli_connect("localhost","krkr127127","edwardlee127^","krkr127127");
if(!$conn){
    echo "db연결실패 <br>";
}else{
    echo "db연결성공 <br>";
}
/* ctrl+shift+p ftp open에서 자기 서버네임 누르면 바로 닷홈에 코드변경된거 저장됨 */
$user_name=$_POST['name'];
$user_msg=$_POST['message'];
$sql="INSERT INTO free_board (name,message) VALUES('$user_name','$user_msg')";
$result=mysqli_query($conn,$sql);
echo '<br>'.$result.'개의글이 등록되었습니다.';
//(data)값을 다룰 때 값을 변수에 저장
//음식 그릇에 담아먹는것과 유사 (값이 변질되는것을 막고, )
mysqli_close($conn);
print "<hr/><a href='../board.php'>메인화면으로 이동</a>"
?>