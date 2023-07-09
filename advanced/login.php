<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인</title>
</head>
<body>
<h1>로그인 페이지</h1>
<form action="login_server.php" method="post">
    <table>
        <tr>
            <td><label for="userId">아이디 : </label></td>
            <td><input type="text" name="userId" id="userId"></td>
        </tr>
        <tr>
            <td><label for="userPw">비밀번호 : </label></td>
            <td><input type="password" name="userPw" id="userPw"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="로그인" style="width: 100%"></td>
        </tr>
    </table>
</form>
</body>
</html>