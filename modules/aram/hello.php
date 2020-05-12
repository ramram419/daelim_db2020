<?php
namespace Modules\aram;

class Hello
{
  // 상수선언 
  const MYNAME = "aram";

  //클래스의 함수
  //메소드함수
  public function greeting()
  {
    echo self::MYNAME . " hello world";
  }

  // 생성자
  public function __construct()
  {
    echo __CLASS__ . "객체를 생성합니다. <br>";

    $DB_INFO = "mysql:";
    $DB_INFO .= "dbname=db2020;";
    $DB_INFO .= "charset=utf8;";
    $DB_INFO .= "host=localhost"; //다른 사람 서버에 접속 IP

    $DB_USER = "db2020";
    $DB_PASSWORD = "123456";

    $dbinfo = include("../dbinfo.php");
    $db = new \Jiny\Mysql\Connection($dbinfo);

    // 접속정보 설정
    // $db->setUser("db2020")->setPassword("123456");
    // $db->setSchema("db2020")->setCharset();
    // $db->setHost(); 
    $db->connect();  //PDO 객체를 연결.




    // if (extension_loaded("PDO") && extension_loaded("pdo_mysql")) {
    //   // 접속코드
    //   // PDO 객체를 생성 인스턴스 $conn 저장
    //   $conn = new \PDO($DB_INFO, $DB_USER, $DB_PASSWORD);

    //   if($conn){
    //     echo "DB 접속 성공";
    //   } else {
    //     echo "DB 접속 실패";
    //   }
    // }else {
    //   echo "PDO 드라이버가 활성화 되어 있지 않습니다.\n";
    //   exit(1); // 오류 종료
    // }
  }
}