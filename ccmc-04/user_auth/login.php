<?php
//
$id_ok= "user01";
$password_ok="password";



// セッションを開発
session_start();

//りクエストパラータを取得

$id = "";
if (isset($_REQUEST["id"])) {
    $id= $_REQUEST["id"];
    
}
$password= "";

if (isset($_REQUEST["password"])) {
    $password= $_REQUEST["password"];

}

//認証処理
if (($id === $id_ok) and ($password === $password_ok)) {
    $_SESSION["id"] = $id;
    
}
print_r($_SESSION);




?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
	<h1>簡単なユーザ認証</h1>
	<p>ようこそ、<?= $id ?> </p>
	<p><a href="logout.html">ログアウトする</a></p>
</body>
</html>