<?php
session_start();

unset($_SESSION); // unset() : 선언된 변수를 삭제

session_destroy();

echo "session 삭제 완료 <br>";
echo "<a href='session_1_result.php'>삭제 여부 확인</a>";