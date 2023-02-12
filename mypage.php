<?php

session_start();
include('loginLogic.php');
include('CountermeasuresAgainstExternalAttacks.php');
$result = UserLogic::checkLogin();

if(!$result){
  $SESSION['login_err'] = 'ユーザーを登録してログインしてください！';
  header('Location:signupFromMember.php');
  return ;
}

$login_user = $_SESSION['login_user'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>マイページ</title>
  <link href="virtualRealityInquiry.css" rel="stylesheet">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

</head>


<body class="bg-info">
  <h2>マイページ</h2>
  <p class="text-center" class="container">ログインユーザー: <?php echo h($login_user['name']) ?></p>
  <p class="text-center" class="container">メールアドレス:<?php echo h($login_user['email']) ?></p>


  <form action="exitingAProgram.php" method="post">
    <input type="submit" name='logout' value="ログアウト">

    </input>
  </form>

</body>

</html>