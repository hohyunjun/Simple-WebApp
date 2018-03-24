<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
      function a(input){ // a라는 이름의 함수 정의
        return input+2;
      }
      document.write(a("Hello"));
      number = prompt("2를 더할 숫자 입력");
      document.write(a(number)+"</br>"); // 자료형이 없는데 숫자를 입력받아 그 값에 따른 출력은 어떻게?
    </script>
    <h1>php</h1>
    <?php
      function a($input){
        return $input+1;
      }

      echo a(6);
     ?>

  </body>
</html>
