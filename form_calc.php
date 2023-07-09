<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {margin:0 auto; text-align: center}
        .num{width: 50px}
        h1{margin: 20px 0}
    </style>
    <title>계산기</title>
</head>
<body>
<h1>계산기</h1>
<form action="form_calc_server.php" method="post">
    <label for="num1">
        <input type="text" name="num1" id="num1" class="num">
    </label>
    <label for="op">
        <select name="op" id="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </label>
    <label for="num2">
        <input type="text" name="num2" id="num2" class="num">
    </label>
    <input type="submit" value="계산하기">
</form>
</body>
</html>