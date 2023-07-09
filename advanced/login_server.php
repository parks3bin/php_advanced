<?php
session_start();

$userId = $_POST['userId'];
$userPw = $_POST['userPw'];

// 실제 id, pw 필요
// DB가 없으니 직접 만듦

$id = "hello";
$pw = "1234";

$result = "";



// id, pw가 맞는지 틀린지 확인
//$result = ($userId == $id && $userPw == $pw);

// id, pw가 맞는지 틀린지 확인 2
if ($userId == $id && $userPw == $pw) {
        $result = true;
        $_SESSION['login'] = "ok";
} else {
    $result = false;
}

// 로그인 성공 시 success.php 파일로 이동
if ($result) {
    header('location: success.php?id='.$id);
} else {
    echo "<script>alert('아이디나 패스워드가 틀렸습니다.')</script>";
//    header('location: login.php');
    echo "<script>document.location.href='login.php';</script>";
}