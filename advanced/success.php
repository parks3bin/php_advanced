<?php
session_start();
// 로그인 session 유무 확인

if ($_SESSION['login'] != "ok") {
    echo "<script>alert('로그인 해주세요')</script>";
    echo "<script>document.location.href='login.php'</script>";
} else {
    echo "성공";
}
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인 성공</title>
</head>
<body>
<h1>
    <?php echo $_GET['id'] ?>님 로그인 성공했습니다. <br>
    <a href="logout.php">로그아웃</a>
</h1>
</body>
</html>