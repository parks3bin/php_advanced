<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form 연습</title>
</head>
<body>
<form action="form_3_receive.php" method="post">
    <input type="text" name="userName" value="안녕하세요" readonly>
    <br>
    <input type="password" name="userPw">
    <br>
    <input type="radio" name="fruits" value="apple">사과
    <input type="radio" name="fruits" value="orange">오렌지
    <input type="radio" name="fruits" value="berry">딸기
    <input type="radio" name="fruits" value="peach">복숭아
    <br>
    <input type="checkbox" name="fruits2[]" value="apple">사과
    <input type="checkbox" name="fruits2[]" value="orange">오렌지
    <input type="checkbox" name="fruits2[]" value="berry">딸기
    <input type="checkbox" name="fruits2[]" value="peach">복숭아
    <br>
    <input type="date" name="date">
    <br>
    <textarea name="text" cols="30" rows="10"></textarea>
    <br>
    <input type="hidden" name="hiddenValue" value="안 보이는 값">
<!--    <input type="submit" value="전송하기">-->
    <button type="submit">전송하기</button>
</form>
</body>
</html>