<?php
  $conn = mysqli_connect("localhost", "root", "", "krkr127127");
  if (!$conn) {
    echo "db연결실패";
  } else {
    echo "db연결성공";
  }
  $view_num=$_GET['number'];
  $sql="SELECT * FROM `free_board` WHERE number=$view_num";
  $result=mysqli_query($conn,$sql);

  ?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View | 영범이네 자유게시판</title>
  </head>
  <body>
    <h1>자유게시판</h1>
    <h2>글내용</h2>
    <?php
    //글이있으면
    if($row = mysqli_fetch_array($result)){
        

    ?>
        
       <h3>글번호:<?php echo $row['number'];?>
        / 글쓴이: <?= $row['name']."<br>";?>
        
        </h3>
       <div>메시지:<?php echo $row["message"] ?></div> 
      
    <?php
    }
    ?>
    <p><a href="board_update.php?number=<?=$row['number']?>">수정하기</a></p>
    <p><a href='../board.php'>메인화면으로 돌아가기</a></p>
  </body>
  </html>