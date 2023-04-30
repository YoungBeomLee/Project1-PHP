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
  <h2>검색결과</h2>
  <ul>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "krkr127127");
  if (!$conn) {
    echo "db연결실패";
  } else {
    echo "db연결성공";
  }
  //원하는 키워드가 있는 글번호를 조회
  //sql SELECT * FROM [테이블명] : [테이블명]의 모든내용 조회
  //SELECT * FROM [테이블명], [테이블명] WHERE [필드명]조건 , [테이블명]의 WHERE 조건에 해당하는 내용조회
  //검색할데이터
  $user_bdkey=$_POST["bdkey"];
  $sql="SELECT * FROM `free_board` WHERE message LIKE '%$user_bdkey%'";
  $result=mysqli_query($conn,$sql);
  $list='';
  //반복문
  while($row=mysqli_fetch_array($result)){
    $list=$list."<li>{$row['number']}:<a href='board_view.php?number={$row['number']}'>{$row['name']}</a>:{$row['message']}</li>";
  }
  echo $list;
  mysqli_close($conn);
  ?>
  </ul>
  <a href="board_view.php"></a>
  <hr />
  <p><a href="../board.php">메인화면으로 이동</a></p>
  
 
</body>

</html>