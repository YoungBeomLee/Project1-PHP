<!-- 데이터베이스에 저장된 글목록출력 
1.데이터베이스접속
2.데이터조회 SELECT
  SELECT * FROM 테이블명('free_board')
3.출력
4.데이터베이스에 접속종료

-->
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>영범이네 자유 게시판</title>
</head>

<body>
  <h1>자유 게시판</h1>
  <h2>글 목록</h2>
  <ul>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "krkr127127");
  if (!$conn) {
    echo "db연결실패";
  } else {
    echo "db연결성공";
  }
  //삭제할 데이터를 변수에 저장
  $num=$_POST["delnum"];

  //데이터조작어 del
  $sql="DELETE  FROM `free_board` WHERE number=$num";
  mysqli_query($conn,$sql);
  
  echo "<br>".$num."번째 글이 삭제 되었습니다.";
  mysqli_close($conn);
  
  
  ?>
  </ul>
  <a href="view.php"></a>
  <hr />
  <p><a href="../board.php">메인화면으로 돌아가기</a></p>
  <hr />
  
  
</body>

</html>