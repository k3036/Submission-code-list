<?php

  session_start();
  include('loginLogic.php');
$err = $_SESSION;
$result = UserLogic::checkLogin();
if($result){
  header('Location:mypage.php');
  return;
}
session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ログイン画面</title>
  <link href="additionalCssForBootstrap.css" rel="stylesheet">
  <link href="virtualRealityInquiry.css" rel="stylesheet">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</head>


<body class="bg-info">
  <div class="text-center">
    <h2>ログインフォーム</h2>
    <?php if(isset($err['msg'])): ?>
    <p class="red"><?php echo $err['msg'] ; ?></p>
    <?php endif; ?>
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Choose From The Menu
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="signupFromMember.php">新規登録</a></li>
        <li><a class="dropdown-item" href="login_form.php">ログインはこちら</a></li>
        <li><a class="dropdown-item" href="virtualRealityInquiry.php">PAGE TOP</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
      </ul>
    </div>
    <form action="startYourProgram.php" method="POST">

      <p class="mailMargin">
        <label for="email">メールアドレス:</label>
        <input type="email" name="email"></input>
        <?php if(isset($err['email'])): ?>
      <p class="red"><?php echo $err['email'] ; ?></p>
      <?php endif; ?>
      </p>

      <p class="">
        <label for="password">パスワード:</label>
        <input type="password" name="password"></input>
        <?php if(isset($err['password'])): ?>
      <p class="red"><?php echo $err['password'] ; ?></p>
      <?php endif; ?>
      </p>

      <p class="" class="container">
        <input type="submit" value="ログイン">
      </p>
    </form>

  </div>
</body>

</html>