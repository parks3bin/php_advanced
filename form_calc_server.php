<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];
$result = "";

switch($op) {
    case "+" :
        $result = $num1+$num2;
        break;
    case "-" :
        $result = $num1-$num2;
        break;
    case "*" :
        $result = $num1 * $num2;
        break;
    case "/" :
        $result = $num1 / $num2;
        break;
}

$url = 'form_calc_result.php?result='.$result;
header('Location: '.$url);
?>