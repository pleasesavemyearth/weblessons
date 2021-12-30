<!-- 
  파일명 : user_loginprocess.php
  최초작업자 : swcodingschool
  최초작성일자 : 2021-12-28
  업데이트일자 : 2021-12-28
  
  기능: 
  user_login.php 로그인 화면에서 입력된 값을 받아 
  유저명과 비밀번호를 확인, 등록된 사용자임을 확인한다.
-->

<?php
// db연결 준비
require "./adbconfig.php";

// 데이터베이스 작업 전, 로그인 화면으로 부터 값을 전달 받고
$username = $_POST['username'];
$passwd = $_POST['passwd'];

// 사용자 계정 존재 여부 확인을 위한 질의 구성
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? and passwd = sha2(?,256)");
$stmt->bind_param("ss", $username, $passwd);

$stmt->execute();
$result = $stmt->get_result();
$row = mysqli_fetch_array($result);

if (!empty($row['username'])) {
  echo outmsg(LOGIN_SUCCESS);
  $conn->close();
  header('Location: user_loginsuccess.php');
} else {
  echo outmsg(LOGIN_FAIL);
  $conn->close();
  header('Location: index.php');
}


?>