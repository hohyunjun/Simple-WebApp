<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $password = $_GET['password'];
      if($password=="1111"){
        echo "로그인 성공";
      }else{
        echo "로그인 실패";
      }

     ?>
  </body>
</html>
