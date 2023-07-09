<?php
$name = "내 이름은";
$name .= " 박세빈입니다.";
$name .= " 당신의 이름은 무엇입니까?";

echo "<h1>$name</h1>";

$myName = "박세빈";

echo "<h1>내 이름은 $myName 입니다. 반갑습니다.</h1>";
echo "<h1>내 이름은 " . $myName . "입니다. 반갑습니다.</h1>";
echo "<h1>달러를 표시하는 방법은 &#36;myName</h1>";
echo "<h1>여&#32;백</h1>";
echo "<h1>앤드표시 &#38;</h1>";
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>여기는 title</title>
</head>
<body>
<?php
$fruits = "귤";
if ($fruits == "귤") {
    echo "<h1>나는 ".$fruits."입니다.</h1>";
} else {
    echo "<h1>나는 사과가 아니에요.</h1>";
}
?>
</body>
</html>