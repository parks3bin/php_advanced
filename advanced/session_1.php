<?php
// session을 사용하고자 하는 페이지 최상단에 start 선언
session_start();

$fruits = "사과";
$_SESSION['fruits'] = '오렌지';
$_SESSION['drink'][0] = '콜라';
$_SESSION['drink'][1] = '사이다';

echo "session 생성 완료 <br><br>";

echo "<a href='session_1_result.php'>session 확인하기</a> &nbsp;&nbsp;";

echo "<a href='session_1_del.php'>session 삭제</a>";