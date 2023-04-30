<?php
  $conn = mysqli_connect("localhost", "root", "", "krkr127127");
  if (!$conn) {
    echo "db연결실패";
  } else {
    echo "db연결성공";
  }
  //
  $view_num=$_GET['number'];
  $sql="SELECT * FROM `free_board` WHERE number=$view_num";
  $result=mysqli_query($conn,$sql);
  print_r($view_num);
  
  ?>
<!DOCTYPE html>
<html lang="ko">
  
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>글쓰기</title>
  </head>

  <body>
    <h1>글수정하기</h1>
    <?php
    //db에 해당 글번호가 있을경우
    if($row=mysqli_fetch_array($result)){

    
    ?>
    
    <!-- action=전송할 주소  -->
    <form action="board_modify.php" method="post">
    <label for="number">글번호:</label>    
    <input type="hidden" id="number" name="number" value="<?=$row['number']?>">
      <p>
        <label for="name">작성자:</label>
        <!-- name=테이블의 필드명 -->
        <input type="text" id="name" name="name" value="<?=$row['name']?>" />
      </p>
      <p>
        <label for="message">메시지:</label>
        <textarea name="message" id="message" cols="30" rows="10">(수정전의 메시지):<?=$row['message'];?></textarea>
        
      </p>
      <!-- submit 버튼을 클릭하면 form 의 액션 값의 주소로 데이터가 전송된다 -->
      <input type="submit" value="전송" />
    </form>
    <h1>hello!</h1>
    <?php
    }
    ?>
  </body>
</html>
