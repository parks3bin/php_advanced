<?php

$num1 = 10;
$num2 = 20;

if($num1 == 10) {
    echo "num1은 10입니다.<br><br>";
} else {
    echo "num1은 10이 아닙니다. <br><br>";
}


switch ($num2) {
    case 10:
        echo "10입니다.";
        break;
    case 20:
        echo "20입니다.";
        break;
    default:
        echo "무슨 숫자인지 모르겠어요.";
}

?>