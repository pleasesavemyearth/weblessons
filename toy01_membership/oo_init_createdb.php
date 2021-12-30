<!-- 
  파일명 : oo_init_createdb.php
  최초작업자 : swcodingschool
  최초작성일자 : 2021-12-28
  업데이트일자 : 2021-12-28
  
  기능: 
  DBMS 시스템에 접속, 시스템이 동작하는데 필요한 Database(toymembership) 를 생성한다.
  이 코드는 납품시 최초 1 회 실행하며, 백업에 대한 고려는 하지 않았다.
-->

<?php
  require "./adbconfig.php";

  

  // 데이터베이스가 있으면 삭제하고 새롭게 생성
  $sql = "DROP DATABASE IF EXISTS toymembership";
  if($conn->query($sql) == TRUE){
    if(DBG) echo outmsg(DROPDB_SUCCESS);
  }

  // 데이터베이스를 생성한다.
  $sql = "CREATE DATABASE IF NOT EXISTS toymembership";
  if($conn->query($sql) == TRUE){
    if(DBG) echo outmsg(CREATEDB_SUCCESS);
  }else{
    echo outmsg(CREATEDB_FAIL);
  }
  
  // 데이터베이스 연결 인터페이스 리소스를 반납한다.
  $conn->close();

  // 프로세스 플로우를 인덱스 페이지로 돌려준다.
  header('Location: index.php');
?>