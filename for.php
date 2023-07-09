<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for문 연습</title>
</head>
<body>
<?php
//for ($i=40; $i<=50; $i++) {
//    echo "<h1>" . $i . "</h1>";
//}

echo "<h1>구구단 출력하기</h1>";
for ($a=2; $a<=9; $a++) {
    echo "<h2>".$a."단</h2>";
    for ($b=1; $b<=9; $b++){
        echo "<h3>".$a." X ".$b." = ".$a*$b."</h3>";
    }
}
?>
</body>
</html>