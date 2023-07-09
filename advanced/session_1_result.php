<?php
session_start();

print_r($_SESSION);

echo "일반 변수 데이터는 ". $fruits."입니다. <br>";

echo "session 데이터는 ".$_SESSION['fruits']."입니다.";