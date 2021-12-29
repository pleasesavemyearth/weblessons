<!-- 
  파일명 : oo_user_loginsuccess.php
  최초작업자 : swcodingschool
  최초작성일자 : 2021-12-28
  업데이트일자 : 2021-12-28
  
  기능: 
  oo_user_registform.html 회원가입화면에서 입력된 값을 받아, validation 후
  users 테이블에 사용자 가입 데이터를 추가한다.
-->
<?php
  // db연결 준비
  require "./adbconfig.php";

  // create connection
  $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

  // check connection : 연결 확인, 오류가 있으면 메시지 출력 후 프로세스 정료
  if($conn->connect_error) {
    echo outmsg(DBCONN_FAIL);
    die("연결실패 :".$conn->connect_error);
  }else {
    if(DBG) echo outmsg(DBCONN_SUCCESS);
  }
  
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

    if($resultset->num_rows > 0) {
      // echo "<table><tr><th>ID</th><th>USERNAME</th><th>CellPhone</th><th>E-Mail</th><th>Regist Date</th><th>Last Login</th><th>Status</th></tr>";
      echo "<table><tr><th>ID</th><th>USERNAME</th></tr>";
      // out data of each row
      while( $row = $resultset->fetch_assoc() ) {
        // echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['cellphone']."</td><td>".$row['email']."</td><td>".$row['registdate']."</td><td>".$row['lastdate']."</td><td>".$row['status']."</td><td><a href='oo_user_detailview.html?id=".$row['id']."'>상세정보확인</a></tr>";
        echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td><a href='oo_user_detailview.php?id=".$row['id']."'>상세정보확인</a></tr>";
      }
      echo "</table>";
    }
  ?>
  <a href="./index.php">인덱스페이지로</a>
</body>
</html>