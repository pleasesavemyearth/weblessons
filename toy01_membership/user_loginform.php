<!-- 
  파일명 : user_loginform.php
  최초작업자 : swcodingschool
  최초작성일자 : 2021-12-28
  업데이트일자 : 2021-12-28
  
  기능: 
  로그인을 위한 화면 구성
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>toy project 1st</title>
</head>

<body>
  <h1>로그인 화면</h1>
  <form action="user_loginprocess.php" method="POST">
    <label>사용자 아이디 : </label><input type="text" name="username" placeholder="사용자 아이디를 입력해주세요." required /><br>
    <label>비밀번호 : </label><input type="password" name="passwd" placeholder="비밀번호를 입력해주세요." required /><br>
    <br>
    <input type=submit value="로그인">
  </form>
</body>

</html>