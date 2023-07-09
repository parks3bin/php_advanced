<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{margin: 0 auto}
        table{margin-top: 50px}
        .submit{width: 100%}
    </style>
    <title>form 연습</title>
</head>
<body>
<form action="form_2_receive.php" method="get" enctype="application/x-www-form-urlencoded">
    <table border="1">
        <tr>
            <td><label for="userName">이름</label></td>
            <td><input type="text" name="userName" id="userName"></td>
        </tr>
        <tr>
            <td><label for="userAge">나이</label></td>
            <td><input type="text" name="userAge" id="userAge"></td>
        </tr>
        <tr>
            <td><label for="userArea">지역</label></td>
            <td><select name="userArea" id="userArea">
                    <option value="서울">서울</option>
                    <option value="광주">광주</option>
                    <option value="부산">부산</option>
                </select></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="전송" class="submit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>