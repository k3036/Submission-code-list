<?php
  session_start();
  session_destroy();
include('CountermeasuresAgainstExternalAttacks.php');
include('loginLogic.php');
$result = UserLogic::checkLogin();
if($result){
  header('Location:mypage.php');
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ユーザー登録画面</title>
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
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Choose From The Menu
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="">新規登録</a></li>
      <li><a class="dropdown-item" href="login_form.php">ログインはこちら</a></li>
      <li><a class="dropdown-item" href="virtualRealityInquiry.php">PAGE TOP</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
    </ul>
  </div>
  <div class="text-center">

    <h2 class="text-primary">ユーザー登録フォーム</h2>
    <form action="MemberPictureRegistration.php" method="POST">

      <p>
        <label for="username">ユーザー名:</label>
        <input type="text" name="username"></input>
        <?php if(isset($_SESSION['username'])){?>
      <p class="red"><?php echo $_SESSION['username']; ?> </p>
      <?php  }  ?>

      </p>

      <p>
        <label for="email">メールアドレス:</label>
        <input type="email" name="email"></input>
        <?php if(isset($_SESSION['email'])){?>
      <p class="red"><?php echo $_SESSION['email']; ?> </p>
      <?php  }  ?>

      <p>
        <label for="password">パスワード:</label>
        <input type="password" name="password"></input>
        <?php if(isset($_SESSION['password'])){?>
      <p class="red"><?php echo $_SESSION['password']; ?> </p>
      <?php  }  ?>

      <p>
        <label for="password_conf">パスワード確認:</label>
        <input type="password" name="password_conf"></input>
        <?php if(isset($_SESSION['password_conf'])){?>
      <p class="red"><?php echo $_SESSION['password_conf']; ?> </p>
      <?php  }  ?>
      </p>
      <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
      <p>
        <input class="btn btn-primary" href="MemberPictureRegistration.php" type="submit" id="hoge"
          class="btn btn-primary" data-toggle="popover" title="クリックして新規登録実行。" type="submit" value="新規登録">
      </p>
    </form>

  </div>
  </button>

</body>

</html>