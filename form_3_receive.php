<?php

$fruits = $_POST['fruits2'];

//배열 모두 출력
//print_r($fruits);
//
//하나만 출력
//echo $fruits[3];

echo "text 값은 '". $_POST['userName']."'입니다. <br>";
echo "password 값은 '". $_POST['userPw']."'입니다. <br>";
echo "radio 값은 '". $_POST['fruits']."'입니다. <br>";
echo "checkbox 값은 '";
foreach ($fruits as $value){
    echo $value." ";
}
echo "'입니다. <br>";
echo "date 값은 '". $_POST['date']."'입니다. <br>";
echo "textarea 값은 '". $_POST['text']."'입니다. <br>";
echo "hidden 값은 ".$_POST['hiddenValue']."입니다.";