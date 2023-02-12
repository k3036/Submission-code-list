<?php
session_start();
require_once 'loginLogic.php';
$err = [];

if(!$email = filter_input(INPUT_POST,'email')){

  $err['email'] = 'メールアドレスを記入して下さい。';

}
  $password = filter_input(INPUT_POST, 'password');

  if(!$password = filter_input(INPUT_POST,'password')){

    $err['password'] = 'パスワードを記入して下さい。';

}

if(count($err)>0){
  $_SESSION = $err;
  header('Location: login_form.php');
  return;

}

$result = UserLogic::login($email, $password);

if(!$result){

  header('Location:login_form.php');
  return;

}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ログイン完了</title>
  <link href="virtualRealityInquiry.css" rel="stylesheet">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>


<body>
  <h2>ログイン完了</h2>
  <p>ログイン完了</p>
  <p>ログインしました!</p>
  <a href="mypage.php">マイページへ</a>

</body>

</html>