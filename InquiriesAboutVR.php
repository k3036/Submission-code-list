<?php

session_start();
$referer = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER'] : NULL;

$confirmUrl = 'edit.php';
$editConfirmUrl ='editConfirm.php' ;
$confirmUrl = 'inquiryConfirmationScreen.php';
  if(strstr($referer,$confirmUrl)||strstr($referer,$editConfirmUrl)||strstr($referer,$confirmUrl)){
    $_SESSION["chineseCharacterName"] = "" ;
    $_SESSION["howToRead"] = "" ;
    $_SESSION["emailAddress"] = "" ;
    $_SESSION["contentsOfInquiry"] = "" ;
    $_SESSION["phoneNumber"] = "" ;
  }


  if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) &&  empty($_POST["phoneNumber"])){


  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"])  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];

  }else if( empty($_POST["chineseCharacterName"] ) && $_POST["howToRead"]  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) &&  empty($_POST["phoneNumber"])){

    $_SESSION["howToRead"]	= $_POST["howToRead"];

  }else if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && $_POST["emailAddress"]  && empty($_POST["contentsOfInquiry"] ) &&  empty($_POST["phoneNumber"])){

    $_SESSION["emailAddress"]	= $_POST["emailAddress"];

  }else if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && empty($_POST["emailAddress"] )  && empty($_POST["contentsOfInquiry"] ) &&  $_POST["phoneNumber"]){

    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"])  && empty($_POST["emailAddress"])  && $_POST["contentsOfInquiry"]  &&  empty($_POST["phoneNumber"])){

    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( $_POST["chineseCharacterName"]  && $_POST["howToRead"]  && empty($_POST["emailAddress"])  &&  empty( $_POST["contentsOfInquiry"] )  &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];

  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"])  && $_POST["emailAddress"]  &&  empty( $_POST["contentsOfInquiry"] )  &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];

  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"])  && empty($_POST["emailAddress"])  &&  $_POST["contentsOfInquiry"]  &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"])  && empty($_POST["emailAddress"])  &&  empty($_POST["contentsOfInquiry"])  &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( empty($_POST["chineseCharacterName"] )  && $_POST["howToRead"]  && $_POST["emailAddress"]  &&  empty($_POST["contentsOfInquiry"])  &&  empty($_POST["phoneNumber"])){

    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];

  }else if( empty($_POST["chineseCharacterName"] )  && $_POST["howToRead"]  && empty($_POST["emailAddress"] )  &&  $_POST["contentsOfInquiry"]  &&  empty($_POST["phoneNumber"])){

    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( empty($_POST["chineseCharacterName"] )  && $_POST["howToRead"]  && empty($_POST["emailAddress"] )  &&  empty($_POST["contentsOfInquiry"])  &&  $_POST["phoneNumber"]){

    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( empty($_POST["chineseCharacterName"] )  && empty($_POST["howToRead"] )  && $_POST["emailAddress"]   &&  $_POST["contentsOfInquiry"]  &&  empty($_POST["phoneNumber"])){

    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( empty($_POST["chineseCharacterName"] )  && empty($_POST["howToRead"] )  && $_POST["emailAddress"]   &&  empty($_POST["contentsOfInquiry"])  &&  $_POST["phoneNumber"]){

    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( $_POST["chineseCharacterName"]  && $_POST["howToRead"]  && $_POST["emailAddress"]  &&  empty($_POST["contentsOfInquiry"])  &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];

  }else if( $_POST["chineseCharacterName"]  && $_POST["howToRead"]  && empty($_POST["emailAddress"] )  &&  $_POST["contentsOfInquiry"]  &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( $_POST["chineseCharacterName"]  && $_POST["howToRead"]  && empty($_POST["emailAddress"] )  &&  empty($_POST["contentsOfInquiry"] ) &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"] )  && $_POST["emailAddress"]   &&  empty($_POST["contentsOfInquiry"] ) &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"] )  && empty($_POST["emailAddress"] )  &&  $_POST["contentsOfInquiry"]  &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"])  && $_POST["emailAddress"]  &&  $_POST["contentsOfInquiry"]  &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( empty($_POST["chineseCharacterName"] ) && $_POST["howToRead"]   && empty($_POST["emailAddress"] )  &&  $_POST["contentsOfInquiry"]  &&  $_POST["phoneNumber"]){

    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( empty($_POST["chineseCharacterName"] ) && $_POST["howToRead"]   && $_POST["emailAddress"]   && empty( $_POST["contentsOfInquiry"] ) &&  $_POST["phoneNumber"]){

    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( empty($_POST["chineseCharacterName"] ) && $_POST["howToRead"]   && $_POST["emailAddress"]   &&  $_POST["contentsOfInquiry"] &&  empty($_POST["phoneNumber"])){

    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( empty($_POST["chineseCharacterName"] ) && empty($_POST["howToRead"] )   && $_POST["emailAddress"]   &&  $_POST["contentsOfInquiry"] &&  $_POST["phoneNumber"]){

    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( $_POST["chineseCharacterName"]  && $_POST["howToRead"]  && $_POST["emailAddress"]  &&  $_POST["contentsOfInquiry"]  &&  empty($_POST["phoneNumber"])){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( $_POST["chineseCharacterName"]  && $_POST["howToRead"]  && $_POST["emailAddress"]  &&  empty($_POST["contentsOfInquiry"] ) &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];

  }else if( $_POST["chineseCharacterName"]  && $_POST["howToRead"]  && empty($_POST["emailAddress"])  &&  $_POST["contentsOfInquiry"]  &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( $_POST["chineseCharacterName"]  && empty($_POST["howToRead"])  && $_POST["emailAddress"]  &&  $_POST["contentsOfInquiry"]  &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( empty($_POST["chineseCharacterName"] )  && $_POST["howToRead"]  && $_POST["emailAddress"]  &&  $_POST["contentsOfInquiry"]  &&  $_POST["phoneNumber"]){

    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }else if( $_POST["chineseCharacterName"]   && $_POST["howToRead"]  && $_POST["emailAddress"]  &&  $_POST["contentsOfInquiry"]  &&  $_POST["phoneNumber"]){

    $_SESSION["chineseCharacterName"]	= $_POST["chineseCharacterName"];
    $_SESSION["howToRead"]	= $_POST["howToRead"];
    $_SESSION["emailAddress"]	= $_POST["emailAddress"];
    $_SESSION["phoneNumber"]	= $_POST["phoneNumber"];
    $_SESSION["contentsOfInquiry"]	= $_POST["contentsOfInquiry"];

  }

$mailAdd ="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$" ;
$pattern = "^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$";
$pattern2 = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
if (empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])&&empty($_SESSION["phoneNumber"])) {

    if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {

            echo <<<EOM
          <script type="text/javascript">
            alert( "???[name???howToRead???emailAddress???contentsOfInquiry ]????????????????????????" )
          </script>
          EOM;

        }

}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {

  echo <<<EOM
<script type="text/javascript">
  alert( "???[name???howToRead???emailAddress???contentsOfInquiry ]????????????????????????" )
</script>
EOM;

} else if (isset($_POST['send']) && empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {

  echo <<<EOM
  <script type="text/javascript">
    alert( "???[howToRead???emailAddress???contentsOfInquiry ]????????????????????????" )
  </script>
  EOM;

} else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"]) && empty($_SESSION["emailAddress"]) && empty($_SESSION["contentsOfInquiry"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[name???emailAddress???contentsOfInquiry ]????????????????????????" )
  </script>
  EOM;

} else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"]) && empty($_SESSION["howToRead"])&&empty($_SESSION["contentsOfInquiry"])) {

  echo <<<EOM
  <script type="text/javascript">
    alert( "???[name???howToRead???contentsOfInquiry ]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])&&empty($_SESSION["emailAddress"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[name???howToRead???emailAddress]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["howToRead"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[name???howToRead]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["emailAddress"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[name???emailAddress]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])&&empty($_SESSION["contentsOfInquiry"])) {

  echo <<<EOM
  <script type="text/javascript">
    alert( "???[name???contentsOfInquiry ]????????????????????????" )
  </script>
  EOM;

} else if (isset($_POST['send']) && empty($_SESSION["howToRead"])&&empty($_SESSION["contentsOfInquiry"])) {

  echo <<<EOM
  <script type="text/javascript">
    alert( "???[howToRead???contentsOfInquiry ]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) && empty($_SESSION["howToRead"]) &&empty($_SESSION["emailAddress"])) {

  echo <<<EOM
  <script type="text/javascript">
    alert( "???[howToRead???emailAddress]????????????????????????" )
  </script>
  EOM;

} else if (isset($_POST['send']) && empty($_SESSION["emailAddress"])&&empty($_SESSION["contentsOfInquiry"])) {

  echo <<<EOM
  <script type="text/javascript">
    alert( "???[emailAddress???contentsOfInquiry ]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[name]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) && empty($_SESSION["howToRead"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[howToRead]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) &&empty($_SESSION["emailAddress"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[emailAddress]????????????????????????" )
  </script>
  EOM;

}else if (isset($_POST['send']) &&empty($_SESSION["contentsOfInquiry"])) {

    echo <<<EOM
  <script type="text/javascript">
    alert( "???[contentsOfInquiry ]????????????????????????" )
  </script>
  EOM;

}
if(empty($_SESSION["phoneNumber"])){

}else if(isset($_POST['send']) && !preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["phoneNumber"]	)){

  echo <<<EOM
  <script type="text/javascript">
    alert( "???phoneNumber??????????????????0-9???????????????????????????" )
  </script>
  EOM;

}else{

  header("Location: inquiryConfirmationScreen.php") ;

}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>k.k</title>
  <link rel="stylesheet" href="M.T.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php include "virtualRealityInquiryHeader.php";?>

  <?php
  function XssOCuntermeasure($XssMeasures){

            echo htmlspecialchars($XssMeasures, ENT_QUOTES, "UTF-8") ;

        }

  ?>


  <noscript>
    <p class="pleaseTurnOnJavaScript">
      ??? JavaScript???ON??????????????????????????????????????????????????? ???<br />
      ??? If JavaScript is not turned on, regular display is not possible. ???
    </p>
  </noscript>


  <main>
    <div class="contentOfTransmission">
      <p class="inquiry">INQUIRY</p>
      <div class="inquiryLine"></div>
      <div class="fillInTheFollowingItems">

        <div class="fillInTheFollowingItems2">
        </div>
      </div>
      <form method="POST" action="InquiriesAboutVR.php" name="InquiriesAboutVR.php">
        <div class="entryName">
          <div class="Note">
            <?php
              if(empty($_SESSION["chineseCharacterName"])){
                $result = "";
                if (isset($_POST['send']) && empty($_SESSION["chineseCharacterName"])) {
                    $result = "???name?????????????????????????????????????????????????????????????????????";
                    echo $result ;
                }
              }else if(mb_strlen($_SESSION["chineseCharacterName"])>10){
                $result = "???name???,?????????????????????????????????????????????";
                echo $result ;
                echo <<<EOM
                <script type="text/javascript">
                  alert( "???name???10???????????????????????????????????????" )
                </script>
                EOM;
                unset($_SESSION["chineseCharacterName"]);
              }
            ?>
          </div>
          <div class=nameMove><input value="<?php  if( isset($_SESSION["chineseCharacterName"])){
                echo $_SESSION["chineseCharacterName"] ;
              } ?>" class=" entryPlace" type=" text" placeholder="??????" id="chineseCharacterName"
              name="chineseCharacterName"></div>
        </div>
        <div class="entryName2">
          <div class="Note">
            <?php
                      if(empty($_SESSION["howToRead"])){
                        $result = "";
                        if (isset($_POST['send']) && empty($_SESSION["howToRead"])) {
                            $result = "???howToRead?????????????????????????????????????????????????????????????????????";
                            echo $result ;
                        }
                      }else if(isset($_POST['send']) && mb_strlen($_SESSION["howToRead"])>10){
                        $result = "???howToRead???,?????????????????????????????????????????????";
                        echo $result ;
                        echo <<<EOM
                        <script type="text/javascript">
                          alert( "???howToRead???10???????????????????????????????????????" )
                        </script>
                        EOM;
                        unset($_SESSION["howToRead"]);
                      }
            ?>
          </div>
          <div class=howToReadReeding> <input
              value="<?php if( isset($_SESSION["howToRead"])){ echo $_SESSION["howToRead"] ; }?>" class="entryPlace"
              type=" text" name="howToRead" placeholder="????????????" id="howToRead"></div>
        </div>
        <div class="entryNumber">

          <div class="phoneNumberNote">
            <?php
                      if(empty($_SESSION["phoneNumber"])){
                        $result ="";
                      }else if(isset($_POST['send']) && !preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["phoneNumber"]	)){
                        $result = "???phoneNumber??????????????????0-9???????????????????????????";
                        echo $result ;
                        unset($_SESSION["phoneNumber"]);
                      }
              ?>
          </div>
          <div class=movePhoneNumber><input
              value="<?php if( isset($_SESSION["phoneNumber"])){echo $_SESSION["phoneNumber"] ;}?>" class="entryPlace"
              type=" tel" name="phoneNumber" placeholder="09012345678" id="phoneNumber"></div>
        </div>
        <div class="addressMovement">
          <div class="Note">
            <?php
          $pattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
              if(empty($_SESSION["emailAddress"])){
                $result = "";
                if (isset($_POST['send']) && empty($_SESSION["emailAddress"])) {
                    $result = "???emailAddress????????????????????????";
                    echo $result ;
                }
              }else if ($_SESSION["emailAddress"] === $pattern ){

              }
            ?>
          </div>
          <div class=addressMove>
            <input value="<?php if( isset($_SESSION["emailAddress"])){echo $_SESSION["emailAddress"] ;} ?>"
              class="entryPlace" type="email" name="emailAddress" placeholder="?????????????????????" id="emailAddress">
          </div>
          <div class="detail">
            <div class="Note">
              <?php
            if(empty($_SESSION["contentsOfInquiry"])){ $result = ""; if (isset($_POST['send']) && empty($_SESSION["contentsOfInquiry"])) { $result = "???contentsOfInquiry????????????????????????"; echo $result ; } }
            ?>
            </div>
          </div>
          <div class="inquiryMove">
            <textarea class="entryDetail" name="contentsOfInquiry"
              id="contentsOfInquiry"><?php if( isset($_SESSION["contentsOfInquiry"])){ echo($_SESSION["contentsOfInquiry"]) ;} ?></textarea>
          </div>
          <button class="submitButton333" type="submit" id="btnSubmit" name="send">
            <p class="sendSize333">Send &nbsp;&nbsp;&nbsp; button</p>
          </button>
      </form>
  </main>
  <diV class="existingDisplay">

    </form>

  </diV>
  <?php include "virtualRealityInquiryFooter.php";?>
  <script src=" https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>
  <script src="M.T.js"></script>
</body>

</html>