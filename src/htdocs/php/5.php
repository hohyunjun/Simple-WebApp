<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    &lt;a href="http://opentutorials.org/course/1"&gt;생활코딩&lt;/a&gt;
    <?php
      echo htmlspecialchars('<a href="http://opentutorials.org/course/1">coding everybody</a>');
      echo htmlspecialchars('<script>alert(1);</script>');
     ?>
  </body>
</html>
