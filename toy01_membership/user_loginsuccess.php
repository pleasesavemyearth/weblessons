<!-- 
  파일명 : user_loginsuccess.php
  최초작업자 : swcodingschool
  최초작성일자 : 2021-12-28
  업데이트일자 : 2021-12-28
  
  기능: 
  로그인 성공했을 때, success 메시지 간단히 출력하고...
  여기에서는 사용자 목록 리스팅 기능을 수행하도록 구성함.
-->
<?php
// db연결 준비
require "./adbconfig.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h6>로그인 성공!!</h6>
  <h1>사용자 목록</h1>
  <br><br>
  <?php
  $sql = "SELECT * FROM users";
  $resultset = $conn->query($sql);

  if ($resultset->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>USERNAME</th><th>작업내용</th></tr>";
    // out data of each row
    while ($row = $resultset->fetch_assoc()) {
      echo "<tr><td>" . $row['id'] . "</td><td>" . $row['username'] . "</td><td><a href='oo_user_detailview.php?id=" . $row['id'] . "'>상세정보확인</a></td></tr>";
    }
    echo "</table>";
  }
  ?>
  <a href="./index.php">인덱스페이지로</a>
</body>

</html>