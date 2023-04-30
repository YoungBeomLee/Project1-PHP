<!DOCTYPE html>
<html lang="ko">
  
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>글쓰기</title>
  </head>

  <body>
    <h1>글쓰기</h1>
    <!-- action=전송할 주소  -->
    <form action="board_insert.php" method="post">
      <p>
        <label for="name">작성자:</label>
        <!-- name=테이블의 필드명 -->
        <input type="text" id="name" name="name" />
      </p>
      <p>
        <label for="message">메시지:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
      </p>
      <!-- submit 버튼을 클릭하면 form 의 액션 값의 주소로 데이터가 전송된다 -->
      <input type="submit" value="글쓰기" />
    </form>
    <h1>hello!</h1>
  </body>
</html>
